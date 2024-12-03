<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\Song;
use Carbon\Carbon;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        // Define the albums array
        $albums = [
            [
                'name' => 'EIGHTY PROOF',
                'duration' => '00:26:34',
                'release_year' => 2022,
                'number_of_songs' => 14,
                'image' => 'images/EIGHTY_PROOF.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
                'youtube_link' => 'https://www.youtube.com/watch?v=5ndRVVRYV0M&list=OLAK5uy_ngjrm0lgrVC7-0M62LnXIcYEG82VgtM58',
                'spotify_link' => 'https://open.spotify.com/album/41Lx4xTSfbx5xRplTOsmzP',
            ],
            [
                'name' => 'Vol. 3: The Subliminal Verses',
                'duration' => '01:41:00',
                'release_year' => 2004,
                'number_of_songs' => 22,
                'image' => 'images/Vol.3_The_Subliminal_Verses.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
                'youtube_link' => 'https://www.youtube.com/watch?v=HmvPyy14YbY&list=PLC80P4gsPr-a2xfqFze_U_yJNJMj6n4qP',
                'spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T',
            ],
            [
                'name' => 'Made In Hell',
                'duration' => '00:28:58',
                'release_year' => 2023,
                'number_of_songs' => 9,
                'image' => 'images/Made_In_Hell.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
                'youtube_link' => 'https://www.youtube.com/watch?v=ea8Uxm4u3yk&list=OLAK5uy_l7PCbIQ1UDV9N6is5LWsWez49XLo_KrfA',
                'spotify_link' => 'https://open.spotify.com/album/1wrvLX5aG5vHOuZ3qXh3vs',
            ],
            [
                'name' => 'Were Not Here To Be Loved',
                'duration' => '00:27:31',
                'release_year' => 2022,
                'number_of_songs' => 9,
                'image' => 'images/Were_Not_Here_To_Be_Loved.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
                'youtube_link' => 'https://www.youtube.com/watch?v=wFkL2ZDp8xE&list=OLAK5uy_lOW8m7licLleyHklHlDWYjMIjdBsOYDBg',
                'spotify_link' => 'https://open.spotify.com/album/0hm7PiBu72tRliLqLfiKy1',
            ],
            [
                'name' => 'New World Depression',
                'duration' => '00:34:15',
                'release_year' => 2024,
                'number_of_songs' => 13,
                'image' => 'images/New_World_Depression.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
                'youtube_link' => 'https://www.youtube.com/watch?v=j-Z0V0BraDM&list=PLxA687tYuMWi4ysNclyI4bXlsPVzWl8Vz',
                'spotify_link' => 'https://open.spotify.com/album/1lKWIQuLHxdlifTuudutTl',
            ],
            [
                'name' => 'The Power of Positive Drinking',
                'duration' => '00:32:08',
                'release_year' => 2008,
                'number_of_songs' => 14,
                'image' => 'images/The_Power_of_Positive_Drinking.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
                'youtube_link' => 'https://www.youtube.com/watch?v=fhLBO9zasZE&list=PLjQ9_LaIy2f-yWPab9sIeP18rsZ_82WXP',
                'spotify_link' => 'https://open.spotify.com/album/34BjpGrfhWfCemwVPlGOQ3',
            ],
            [
                'name' => 'Venom',
                'duration' => '00:40:35',
                'release_year' => 2023,
                'number_of_songs' => 13,
                'image' => 'images/Venom.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
                'youtube_link' => 'https://www.youtube.com/watch?v=i_t8E2vDkEc&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM',
                'spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP',
            ],
            [
                'name' => '11th dimension',
                'duration' => '00:46:48',
                'release_year' => 2024,
                'number_of_songs' => 21,
                'image' => 'images/11th_dimension.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
                'youtube_link' => 'https://i.ytimg.com/vi/TJixbD92lWY/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLD5Y-WY5k5FXUUa_Chnrkee3hmB_w',
                'spotify_link' => 'https://open.spotify.com/album/4Ioudl1Qx3fTh5AMOYRBvf',
            ],
            [
                'name' => 'my anti-aircraft friend',
                'duration' => '00:39:18',
                'release_year' => 2024,
                'number_of_songs' => 10,
                'image' => 'images/Julie.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
                'youtube_link' => 'https://www.youtube.com/watch?v=U_kzN8be-7A&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8',
                'spotify_link' => 'https://open.spotify.com/album/14SJbJMseOJ2W8HlWLwNgJ',
            ],
            [
                'name' => 'Nevermind',
                'duration' => '00:49:15',
                'release_year' => 1991,
                'number_of_songs' => 13,
                'image' => 'images/Nevermind.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
                'youtube_link' => 'https://www.youtube.com/watch?v=E6SbPv1Fu80&list=PLMxy067kbpQjRXmNGao7pvVoFaCTIZRze',
                'spotify_link' => 'https://open.spotify.com/album/2UJcKiJxNryhL050F5Z1Fk',
            ],
        ];

        // Insert albums into the database
        foreach ($albums as $albumData) {  // Corrected variable name here
            $album = Album::create($albumData);  // Create the album

            // Randomly select songs for each album
            $songs = Song::inRandomOrder()->take($album->number_of_songs)->pluck('id');

            // Attach the selected songs to the album
            $album->songs()->attach($songs);
        }
    }
}
