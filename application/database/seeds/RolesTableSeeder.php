<?php

use SaaSrv\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Define the user roles here:
     *  1. administrator:       is the super user - has all privileges
     *  2. moderator:           administrators with less privileges
     *  2. customer:            customers, simple members of the app
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'administrator',
            ],
            [
                'name' => 'moderator',
            ],
            [
                'name' => 'customer',
            ],
        ];

        \Schema::disableForeignKeyConstraints();
        DB::table('roles')->truncate();
        DB::table('role_user')->truncate();
        \Schema::enableForeignKeyConstraints();

        Role::insert($roles);

        // Assign the admin role to the admin user we created in UsersTableSeeder
        $user = DB::table('users')->where('email', 'admin@saasrv.dev')->first();
        $role = DB::table('roles')->where('name', 'administrator')->first();

        DB::table('role_user')->insert([
            [
                'user_id' => $user->id, 
                'role_id' => $role->id
            ],
        ]);
    }
}
