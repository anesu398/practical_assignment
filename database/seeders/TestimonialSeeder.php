<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;


class TestimonialSeeder extends Seeder
{
    public function run()
    {
        Testimonial::create([
            'name' => 'Saul Goodman',
            'position' => 'CEO & Founder',
            'content' => 'has been instrumental in driving our company forward with their innovative ideas and leadership.',
            'image' => 'testimonials-1.jpg',

        ]);


        // Add more testimonials
    Testimonial::create([
        'name' => 'Sara Wilsson',
        'position' => 'Designer',
        'content' => 'Their creativity and attention to detail have greatly enhanced our projects.',
        'image' => 'testimonials-2.jpg',
    ]);

    Testimonial::create([
        'name' => 'Jena Karlis',
        'position' => 'Store Owner',
        'content' => 'Their dedication and hard work have significantly improved our business operations.',
        'image' => 'testimonials-3.jpg',
    ]);

    Testimonial::create([
        'name' => 'Matt Brandon',
        'position' => 'Freelancer',
        'content' => 'Their expertise and professionalism have been invaluable to our success.',
        'image' => 'testimonials-4.jpg',
    ]);

    Testimonial::create([
        'name' => 'John Larson',
        'position' => 'Entrepreneur',
        'content' => 'Their innovative solutions have helped us stay ahead of the competition.',
        'image' => 'testimonials-5.jpg',
    ]);
    }
}
