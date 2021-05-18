<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class site_category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Role::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $data  = [
        ['name' => 'Tokopedia'],
        ['name' => 'Bukalapak'],
        ];

        foreach ($data as $d) {
        DB::table('site_category')->insert([
            'name' => $d['name'],
        ]);
        }
    }
}
