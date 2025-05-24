@extends('layouts.app')

@section('title', 'Home - Mike Carasco Portfolio')

@section('content')
    <div class="hero-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-6 animate-on-scroll">
                    <h1 class="display-4 fw-bold mb-4">
                        Hi, I'm <span class="hero-name animate-float">Mike Carasco</span>
                    </h1>
                    <h2 class="h3 mb-4 typing-effect" style="font-weight: 300; letter-spacing: 1px;">3rd Year BSIT Student |
                        Mobile & Web Developer</h2>
                    <p class="lead mb-4 animate-on-scroll" data-delay="200">
                        Passionate 3rd year BSIT student specializing in mobile app and web development.
                        Currently mastering <span class="tech-stack">Flutter</span>, <span class="tech-stack">React
                            Native</span>,
                        <span class="tech-stack">Laravel</span>, and <span class="tech-stack">JavaScript</span> to build
                        innovative mobile and web solutions.
                    </p>
                    <div class="d-flex gap-3 flex-wrap animate-on-scroll" data-delay="400">
                        <a href="{{ route('portfolio') }}" class="btn btn-warning btn-lg btn-animated">
                            <i class="fas fa-briefcase"></i> View My Projects
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg btn-animated">
                            <i class="fas fa-envelope"></i> Get In Touch
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center animate-on-scroll" data-delay="300">
                    <div class="profile-image-container animate-pulse">
                        <img src="{{ asset('images/profile.jpg') }}" alt="Mike Carasco"
                            class="img-fluid rounded-circle shadow-lg profile-image animate-image"
                            style="width: 300px; height: 300px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row stagger-container">
                <div class="col-lg-4 mb-4 stagger-item">
                    <div class="card h-100 shadow-sm card-hover">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt fa-3x text-primary mb-3 animate-pulse"></i>
                            <h4>Mobile Development</h4>
                            <p class="card-text">
                                Learning cross-platform mobile development with Flutter and React Native,
                                building apps with modern UI/UX principles and native functionality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 stagger-item">
                    <div class="card h-100 shadow-sm card-hover">
                        <div class="card-body text-center">
                            <i class="fas fa-code fa-3x text-success mb-3 animate-pulse"></i>
                            <h4>Web Development</h4>
                            <p class="card-text">
                                Building responsive, dynamic websites using Laravel, PHP, JavaScript,
                                and modern frameworks with focus on user experience and performance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 stagger-item">
                    <div class="card h-100 shadow-sm card-hover">
                        <div class="card-body text-center">
                            <i class="fas fa-graduation-cap fa-3x text-warning mb-3 animate-pulse"></i>
                            <h4>Academic Excellence</h4>
                            <p class="card-text">
                                Maintaining strong academic performance while applying theoretical
                                knowledge to practical projects and real-world development challenges.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4 text-dark">Interested in Collaborating?</h2>
                    <p class="lead mb-4 text-dark">
                        I'm always eager to work on new projects and learn from experienced developers.
                        Let's connect and explore opportunities to grow together!
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-paper-plane"></i> Let's Talk
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        /* Hero name styling for excellent readability */
        .hero-name {
            color: #ffc107;
            /* Gold/yellow color for high contrast */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-family: var(--font-headings);
            font-weight: 700;
        }

        /* Ensure subtitle text doesn't get cut off */
        .typing-effect {
            overflow: visible !important;
            white-space: nowrap;
            width: 100%;
            min-height: 3rem;
            position: relative;
        }

        /* Typing cursor/caret styling */
        .typing-effect::after {
            content: '|';
            color: #ffc107;
            font-weight: 100;
            font-size: 1.1em;
            animation: blink 1s infinite;
            position: absolute;
            margin-left: 2px;
        }

        .typing-effect.typing-complete::after {
            animation: blink 1s infinite;
        }

        /* Blinking animation for cursor */
        @keyframes blink {

            0%,
            50% {
                opacity: 1;
            }

            51%,
            100% {
                opacity: 0;
            }
        }

        /* Responsive text for smaller screens */
        @media (max-width: 768px) {
            .typing-effect {
                white-space: normal;
                font-size: 1.2rem !important;
            }
        }

        .profile-image {
            border: 5px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .profile-image:hover {
            transform: scale(1.05);
        }

        .min-vh-75 {
            min-height: 75vh;
        }

        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }
    </style>
@endpush
