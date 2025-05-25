@extends('layouts.app')

@section('title', 'Portfolio - Mike Carasco Portfolio')

@section('content')
    <!-- Page Header -->
    <div class="page-header bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center animate-on-scroll">
                    <h1 class="display-4 fw-bold mb-3 animate-fadeInUp">My Portfolio</h1>
                    <p class="lead animate-on-scroll" data-delay="200">My journey in mobile app and web development</p>
                </div>
            </div>
        </div>
    </div>    <!-- Portfolio Projects Section -->
    <section class="py-5 portfolio-section">
        <div class="container">
            <div class="row">
                <!-- Security Management System -->
                <div class="col-lg-6 mb-5">
                    <div class="card project-card shadow-lg h-100">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio/security.png') }}"
                                class="card-img-top project-image" alt="Security Management System"
                                style="width: 100%; height: auto; max-height: 400px; object-fit: contain; background: #f8f9fa;">
                            <div class="image-overlay">
                                <i class="fas fa-search-plus"></i>
                                <span>Click to enlarge</span>
                            </div>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title fw-bold">Security Management System</h4>
                            <p class="card-text flex-grow-1">
                                A comprehensive security management platform built with Laravel that provides robust
                                user authentication, role-based access control, and real-time monitoring capabilities.
                                Features include incident reporting, visitor management, and security analytics dashboard.
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

                <!-- Calculator App with Trifold Layout -->
                <div class="col-lg-6 mb-5">
                    <div class="card project-card shadow-lg h-100">
                        <div class="image-container">
                            <!-- Calculator Trifold Screenshot Layout -->
                            <div class="trifold-container">
                                <div class="mobile-screenshots">
                                    <div class="screenshot-frame">
                                        <img src="{{ asset('images/portfolio/calcu1.png') }}" 
                                             alt="Calculator App Screen 1" class="mobile-screenshot project-image">
                                    </div>
                                    <div class="screenshot-frame">
                                        <img src="{{ asset('images/portfolio/calcu2.png') }}" 
                                             alt="Calculator App Screen 2" class="mobile-screenshot project-image">
                                    </div>
                                    <div class="screenshot-frame">
                                        <img src="{{ asset('images/portfolio/calcu3.png') }}" 
                                             alt="Calculator App Screen 3" class="mobile-screenshot project-image">
                                    </div>
                                </div>
                            </div>
                            <div class="image-overlay">
                                <i class="fas fa-calculator"></i>
                                <span>View Calculator Screenshots</span>
                            </div>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title fw-bold">Advanced Calculator App</h4>
                            <p class="card-text flex-grow-1">
                                A feature-rich calculator application with scientific functions, history tracking, and
                                advanced mathematical operations. Built with modern mobile development frameworks,
                                featuring intuitive UI design and responsive layout for optimal user experience.
                            </p>

                            <div class="technologies mb-3">
                                <span class="badge bg-secondary me-1 mb-1">Flutter</span>
                                <span class="badge bg-secondary me-1 mb-1">Dart</span>
                                <span class="badge bg-secondary me-1 mb-1">Material Design</span>
                                <span class="badge bg-secondary me-1 mb-1">State Management</span>
                                <span class="badge bg-secondary me-1 mb-1">Animation</span>
                            </div>

                            <div class="project-links">
                                <a href="#" class="btn btn-primary me-2 mb-2">
                                    <i class="fab fa-google-play"></i> Play Store
                                </a>
                                <a href="#" class="btn btn-outline-dark mb-2">
                                    <i class="fab fa-github"></i> View Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Festival Website -->
                <div class="col-lg-6 mb-5">
                    <div class="card project-card shadow-lg h-100">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio/fest.png') }}"
                                class="card-img-top project-image" alt="Festival Website"
                                style="width: 100%; height: auto; max-height: 400px; object-fit: contain; background: #f8f9fa;">
                            <div class="image-overlay">
                                <i class="fas fa-search-plus"></i>
                                <span>Click to enlarge</span>
                            </div>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title fw-bold">Festival Event Website</h4>
                            <p class="card-text flex-grow-1">
                                A dynamic festival event website featuring event scheduling, ticket booking system,
                                artist lineup showcase, and interactive venue maps. Built with modern web technologies
                                to provide an engaging user experience for festival attendees.
                            </p>

                            <div class="technologies mb-3">
                                <span class="badge bg-secondary me-1 mb-1">Laravel</span>
                                <span class="badge bg-secondary me-1 mb-1">Vue.js</span>
                                <span class="badge bg-secondary me-1 mb-1">MySQL</span>
                                <span class="badge bg-secondary me-1 mb-1">Stripe API</span>
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

                <!-- Foster Websites Platform -->
                <div class="col-lg-6 mb-5">
                    <div class="card project-card shadow-lg h-100">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio/foster-websites.png') }}"
                                class="card-img-top project-image" alt="Foster Websites Platform"
                                style="width: 100%; height: auto; max-height: 400px; object-fit: contain; background: #f8f9fa;">
                            <div class="image-overlay">
                                <i class="fas fa-search-plus"></i>
                                <span>Click to enlarge</span>
                            </div>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title fw-bold">Foster Websites Platform</h4>
                            <p class="card-text flex-grow-1">
                                A dynamic website builder platform that helps foster care organizations create
                                professional websites. Features include drag-and-drop editor, content management,
                                and responsive templates designed specifically for social services.
                            </p>

                            <div class="technologies mb-3">
                                <span class="badge bg-secondary me-1 mb-1">Laravel</span>
                                <span class="badge bg-secondary me-1 mb-1">Vue.js</span>
                                <span class="badge bg-secondary me-1 mb-1">MySQL</span>
                                <span class="badge bg-secondary me-1 mb-1">Bootstrap</span>
                                <span class="badge bg-secondary me-1 mb-1">jQuery</span>
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
        </div>
    </section>

    <!-- Call to Action Section -->
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

    <!-- Image Modal -->
    <div id="imageModal" class="image-modal">
        <span class="close-modal">&times;</span>
        <img class="modal-content-image" id="modalImage" alt="Enlarged project image">
    </div>
@endsection

@push('styles')
    <style>
        /* Page Header Styles */
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        /* Project Card Styles */
        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            border: none;
            overflow: hidden;
            border-radius: 15px;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
        }

        /* Image Container Styles */
        .image-container {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .image-overlay i {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .image-container:hover .image-overlay {
            opacity: 1;
        }

        .project-image {
            transition: transform 0.3s ease;
        }

        .image-container:hover .project-image {
            transform: scale(1.05);
        }

        /* Trifold Layout Styles */
        .trifold-container {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            padding: 30px 20px;
            min-height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .mobile-screenshots {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            perspective: 1000px;
        }

        .screenshot-frame {
            position: relative;
            transition: transform 0.4s ease;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3));
        }

        .screenshot-frame:first-child {
            transform: perspective(1000px) rotateY(15deg);
        }

        .screenshot-frame:last-child {
            transform: perspective(1000px) rotateY(-15deg);
        }

        .mobile-screenshot {
            width: 120px;
            height: 240px;
            object-fit: cover;
            border-radius: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            background: white;
        }

        /* Hover Effects for Trifold */
        .trifold-container:hover .screenshot-frame {
            transform: perspective(1000px) rotateY(0deg) scale(1.05);
        }

        .trifold-container:hover .screenshot-frame:first-child {
            transform: perspective(1000px) rotateY(5deg) scale(1.05);
        }

        .trifold-container:hover .screenshot-frame:last-child {
            transform: perspective(1000px) rotateY(-5deg) scale(1.05);
        }

        /* Technology Badges */
        .technologies .badge {
            font-size: 0.8rem;
            padding: 0.5em 0.8em;
        }

        /* Project Links */
        .project-links .btn {
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .project-links .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Modal Styles */
        .image-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(5px);
        }

        .modal-content-image {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 95%;
            max-height: 95%;
            border-radius: 10px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            z-index: 10000;
            transition: opacity 0.3s ease;
        }

        .close-modal:hover {
            opacity: 0.7;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mobile-screenshot {
                width: 80px;
                height: 160px;
            }
            
            .trifold-container {
                padding: 20px 15px;
                min-height: 200px;
            }

            .mobile-screenshots {
                gap: 8px;
            }
        }

        @media (max-width: 576px) {
            .mobile-screenshot {
                width: 60px;
                height: 120px;
            }

            .trifold-container {
                padding: 15px 10px;
                min-height: 150px;
            }
        }

        /* Animation Classes */
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
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
        }        /* Smooth transitions for specific portfolio elements only */
        .portfolio-section .project-card,
        .portfolio-section .project-image,
        .portfolio-section .image-overlay,
        .portfolio-section .screenshot-frame,
        .portfolio-section .btn {
            transition: all 0.3s ease;
        }

        /* Ensure navbar and header elements are not affected by portfolio animations */
        .navbar,
        .navbar *,
        .page-header,
        .page-header * {
            transition: none !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Modal functionality
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const closeBtn = document.querySelector('.close-modal');
            const projectImages = document.querySelectorAll('.project-image');

            // Add click event to all project images
            projectImages.forEach(function(image) {
                image.addEventListener('click', function() {
                    modal.style.display = 'block';
                    modalImg.src = this.src;
                    modalImg.alt = this.alt;
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                });
            });

            // Close modal when clicking the X
            closeBtn.addEventListener('click', function() {
                closeModal();
            });

            // Close modal when clicking outside the image
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.style.display === 'block') {
                    closeModal();
                }
            });

            function closeModal() {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto'; // Restore scrolling
            }            // Animate cards on scroll - only target portfolio cards specifically
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe only project cards within the portfolio section
            document.querySelectorAll('.portfolio-section .project-card').forEach(function(card) {
                card.style.opacity = '0';
                card.style.transform = 'translateY(50px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
@endpush