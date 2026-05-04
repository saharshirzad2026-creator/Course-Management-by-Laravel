<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $teachers = [
            [
                "last_name"=> "Sarvari",
                "degree_of_education"=> "bachelor",
                "phone_number"=> "0789654321",
                "image_url"=> "teachers/something.jpg",
                "bio"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sapiente temporibus libero? Et ipsa dolorum, odit quidem asperiores sequi dolorem vero quis vel mollitia eos atque perspiciatis incidunt aliquam distinctio.",
                "user_id"=> 5
            ],
            [
                "last_name"=> "Qurbani",
                "degree_of_education"=> "bachelor",
                "phone_number"=> "0765478932",
                "image_url"=> "teachers/something.jpg",
                "bio"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sapiente temporibus libero? Et ipsa dolorum, odit quidem asperiores sequi dolorem vero quis vel mollitia eos atque perspiciatis incidunt aliquam distinctio.",
                "user_id"=> 6
            ],
        ];
        DB::table('teachers')->insert($teachers);
    }
}
