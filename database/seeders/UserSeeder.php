<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample admin
        $admin = new \App\Models\User();
        $admin -> name = "Admin IT";
        $admin -> email = "admin@gmail.com";
        $admin -> password = bcrypt("adminmgi18");
        $admin -> role  = "admin";
        $admin -> save();
        //new pw:adminitmgi
        //ganti pw=1234567
      

         // sample tamu
         $admin = new \App\Models\User();
         $admin -> name = "User IT";
         $admin -> email = "userit@gmail.com";
         $admin -> password = bcrypt("gimanakamuaja");
         $admin -> role  = "guest";
         $admin -> save();

        // adminmgi18

    }
}
