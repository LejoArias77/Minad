<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
    
    //crear roles
    $role1 = Role::create(['name' => 'admin']);
    $role2 = Role::create(['name' => 'administrador']);
    $role3 = Role::create(['name' => 'colaborador']);

    //crear permisos
    $permissionCreateUser = Permission::create(['name'=>'create-user']);
    $permissionEditUser = Permission::create(['name'=>'update-user']);
    $permissionDeleteUser = Permission::create(['name'=>'delete-user']);
    $permissionViewRegister = Permission::create(['name'=>'vizualize-register']);
    
    $permisionViewAdmin = Permission::create(['name'=>'viazualize-adminPanel']);

    
        // Asignar permisos a roles
        $role1->givePermissionTo([
            $permissionCreateUser,
            $permissionEditUser,
            $permissionDeleteUser,
            $permissionViewRegister
        ]);
    

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
