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
        //Permisos de usuarios
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista los usuarios',
        ]);

        Permission::create([
            'name' => 'Crear usuario',
            'slug' => 'users.create',
            'description' => 'Crear un usuario',
        ]);

        Permission::create([
            'name' => 'Guardar usuario',
            'slug' => 'users.store',
            'description' => 'Guardar un usuario',
        ]);

        Permission::create([
            'name' => 'Ver usuario',
            'slug' => 'users.show',
            'description' => 'Ver un usuario',
        ]);

        Permission::create([
            'name' => 'Editar usuario',
            'slug' => 'users.edit',
            'description' => 'Editar un usuario',
        ]);

        Permission::create([
            'name' => 'Actualizar usuario',
            'slug' => 'users.update',
            'description' => 'Actualizar un usuario',
        ]);

        Permission::create([
            'name' => 'Eliminar usuario',
            'slug' => 'users.destroy',
            'description' => 'Eliminar un usuario',
        ]);

        //Permisos de roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista los roles',
        ]);

        Permission::create([
            'name' => 'Crear rol',
            'slug' => 'roles.create',
            'description' => 'Crear un rol',
        ]);

        Permission::create([
            'name' => 'Guardar rol',
            'slug' => 'roles.store',
            'description' => 'Guardar un rol',
        ]);

        Permission::create([
            'name' => 'Ver rol',
            'slug' => 'roles.show',
            'description' => 'Ver un rol',
        ]);

        Permission::create([
            'name' => 'Editar rol',
            'slug' => 'roles.edit',
            'description' => 'Editar un rol',
        ]);

        Permission::create([
            'name' => 'Actualizar rol',
            'slug' => 'roles.update',
            'description' => 'Actualizar un rol',
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar un rol',
        ]);

        //Permisos de SMS
        Permission::create([
            'name' => 'Navegar sms',
            'slug' => 'sms.index',
            'description' => 'Lista los sms',
        ]);

        Permission::create([
            'name' => 'Crear rol',
            'slug' => 'sms.create',
            'description' => 'Crear un sms',
        ]);

        Permission::create([
            'name' => 'Guardar sms',
            'slug' => 'sms.store',
            'description' => 'Guardar un sms',
        ]);

        Permission::create([
            'name' => 'Ver sms',
            'slug' => 'sms.show',
            'description' => 'Ver un sms',
        ]);

        Permission::create([
            'name' => 'Editar sms',
            'slug' => 'sms.edit',
            'description' => 'Editar un sms',
        ]);

        Permission::create([
            'name' => 'Actualizar sms',
            'slug' => 'sms.update',
            'description' => 'Actualizar un sms',
        ]);

        Permission::create([
            'name' => 'Eliminar sms',
            'slug' => 'sms.destroy',
            'description' => 'Eliminar un sms',
        ]);

        //Permisos de Address
        Permission::create([
            'name' => 'List addresses',
            'slug' => 'address.index',
            'description' => 'Allows listing the addresses',
        ]);

        Permission::create([
            'name' => 'Create role',
            'slug' => 'address.create',
            'description' => 'Create roles',
        ]);

        Permission::create([
            'name' => 'Save addresses',
            'slug' => 'address.store',
            'description' => 'Allows to save addresses',
        ]);

        Permission::create([
            'name' => 'Show directions',
            'slug' => 'address.show',
            'description' => 'View directions',
        ]);

        Permission::create([
            'name' => 'Edit Address',
            'slug' => 'address.edit',
            'description' => 'Edit addresses',
        ]);

        Permission::create([
            'name' => 'Update address',
            'slug' => 'address.update',
            'description' => 'Update the addresses',
        ]);

        Permission::create([
            'name' => 'Delete address',
            'slug' => 'address.destroy',
            'description' => 'Allows delete addresses',
        ]);

        //permiso de properties
        Permission::create([
            'name' => 'Create Propiedades',
            'slug' => 'properties.create',
            'description' => 'Crear una propiedad',
        ]);

        Permission::create([
            'name' => 'Guardar Propiedades',
            'slug' => 'properties.store',
            'description' => 'Guardar un propiedad',
        ]);

        Permission::create([
            'name' => 'Ver Propeidades',
            'slug' => 'properties.show',
            'description' => 'Ver un propiedades',
        ]);

        Permission::create([
            'name' => 'Editar Propiedades',
            'slug' => 'properties.edit',
            'description' => 'Editar un propiedades',
        ]);

        Permission::create([
            'name' => 'Actualizar propiedades',
            'slug' => 'properties.update',
            'description' => 'Actualizar un propiedades',
        ]);

        Permission::create([
            'name' => 'Eliminar propiedades',
            'slug' => 'properties.destroy',
            'description' => 'Eliminar una propiedades',
        ]);
    }
}
