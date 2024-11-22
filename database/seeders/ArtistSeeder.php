<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album; 
use Carbon\Carbon; 

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        Album::insert([
            [
                'name' => 'EIGHTY PROOF',
                'duration' => '00:26:34',
                'release_year' => 2022,
                'number_of_songs' => 14,
                'image' => 'images/EIGHTY_PROOF.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Vol. 3: The Subliminal Verses',
                'duration' => '01:41:00',
                'release_year' => 2004,
                'number_of_songs' => 22,
                'image' => 'images/Vol.3_The_Subliminal_Verses.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Made In Hell',
                'duration' => '00:28:58',
                'release_year' => 2023,
                'number_of_songs' => 9,
                'image' => 'images/Made_In_Hell.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Were Not Here To Be Loved',
                'duration' => '00:27:31',
                'release_year' => 2022,
                'number_of_songs' => 9,
                'image' => 'images/Were_Not_Here_To_Be_Loved.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'New World Depression',
                'duration' => '00:34:15',
                'release_year' => 2024,
                'number_of_songs' => 13,
                'image' => 'images/New_World_Depression.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'The Power of Positive Drinking',
                'duration' => '00:32:08',
                'release_year' => 2008,
                'number_of_songs' => 14,
                'image' => 'images/The_Power_of_Positive_Drinking.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Venom',
                'duration' => '00:40:35',
                'release_year' => 2023,
                'number_of_songs' => 13,
                'image' => 'images/Venom.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => '11th dimension',
                'duration' => '00:46:48',
                'release_year' => 2024,
                'number_of_songs' => 21,
                'image' => 'images/11th_dimension.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'my anti-aircraft friend',
                'duration' => '00:39:18',
                'release_year' => 2024,
                'number_of_songs' => 10,
                'image' => 'images/Julie.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
        ]);
    }
}
