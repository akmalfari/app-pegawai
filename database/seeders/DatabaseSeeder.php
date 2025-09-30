<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'nama_lengkap'   => 'Akmal Fari',
            'email'          => 'akmal@example.com',
            'nomor_telepon'  => '08123456789',
            'tanggal_lahir'  => '2000-01-01',
            'alamat'         => 'Jl. Contoh No. 123',
            'tanggal_masuk'  => '2023-01-01',
            'status'         => 'aktif',
        ]);

        Employee::create([
            'nama_lengkap'   => 'Andi Saputra',
            'email'          => 'andi@example.com',
            'nomor_telepon'  => '08123456780',
            'tanggal_lahir'  => '1999-05-12',
            'alamat'         => 'Jl. Melati No. 45',
            'tanggal_masuk'  => '2022-10-10',
            'status'         => 'aktif',
        ]);

        Employee::create([
            'nama_lengkap'   => 'Budi Santoso',
            'email'          => 'budi@example.com',
            'nomor_telepon'  => '08123456781',
            'tanggal_lahir'  => '1995-07-20',
            'alamat'         => 'Jl. Mawar No. 88',
            'tanggal_masuk'  => '2021-05-15',
            'status'         => 'nonaktif',
        ]);
    }
}
