<?php

namespace App\Repositories;

use App\Models\restaurants;
use App\Repositories\BaseRepository;

/**
 * Class restaurantsRepository
 * @package App\Repositories
 * @version July 7, 2021, 12:31 am UTC
*/

class restaurantsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'photo',
        'address',
        'about',
        'twitter',
        'instagram',
        'youtube',
        'background',
        'slug'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return restaurants::class;
    }
}
