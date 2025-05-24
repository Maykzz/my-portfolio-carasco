@extends('layouts.app')

@section('title', 'Portfolio - Mike Carasco Portfolio')

@section('content') <div class="page-header bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center animate-on-scroll">
                    <h1 class="display-4 fw-bold mb-3 animate-fadeInUp">My Portfolio</h1>
                    <p class="lead animate-on-scroll" data-delay="200">My journey in mobile app and web development</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            @if ($projects->count() > 0)
                <div class="row stagger-container">
                    @foreach ($projects as $project)
                        <div class="col-lg-6 mb-5 stagger-item">
                            <div class="card project-card shadow-lg h-100 card-hover">
                                @if ($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}"
                                        class="card-img-top project-image animate-image" alt="{{ $project->title }}"
                                        style="height: 250px; object-fit: cover;">
                                @else
                                    <div class="card-img-top bg-gradient-primary d-flex align-items-center justify-content-center text-white animate-pulse"
                                        style="height: 250px;">
                                        <i class="fas fa-code fa-4x animate-float"></i>
                                    </div>
                                @endif

                                @if ($project->featured)
                                    <div class="featured-badge">
                                        <span class="badge bg-warning text-dark animate-shimmer">
                                            <i class="fas fa-star"></i> Featured
                                        </span>
                                    </div>
                                @endif

                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title fw-bold">{{ $project->title }}</h4>
                                    <p class="card-text flex-grow-1">{{ $project->description }}</p>

                                    @if ($project->technologies)
                                        <div class="technologies mb-3">
                                            @foreach ($project->technologies as $tech)
                                                <span class="badge bg-secondary me-1 mb-1 animate-on-scroll"
                                                    data-delay="{{ $loop->index * 100 }}">{{ $tech }}</span>
                                            @endforeach
                                        </div>
                                    @endif

                                    <div class="project-links">
                                        @if ($project->url)
                                            <a href="{{ $project->url }}" class="btn btn-primary me-2 mb-2" target="_blank">
                                                <i class="fas fa-external-link-alt"></i> Live Demo
                                            </a>
                                        @endif
                                        @if ($project->github_url)
                                            <a href="{{ $project->github_url }}" class="btn btn-outline-dark mb-2"
                                                target="_blank">
                                                <i class="fab fa-github"></i> View Code
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Sample Projects with Images -->
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <div class="card project-card shadow-lg h-100">
                            <img src="{{ asset('images/portfolio/security.png') }}" class="card-img-top project-image"
                                alt="Laravel Portfolio" style="height: 250px; object-fit: cover;"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="card-img-top bg-gradient-primary d-flex align-items-center justify-content-center text-white"
                                style="height: 250px; display: none;">
                                <i class="fas fa-laptop-code fa-4x"></i>
                            </div>

                            <div class="featured-badge">
                                <span class="badge bg-warning text-dark">
                                    <i class="fas fa-star"></i> Featured
                                </span>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title fw-bold">Laravel Portfolio Website</h4>
                                <p class="card-text flex-grow-1">
                                    A responsive personal portfolio built with Laravel 10, featuring smooth animations,
                                    contact form with validation, and dynamic content management. This project demonstrates
                                    my understanding of MVC architecture, Blade templating, and database integration.
                                </p>

                                <div class="technologies mb-3">
                                    <span class="badge bg-secondary me-1 mb-1">Laravel</span>
                                    <span class="badge bg-secondary me-1 mb-1">PHP</span>
                                    <span class="badge bg-secondary me-1 mb-1">MySQL</span>
                                    <span class="badge bg-secondary me-1 mb-1">Bootstrap</span>
                                    <span class="badge bg-secondary me-1 mb-1">JavaScript</span>
                                </div>

                                <div class="project-links">
                                    <a href="#" class="btn btn-primary me-2 mb-2">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                    <a href="#" class="btn btn-outline-dark mb-2">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="card project-card shadow-lg h-100">
                            <img src="{{ asset('images/portfolio/flutter-weather.jpg') }}"
                                class="card-img-top project-image" alt="Flutter Weather App"
                                style="height: 250px; object-fit: cover;"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="card-img-top bg-gradient-success d-flex align-items-center justify-content-center text-white"
                                style="height: 250px; display: none;">
                                <i class="fas fa-mobile-alt fa-4x"></i>
                            </div>

                            <div class="featured-badge">
                                <span class="badge bg-warning text-dark">
                                    <i class="fas fa-star"></i> Featured
                                </span>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title fw-bold">Flutter Weather App</h4>
                                <p class="card-text flex-grow-1">
                                    My first mobile app built with Flutter and Dart. Features weather forecasts,
                                    location-based data, and offline storage. This project helped me learn
                                    cross-platform mobile development and API integration.
                                </p>

                                <div class="technologies mb-3">
                                    <span class="badge bg-secondary me-1 mb-1">Flutter</span>
                                    <span class="badge bg-secondary me-1 mb-1">Dart</span>
                                    <span class="badge bg-secondary me-1 mb-1">REST API</span>
                                    <span class="badge bg-secondary me-1 mb-1">SQLite</span>
                                    <span class="badge bg-secondary me-1 mb-1">Provider</span>
                                </div>

                                <div class="project-links">
                                    <a href="#" class="btn btn-primary me-2 mb-2">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                    <a href="#" class="btn btn-outline-dark mb-2">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="card project-card shadow-lg h-100">
                            <img src="{{ asset('images/portfolio/react-native-planner.jpg') }}"
                                class="card-img-top project-image" alt="React Native Student Planner"
                                style="height: 250px; object-fit: cover;"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="card-img-top bg-gradient-info d-flex align-items-center justify-content-center text-white"
                                style="height: 250px; display: none;">
                                <i class="fas fa-mobile fa-4x"></i>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title fw-bold">React Native Student Planner</h4>
                                <p class="card-text flex-grow-1">
                                    A student planner mobile app built with React Native and Expo. Features include
                                    task management, class schedules, and grade tracking. Currently learning React
                                    Native for cross-platform development.
                                </p>

                                <div class="technologies mb-3">
                                    <span class="badge bg-secondary me-1 mb-1">React Native</span>
                                    <span class="badge bg-secondary me-1 mb-1">Expo</span>
                                    <span class="badge bg-secondary me-1 mb-1">AsyncStorage</span>
                                    <span class="badge bg-secondary me-1 mb-1">Navigation</span>
                                    <span class="badge bg-secondary me-1 mb-1">Context API</span>
                                </div>

                                <div class="project-links">
                                    <a href="#" class="btn btn-primary me-2 mb-2">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                    <a href="#" class="btn btn-outline-dark mb-2">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="card project-card shadow-lg h-100">
                            <img src="{{ asset('images/portfolio/php-crud-system.jpg') }}"
                                class="card-img-top project-image" alt="PHP CRUD Student Management"
                                style="height: 250px; object-fit: cover;"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="card-img-top bg-gradient-warning d-flex align-items-center justify-content-center text-white"
                                style="height: 250px; display: none;">
                                <i class="fas fa-database fa-4x"></i>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title fw-bold">PHP CRUD Student Management</h4>
                                <p class="card-text flex-grow-1">
                                    A web-based student information system with complete CRUD operations. Built as a
                                    class project using vanilla PHP and MySQL. Features user authentication, data
                                    validation, and responsive design.
                                </p>

                                <div class="technologies mb-3">
                                    <span class="badge bg-secondary me-1 mb-1">PHP</span>
                                    <span class="badge bg-secondary me-1 mb-1">MySQL</span>
                                    <span class="badge bg-secondary me-1 mb-1">HTML5</span>
                                    <span class="badge bg-secondary me-1 mb-1">CSS3</span>
                                    <span class="badge bg-secondary me-1 mb-1">Bootstrap</span>
                                </div>

                                <div class="project-links">
                                    <a href="#" class="btn btn-primary me-2 mb-2">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                    <a href="#" class="btn btn-outline-dark mb-2">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="display-5 fw-bold mb-4">Ready to Build Something Amazing?</h2>
                    <p class="lead mb-4">
                        As a 3rd year BSIT student, I'm eager to take on challenging projects and collaborate
                        with fellow developers. Whether it's mobile app development, web applications, or
                        learning opportunities, let's create something innovative together!
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-paper-plane"></i> Let's Connect
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            border: none;
            overflow: hidden;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
        }

        .project-image {
            transition: transform 0.3s ease;
        }

        .project-card:hover .project-image {
            transform: scale(1.05);
        }

        .featured-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 10;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .bg-gradient-success {
            background: linear-gradient(135deg, #56ab2f 0%, #a8e6cf 100%);
        }

        .bg-gradient-info {
            background: linear-gradient(135deg, #3498db 0%, #85c1e9 100%);
        }

        .bg-gradient-warning {
            background: linear-gradient(135deg, #f39c12 0%, #f8c471 100%);
        }

        .technologies .badge {
            font-size: 0.75rem;
        }

        .project-links .btn {
            font-size: 0.9rem;
        }
    </style>
@endpush
