<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // default
        // User::factory(10)->create();

        // // seeder
        // $rizky = User::create([
        //     'name' => 'Rizky Cahyono',
        //     'username' => 'RizkyCahyono',
        //     'email' => 'test@example.com',
        //     'email_verified_at' => now(),
        //     'remember_token' => Str::random(10),
        //     'password' => Hash::make('password')
        // ]);

        // Category::create([
        //     'name' => 'Rizky Cahyono',
        //     'slug' => 'test-slug-1'
        // ]);

        // Post::create([
        //     'title' => 'judul-artikel-1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Build robust, full-stack applications in PHP using Laravel and Livewire. Love JavaScript? Build a monolithic React or Vue driven frontend by pairing Laravel with Inertia.
        //     ave you productive in minutes.' 
        // ]);


        // menggabungkan seed dengan factory
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            // Category::factory(3)->create(),
            // $rizky, 
            // User::factory(5)->create()
            Category::all(),
            User::all()
        ])->create();

    }
}
