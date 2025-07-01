<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    public function run()
    {
        // Voorgevelde data voor McDonald's restaurants in Rotterdam
        $restaurants = [
            [
                'name' => 'McDonald\'s Rotterdam Centrum',
                'description' => 'Een populaire fastfoodketen met hamburgers, frietjes, en milkshakes.',
                'img_url' => 'https://example.com/images/mcdonalds_1.jpg',
                'address' => 'Korte Hoogstraat 5, 3011 GJ Rotterdam, Nederland',
                'star_count' => 4.6,
                'latitude' => 51.9225,
                'longitude' => 4.4818,
            ],
            [
                'name' => 'McDonald\'s Rotterdam Zuid',
                'description' => 'Fastfood restaurant met een breed aanbod van menu-items.',
                'img_url' => 'https://example.com/images/mcdonalds_2.jpg',
                'address' => 'Wijnhaven 12, 3011 WR Rotterdam, Nederland',
                'star_count' => 4.2,
                'latitude' => 51.8980,
                'longitude' => 4.4914,
            ],
            [
                'name' => 'McDonald\'s Rotterdam West',
                'description' => 'Snel, lekker en altijd consistent. Perfect voor onderweg.',
                'img_url' => 'https://example.com/images/mcdonalds_3.jpg',
                'address' => 'Delftseplein 20, 3013 AJ Rotterdam, Nederland',
                'star_count' => 4.3,
                'latitude' => 51.9223,
                'longitude' => 4.4705,
            ]
        ];

        // Invoeren van de restaurants in de database
        DB::table('restaurants')->insert($restaurants);
    }
}
