<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArduinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arduinotype')->insert([
            'type'=>'Arduino Uno'
            ]);
        DB::table('arduinotype')->insert([
            'type'=>'Arduino Duemilanove'
            ]);
         DB::table('arduinotype')->insert([
            'type'=>'Arduino Mega'
            ]);
        DB::table('arduinotype')->insert([
            'type'=>'Arduino Nano'
            ]); 
        DB::table('arduinotype')->insert([
            'type'=>'Arduino BT'
            ]); 
        DB::table('arduinotype')->insert([
            'type'=>'Arduino mini'
            ]);      
        DB::table('arduinotype')->insert([
            'type'=>'Arduino (pro-)micro'
            ]);      
    }
}
