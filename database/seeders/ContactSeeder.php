<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'first_name'=> 'Yitzhak',
            'last_name' => 'Njenga',
            'email'=> 'yitzhaknjenga@gmail.com',
            'phone'=> '0798209886',
            'message'=> 'hello',
        ]);
    }
}
