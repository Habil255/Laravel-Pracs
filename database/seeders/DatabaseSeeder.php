<?php

namespace Database\Seeders;
use App\Models\Comment;
use App\Models\Role;
use App\Models\Student;
use App\Models\User;
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
        // Comment::factory()
        // ->times(6)
        // ->create();

        // User::factory()
        // ->times(2)
        // ->create();

        Student::factory()
        ->times(100)
        ->create();
        // Role::factory()
        // ->times(1)
        // ->create();
    }
}
