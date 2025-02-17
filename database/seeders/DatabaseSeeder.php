<?php

namespace Database\Seeders;

use App\Models\Attraction;
use App\Models\Interior;
use App\Models\Property;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Property::create([
            'name' => 'Asakusa Rakuten STAY Hotel',
            'attractionsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/attraction.png',
            'interiorsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/interior.png',
        ]);

        Property::create([
            'name' => 'Osaka Kansai Airpot Hotel',
            'attractionsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property2/attraction.png',
            'interiorsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property2/interior.png',
        ]);

        Property::create([
            'name' => 'Asakusa Rakuten STAY Hotel',
            'attractionsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property3/attraction.png',
            'interiorsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property3/interior.png',
        ]);

        Property::create([
            'name' => 'Asakusa Rakuten STAY Hotel',
            'attractionsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property4/attraction.png',
            'interiorsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property4/interior.png',
        ]);

        Property::create([
            'name' => 'Asakusa Rakuten STAY Hotel',
            'attractionsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property5/attraction.png',
            'interiorsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property5/interior.png',
        ]);

        // Property::create([
        //     'name' => 'Asakusa Rakuten STAY Hotel',
        //     'attractionsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property6/attraction.png',
        //     'interiorsImageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property6/interior.png',
        // ]);


        //Property 1
        Attraction::create([
            'property_id' => 1,
            'description' => 'Senso-ji Temple 13 - min walk',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/attractions/senso_ji_temple.png'
        ]);

        Attraction::create([
            'property_id' => 1,
            'description' => 'Nakamise Street 11 - min walk',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/attractions/nakamise_street.png'
        ]);

        Attraction::create([
            'property_id' => 1,
            'description' => 'Tokyo Mizumachi 4 - min walk',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/attractions/tokyo_mizumachi.png'
        ]);

        Attraction::create([
            'property_id' => 1,
            'description' => 'Tokyo Skytree 7 - min walk',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/attractions/tokyo_skytree.png'
        ]);

        Attraction::create([
            'property_id' => 1,
            'description' => 'Kaminarimon 11 - min walk',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/attractions/kaminarimon.png'
        ]);

        Attraction::create([
            'property_id' => 1,
            'description' => 'Asakusa Jinja 13 - min walk',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/attractions/asakusa_jinja.png'
        ]);
        
        Attraction::create([
            'property_id' => 1,
            'description' => 'Denboin Street 13 - min walk',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/attractions/denboin_street.png'
        ]);

        Attraction::create([
            'property_id' => 1,
            'description' => 'Asakusa Culture Tourist Information Center 10 - min walk',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/attractions/asakusa_culture.png'
        ]);
       
        Interior::create([
            'property_id' => 1,
            'description' => 'Entrance',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/interiors/entrance.png'
        ]);
        
        Interior::create([
            'property_id' => 1,
            'description' => 'Unattended Reception',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/interiors/unattended_reception.png'
        ]);

        Interior::create([
            'property_id' => 1,
            'description' => 'Concept Room',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/interiors/concept_room.png'
        ]);

        Interior::create([
            'property_id' => 1,
            'description' => 'Twin Room',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/interiors/twin_room.png'
        ]);
        
        Interior::create([
            'property_id' => 1,
            'description' => 'Tokyo Skytree View',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/interiors/tokyo_skytree_view.png'
        ]);

        Interior::create([
            'property_id' => 1,
            'description' => 'Common Hallway and Tokyo Skytree',
            'imageUrl' => 'https://digiboxes-webdemo.com/images/portfolio/property1/interiors/common_hallway.png'
        ]);
    }
}
