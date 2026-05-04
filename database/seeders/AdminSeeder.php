<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('admins')->insert([
            "last_name"=> "Shirzad",
            "image_url"=> "Admin/home1.jpg",
            "user_id"=> 1,
            "bio"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat recusandae laborum veritatis optio, cumque labore numquam quisquam, omnis sit ipsa beatae provident fuga ut delectus perferendis rerum iure, eum doloremque."
        ]);
    }
}
