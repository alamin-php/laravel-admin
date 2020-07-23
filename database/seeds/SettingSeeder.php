<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('settings')->insert([
            'footer_left_text' => 'AMSoftit',
            'footer_web_link' => 'http://amsoftit.com',
            'footer_right_text' => 'AMSoftit',
        ]);
    }
}
