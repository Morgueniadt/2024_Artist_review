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
                'name' => 'Finally Rich',
                'duration' => '00:45:12',
                'release_year' => 2012,
                'number_of_songs' => 12,
                'image' => 'public\images\finally_rich.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Bang 2',
                'duration' => '00:41:10',
                'release_year' => 2013,
                'number_of_songs' => 10,
                'image' => 'public\images\albums/bang_2.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Bang 3',
                'duration' => '00:50:35',
                'release_year' => 2015,
                'number_of_songs' => 15,
                'image' => 'public\images\bang_3.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Thot Breaker',
                'duration' => '00:45:00',
                'release_year' => 2017,
                'number_of_songs' => 12,
                'image' => 'public\images\thot_breaker.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'GloToven',
                'duration' => '00:36:15',
                'release_year' => 2019,
                'number_of_songs' => 12,
                'image' => 'public\images\glotoven.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => '4NEM',
                'duration' => '00:39:00',
                'release_year' => 2021,
                'number_of_songs' => 12,
                'image' => 'public\images\4nem.jpg', // Add image path
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
        ]);
    }
}
