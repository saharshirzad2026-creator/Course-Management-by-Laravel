<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('payments')->insert([
            "amount"=> "3000afg",
            "student_id"=> 1,
            "sinf_id"=> 2,
        ]);
    }
}
