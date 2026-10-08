<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    public function run(): void
    {
        $pemrograman = Category::firstOrCreate(
            ['name' => 'Pemrograman'],
            ['description' => 'Buku-buku seputar coding']
        );
        $novel = Category::firstOrCreate(
            ['name' => 'Novel & Fiksi'],
            ['description' => 'Kumpulan cerita rekaan']
        );
        $sains = Category::firstOrCreate(
            ['name' => 'Sains & Teknologi'],
            ['description' => 'Buku tentang pengetahuan']
        );

        $pemrograman->books()->firstOrCreate(
            ['title' => 'Pemrograman Web dengan Laravel'],
            ['author' => 'Taylor Otwell', 'published_year' => 2023, 'stock' => 15]
        );
        $pemrograman->books()->firstOrCreate(
            ['title' => 'Mastering PHP 8'],
            ['author' => 'Rasmus Lerdorf', 'published_year' => 2022, 'stock' => 10]
        );
        $novel->books()->firstOrCreate(
            ['title' => 'Laskar Pelangi'],
            ['author' => 'Andrea Hirata', 'published_year' => 2005, 'stock' => 8]
        );
        $sains->books()->firstOrCreate(
            ['title' => 'Pengantar Kecerdasan Buatan'],
            ['author' => 'Stuart Russell', 'published_year' => 2021, 'stock' => 12]
        );
    }
}
