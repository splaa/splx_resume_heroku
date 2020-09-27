<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name' => 'splaa',
            'email' => 'splaandrey@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('splaa1977'), // password
            'remember_token' => Str::random(10),
        ]);
        User::factory()->count(9)->create();
    }
}
