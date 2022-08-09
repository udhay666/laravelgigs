<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::create([
            'title' => 'Laravel Senior Development',
            'tags' => 'laravel, javascript, vue',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email@email.com',
            'website' => 'https://www.acemecorp.com',
            'description' => 'Lorem ipsum consertetur adipsicing minia et illo
            reprehenderit voluptas reprehmement',
        ]);

        Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel, backend, api',
            'company' => 'star industries',
            'location' => 'New York, NY',
            'email' => 'email2@email.com',
            'website' => 'https://www.starindustries.com',
            'description' => 'Lorem ipsum consertetur adipsicing minia et illo
            reprehenderit voluptas quam illum cum reprehmement',
        ]);
    }
}
