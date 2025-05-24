@extends('layouts.app')

@section('title', 'Skills - Mike Carasco Portfolio')

@section('content') <div class="page-header bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center animate-on-scroll">
                    <h1 class="display-4 fw-bold mb-3 animate-fadeInUp">My Skills</h1>
                    <p class="lead animate-on-scroll" data-delay="200">Technologies I'm learning for mobile and web
                        development</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5 animate-on-scroll">
                    <h2 class="display-5 fw-bold">Technical Skills</h2>
                    <p class="lead">Programming languages, frameworks, and technologies for mobile & web development</p>
                </div>
            </div>

            @if ($skills->where('category', 'technical')->count() > 0)
                <div class="row stagger-container">
                    @foreach ($skills->where('category', 'technical') as $skill)
                        <div class="col-lg-6 mb-4 stagger-item">
                            <div class="skill-item card-hover">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="mb-0 skill-title">
                                        @if ($skill->icon)
                                            <i class="{{ $skill->icon }} me-2 skill-icon"></i>
                                        @endif
                                        {{ $skill->name }}
                                    </h5> <span class="badge bg-primary counter skill-badge"
                                        data-target="{{ $skill->proficiency }}">
                                        0%
                                    </span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="{{ $skill->proficiency }}" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">
                                    <i class="fab fa-laravel me-2 text-danger"></i>
                                    Laravel
                                </h5>
                                <span class="badge bg-primary">90%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">
                                    <i class="fab fa-php me-2 text-primary"></i>
                                    PHP
                                </h5>
                                <span class="badge bg-primary">85%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">
                                    <i class="fab fa-js-square me-2 text-warning"></i>
                                    JavaScript
                                </h5>
                                <span class="badge bg-primary">80%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">
                                    <i class="fab fa-vue me-2 text-success"></i>
                                    Vue.js
                                </h5>
                                <span class="badge bg-primary">75%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">
                                    <i class="fas fa-database me-2 text-info"></i>
                                    MySQL
                                </h5>
                                <span class="badge bg-primary">85%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">
                                    <i class="fab fa-git-alt me-2 text-danger"></i>
                                    Git
                                </h5>
                                <span class="badge bg-primary">80%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100">
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
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 fw-bold">Soft Skills</h2>
                    <p class="lead">Personal attributes and interpersonal abilities</p>
                </div>
            </div>

            @if ($skills->where('category', 'soft')->count() > 0)
                <div class="row">
                    @foreach ($skills->where('category', 'soft') as $skill)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card text-center h-100 shadow-sm">
                                <div class="card-body">
                                    @if ($skill->icon)
                                        <i class="{{ $skill->icon }} fa-3x text-primary mb-3"></i>
                                    @endif
                                    <h5 class="card-title">{{ $skill->name }}</h5>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: {{ $skill->proficiency }}%"
                                            aria-valuenow="{{ $skill->proficiency }}" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small class="text-muted">{{ $skill->proficiency }}%</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card text-center h-100 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-comments fa-3x text-primary mb-3"></i>
                                <h5 class="card-title">Communication</h5>
                                <div class="progress mb-2" style="height: 8px;">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <small class="text-muted">90%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card text-center h-100 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-users fa-3x text-success mb-3"></i>
                                <h5 class="card-title">Teamwork</h5>
                                <div class="progress mb-2" style="height: 8px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <small class="text-muted">85%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card text-center h-100 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-lightbulb fa-3x text-warning mb-3"></i>
                                <h5 class="card-title">Problem Solving</h5>
                                <div class="progress mb-2" style="height: 8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 88%"
                                        aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <small class="text-muted">88%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card text-center h-100 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-clock fa-3x text-info mb-3"></i>
                                <h5 class="card-title">Time Management</h5>
                                <div class="progress mb-2" style="height: 8px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 82%"
                                        aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <small class="text-muted">82%</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="display-5 fw-bold mb-4">Tools & Technologies</h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row text-center">
                                <div class="col-lg-3 col-md-4 col-6 mb-4">
                                    <i class="fas fa-mobile-alt fa-3x text-primary mb-2"></i>
                                    <p class="mb-0">Flutter</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-4">
                                    <i class="fab fa-react fa-3x text-info mb-2"></i>
                                    <p class="mb-0">React Native</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-4">
                                    <i class="fab fa-android fa-3x text-success mb-2"></i>
                                    <p class="mb-0">Android Studio</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-4">
                                    <i class="fas fa-fire fa-3x text-warning mb-2"></i>
                                    <p class="mb-0">Firebase</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-4">
                                    <i class="fab fa-html5 fa-3x text-danger mb-2"></i>
                                    <p class="mb-0">HTML5</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-4">
                                    <i class="fab fa-css3-alt fa-3x text-primary mb-2"></i>
                                    <p class="mb-0">CSS3</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-4">
                                    <i class="fab fa-js-square fa-3x text-warning mb-2"></i>
                                    <p class="mb-0">JavaScript</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-4">
                                    <i class="fab fa-node-js fa-3x text-success mb-2"></i>
                                    <p class="mb-0">Node.js</p>
                                </div>
                            </div>
                        </div>
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

        .skill-item {
            padding: 1.5rem;
            border-radius: 15px;
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(102, 126, 234, 0.1);
            position: relative;
            overflow: hidden;
        }

        .skill-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .skill-item:hover::before {
            left: 100%;
        }

        .skill-item:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
            border-color: rgba(102, 126, 234, 0.3);
            background: linear-gradient(145deg, #ffffff 0%, #f0f4ff 100%);
        }

        .skill-item:hover .skill-icon {
            transform: scale(1.3) rotate(10deg);
            color: #667eea !important;
        }

        .skill-item:hover .skill-title {
            color: #667eea;
            font-weight: 700;
        }

        .skill-item:hover .skill-badge {
            transform: scale(1.15);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.5);
        }

        .skill-item:hover .progress-bar {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .progress-bar {
            transition: width 1s ease-in-out;
        }

        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .text-purple {
            color: #6f42c1 !important;
        }

        .text-pink {
            color: #e83e8c !important;
        }

        /* Custom color classes for skill icons */
        .skill-icon.text-primary {
            color: #007bff !important;
        }

        .skill-icon.text-info {
            color: #17a2b8 !important;
        }

        .skill-icon.text-warning {
            color: #ffc107 !important;
        }

        .skill-icon.text-danger {
            color: #dc3545 !important;
        }

        .skill-icon.text-purple {
            color: #6f42c1 !important;
        }

        /* Animation Classes */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .animate-on-scroll.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .stagger-container .stagger-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .stagger-container .stagger-item.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        /* Enhanced Progress Bar Styling */
        .progress {
            background-color: #e9ecef;
            border-radius: 12px;
            overflow: hidden;
            height: 10px;
            margin-top: 1rem;
        }

        .progress-bar {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            transition: all 1.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-radius: 12px;
            position: relative;
            box-shadow: 0 2px 8px rgba(102, 126, 234, 0.3);
        }

        .progress-bar::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
            animation: shimmer 2s ease-in-out infinite;
        }

        @keyframes shimmer {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        /* Improved Badge Styling for Better Readability */
        .badge.counter {
            font-size: 0.85rem;
            font-weight: 600;
            padding: 0.5rem 0.75rem;
            border-radius: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            color: white !important;
            border: 2px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 2px 8px rgba(102, 126, 234, 0.3);
            min-width: 60px;
            text-align: center;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .badge.counter:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }

        /* Skill item improvements */
        .skill-item h5 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 0;
        }

        .skill-item .progress {
            margin-top: 0.75rem;
        }

        /* Enhanced Icon and Title Styling */
        .skill-icon {
            font-size: 1.4rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: inline-block;
        }

        .skill-title {
            transition: all 0.3s ease;
            font-weight: 600;
            color: #2d3748;
        }

        /* Enhanced Badge Styling for Better Readability and Eye-catching Effects */
        .badge.skill-badge {
            font-size: 0.9rem;
            font-weight: 700;
            padding: 0.6rem 1rem;
            border-radius: 25px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            color: white !important;
            border: 2px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            min-width: 70px;
            text-align: center;
            letter-spacing: 0.8px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .badge.skill-badge::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.4s ease;
        }

        .badge.skill-badge:hover::before {
            width: 200%;
            height: 200%;
        }

        /* Percentage icon styling within badges */
        .badge.skill-badge .fas.fa-percentage {
            font-size: 0.75rem;
            opacity: 0.9;
            transition: all 0.3s ease;
            margin-right: 4px;
            filter: drop-shadow(0 0 2px rgba(255, 255, 255, 0.3));
        }

        .badge.skill-badge:hover .fas.fa-percentage {
            opacity: 1;
            transform: scale(1.1);
            filter: drop-shadow(0 0 4px rgba(255, 255, 255, 0.5));
        }

        /* Enhanced badge animation with percentage icon */
        .badge.skill-badge:hover {
            animation: badgePulse 1.5s ease-in-out infinite;
        }

        @keyframes badgePulse {

            0%,
            100% {
                box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            }

            50% {
                box-shadow: 0 6px 25px rgba(102, 126, 234, 0.6);
            }
        }

        /* Responsive badge sizing */
        @media (max-width: 768px) {
            .badge.skill-badge {
                font-size: 0.75rem;
                padding: 0.4rem 0.6rem;
                min-width: 50px;
            }
        }

        /* Additional Eye-catching Hover Effects */
        .skill-item:hover .progress {
            transform: scale(1.02);
        }

        /* Glowing effect for skill icons on hover */
        .skill-item:hover .skill-icon.text-primary {
            text-shadow: 0 0 15px rgba(0, 123, 255, 0.6);
        }

        .skill-item:hover .skill-icon.text-info {
            text-shadow: 0 0 15px rgba(23, 162, 184, 0.6);
        }

        .skill-item:hover .skill-icon.text-warning {
            text-shadow: 0 0 15px rgba(255, 193, 7, 0.6);
        }

        .skill-item:hover .skill-icon.text-danger {
            text-shadow: 0 0 15px rgba(220, 53, 69, 0.6);
        }

        /* Pulse animation for progress bars when hovered */
        .skill-item:hover .progress-bar {
            animation: progressPulse 1.5s ease-in-out infinite;
        }

        @keyframes progressPulse {

            0%,
            100% {
                box-shadow: 0 2px 8px rgba(102, 126, 234, 0.3);
            }

            50% {
                box-shadow: 0 4px 20px rgba(102, 126, 234, 0.6);
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize animations
            initializeAnimations();
            setupScrollAnimations();
            setupStaggerAnimations();
        });

        function initializeAnimations() {
            // Animate progress bars and counters when page loads
            setTimeout(() => {
                animateSkills();
            }, 800);
        }

        function animateSkills() {
            // Animate progress bars
            const progressBars = document.querySelectorAll('.progress-bar');
            progressBars.forEach((bar, index) => {
                setTimeout(() => {
                    const target = bar.getAttribute('aria-valuenow');
                    bar.style.width = target + '%';
                }, index * 100); // Stagger the animations
            }); // Animate counter badges that have data-target attribute
            const counters = document.querySelectorAll('.counter, .skill-badge');
            counters.forEach((counter, index) => {
                // Only animate if the counter element actually exists and has a data-target
                if (counter && counter.hasAttribute('data-target')) {
                    setTimeout(() => {
                        animateCounter(counter);
                    }, index * 100);
                }
            });
        }

        function animateCounter(counter) {
            const target = parseInt(counter.getAttribute('data-target'));
            let current = 0;
            const increment = target / 60; // Smooth animation

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                counter.innerHTML = '<i class="fas fa-percentage me-1"></i>' + Math.floor(current) + '%';
            }, 25);
        }

        function setupScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -20px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                    }
                });
            }, observerOptions);

            // Observe elements with animate-on-scroll class
            const animateElements = document.querySelectorAll('.animate-on-scroll');
            animateElements.forEach(element => {
                observer.observe(element);
            });
        }

        function setupStaggerAnimations() {
            const staggerContainers = document.querySelectorAll('.stagger-container');

            staggerContainers.forEach(container => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const items = entry.target.querySelectorAll('.stagger-item');
                            items.forEach((item, index) => {
                                setTimeout(() => {
                                    item.classList.add(
                                        'animate'
                                    ); // Trigger skill animations when item becomes visible
                                    const progressBar = item.querySelector(
                                        '.progress-bar');
                                    const counter = item.querySelector(
                                        '.counter, .skill-badge');
                                    if (progressBar && !progressBar.classList
                                        .contains('animated')) {
                                        progressBar.classList.add('animated');
                                        const target = progressBar.getAttribute(
                                            'aria-valuenow');
                                        setTimeout(() => {
                                            progressBar.style.width =
                                                target + '%';
                                        }, 200);
                                    } // Animate counters that have data-target attribute
                                    if (counter && counter.hasAttribute(
                                            'data-target') &&
                                        (counter.textContent === '0' ||
                                            counter.textContent === '0%' || counter
                                            .textContent.includes('0%'))) {
                                        setTimeout(() => {
                                            animateCounter(counter);
                                        }, 300);
                                    }
                                }, index * 150); // Stagger delay
                            });
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.2,
                    rootMargin: '0px 0px -50px 0px'
                });

                observer.observe(container);
            });
        }

        // Add smooth hover effects
        document.addEventListener('DOMContentLoaded', function() {
            const skillItems = document.querySelectorAll('.skill-item');
            skillItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });

                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
@endpush
