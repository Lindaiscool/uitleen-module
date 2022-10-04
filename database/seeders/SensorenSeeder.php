<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SensorenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soortsensor')->insert([
            'soort'=>'Temperature sensor module DS18B2'
            ]);
        DB::table('soortsensor')->insert([
            'soort'=>'Vibration switch module SW-18015P'
            ]);
         DB::table('soortsensor')->insert([
            'soort'=>'Hall magnetic sensor module XC4434'
            ]);
        DB::table('soortsensor')->insert([
            'soort'=>'Key switch module'
            ]); 
        DB::table('soortsensor')->insert([
            'soort'=>'Infrared emission transmitter sensor module XC4426'
            ]); 
        DB::table('soortsensor')->insert([
            'soort'=>'Small passive buzzer module'
            ]);      
        DB::table('soortsensor')->insert([
            'soort'=>'Laser transmitter sensor module XC4490'
            ]);      
        DB::table('soortsensor')->insert([
            'soort'=>'3-color full-color LED SMD modules XC4428'
            ]);      
        DB::table('soortsensor')->insert([
            'soort'=>'Optical photo interrupter module'
            ]);  
        DB::table('soortsensor')->insert([
            'soort'=>'2-color 3mm LED common cathode module'
            ]);     
        DB::table('soortsensor')->insert([
            'soort'=>'Active buzzer module XC4424'
            ]);                     
            DB::table('soortsensor')->insert([
                'soort'=>'Analog temperature sensor module XC4538'
                ]);
            DB::table('soortsensor')->insert([
                'soort'=>'Temperature and humidity sensor module DHT11 XC4520'
                ]);
             DB::table('soortsensor')->insert([
                'soort'=>'3-color RGB LED module'
                ]);
            DB::table('soortsensor')->insert([
                'soort'=>'Mercury open optical switch module'
                ]); 
            DB::table('soortsensor')->insert([
                'soort'=>'Photo resistor / light dependent resistor LDR module'
                ]); 
            DB::table('soortsensor')->insert([
                'soort'=>'5V relay module XC4419'
                ]);      
            DB::table('soortsensor')->insert([
                'soort'=>'Tilt switch module'
                ]);      
            DB::table('soortsensor')->insert([
                'soort'=>'Mini magnetic reed switch module'
                ]);      
            DB::table('soortsensor')->insert([
                'soort'=>'Infrared 38k universal remote control sensor receiver module XC4427'
                ]);  
            DB::table('soortsensor')->insert([
                'soort'=>'XY-axis game joystick PS2 module XC4422'
                ]);     
            DB::table('soortsensor')->insert([
                'soort'=>'Linear Hall magnetic sensors module'
                ]);    

                


                DB::table('soortsensor')->insert([
                    'soort'=>'Large reed magnetic switch module'
                    ]);
                DB::table('soortsensor')->insert([
                    'soort'=>'Flame sensor module'
                    ]);
                 DB::table('soortsensor')->insert([
                    'soort'=>'Magic mercury light cup tilt switch module'
                    ]);
                DB::table('soortsensor')->insert([
                    'soort'=>'Temperature sensor module'
                    ]); 
                DB::table('soortsensor')->insert([
                    'soort'=>'Yin Yi 2-color 3mm 5mm common-cathode LED module'
                    ]); 
                DB::table('soortsensor')->insert([
                    'soort'=>'Tap knock Sensor module'
                    ]);      
                DB::table('soortsensor')->insert([
                    'soort'=>'Obstacle avoidance sensor module XC4524'
                    ]);      
                DB::table('soortsensor')->insert([
                    'soort'=>'Tracking line detecting magnetic hunt sensor module XC4474'
                    ]);      
                DB::table('soortsensor')->insert([
                    'soort'=>'Automatic flashing 7 colorful LED flash module YB-3120B4PnYG-PM'
                    ]);  
                DB::table('soortsensor')->insert([
                    'soort'=>'Class Bihor multifunctional analog Hall magnetic sensor module'
                    ]);     
                DB::table('soortsensor')->insert([
                    'soort'=>'Metal touch sensor module'
                    ]);   
                    
                    DB::table('soortsensor')->insert([
                        'soort'=>'High sensitivity microphone sensitive sensor module'
                        ]);      
                    DB::table('soortsensor')->insert([
                        'soort'=>'Microphone sound detection sensor module'
                        ]);      
                    DB::table('soortsensor')->insert([
                        'soort'=>'Finger measuring heartbeat detect module'
                        ]);  
                    DB::table('soortsensor')->insert([
                        'soort'=>'Rotary encoder module '
                        ]);   
                
            

                
                          
        
    }
}