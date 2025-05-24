@extends('layouts.app')

@section('title', 'About Me - Mike Carasco Portfolio')

@section('content') <div class="page-header bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center animate-on-scroll">
                    <h1 class="display-4 fw-bold mb-3 animate-fadeInUp">About Me</h1>
                    <p class="lead animate-on-scroll" data-delay="200">Get to know the person behind the code</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 animate-on-scroll" data-delay="300">
                    <img src="{{ asset('images/about.png') }}" alt="Mike Carasco"
                        class="img-fluid rounded shadow animate-image animate-float">
                </div>
                <div class="col-lg-6 mb-4 animate-on-scroll" data-delay="400">
                    <h2 class="h1 fw-bold mb-4">Hello, I'm Mike Carasco</h2>
                    <p class="lead mb-4 animate-on-scroll" data-delay="500">
                        A passionate 3rd year BSIT student specializing in mobile app and web development,
                        dedicated to creating innovative digital solutions and learning cutting-edge technologies.
                    </p>
                    <p class="mb-4 animate-on-scroll" data-delay="600">
                        I'm currently pursuing my Bachelor of Science in Information Technology with a focus on
                        mobile and web development. My journey includes mastering Flutter and React Native for
                        mobile apps, alongside Laravel, PHP, and JavaScript for robust web applications.
                    </p>
                    <p class="mb-4 animate-on-scroll" data-delay="700">
                        Beyond academics, I actively work on personal projects that challenge my skills and
                        expand my knowledge. I'm particularly interested in cross-platform development and
                        creating user-friendly applications that solve real-world problems.
                    </p>
                    <div class="d-flex gap-3 animate-on-scroll" data-delay="800">
                        <a href="{{ asset('files/Mike-Carasco-Resume.pdf') }}" class="btn btn-primary btn-animated"
                            target="_blank">
                            <i class="fas fa-download"></i> Download CV
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-animated">
                            <i class="fas fa-envelope"></i> Contact Me
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5 animate-on-scroll">
                    <h2 class="display-5 fw-bold">Education</h2>
                    <p class="lead">My academic journey</p>
                </div>
            </div>
            <div class="row stagger-container">
                <div class="col-lg-6 mb-4 stagger-item">
                    <div class="card shadow-sm h-100 card-hover">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-graduation-cap fa-2x text-primary me-3 animate-pulse"></i>
                                <div>
                                    <h4 class="mb-1">Bachelor of Science in Information Technology</h4>
                                    <p class="text-muted mb-0">University Name</p>
                                </div>
                            </div>
                            <p class="text-muted mb-2">2022 - Present (3rd Year)</p>
                            <p class="mb-0">
                                Currently pursuing a BSIT degree specializing in mobile app and web development.
                                Focus areas include cross-platform mobile development (Flutter, React Native),
                                full-stack web development (Laravel, JavaScript), and modern software engineering practices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 stagger-item">
                    <div class="card shadow-sm h-100 card-hover">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-utensils fa-2x text-success me-3 animate-pulse"></i>
                                <div>
                                    <h4 class="mb-1">Senior High School - Cookery Strand</h4>
                                    <p class="text-muted mb-0">Luna National High School</p>
                                </div>
                            </div>
                            <p class="text-muted mb-2">2020 - 2022</p>
                            <p class="mb-0">
                                Graduated from Cookery strand, where I developed skills in
                                culinary arts and food service management. This experience taught me
                                discipline, creativity, and attention to detail, which later inspired
                                my transition to technology and programming.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5 animate-on-scroll">
                    <h2 class="display-5 fw-bold">Hobbies & Interests</h2>
                    <p class="lead">What I enjoy doing in my free time</p>
                </div>
            </div>
            <div class="row stagger-container">
                <div class="col-lg-3 col-md-6 mb-4 stagger-item">
                    <div class="text-center hover-lift">
                        <div class="hobby-icon bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center animate-float"
                            style="width: 80px; height: 80px;">
                            <i class="fas fa-mobile-alt fa-2x"></i>
                        </div>
                        <h5>Mobile Development</h5>
                        <p class="text-muted">Exploring mobile app development with Flutter and React Native</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 stagger-item">
                    <div class="text-center hover-lift">
                        <div class="hobby-icon bg-success text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center animate-float"
                            style="width: 80px; height: 80px;">
                            <i class="fas fa-dumbbell fa-2x"></i>
                        </div>
                        <h5>Tech Innovation</h5>
                        <p class="text-muted">Staying updated with latest tech trends and emerging technologies</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 stagger-item">
                    <div class="text-center hover-lift">
                        <div class="hobby-icon bg-warning text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center animate-float"
                            style="width: 80px; height: 80px;">
                            <i class="fas fa-code fa-2x"></i>
                        </div>
                        <h5>Learning New Technologies</h5>
                        <p class="text-muted">Continuously exploring new programming languages, frameworks, and development
                            tools</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 stagger-item">
                    <div class="text-center hover-lift">
                        <div class="hobby-icon bg-info text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center animate-float"
                            style="width: 80px; height: 80px;">
                            <i class="fas fa-gamepad fa-2x"></i>
                        </div>
                        <h5>UI/UX Design</h5>
                        <p class="text-muted">Learning design principles and creating user-friendly interfaces</p>
                    </div>
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

        .hobby-icon {
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transform: translateZ(0);
            backface-visibility: hidden;
        }

        .hobby-icon:hover {
            transform: scale(1.15) rotate(5deg);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .card {
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transform: translateZ(0);
            backface-visibility: hidden;
        }

        .card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Add smooth animation delays */
        .animate-on-scroll[data-delay="100"] {
            animation-delay: 0.1s;
        }

        .animate-on-scroll[data-delay="200"] {
            animation-delay: 0.2s;
        }

        .animate-on-scroll[data-delay="300"] {
            animation-delay: 0.3s;
        }

        .animate-on-scroll[data-delay="400"] {
            animation-delay: 0.4s;
        }

        .animate-on-scroll[data-delay="500"] {
            animation-delay: 0.5s;
        }

        .animate-on-scroll[data-delay="600"] {
            animation-delay: 0.6s;
        }

        .animate-on-scroll[data-delay="700"] {
            animation-delay: 0.7s;
        }

        .animate-on-scroll[data-delay="800"] {
            animation-delay: 0.8s;
        }
    </style>
@endpush
