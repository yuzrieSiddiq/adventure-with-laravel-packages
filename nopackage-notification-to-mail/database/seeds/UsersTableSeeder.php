<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'Yuzrie Khalid',
                'password' => Hash::make('123456'),
                'email' => 'yuyieyuzrie@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '2',
                'name' => 'Coordinator Desu',
                'password' => Hash::make('123456'),
                'email' => 'coordinator@email.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '3',
                'name' => 'Super Admin Masu',
                'password' => Hash::make('123456'),
                'email' => 'superadmin@email.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '4',
                'name' => 'Dekimashitaka',
                'password' => Hash::make('123456'),
                'email' => 'admin@email.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
