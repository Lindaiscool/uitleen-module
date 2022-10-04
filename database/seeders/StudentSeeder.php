<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            'studentnummer'=>'123456789'
            ]);
        DB::table('student')->insert([
            'studentnummer'=>'987654321'
            ]);
         DB::table('student')->insert([
            'studentnummer'=>'97061495'
            ]);
        DB::table('student')->insert([
            'studentnummer'=>'98765547'
            ]); 
        DB::table('student')->insert([
            'studentnummer'=>'09876543'
            ]); 
        DB::table('student')->insert([
            'studentnummer'=>'123654789'
            ]);      
        DB::table('student')->insert([
            'studentnummer'=>'765432198'
            ]); 
    }
}
