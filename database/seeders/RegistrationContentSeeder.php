<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RegistrationContent;

class RegistrationContentSeeder extends Seeder
{
    public function run()
    {
        RegistrationContent::insert([
            [
                'key' => 'persyaratan',
                'title' => 'Persyaratan Pendaftaran',
                'content' => '
                <ul class="list-disc pl-5 space-y-1">
                    <li>Usia minimal 15 tahun</li>
                    <li>Lulusan SMP/MTs</li>
                    <li>Akta kelahiran</li>
                </ul>'
            ],
            [
                'key' => 'prosedur',
                'title' => 'Prosedur Pendaftaran',
                'content' => '
                <ol class="list-decimal pl-5 space-y-1">
                    <li>Daftar online</li>
                    <li>Upload dokumen</li>
                    <li>Verifikasi</li>
                </ol>'
            ],
        ]);
    }
}
