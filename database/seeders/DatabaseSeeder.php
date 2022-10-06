<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(QuizzSeeder::class);
        $this->call(SolicitudSeeder::class);
        $this->call(QuizzQuestionSeeder::class);
        $this->call(QuizzAnswerSeeder::class);
        $this->call(SolicitudTypeSeeder::class);
    }
}
