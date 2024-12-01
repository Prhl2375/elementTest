<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        DB::table('movies')->insert([
            [
                'title' => 'Shutter Island',
                'slug' => 'shutter-island',
                'description' => 'A mind-bending thriller.',
                'poster' => 'island.jpg',
                'trailer' => 'shutter-island-trailer.mp4',
                'release_year' => '2010-02-19',
                'start_date' => '2010-02-19',
                'end_date' => '2010-12-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Inception',
                'slug' => 'inception',
                'description' => 'A thief who steals corporate secrets through dream-sharing technology.',
                'poster' => 'inception.jpg',
                'trailer' => 'inception-trailer.mp4',
                'release_year' => '2010-07-16',
                'start_date' => '2010-07-18',
                'end_date' => '2010-12-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Dark Knight',
                'slug' => 'the-dark-knight',
                'description' => 'Batman faces the Joker, a criminal mastermind.',
                'poster' => 'dark-knight.jpg',
                'trailer' => 'dark-knight-trailer.mp4',
                'release_year' => '2008-07-18',
                'start_date' => '2008-07-20',
                'end_date' => '2008-12-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Interstellar',
                'slug' => 'interstellar',
                'description' => 'A group of astronauts travel through a wormhole in search of a new home.',
                'poster' => 'interstellar.jpg',
                'trailer' => 'interstellar-trailer.mp4',
                'release_year' => '2014-11-07',
                'start_date' => '2014-11-10',
                'end_date' => '2015-04-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Matrix',
                'slug' => 'the-matrix',
                'description' => 'A hacker discovers the truth about his reality and his role in the war against its controllers.',
                'poster' => 'matrix.jpg',
                'trailer' => 'matrix-trailer.mp4',
                'release_year' => '1999-03-31',
                'start_date' => '1999-04-01',
                'end_date' => '1999-12-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Shawshank Redemption',
                'slug' => 'shawshank-redemption',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and redemption through acts of decency.',
                'poster' => 'shawshank.jpg',
                'trailer' => 'shawshank-trailer.mp4',
                'release_year' => '1994-09-22',
                'start_date' => '1994-09-23',
                'end_date' => '1995-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Godfather',
                'slug' => 'the-godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control to his reluctant son.',
                'poster' => 'godfather.jpg',
                'trailer' => 'godfather-trailer.mp4',
                'release_year' => '1972-03-24',
                'start_date' => '1972-03-26',
                'end_date' => '1972-12-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pulp Fiction',
                'slug' => 'pulp-fiction',
                'description' => 'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'poster' => 'pulp-fiction.jpg',
                'trailer' => 'pulp-fiction-trailer.mp4',
                'release_year' => '1994-10-14',
                'start_date' => '1994-10-15',
                'end_date' => '1995-03-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fight Club',
                'slug' => 'fight-club',
                'description' => 'An insomniac office worker forms an underground fight club.',
                'poster' => 'fight-club.jpg',
                'trailer' => 'fight-club-trailer.mp4',
                'release_year' => '1999-10-15',
                'start_date' => '1999-10-20',
                'end_date' => '2000-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Forrest Gump',
                'slug' => 'forrest-gump',
                'description' => 'The life story of a slow-witted but kind-hearted man.',
                'poster' => 'forrest-gump.jpg',
                'trailer' => 'forrest-gump-trailer.mp4',
                'release_year' => '1994-07-06',
                'start_date' => '1994-07-07',
                'end_date' => '1995-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
