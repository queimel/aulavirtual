<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();

        $adminRole = Role::create(['name' => 'Admin']);
        $profesorRole = Role::create(['name' => 'Profesor']);
        $alumno8voRole = Role::create(['name' => 'Alumno 8vo']);
        $alumno1roRole = Role::create(['name' => 'Alumno 1ro']);

        $admin = new User;
        $admin->name = "Admin";
        $admin->email = "admin@aulavirtual.test";
        $admin->password = bcrypt('12345678');
        $admin->save();
        $admin->assignRole($adminRole);

        $profesor = new User;
        $profesor->name = "Profesor";
        $profesor->email = "profesor@aulavirtual.test";
        $profesor->password = bcrypt('12345678');
        $profesor->save();
        $profesor->assignRole($profesorRole);

        $supervisor = new User;
        $supervisor->name = "Alumno 8vo";
        $supervisor->email = "alumno8vo@aulavirtual.test";
        $supervisor->password = bcrypt('12345678');
        $supervisor->save();
        $supervisor->assignRole($alumno8voRole);

        $operativo = new User;
        $operativo->name = "Alumno 1ro";
        $operativo->email = "alumno1ro@aulavirtual.test";
        $operativo->password = bcrypt('12345678');
        $operativo->save();
        $operativo->assignRole($alumno1roRole);

    }
}
