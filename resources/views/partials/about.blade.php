<section id="about" class="about section py-5">
    <style>
        /* About Section Styles */
        .about {
            background: #f9f9f9;
        }

        .about-meta {
            font-size: 14px;
            letter-spacing: 1px;
        }

        .about-title {
            font-size: 36px;
            color: #333;
        }

        .about-description {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
        }

        .feature-list li {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }

        .profile-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border: 4px solid #007bff;
        }

        .profile-name {
            font-size: 22px;
            color: #333;
        }

        .profile-position {
            font-size: 16px;
            color: #777;
        }

        .contact-info i {
            font-size: 28px;
        }

        .contact-number {
            font-size: 20px;
            color: #333;
        }

        .main-image {
            max-width: 100%;
            border-radius: 20px;
        }

        .small-image {
            width: 40%;
            border: 6px solid #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .experience-badge {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 123, 255, 0.4);
        }

        .experience-badge h3 {
            font-size: 32px;
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .about-title {
                font-size: 28px;
            }

            .profile {
                flex-direction: column;
                text-align: center;
            }

            .small-image {
                width: 50%;
            }
        }
    </style>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 align-items-center justify-content-between">
            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                <span class="about-meta text-primary text-uppercase fw-bold">More About Us</span>
                <h2 class="about-title fw-bold mb-3">Voluptas enim suscipit temporibus</h2>
                <p class="about-description text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <div class="row feature-list-wrapper mt-4">
                    <div class="col-md-6">
                        <ul class="feature-list list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Lorem ipsum dolor sit amet</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Consectetur adipiscing elit</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Sed do eiusmod tempor</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="feature-list list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Incididunt ut labore et</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Dolore magna aliqua</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Ut enim ad minim veniam</li>
                        </ul>
                    </div>
                </div>
                <div class="info-wrapper mt-4">
                    <div class="row gy-3">
                        <div class="col-lg-5">
                            <div class="profile d-flex align-items-center gap-3">
                                <img src="{{ asset('assets/img/avatar-1.webp') }}" alt="CEO Profile" class="profile-image rounded-circle shadow-sm">
                                <div>
                                    <h4 class="profile-name fw-bold mb-1">Mario Smith</h4>
                                    <p class="profile-position text-muted mb-0">CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-info d-flex align-items-center gap-2">
                                <i class="bi bi-telephone-fill text-primary fs-4"></i>
                                <div>
                                    <p class="contact-label mb-0 text-muted">Call us anytime</p>
                                    <p class="contact-number fw-bold fs-5 text-dark">+123 456-789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                <div class="image-wrapper position-relative text-center">
                    <img src="{{ asset('assets/img/about-5.webp') }}" alt="Business Meeting" class="img-fluid main-image rounded-4 shadow-lg">
                    <img src="{{ asset('assets/img/about-2.webp') }}" alt="Team Discussion" class="img-fluid small-image rounded-4 shadow-sm position-absolute top-50 start-50 translate-middle">
                    <div class="experience-badge position-absolute bottom-0 start-0 bg-primary text-white text-center p-3 rounded-4 shadow-lg">
                        <h3 class="fw-bold mb-0">15+ <span class="fw-light">Years</span></h3>
                        <p class="mb-0">Of experience in business service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
