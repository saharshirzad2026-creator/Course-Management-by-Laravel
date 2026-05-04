<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $students = [
            [
                "last_name"=> "Rezaie",
                "user_id"=> 2,
                "image_url"=> "Admin/home2.jpg",
                "phone_number"=> "0786543219",
                "tazkira_no"=> "908764532187"
            ],
            [
                "last_name"=> "Qasimi",
                "user_id"=> 4,
                "image_url"=> "Admin/home2.jpg",
                "phone_number"=> "0765431290",
                "tazkira_no"=> "876453129974"
            ],
        ];
        DB::table('students')->insert($students);
    }
}
