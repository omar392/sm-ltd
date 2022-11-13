<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'image' => 'example.jpg',
            'name_ar' => 'صناع الحلول الدولية للخدمات اللوجيستية',
            'name_en' => 'Solution Makers international For Logistics Services',
            'email' => 'email@example.com',
            'phone' => '0560258430',
            'whatsapp' => '0560258430',
            'facebook' => 'https://www.facebook.com',
            'twitter' => 'https://www.twitter.com',
            'instagram' => 'https://www.instagram.com',
            'linkedin' => 'https://www.linkedin.com',
            'youtube' => 'https://www.youtube.com',
            'video' => 'https://www.youtube.com/watch?v=P5fHl8s7fE4',
            'address_ar' => 'السعودية - الرياض - السلى - وادى الغيل',
            'address_en' => 'KSA - ALSulay - Wadi Alghail St',
        ]);
    }
}