<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Hardcoded testimonials data
        $testimonials = [
            [
                'name' => 'John Doe',
                'position' => 'CEO',
                'image' => 'testimonial-1.jpg',
                'content' => 'This is an amazing service! Highly recommended.',
            ],
            [
                'name' => 'Jane Smith',
                'position' => 'CTO',
                'image' => 'testimonial-2.jpg',
                'content' => 'Great experience working with this team.',
            ],
            // Add more testimonials as needed
        ];

        // Hardcoded stats data
        $stats = [
            'clients' => 100,
            'projects' => 200,
            'hours' => 500,
            'awards' => 10,
        ];

        // Pass data to the view
        return view('pages.home', compact('testimonials', 'stats'));
    }
}