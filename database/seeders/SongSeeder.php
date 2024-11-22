<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Song data from Slipknot's album Vol. 3: (The Subliminal Verses)
        $songs = [
            ['name' => 'Prelude 3.0', 'duration' => '02:03:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'The Blister Exists', 'duration' => '05:19:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Three Nil', 'duration' => '03:13:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Duality', 'duration' => '04:12:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Opium of the People', 'duration' => '03:45:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Circle', 'duration' => '04:40:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Welcome', 'duration' => '03:23:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Vermilion', 'duration' => '05:16:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Pulse of the Maggots', 'duration' => '03:43:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Before I Forget', 'duration' => '04:40:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Vermilion Pt. 2 (The Subtle Art of Peer Pressure)', 'duration' => '03:39:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'The Nameless', 'duration' => '04:21:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Danger - Keep Away', 'duration' => '03:47:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg'],
            ['name' => 'Herself', 'duration' => '03:20:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'Rosary', 'duration' => '04:15:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'Milkshake', 'duration' => '03:45:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'Pussycat', 'duration' => '04:00:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'Painkiller', 'duration' => '05:00:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'The Greenhouse', 'duration' => '04:30:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'Mississippi', 'duration' => '03:50:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'Subtlety', 'duration' => '03:40:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'The Fall', 'duration' => '03:25:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'Devil\'s Advocate', 'duration' => '04:10:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'Shotgun Wedding', 'duration' => '04:05:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg'],
            ['name' => 'Minigun', 'duration' => '02:20:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'Venom', 'duration' => '03:35:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'Death Rattle', 'duration' => '03:12:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'Ride The Thunder', 'duration' => '03:01:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'Do It So Good', 'duration' => '03:22:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'Bang Ya Head', 'duration' => '03:36:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'Feral', 'duration' => '03:16:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'Sonic Dog Tag', 'duration' => '04:26:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'Modern Love', 'duration' => '03:28:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'S.A.D', 'duration' => '03:30:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'Outrage', 'duration' => '03:28:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
            ['name' => 'Sombre Goodbye', 'duration' => '02:19:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg'],
        ];

        // Insert each song into the database
        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}
