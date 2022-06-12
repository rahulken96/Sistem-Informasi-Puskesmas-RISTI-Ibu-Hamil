<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'jabatan' => 'admin',
            ],
            [
                'jabatan' => 'bidan',
            ],
            [
                'jabatan' => 'kepala_puskesmas',
            ],
            [
                'jabatan' => 'kepala_desa',
            ],
            [
                'jabatan' => 'kepala_kecamatan',
            ],
        ];

        DB::table('roles')->insert($role);
    }
}
