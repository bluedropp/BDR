<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name','admin')->first();
        $userRole = Role::where('name','user')->first();



        $admin = User::create([
            'name'=>'Admin User',
            'email' =>'admin@admin.com',
            'password' => Hash::make('admin'),
            'prenom'=>'Admin',
            'age'=>'20',
            'taille'=>'180',
            'pseudo'=>'admin',
            'genre'=>'autre',
            'fumeur'=>'0',
            'hobby'=>'science',
            'bio'=>'im the admin',
            'premium'=>'1',
            'PP'=>'PP/admin.pnj'




        ]);

        $user = User::create([
            'name'=>'user User',
            'email' =>'user@user.com',
            'password' => Hash::make('user'),
            'prenom'=>'User',
            'age'=>'20',
            'taille'=>'180',
            'pseudo'=>'user',
            'genre'=>'autre',
            'fumeur'=>'0',
            'hobby'=>'science',
            'bio'=>'im the user',
            'premium'=>'0',
            'PP'=>'PP/user.pnj'




        ]);

        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);




    }
}
