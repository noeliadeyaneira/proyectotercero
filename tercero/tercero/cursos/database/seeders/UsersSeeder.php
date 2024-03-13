<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class UsersSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('users')->insert(
            [
          'rol_id'=>1,
          'name'=>'SuperAdmin',
          'usu_nombre'=>'Luis Robert',
          'usu_telefono'=>'09999999999',
          'email'=>'luis@gmail.com',
          'password'=>bcrypt('12345678')
        
        ]);

        
        DB::table('users')->insert(
            [
          'rol_id'=>3,
          'name'=>'Juan',
          'usu_nombre'=>'Juan Ramirez',
          'usu_telefono'=>'09999999998',
          'email'=>'juan@gmail.com',
          'password'=>bcrypt('12345678')
        
        ]);

      
        
}
 }