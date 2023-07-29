<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRole = Role::firstOrCreate(['name' => 'user']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        $user1 = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'id_pegawai' => 'PGW001',
            'jabatan' => 'Kepala Desa',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Ujung Berung'
        ]);
        $user1->assignRole($adminRole);

        $user2 = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
            'id_pegawai' => 'PGW002',
            'jabatan' => 'Admin',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Ujung Berung'
        ]);
        $user2->assignRole($userRole);
    }
}
