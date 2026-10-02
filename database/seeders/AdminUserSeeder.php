<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use RuntimeException;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $phone = env('ADMIN_PHONE');
        $password = env('ADMIN_PASSWORD');

        if (! $phone || ! $password) {
            throw new RuntimeException(
                'ADMIN_PHONE and ADMIN_PASSWORD must be set in the .env file.'
            );
        }

        User::updateOrCreate(
            ['phone' => $phone],
            [
                'name' => 'مدیر فروشگاه',
                'email' => null,
                'password' => Hash::make($password),
                'is_admin' => true,
            ]
        );
    }
}