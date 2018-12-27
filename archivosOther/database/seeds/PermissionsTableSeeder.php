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
        //Permisos de Administracion de Usuarios
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Podría eliminar cualquier usuario del sistema',
        ]);

        //Permisos de Administracion de Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',
        ]);

        //Permisos de Administracion de noticias
        Permission::create([
            'name'          => 'Navegar productos',
            'slug'          => 'products.index',
            'description'   => 'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de una noticia',
            'slug'          => 'notices.show',
            'description'   => 'Ve en detalle cada noticia del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de noticias',
            'slug'          => 'notices.create',
            'description'   => 'Podría crear nuevas noticias en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de noticias',
            'slug'          => 'notices.edit',
            'description'   => 'Podría editar cualquier dato de una noticia del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar noticias',
            'slug'          => 'notices.destroy',
            'description'   => 'Podría eliminar cualquier noticias del sistema',
        ]);

        //Permisos de Administracion de Contenido multimedia
        Permission::create([
            'name'          => 'Navegar en el contenido multimedia',
            'slug'          => 'media.index',
            'description'   => 'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un contenido multimedia',
            'slug'          => 'media.show',
            'description'   => 'Ve en detalle cada contenido multimedia del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de contenido multimedia',
            'slug'          => 'media.create',
            'description'   => 'Podría crear nuevo contenido multimedia en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de contenido multimedia',
            'slug'          => 'media.edit',
            'description'   => 'Podría editar cualquier dato de un contenido multimedia del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar contenido multimedia',
            'slug'          => 'media.destroy',
            'description'   => 'Podría eliminar cualquier contenido multimedia del sistema',
        ]);
    }
}
