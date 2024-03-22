<?php

namespace Database\Seeders;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sistema tendra dos Roles:
        //Admin y Secretaria
        //$admin = Role::create(['name' => 'admin']);
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Asistente']);

        Permission::create(['name' => 'index'])->SyncRoles([$role1, $role2]);
        Permission::create(['name' => 'reportes'])->SyncRoles([$role1, $role2]);
        Permission::create(['name' => 'pdf'])->SyncRoles([$role1, $role2]);
        Permission::create(['name' => 'pdf_fechas'])->SyncRoles([$role1, $role2]);
        Permission::create(['name' => 'home'])->SyncRoles([$role1, $role2]);

        Permission::create(['name' => 'miembros.index'])->SyncRoles([$role1]);
        Permission::create(['name' => 'miembros.create'])->SyncRoles([$role1]);
        Permission::create(['name' => 'miembros.edit'])->SyncRoles([$role1]);
        Permission::create(['name' => 'miembros.destroy'])->SyncRoles([$role1]);

        Permission::create(['name' => 'ministerios.index'])->SyncRoles([$role1]);
        Permission::create(['name' => 'ministerios.create'])->SyncRoles([$role1]);
        Permission::create(['name' => 'ministerios.edit'])->SyncRoles([$role1]);
        Permission::create(['name' => 'ministerios.destroy'])->SyncRoles([$role1]);

        Permission::create(['name' => 'usuarios.index'])->SyncRoles([$role1]);
        Permission::create(['name' => 'usuarios.create'])->SyncRoles([$role1]);
        Permission::create(['name' => 'usuarios.edit'])->SyncRoles([$role1]);
        Permission::create(['name' => 'usuarios.destroy'])->SyncRoles([$role1]);

        Permission::create(['name' => 'asistencias.index'])->SyncRoles([$role1, $role2]);
        Permission::create(['name' => 'asistencias.create'])->SyncRoles([$role1, $role2]);
        Permission::create(['name' => 'asistencias.edit'])->SyncRoles([$role1, $role2]);
        Permission::create(['name' => 'asistencias.destroy'])->SyncRoles([$role1, $role2]);

        Permission::create(['name' => 'asistencias.reportes'])->SyncRoles([$role1, $role2]);
        Permission::create(['name' => 'asistencias.pdf'])->SyncRoles([$role1, $role2]);
        Permission::create(['name' => 'asistencias.pdf_fechas'])->SyncRoles([$role1, $role2]);

    }
}
