<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name'=> 'User']);

        Permission::create(['name' => 'Admin.home'])->syncRoles([$role1,$role2 ]);
        Permission::create(['name' => 'Admin.apprentice.index'])->assignRole($role1);
        Permission::create(['name' => 'Admin.apprentice.create']);
        Permission::create(['name' => 'Admin.apprentice.edit']);
        Permission::create(['name' => 'Admin.apprentice.delete']);
        Permission::create(['name' => 'Admin.instructor.index'])->assignRole($role1);
        Permission::create(['name' => 'Admin.instructor.create']);
        Permission::create(['name' => 'Admin.calculator.index'])->assignRole($role2);
        Permission::create(['name' => 'Admin.calculator.resultado']);

        
       

    }
}
