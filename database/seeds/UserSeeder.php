<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UserTableSeeder');
        DB::table('users')->delete();
        $user = app()->make('App\User');
        $hasher = app()->make('hash');
        $password = $hasher->make('password');
        $api_token = sha1(time());

        $user->fill([
            'email'=>'yogi@gmail.com',
            'username'=>'yogi',
            'password'=>$password,
            'api_token'=>$api_token
        ]);
        $user->save();
    }
}
