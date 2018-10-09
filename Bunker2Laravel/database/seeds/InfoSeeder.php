<?php

use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_table')->insert([
            'title' => str_random(6),
            'info' => str_random(100),
            'afdeling' => str_random(6),
        ]);
    }
}
