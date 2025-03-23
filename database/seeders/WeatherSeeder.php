<?php

namespace Database\Seeders;

use App\Models\Weather;
use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weathers = [
            [
                'type' => 'Wolken',
                'icon' => '🌥️',
                'description' => 'Bewölkter Himmel ohne Regen!',
            ],
            [
                'type' => 'Sonne',
                'icon' => '☀️',
                'description' => 'Klarer Himmel mit Sonnenschein',
            ],
            [
                'type' => 'Regen',
                'icon' => '🌧️',
                'description' => 'Regnerisches Wetter',
            ],
        ];
        foreach ($weathers as $weather) {
            Weather::updateOrCreate(
                ['type' => $weather['type']],
                [
                    'icon' => $weather['icon'],
                    'description' => $weather['description'],
                ]
            );
        }
    }
}
