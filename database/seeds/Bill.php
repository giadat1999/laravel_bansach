<?php

use Illuminate\Database\Seeder;

class Bill extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill')->insert(
            [
            ['id_customer'=>'1', 'date_order'=>'2013-05-12 14:17:56','total'=>'1000000','payment'=>'COD','note'=>'Giao trước 15 giờ ','tinhtrang'=>'0'],
            ['id_customer'=>'2', 'date_order'=>'2013-06-23 16:17:56','total'=>'1500000','payment'=>'COD','note'=>'Giao trước 20 giờ','tinhtrang'=>'2']
            ]
        );
    }
}