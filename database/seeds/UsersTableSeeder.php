<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
        ]);
        factory(App\User::class, 10)->create();
        Role::create([
            'name' => 'Admin', 
            'slug' => 'admin',
            'special' => 'all-access'
        ]);
    }
}
