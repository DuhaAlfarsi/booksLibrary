<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User();
        $admin->name = "Super admin";
        $admin->email = "admin@admin.com";
        $admin->password = bcrypt(123456);
        $admin->role = "admin";
        $admin->save();
        
    
        
    }
}
