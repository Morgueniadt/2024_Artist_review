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
            ['name' => 'Prelude 3.0', 'duration' => '02:03:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=ds1xo-Hfq68','spotify_link' => 'https://open.spotify.com/track/6aAB0piUg6mZ5sJuXaV9ps' ],
            ['name' => 'The Blister Exists', 'duration' => '05:19:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=4Rog8XY8oxg','spotify_link' => 'https://open.spotify.com/track/6aAB0piUg6mZ5sJuXaV9ps' ],
            ['name' => 'Three Nil', 'duration' => '03:13:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=3deDNMr12rQ&list=PLvXUqfNLb-tnXQPJfrNyLpqWoAvwUabvR&index=3&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T' ],
            ['name' => 'Duality', 'duration' => '04:12:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=6fVE8kSM43I&list=PLvXUqfNLb-tnXQPJfrNyLpqWoAvwUabvR&index=4&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T' ],
            ['name' => 'Opium of the People', 'duration' => '03:45:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=CL2MVbsR3TA&list=PLvXUqfNLb-tnXQPJfrNyLpqWoAvwUabvR&index=5&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T' ],
            ['name' => 'Circle', 'duration' => '04:40:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=5T6vdak5Qoo&list=PLvXUqfNLb-tnXQPJfrNyLpqWoAvwUabvR&index=6&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T' ],
            ['name' => 'Welcome', 'duration' => '03:23:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=Bhb7d7vtPZA&list=PLvXUqfNLb-tnXQPJfrNyLpqWoAvwUabvR&index=7&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T' ],
            ['name' => 'Vermilion', 'duration' => '05:16:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=xKcbYUwmmlE&list=PLvXUqfNLb-tnXQPJfrNyLpqWoAvwUabvR&index=8&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T' ],
            ['name' => 'Pulse of the Maggots', 'duration' => '03:43:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=3TokaT9MPLM&list=PLvXUqfNLb-tnXQPJfrNyLpqWoAvwUabvR&index=9&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T' ],
            ['name' => 'Before I Forget', 'duration' => '04:40:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=qw2LU1yS7aw&list=PLvXUqfNLb-tnXQPJfrNyLpqWoAvwUabvR&index=10&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T' ],
            ['name' => 'Vermilion Pt. 2 (The Subtle Art of Peer Pressure)', 'duration' => '03:39:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' =>'https://www.youtube.com/watch?v=RqcZYhZXqrs&list=PLC80P4gsPr-a2xfqFze_U_yJNJMj6n4qP&index=11&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T' ],
            ['name' => 'The Nameless', 'duration' => '04:21:00', 'release_year' => 2004, 'image' => 'images/Vol.3_The_Subliminal_Verses.jpg','youtube_link' => 'https://www.youtube.com/watch?v=R1c21feoBfI&list=PLC80P4gsPr-a2xfqFze_U_yJNJMj6n4qP&index=14&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/4ZDBQSIDIZRUBOG2OHcN3T' ],


            ['name' => 'catalogue', 'duration' => '03:15:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg','youtube_link' => 'https://www.youtube.com/watch?v=UNzsGbO1-58&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8&index=1&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14SJbJMseOJ2W8HlWLwNgJ' ],
            ['name' => 'tenebrist', 'duration' => '03:36:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg','youtube_link' => 'https://www.youtube.com/watch?v=U_kzN8be-7A&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8&index=2&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14SJbJMseOJ2W8HlWLwNgJ' ],
            ['name' => 'very little effort', 'duration' => '04:17:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg','youtube_link' => 'https://www.youtube.com/watch?v=4wor2d8SH2o&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8&index=3&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14SJbJMseOJ2W8HlWLwNgJ' ],
            ['name' => 'clairbourne practice', 'duration' => '03:08:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg','youtube_link' => 'https://www.youtube.com/watch?v=iUoi5nlEcXU&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8&index=4&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14SJbJMseOJ2W8HlWLwNgJ' ],
            ['name' => 'knob', 'duration' => '05:04:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg','youtube_link' => 'https://www.youtube.com/watch?v=HjDbdsZGAps&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8&index=5&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14SJbJMseOJ2W8HlWLwNgJ' ],
            ['name' => 'thread, stitch', 'duration' => '04:21:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg','youtube_link' => 'https://www.youtube.com/watch?v=ORLdjks3LS8&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8&index=7&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14SJbJMseOJ2W8HlWLwNgJ' ],
            ['name' => 'feminine adornments', 'duration' => '04:14:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg','youtube_link' => 'https://www.youtube.com/watch?v=ORLdjks3LS8&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8&index=7&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14SJbJMseOJ2W8HlWLwNgJ' ],
            ['name' => 'ill cook my own meals', 'duration' => '03:17:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg','youtube_link' => 'https://www.youtube.com/watch?v=hOlTK0h4vx8&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8&index=8&pp=iAQB8AUB' ],
            ['name' => 'piano instrumental', 'duration' => '04:31:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg','youtube_link' => 'https://www.youtube.com/watch?v=TLdSYcuuEf4&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8&index=9&pp=iAQB8AUB8','spotify_link' => 'https://open.spotify.com/album/14SJbJMseOJ2W8HlWLwNgJ' ],
            ['name' => 'stuck in a car with angels', 'duration' => '03:41:00', 'release_year' => 2024, 'image' => 'images/Julie.jpg','youtube_link' => 'https://www.youtube.com/watch?v=nrM99USiXn0&list=PLvsYXqtYjMYcw--Gs0LfdX7xaSo-Jo4u8&index=10&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14SJbJMseOJ2W8HlWLwNgJ' ],

     
            ['name' => 'Minigun', 'duration' => '02:20:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=pQmK46F8zlo&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=3&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'Venom', 'duration' => '03:36:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=igH9xdtKyPo&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=2&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'Death Rattle', 'duration' => '03:12:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=vK1HvShv3EY&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=4&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'Ride The Thunder', 'duration' => '03:01:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=bFiFKaf-bVk&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=5&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'Do It So Good', 'duration' => '03:22:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=GEyBFg3E_dI&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=6&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'Bang Ya Head', 'duration' => '03:36:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=vglI9cQUWQI&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=7&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'Feral', 'duration' => '03:16:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=_iPuFPYCoZg&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=8&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'Sonic Dog Tag', 'duration' => '04:26:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=fkkfDV9heJ0&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=9&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'Modern Love', 'duration' => '03:28:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=5xuOUuOlRGk&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=10&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'S.A.D', 'duration' => '03:30:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=t5EZ85k8vLs&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=11&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'Outrage', 'duration' => '03:28:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=XPLIZYGsNvA&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=12&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
            ['name' => 'Sombre Goodbye', 'duration' => '02:19:00', 'release_year' => 2023, 'image' => 'images/Venom.jpg','youtube_link' => 'https://www.youtube.com/watch?v=_h4sJ6QRgsI&list=PL1HxhzpGwf4DbfCo0dE5O1r8iQqc1elzM&index=13&pp=iAQB8AUB','spotify_link' => 'https://open.spotify.com/album/14hhOTLyfegr6dKjfWY7XP' ],
        ];

        // Insert each song into the database
        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}
