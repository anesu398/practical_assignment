<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch data from the database or define static data
        $stats = [
            'projects_completed' => '150+ Projects Completed',
            'happy_clients' => '200+ Happy Clients',
            'years_experience' => '10+ Years of Experience',
            'team_members' => '25+ Team Members',
        ];
        $testimonials = Testimonial::all();

        return view('pages.home', compact('stats', 'testimonials'));
    }
}
