<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Buat 1 akun admin default untuk login ke panel admin.
     * Email & password ini WAJIB diganti setelah project di-deploy.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@lessential.co.id'],
            [
                'name'     => 'Admin L\'Essential',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}
