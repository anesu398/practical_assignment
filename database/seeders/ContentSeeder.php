<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;
class ContentSeeder extends Seeder
{


public function run()
{
    Content::create([
        'section' => 'hero',
        'key' => 'title',
        'value' => 'Maecenas Vitae Consectetur Led Vestibulum Ante',
    ]);

    Content::create([
        'section' => 'hero',
        'key' => 'description',
        'value' => 'Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.',
    ]);

    Content::create([
        'section' => 'hero',
        'key' => 'image',
        'value' => 'assets/img/illustration-1.webp',
    ]);
}
}
