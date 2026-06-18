<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    public function run(): void 
    {
        DB::table('contacts')->insert([
            [
                'label' => 'Kantor Pusat',
                'value' => 'Taman Tekno Sektor XI Blok G1 No. 1, Tangerang Selatan',
                'icon'  => 'bi-geo-alt',
            ],
            [
                'label' => 'WhatsApp',
                'value' => '0812-3456-7890',
                'icon'  => 'bi-whatsapp',
            ],
            [
                'label' => 'Email',
                'value' => 'info@l-essential.co.id',
                'icon'  => 'bi-envelope',
            ],
        ]);
    }
}