<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class,1)->create();
        // $user = new User;
        // $user->name = 'Admin';
        // $user->email = 'admin@gmail.com';
        // $user->password = Hash::make('123456789');
        // $user->save();
        // $user->assignRole('admin');
    }
}
