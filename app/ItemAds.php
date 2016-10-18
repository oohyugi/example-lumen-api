<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemAds extends Model 
{
   
   protected $table='item_ads';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'category_id', 'title', 'description','picture','no_hp','city','sold','published'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function category(){
        return $this->hasOne('App\ItemAds');
    }
}
