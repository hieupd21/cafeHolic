<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@gmail.com',
            'name' => 'JuyHiu',
            'password' => bcrypt('hieudn19'),
            'address' => 'Da Nang City',
            'phone' => '0703928702'
        ]);
    }
}
