<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::all();
        Article::factory(100)
            ->create()
            ->each(
                fn($article) => $article->tags()->attach($tags->random(4)->pluck('id')->toArray())
            );
    }
}
