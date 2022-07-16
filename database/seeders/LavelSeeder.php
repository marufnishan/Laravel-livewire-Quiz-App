<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LavelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            [
                'name' => 'CP1 Lavel 1',
                'description'=> 'CP1 Lavel 1 Description',
                'details'=>'CP1 Lavel 1 Details',
                'question_size'=> 10,
            ],
            [
                'name' => 'CP1 Lavel 2',
                'description'=> 'CP1 Lavel 2 Description',
                'details'=>'CP1 Lavel 2 Details',
                'question_size'=> 5,
            ],
            [
                'name' => 'CP2 Lavel 1',
                'description'=> 'CP2 Lavel 1 Description',
                'details'=>'CP2 Lavel 1 Details',
                'question_size'=> 10,
            ],
            [
                'name' => 'CP2 Lavel 2',
                'description'=> 'CP2 Lavel 2 Description',
                'details'=>'CP2 Lavel 2 Details',
                'question_size'=> 5,
            ],
            [
                'name' => 'P1 Lavel 1',
                'description'=> 'P1 Lavel 1 Description',
                'details'=>'P1 Lavel 1 Details',
                'question_size'=> 10,
            ],
            [
                'name' => 'P1 Lavel 2',
                'description'=> 'P1 Lavel 2 Description',
                'details'=>'P1 Lavel 2 Details',
                'question_size'=> 10,
            ],
            [
                'name' => 'P2 Lavel 1',
                'description'=> 'P2 Lavel 1 Description',
                'details'=>'P2 Lavel 1 Details',
                'question_size'=> 10,
            ],
            [
                'name' => 'P2 Lavel 2',
                'description'=> 'P2 Lavel 2 Description',
                'details'=>'P2 Lavel 2 Details',
                'question_size'=> 10,
            ],
            [
                'name' => 'J1 Lavel 1',
                'description'=> 'J1 Lavel 1 Description',
                'details'=>'j1 Lavel 1 Details',
                'question_size'=> 10,
            ],
            [
                'name' => 'J1 Lavel 2',
                'description'=> 'J1 Lavel 2 Description',
                'details'=>'j1 Lavel 2 Details',
                'question_size'=> 10,
            ],
            [
                'name' => 'J2 Lavel 1',
                'description'=> 'J2 Lavel 1 Description',
                'details'=>'j2 Lavel 1 Details',
                'question_size'=> 10,
            ],
            [
                'name' => 'J2 Lavel 2',
                'description'=> 'J2 Lavel 2 Description',
                'details'=>'j2 Lavel 2 Details',
                'question_size'=> 10,
            ],
        ]);
    }
    
}
