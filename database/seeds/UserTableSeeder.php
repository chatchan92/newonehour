<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;  // 引用 User 模型

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();  // 清空表

        User::create(array(
            "name" => "Chan",
            "email" => "Chatchan92@163.com",
            "password" => Hash::make('123456'),
        ));

        User::create(array(
            "name" => "Yan Li",
            "email" => "Liyan@qq.com",
            "password" => Hash::make('123456'),
        ));
    }
}
