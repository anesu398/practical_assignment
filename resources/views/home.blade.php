@extends('layouts.main')

@section('title', 'Home - iLanding')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        @include('partials.hero') <!-- Include Hero Partial -->
    </section><!-- /Hero Section -->

   
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">
        <div class="container">
            <div class="row g-5">
                @foreach($testimonials as $testimonial)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/' . $testimonial->image) }}" class="testimonial-img" alt="{{ $testimonial->name }}">
                            <h3>{{ $testimonial->name }}</h3>
                            <h4>{{ $testimonial->position }}</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>{{ $testimonial->content }}</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- /Testimonials Section -->
<!-- Companies Section -->
<section id="companies" class="companies section light-background">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
            <h2>Trusted by Leading Companies</h2>
            <p>We work with some of the most innovative companies in the world.</p>
        </div>
        <div class="row gy-4 align-items-center">
            <div class="col-lg-2 col-md-4 col-6">
                <img src="{{ asset('assets/img/companies/company-1.png') }}" alt="Company 1" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <img src="{{ asset('assets/img/companies/company-2.png') }}" alt="Company 2" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <img src="{{ asset('assets/img/companies/company-3.png') }}" alt="Company 3" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <img src="{{ asset('assets/img/companies/company-4.png') }}" alt="Company 4" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <img src="{{ asset('assets/img/companies/company-5.png') }}" alt="Company 5" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <img src="{{ asset('assets/img/companies/company-6.png') }}" alt="Company 6" class="img-fluid">
            </div>
        </div>
    </div>
</section><!-- /Companies Section -->
    <!-- Stats Section -->
    @include('components.stats', ['stats' => $stats]) <!-- Include Stats Component -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        @include('partials.contact') <!-- Include Contact Partial -->
    </section><!-- /Contact Section -->
@endsection