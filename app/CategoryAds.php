<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryAds extends Model 
{
   
   protected $table='category_ads';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function category(){
        return $this->hasOne('App\CategoryAds');
    }
}
