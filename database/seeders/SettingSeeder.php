<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'phone1' => '+9989056565',
            'phone2' => '+998954056565',
            'address'=>json_encode([
                'en' =>'english',
                'ru' =>'russian',
                'uz' =>'uzbek',
            ]),
            'location' =>'location tashkent city',
            'email1' => 'php@php.ru',
            'email2' => 'php@php.com',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'telegram' => 'telegram',
            'youtube' => 'youtube',
        ]);
    }
}
