<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           ['name' => 'role-list', 'label' => 'Listar Regras'],
           ['name' => 'role-create', 'label' => 'Criar Regras'],
           ['name' => 'role-edit', 'label' => 'Editar Regras'],
           ['name' => 'role-delete', 'label' => 'Excluir Regras'],
           ['name' => 'product-list', 'label' => 'Listar Produtos'],
           ['name' => 'product-create', 'label' => 'Criar Produtos'],
           ['name' => 'product-edit', 'label' => 'Editar Produtos'],
           ['name' => 'product-delete', 'label' => 'Excluir Produtos'],
        ];
   
        foreach ($permissions as $permission) {
             Permission::create($permission);
        }
    }
}
