<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\User;
use Spatie\Permission\Model\Role;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_has_roles')->insert([
            [
                // student
                'user_id'       => '1',
                'role_id'       => '1',
            ],[
                // coordinator
                'user_id'       => '2',
                'role_id'       => '2',
            ],[
                // admin
                'user_id'       => '3',
                'role_id'       => '3',
            ],[
                // superadmin
                'user_id'       => '4',
                'role_id'       => '4',
            ]
        ]);

        $assignedroles = DB::table('user_has_roles')->get();
        foreach ($assignedroles as $user_role) {
            User::find($user_role->user_id)->roles()->sync([$user_role->role_id]);
        }
    }
}
