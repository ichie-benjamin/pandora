<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

/**
 * Class restaurants
 * @package App\Models
 * @version July 7, 2021, 12:31 am UTC
 *
 * @property string $name
 * @property string $phone
 * @property string $photo
 * @property string $address
 * @property string $about
 * @property string $twitter
 * @property string $instagram
 * @property string $youtube
 * @property string $background
 * @property string $slug
 */
class Restaurants extends Model
{
    use SoftDeletes, Sluggable;

    use HasFactory;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public $table = 'restaurants';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'phone',
        'photo',
        'address',
        'about',
        'twitter',
        'instagram',
        'youtube',
        'background',
    ];

    public function shortAbout(){
        return Str::limit($this->about, 120);
    }

    public function getPhotoAttribute($value){
        if(!$value){
            return 'https://via.placeholder.com/728x500.png/0000FF?text='.$this->name;
        }else {
            return $value;
        }
    }
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'photo' => 'string',
        'address' => 'string',
        'about' => 'string',
        'twitter' => 'string',
        'instagram' => 'string',
        'youtube' => 'string',
        'background' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'phone' => 'required|unique:restaurants',
        'photo' => 'nullable',
        'address' => 'nullable',
    ];


}
