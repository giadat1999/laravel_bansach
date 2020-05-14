<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
            ['name'=>'Trần Huỳnh Huy Hào', 'email'=>'tranhuynhhuyhao@gmail.com','password'=>bcrypt('tranhuynhhuyhao'),'quyen'=>'1'],
            ['name'=>'Trương Gia Đạt', 'email'=>'truonggiadat@gmail.com','password'=>bcrypt('truonggiadat'),'quyen'=>'0'],
            ['name'=>'Nguyễn Lương Gia Huy', 'email'=>'nguyenluonggiahuy@gmail.com','password'=>bcrypt('nguyenluonggiahuy'),'quyen'=>'0'],
            ['name'=>'Lê Thế Đức', 'email'=>'letheduc@gmail.com','password'=>bcrypt('letheduc'),'quyen'=>'0'],
            ['name'=>'Dương Hớn Tôn', 'email'=>'duonghonton@gmail.com','password'=>bcrypt('duonghonton'),'quyen'=>'0']
            ]);
    }
}
