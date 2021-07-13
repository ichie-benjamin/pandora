<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeederController extends Controller
{
    public function delete(){
        DB::table('restaurants')->delete();
        return 'done';
    }
    public function res(){
        $phones = ['0829292092','002929399292','081828293928','0819283929','07028382882'];
        $about = "Am a chef, a trained professional cook and tradesman who is proficient in all aspects of food preparation, often focusing on a particular cuisine.";
        $res = [
            ['name' => 'Adaeze ', 'phone' => $phones[0], 'about' => $about,  'photo' => 'https://server.prokitchen.ng/images/users/+2348135902377/res/022220210821346033698e6d2e0.jpg'],
            ['name' => 'Ify the chef', 'phone' => $phones[1], 'about' => $about,  'photo' => 'https://firebasestorage.googleapis.com/v0/b/prokitchen-3c76a.appspot.com/o/it%2Fit_f4bb52d7-691e-4e40-bc1f-4908eb7c78c3?alt=media&token=b73d2ec3-b048-4f9b-9b54-f645fc2824b6'],
            ['name' => 'Amara, the native soup', 'photo' =>'https://server.prokitchen.ng/images/users/+2348029646620/res/0528202109323960b0b8b7918f5.jpg', 'phone' => $phones[2], 'about' => $about],
            ['name' => 'NG, Nwanyi IMO', 'phone' => $phones[3], 'about' => $about, 'photo' => 'https://server.prokitchen.ng/images/users/+2347030317879/res/021020211152486023c9103422c.jpeg'],
            ['name' => 'James De Chef', 'phone' => $phones[4], 'about' => $about, 'photo' =>  'https://server.prokitchen.ng/images/users/+2349016501217/res/021020211231516023d237ec74d.jpeg'],
        ];

        foreach ($res as $item){
            if(Restaurants::wherePhone($item['phone'])->count() < 1){
                Restaurants::create($item);
            }
        }
        return 'done';
    }
}
