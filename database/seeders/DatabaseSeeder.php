<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::query()->delete();
        User::query()->delete();

        Customer::insert([
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '09171234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '09181234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Ana Reyes', 'email' => 'ana.reyes@example.com', 'phone' => '09191234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Carlo Mendoza', 'email' => 'carlo.mendoza@example.com', 'phone' => '09201234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Liza Garcia', 'email' => 'liza.garcia@example.com', 'phone' => '09211234567', 'created_at' => now(), 'updated_at' => now()],
        ]);

        User::insert([
            ['username' => 'admin', 'full_name' => 'System Administrator', 'email' => 'admin@example.com', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier1', 'full_name' => 'Ramon Cruz', 'email' => 'cashier1@example.com', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier2', 'full_name' => 'Sofia Lim', 'email' => 'cashier2@example.com', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'manager1', 'full_name' => 'Patricia Gomez', 'email' => 'manager1@example.com', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'staff1', 'full_name' => 'Daniel Flores', 'email' => 'staff1@example.com', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
