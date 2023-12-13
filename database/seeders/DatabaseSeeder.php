<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'Poland']);
        Country::create(['name' => 'United Kingdom']);

        City::create(['country_id' => 1, 'name' => 'Warsaw']);
        City::create(['country_id' => 1, 'name' => 'Gdańsk']);
        City::create(['country_id' => 1, 'name' => 'Wrocław']);
        City::create(['country_id' => 2, 'name' => 'London']);
        City::create(['country_id' => 1, 'name' => 'Manchester']);
        City::create(['country_id' => 1, 'name' => 'Liverpool']);

        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Vue JS', 'slug' => 'vue-js']);
        Tag::create(['name' => 'React', 'slug' => 'react']);
        Tag::create(['name' => 'Livewire', 'slug' => 'livewire']);
    }
}
