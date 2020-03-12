<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuario
        Permission::create([
            'name'        => 'Navegar usuarios',
            'slug'        => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver detalle usuarios',
            'slug'        => 'users.show',
            'description' => 'Ver detalle de los usuarios del sistema',
        ]);

        Permission::create([
            'name'        => 'Edita usuarios',
            'slug'        => 'users.edit',
            'description' => 'Edita los datos de los usuarios del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar usuario',
            'slug'        => 'users.destroy',
            'description' => 'Eliminar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
            'name'        => 'Navegar roles',
            'slug'        => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del rol',
            'slug'        => 'roles.show',
            'description' => 'Ver detalle de los roles del sistema',
        ]);

        Permission::create([
            'name'        => 'Creación roles',
            'slug'        => 'roles.create',
            'description' => 'Crea roles en el sistema',
        ]);

        Permission::create([
            'name'        => 'Edita roles',
            'slug'        => 'roles.edit',
            'description' => 'Edita los datos de los roles del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar rol',
            'slug'        => 'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema',
        ]);

        //Products
        Permission::create([
            'name'        => 'Navegar productos',
            'slug'        => 'products.index',
            'description' => 'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del producto',
            'slug'        => 'products.show',
            'description' => 'Ver detalle de los productos del sistema',
        ]);

        Permission::create([
            'name'        => 'Creación producto',
            'slug'        => 'products.create',
            'description' => 'Crea productos en el sistema',
        ]);

        Permission::create([
            'name'        => 'Edita producto',
            'slug'        => 'products.edit',
            'description' => 'Edita los datos de los productos del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar producto',
            'slug'        => 'products.destroy',
            'description' => 'Eliminar cualquier producto del sistema',
        ]);
    }
}
