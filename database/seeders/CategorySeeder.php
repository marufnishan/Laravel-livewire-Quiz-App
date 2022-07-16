<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'cat_name' => 'বাংলা ভাষা ও সাহিত্য',
            ],
            [
                'cat_name' => 'ইংরেজি ভাষা ও সাহিত্য',
            ],
            [
                'cat_name' => 'বাংলােদশ বিষয়াবলী',
            ],
            [
                'cat_name' => 'আন্তর্জাতিক বিষয়াবলী',
            ],
            [
                'cat_name' => 'ভূগোল ( বাংলাদেশ ও বিশ্ব ) পরিবেশ ও দুর্যোগ ব্যবস্থাপনা',
            ],
            [
                'cat_name' => 'কম্পিউটার ও তথ্য প্রযুক্তি',
            ],
            [
                'cat_name' => 'গাণিতিক যুক্তি',
            ],
            [
                'cat_name' => 'মানসিক দক্ষতা',
            ],
            [
                'cat_name' => 'নৈতিকতা মূল্যবোধ ও সুশাসন',
            ],
        ]);
    }
}
