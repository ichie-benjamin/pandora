<?php declare(strict_types = 1);

namespace App\Modules\Admin\Presenters;

use ExtendedForm\Form;
use Nette\ArrayHash;
use Nette\Utils\Image;
use Nette\Utils\Strings;

/**
 * File manager
 * *
 * @author Jan Žahourek
 */
class FilesPresenter extends \BasePresenter {

    public function renderDefault($id): void {
        /*
         * Načtení souborů z db
         */
        if (!$this->user->isAllowed('allFilesView')) {
            if ($id) {
                $dir = $this->database->table('bp_files_data')->get($id);

                $sub_name = $dir->sub
                    ? $this->database->table('bp_files_data')->get($dir->sub)->name
                    : '';

                $cup = !empty($dir->cup)
                    ? $dir->ref('bp_cups', 'cup')->title
                    : null;

                $dir_info = [
                    'name' => $dir->name,
                    'type' => $dir->type,
                    'id' => $dir->id_files_data,
                    'sub_id' => $dir->sub,
                    'cup_id' => $dir->cup,
                    'cup_name' => $cup,
                    'sub_name' => $sub_name,
                ];
                $this->template->dir = ArrayHash::from($dir_info);
                $data = $this->database->table('bp_files_data')->where('sub = ? AND who_added = ?', $id, $this->user->id)->order('added DESC');
                $this->template->data = $data;
            } else {
                $dir_info = [
                    'type' => 'dir',
                ];
                $this->template->dir = ArrayHash::from($dir_info);
                $data = $this->database->table('bp_files_data')
                    ->where(
                        'sub = ? AND who_added = ?',
                        '',
                        $this->user->id
                    )
                    ->order('added DESC');
                $this->template->data = $data;
            }
        } else {
            if ($id) {
                $dir = $this->database->table('bp_files_data')->get($id);

                $sub_name = $dir->sub
                    ? $this->database->table('bp_files_data')->get($dir->sub)->name
                    : '';

                $cup = !empty($dir->cup)
                    ? $dir->ref('bp_cups', 'cup')->title
                    : null;

                $dir_info = [
                    'name' => $dir->name,
                    'type' => $dir->type,
                    'id' => $dir->id_files_data,
                    'sub_id' => $dir->sub,
                    'cup_id' => $dir->cup,
                    'cup_name' => $cup,
                    'sub_name' => $sub_name,
                ];
                $this->template->dir = ArrayHash::from($dir_info);
                $data = $this->database->table('bp_files_data')->where('sub = ?', $id)->order('added DESC');

                $this->template->data = $data;
            } else {
                $dir_info = [
                    'type' => 'dir',
                ];
                $this->template->dir = ArrayHash::from($dir_info);
                $data = $this->database->table('bp_files_data')->where('sub = ?', '')->order('added DESC');

                $this->template->data = $data;
            }
        }
    }

    /*public function renderDialog($id): void {
        $this->renderDefault($id);
    }
      */

    public function createComponentUploadForm(): Form {
        $form = new Form();
        $form->addDropzone('files', 'Nahrávání souborů !!!');
        $form->addSubmit('send', 'Potvrdit');
        $form->onSuccess[] = [$this, 'uploadFormSucceeded'];

        return $form;
    }

    public function handleLoadFiles(): void {
        $this->redrawControl('renderFiles');
    }

    public function uploadFormSucceeded($form): void {
        $sub = $this->getParameter('id');

        if (!isset($sub)) {
            $sub = 0;
        }

        try {
            foreach ($_FILES as $file) {
                if ($file['error']) {
                    continue;
                }

                $file_value = explode('.', $file['name']);
                $type = Strings::lower($file_value[1]);

                $file_name = Strings::lower($file_value[0]) . '__' . date('y_m_d_h_i') . '__' . $this->user->id . '.' . $file_value[1];
                move_uploaded_file($file['tmp_name'], FILES_DIR . '/' . $file_name);

                //thumbs
                if (in_array($type, ['jpg', 'png', 'gif'])) {
                    $image = Image::fromFile(FILES_DIR . '/' . $file_name);
                    $image->resize(1000, null, Image::SHRINK_ONLY);
                    $image->save(FILES_DIR . '/' . $file_name);

                    $thumb = Image::fromFile(FILES_DIR . '/' . $file_name);
                    $thumb->resize(250, null);
                    $thumb->save(FILES_DIR . '/thumbs/' . $file_name);
                    // pro gallerii
                    $thumb_filled = Image::fromFile(FILES_DIR . '/' . $file_name);
                    $thumb_filled->resize(250, 167, Image::EXACT);
                    $thumb_filled->save(FILES_DIR . '/thumbs_filled/' . $file_name);
                }

                $values = [
                    'name' => $file_value[0],
                    'file_name' => $file_name,
                    'link' => $this->getHttpRequest()->getUrl()->getBaseUrl() . 'upload/' . $file_name,
                    'type' => $type,
                    'sub' => $sub,
                    'who_added' => $this->user->id,
                ];
                $this->database->table('bp_files_data')->insert($values);
                $this->flashMessage('Soubor byl vložen!', 'success');

            }
        } catch (\Exception $ex) {
            $this->flashMessage('Soubor nebyl vložen!', 'error');
        }
    }

    public function handleDeleteFile($file_id): void {
        $file = $this->database->table('bp_files_data')->get($file_id);

        if ($file->type === 'dir' || $file->type === 'gallery' || $file->type === 'youtube') {
            try {
                $this->database->table('bp_files_data')->get($file_id)->delete();
                $this->flashMessage('Složka byla smazána!', 'success');
            } catch (Exception $ex) {
                $this->flashMessage('Soubor nebylo možné smazat!', 'error');
            }

            $files_in = $this->database->table('bp_files_data')->where('sub = ?', $file_id);

            foreach ($files_in as $file) {
                try {
                    $this->database->table('bp_files_data')->get($file->id_files_data)->delete();

                    if ($file->type === 'dir' || $file->type === 'gallery' || $file->type === 'youtube') {
                    } else {
                        unlink(FILES_DIR . '/' . $file->file_name);
                    }
                } catch (Exception $ex) {
                    $this->flashMessage('Soubor ' . $file->id_files_data . ' nebylo možné smazat!', 'error');
                }
            }
        } else {
            try {
                unlink(FILES_DIR . '/' . $file->file_name);
                $this->database->table('bp_files_data')->get($file_id)->delete();
                $this->flashMessage('Soubor byl smazán!', 'success');
            } catch (Exception $ex) {
                $this->flashMessage('Soubor nebylo možné smazat!', 'error');
            }
        }

        $this->redirect('this');
    }

    /*
     * Vytvoření složky
     */

    protected function createComponentDirAddForm() {
        $form = new Form();
        $form->addText('name', 'Název');
        $form->addSubmit('send', 'Vytvořit složku')
            ->setAttribute('class', 'btn btn-success');

        $form->onSuccess[] = [$this, 'dirAddFormSucceeded'];

        return $form;
    }

    public function dirAddFormSucceeded($form): void {
        $dir = $form->getValues();
        $sub = $this->getParameter('id');

        if (!isset($sub)) {
            $sub = 0;
        }

        $values = [
            'name' => $dir->name,
            'type' => 'dir',
            'sub' => $sub,
            'who_added' => $this->user->id,
        ];

        try {
            $this->database->table('bp_files_data')->insert($values);
            $this->flashMessage('Složka byla vytvořena!!', 'success');
        } catch (Exception $ex) {
            $this->flashMessage('Složku nebylo možné vytvořit!', 'error');
        }

        $this->redirect('this');
    }

    /*
     * Vytvoření galerie
     */

    protected function createComponentGalleryAddForm() {
        $form = new Form();
        $form->addText('name', 'Název');
        $form->addSelect('cup', 'Přiřadit turnaj')
            ->setPrompt('Vyberte turnaj')
            ->setItems($this->database->table('bp_cups')->select("id,CONCAT(title,' - ',from) AS text")->order('from DESC')->fetchPairs('id', 'text'));
        $form->addSubmit('send', 'Vytvořit gallerii')
            ->setAttribute('class', 'btn btn-success');

        $form->onSuccess[] = [$this, 'galleryAddFormSucceeded'];

        return $form;
    }

    public function galleryAddFormSucceeded($form): void {
        $dir = $form->getValues();
        $sub = $this->getParameter('id');

        if (!isset($sub)) {
            $sub = 0;
        }

        if (!isset($dir->cup)) {
            $dir->cup = 0;
        }

        $values = [
            'name' => $dir->name,
            'type' => 'gallery',
            'cup' => $dir->cup,
            'sub' => $sub,
            'who_added' => $this->user->id,
        ];

        try {
            $this->database->table('bp_files_data')->insert($values);
            $this->flashMessage('Galerie byla vytvořena!!', 'success');
        } catch (Exception $ex) {
            $this->flashMessage('Galerii nebylo možné vytvořit!', 'error');
        }

        $this->redirect('this');
    }

    /*
     * přidání videa
     */

    protected function createComponentVideoAddForm() {
        $form = new Form();
        $form->addText('name', 'Název');
        $form->addText('link', 'Kód videa na YouTube');
        $form->addSubmit('send', 'Přidat video')
            ->setAttribute('class', 'btn btn-success');

        $form->onSuccess[] = [$this, 'videoAddFormSucceeded'];

        return $form;
    }

    public function videoAddFormSucceeded($form): void {
        $dir = $form->getValues();
        $sub = $this->getParameter('id');

        if (!isset($sub)) {
            $sub = 0;
        }

        if (!isset($dir->cup)) {
            $dir->cup = 0;
        }

        $values = [
            'name' => $dir->name,
            'type' => 'youtube',
            'link' => $dir->link,
            'sub' => $sub,
            'who_added' => $this->user->id,
        ];

        try {
            $this->database->table('bp_files_data')->insert($values);
            $this->flashMessage('Video bylo přidáno do galerie!!', 'success');
        } catch (\Throwable $ex) {
            $this->flashMessage('Video nemohlo být přidáno!', 'error');
        }

        $this->redirect('this');
    }

    public function handleRotate($filename, $back = false): void {
        $img_filename = FILES_DIR . '/' . $filename;

        if (!file_exists($img_filename)) {
            $this->flashMessage('Soubor neexistuje!', 'error');
            $this->redirect('this');

            return;
        }

        try {
            $this->rotateImg($img_filename, $back);
            $this->rotateImg(FILES_DIR . '/thumbs_filled/' . $filename, $back);
            $this->flashMessage('Obrázek byl otočen o 180°.', 'success');
        } catch (\Throwable $ex) {
            $this->flashMessage('Obrázek nemohl být otočen!', 'error');
        }

        //      $this->redirect('this');
        //      $this->redrawControl();
        //      $this->redrawControl('renderFiles');
        //      $this->redirect('this');
    }

    private function rotateImg($filename, $back): void {
        if (!file_exists($filename)) {
            return;
        }

        $image = Image::fromFile($filename, $back);
        $image->rotate($back ? 450 : 270, 0);

        $image->save($filename, 100);
    }

}
