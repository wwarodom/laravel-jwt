<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        
        $permission = new Permission;
    	$permission->name = 'create-users';
    	$permission->save();

        $permission = new Permission;
    	$permission->name = 'manage-role';
    	$permission->save();

        $permission = new Permission;
    	$permission->name = 'get-user';
    	$permission->save();
    }
}
