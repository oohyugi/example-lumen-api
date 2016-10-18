<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ItemAdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UserTableSeeder');
        DB::table('item_ads')->delete();
        $item = app()->make('App\ItemAds');
        $item->fill([
            'user_id'=>1,
            'category_id'=>1,
            'title'=>'Macbook Pro 14 in',
            'price'=>1200000,
            'description'=>'Dijual cepat Macbook Pro masih mulus, BU',
            'picture'=>'mac.jpg',
            'no_hp'=>081212121212,
            'city'=>'Bandung',
            'sold'=>false,
            'published'=>true
        ]);
        $item->save();
    }
}
