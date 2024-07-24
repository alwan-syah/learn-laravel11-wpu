<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Kemduian bisa buat artikel baru dengan kat kunci yang sama, atu sekitar berbeda, misal kata kunci judul barunya
        //         - Bocoran 20 Soal Tes Masuk Madrasah Aliyah Negeri Favorit 2024 dan Jawabannya
        //         - Soal Tes Masuk SMA Negeri 2024 Lengkap dengan Kunci Jawaban
        //         - Soal Tes Masuk SMP Negeri 2024 Lengkap dengan Kunci Jawaban'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
           Category::all() ,
           User::all()
        ])->create();
    }
}
