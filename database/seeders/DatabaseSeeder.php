<?php

namespace Database\Seeders;

use App\Models\Students;
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
        $this->call([
            UsersTableSeeder::class,
            RolesAndPermissionsSeeder::class,
            FaculitySeeder::class,
            LectureSeeder::class,
            StudentsSeeder::class,
        ]);
    }
}
