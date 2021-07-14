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
            ['name' => 'Adaeze ', 'phone' => $phones[0], 'about' => $about,  'photo' => 'http://www.omenkaonline.com/wp-content/uploads/2017/06/iquo-ukoh.png'],
            ['name' => 'Ify the chef', 'phone' => $phones[1], 'about' => $about,  'photo' => 'https://cdn.modernghana.com/images/content/612201840518_nigerianfoodrecipes.jpg'],
            ['name' => 'Amara, the native soup', 'photo' =>'https://innov8tiv.com/wp-content/uploads/2013/12/LohiscreationsNigerianChefCanadaMAIN.jpg', 'phone' => $phones[2], 'about' => $about],
            ['name' => 'NG, Nwanyi IMO', 'phone' => $phones[3], 'about' => $about, 'photo' => 'https://www.bellanaija.com/wp-content/uploads/2015/06/dreamstime_xl_32896684.jpg'],
            ['name' => 'James De Chef', 'phone' => $phones[4], 'about' => $about, 'photo' =>  'https://www.brandessencenigeria.com/wp-content/uploads/2018/08/Eros-Brandessence-Nigeria.jpg'],
        ];

        foreach ($res as $item){
            if(Restaurants::wherePhone($item['phone'])->count() < 1){
                Restaurants::create($item);
            }
        }
        return 'done';
    }
}
