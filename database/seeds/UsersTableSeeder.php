<?php

use Illuminate\Database\Seeder;
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
        factory(App\User::class, 1)->create();

        Role::create([
        	'name'		=> 'Admin',
            'slug'  	=> 'slug',
            'description' => 'Usuario administrador',
        	'special' 	=> 'all-access'
        ]);

        Role::create([
        	'name'		=> 'Vendedor',
            'slug'  	=> 'vendedor',
            'description' => 'Usuario vendedor'        	
        ]);
    }
}
