<?php

use Illuminate\Database\Seeder;
Use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
            [
                'name'=>'role_read',
                'display_name'=>'display only',
                'description'=>'see only listing of Role'

            ],
            [
                'name'=>'role_read',
                'display_name'=>'display only',
                'description'=>'see only listing of Role'

            ],
            [
                'name'=>'role_create',
                'display_name'=>'create Role',
                'description'=>'can create listing of Role'

            ],[
                'name'=>'role_edit',
                'display_name'=>'edit Role',
                'description'=>'can edit listing of Role'

            ]
        ];

        foreach ($permissions as $key=>$value){
        Permission::create($value);

    }
    }
}
