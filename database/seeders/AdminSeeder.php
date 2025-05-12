<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(

            ['email' => 'depardieu.nguetebe@gmail.com'],
            [
                'name' => "Nguetebe Pascal Shadrac Depardieu",
                'password' => Hash::make('dep@rdieu97'),
            ]
        );
    }
}
