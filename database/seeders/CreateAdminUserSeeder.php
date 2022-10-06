<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //#1
        $user = User::create([
            'name' => 'Juan Andres',
            'email' => 'javt1981@gmail.com',
            'rut' => '15449806-0',
            'birthday' => Carbon::parse('14-12-1981'),
            'avatar' => '',
            'password' => bcrypt('Juan1981')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);


         //#2
         $user1 = User::create([
            'name' => 'Paciente 1',
            'email' => 'correo@paciente.com',
            'rut' => '12345678-9',
            'birthday' => Carbon::parse('14-12-1990'),
            'avatar' => '',
            'password' => bcrypt('password')
        ]);

        $role = Role::create(['name' => 'Patient']);

        $user1->assignRole([$role->id]);


          //#3
          $user2 = User::create([
            'name' => 'Doctor 1',
            'email' => 'correo@doctor.com',
            'rut' => '12345678-9',
            'birthday' => Carbon::parse('14-12-1990'),
            'avatar' => '',
            'password' => bcrypt('password')
        ]);

        $role = Role::create(['name' => 'Doctor']);

        $user2->assignRole([$role->id]);

    }
}
