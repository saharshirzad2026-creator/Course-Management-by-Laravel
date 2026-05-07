<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('salaries')->insert([
            "year"=> "",
            "month"=> "",
            "amount"=> "",
            "teacher_id"=> 5,
        ]);
    }
}
