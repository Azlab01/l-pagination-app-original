<?php

use App\Student;
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
        factory(Student::class, 150)->create();
        // $this->call(UserSeeder::class);
    }
}
