<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->admin();
        $this->teacher();
        $this->student();
    }

    private function admin(){
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
        ]);
    }
    private function teacher(){
        User::factory()->create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'role' => 'teacher',
        ]);
    }
    private function student(){
        User::factory()->create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'role' => 'student',
        ]);
    }
}
