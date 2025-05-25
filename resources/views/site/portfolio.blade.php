@extends('layouts.app')

@section('title', 'Portfolio - Mike Carasco Portfolio')

@section('content') <!-- Page Header -->
    <div class="page-header bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center header-content">
                    <h1 class="display-4 fw-bold mb-3 animate-fadeInUp">My Portfolio</h1>
                    <p class="lead header-subtitle" data-delay="200">My journey in mobile app and web development</p>
                </div>
            </div>
        </div>
    </div><!-- Portfolio Projects Section -->
    <section class="py-5 portfolio-section">
        <div class="container">
            <div class="row"> <!-- Security Management System -->
                <div class="col-lg-6 mb-5">
                    <div class="card project-card shadow-lg h-100">
                        <div class="image-container">
                            <!-- Security Trifold Screenshot Layout -->
                            <div class="trifold-container security-trifold">
                                <div class="security-screenshots">
                                    <div class="screenshot-frame">
                                        <img src="{{ asset('images/portfolio/security1.png') }}"
                                            alt="Security Management System Screen 1"
                                            class="security-screenshot project-image">
                                    </div>
                                    <div class="screenshot-frame">
                                        <img src="{{ asset('images/portfolio/security2.png') }}"
                                            alt="Security Management System Screen 2"
                                            class="security-screenshot project-image">
                                    </div>
                                    <div class="screenshot-frame">
                                        <img src="{{ asset('images/portfolio/security3.png') }}"
                                            alt="Security Management System Screen 3"
                                            class="security-screenshot project-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title fw-bold">Passwordless Security App</h4>
                            <p class="card-text flex-grow-1">
                                An innovative security application featuring passwordless authentication and temporary
                                username
                                generation for enhanced user privacy and security. Built with flutter and firebase, this app
                                eliminates
                                traditional password vulnerabilities while providing seamless user experience through secure
                                authentication methods and dynamic username management.
                            </p>

                            <div class="technologies mb-3">
                                <span class="badge bg-secondary me-1 mb-1">Flutter</span>
                                <span class="badge bg-secondary me-1 mb-1">Firebase</span>
                                <span class="badge bg-secondary me-1 mb-1">OTP</span>
                                <span class="badge bg-secondary me-1 mb-1">Math</span>
                                <span class="badge bg-secondary me-1 mb-1">Dart</span>
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
                                        <img src="{{ asset('images/portfolio/calcu1.png') }}" alt="Calculator App Screen 1"
                                            class="mobile-screenshot project-image" data-project="calculator"
                                            data-index="1">
                                    </div>
                                    <div class="screenshot-frame">
                                        <img src="{{ asset('images/portfolio/calcu2.png') }}" alt="Calculator App Screen 2"
                                            class="mobile-screenshot project-image" data-project="calculator"
                                            data-index="2">
                                    </div>
                                    <div class="screenshot-frame">
                                        <img src="{{ asset('images/portfolio/calcu3.png') }}" alt="Calculator App Screen 3"
                                            class="mobile-screenshot project-image" data-project="calculator"
                                            data-index="3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title fw-bold">3D Geometric Calculator</h4>
                            <p class="card-text flex-grow-1">
                                A specialized 3D geometry calculator application that computes volume, surface area, and
                                other
                                properties for geometric shapes including spheres, cubes, cylinders, and cones. Built with
                                Flutter, featuring precise mathematical calculations, and an
                                intuitive interface for educational and professional use.
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
                </div> <!-- Photography Services Website -->
                <div class="col-lg-6 mb-5">
                    <div class="card project-card shadow-lg h-100">
                        <div class="image-container">
                            <!-- Photography Full-Screen 3-Image Showcase -->
                            <div class="fullscreen-showcase photography-showcase">
                                <div class="showcase-grid">
                                    <div class="main-showcase">

                                        <img src="{{ asset('images/portfolio/photography1.png') }}"
                                            alt="Photography Services Main View" class="main-showcase-image project-image"
                                            data-project="photography" data-index="1">
                                    </div>
                                    <div class="side-showcases">
                                        <div class="side-showcase top-showcase">
                                            <img src="{{ asset('images/portfolio/photography2.png') }}"
                                                alt="Photography Gallery View" class="side-showcase-image project-image"
                                                data-project="photography" data-index="2">
                                        </div>
                                        <div class="side-showcase bottom-showcase">
                                            <img src="{{ asset('images/portfolio/photography3.png') }}"
                                                alt="Photography Contact View" class="side-showcase-image project-image"
                                                data-project="photography" data-index="3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title fw-bold">Photography Services Website</h4>
                            <p class="card-text flex-grow-1">
                                A stunning photography portfolio website featuring responsive galleries, client booking
                                system,
                                and dynamic image showcases. Built with modern web technologies to display high-quality
                                photography work with elegant user experience and seamless navigation.
                            </p>

                            <div class="technologies mb-3">
                                <span class="badge bg-secondary me-1 mb-1">Html</span>
                                <span class="badge bg-secondary me-1 mb-1">Bootstrap</span>
                                <span class="badge bg-secondary me-1 mb-1">Image Processing</span>
                                <span class="badge bg-secondary me-1 mb-1">Modal</span>
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
                </div> <!-- Foster Websites Platform -->
                <div class="col-lg-6 mb-5">
                    <div class="card project-card shadow-lg h-100">
                        <div class="image-container">
                            <!-- Foster Websites Full-Screen 3-Image Showcase -->
                            <div class="fullscreen-showcase foster-showcase">
                                <div class="showcase-grid">
                                    <div class="main-showcase">
                                        <img src="{{ asset('images/portfolio/foster1.png') }}"
                                            alt="Foster Websites Platform Homepage"
                                            class="main-showcase-image project-image" data-project="foster"
                                            data-index="1">
                                    </div>
                                    <div class="side-showcases">
                                        <div class="side-showcase top-showcase">
                                            <img src="{{ asset('images/portfolio/foster2.png') }}"
                                                alt="Foster Websites Mobile View"
                                                class="side-showcase-image project-image" data-project="foster"
                                                data-index="2">
                                        </div>
                                        <div class="side-showcase bottom-showcase">
                                            <img src="{{ asset('images/portfolio/foster3.png') }}"
                                                alt="Foster Websites Admin Dashboard"
                                                class="side-showcase-image project-image" data-project="foster"
                                                data-index="3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title fw-bold">Animal Foster Care Platform</h4>
                            <p class="card-text flex-grow-1">
                                A comprehensive website platform specifically designed for animal foster care organizations
                                and animal rescue services. Features pet profile management, adoption matching system,
                                volunteer coordination tools, and donation tracking. Built to help connect rescued animals
                                with loving foster families and permanent homes through an intuitive web interface.
                            </p>

                            <div class="technologies mb-3">
                                <span class="badge bg-secondary me-1 mb-1">Html</span>
                                <span class="badge bg-secondary me-1 mb-1">MySQL</span>
                                <span class="badge bg-secondary me-1 mb-1">Bootstrap</span>
                                <span class="badge bg-secondary me-1 mb-1">Responsive Design</span>
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

        /* Page Header Animation Styles */
        .header-content h1 {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .header-subtitle {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out 0.2s forwards;
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

        .project-image {
            transition: transform 0.3s ease;
        }

        .image-container:hover .project-image {
            transform: scale(1.05);
        }

        /* Trifold Layout Styles - Enhanced for readability with larger container */
        .trifold-container {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            padding: 40px 30px;
            min-height: 360px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: transform 0.3s ease;
            border-radius: 20px;
        }

        .trifold-container:hover {
            transform: scale(1.02);
        }

        /* Security Trifold - Different gradient */
        .security-trifold {
            background: linear-gradient(135deg, #1e40af 0%, #3730a3 100%);
        }

        /* Festival Trifold - Vibrant gradient */
        .festival-trifold {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }

        /* Photography Trifold - Purple gradient for website showcase */
        .photography-trifold {
            background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%);
        }

        /* Foster Websites Trifold - Green gradient */
        .foster-trifold {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
        }

        /* ============================
                                           FULL-SCREEN SHOWCASE STYLES
                                           ============================
                                           Specialized layout for website projects (3rd & 4th portfolio items)
                                           Features large main image with two smaller side images
                                        */

        .fullscreen-showcase {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 25px;
            min-height: 420px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: transform 0.3s ease;
            border-radius: 20px;
            overflow: hidden;
        }

        .fullscreen-showcase:hover {
            transform: scale(1.02);
        }

        /* Photography showcase - Purple gradient */
        .photography-showcase {
            background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%);
        }

        /* Foster showcase - Green gradient */
        .foster-showcase {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
        }

        .showcase-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            width: 100%;
            height: 100%;
            max-width: 600px;
        }

        .main-showcase {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            background: #fff;
            padding: 8px;
        }

        .main-showcase:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .showcase-overlay {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 10;
            opacity: 0.95;
        }

        .project-badge {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 600;
            text-shadow: none;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .main-showcase-image {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .main-showcase:hover .main-showcase-image {
            transform: scale(1.05);
        }

        .side-showcases {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .side-showcase {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            background: #fff;
            padding: 6px;
            flex: 1;
        }

        .side-showcase:hover {
            transform: translateX(5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
        }

        .side-showcase-image {
            width: 100%;
            height: 100%;
            min-height: 140px;
            object-fit: cover;
            border-radius: 6px;
            transition: transform 0.3s ease;
        }

        .side-showcase:hover .side-showcase-image {
            transform: scale(1.1);
        }

        /* Hover effects for entire showcase */
        .fullscreen-showcase:hover .main-showcase {
            transform: translateY(-8px) scale(1.02);
        }

        .fullscreen-showcase:hover .side-showcase.top-showcase {
            transform: translateX(8px) translateY(-3px);
        }

        .fullscreen-showcase:hover .side-showcase.bottom-showcase {
            transform: translateX(8px) translateY(3px);
        }

        /* Website Showcase Layout Styles */
        .website-showcase {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            perspective: 1200px;
            position: relative;
        }

        .website-frame {
            position: relative;
            transition: all 0.4s ease;
        }

        .main-frame {
            z-index: 3;
            transform: scale(1);
        }

        .side-frame {
            z-index: 2;
            opacity: 0.8;
            transform: scale(0.8);
        }

        .left-frame {
            transform: perspective(1000px) rotateY(15deg) scale(0.8);
        }

        .right-frame {
            transform: perspective(1000px) rotateY(-15deg) scale(0.8);
        }

        /* Browser Mockup Styles */
        .browser-mockup {
            background: #f5f5f5;
            border-radius: 8px 8px 8px 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            width: 300px;
            max-width: 100%;
        }

        .browser-bar {
            background: #e5e5e5;
            padding: 8px 12px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #d0d0d0;
        }

        .browser-dots {
            display: flex;
            gap: 6px;
            margin-right: 12px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .dot.red {
            background: #ff5f57;
        }

        .dot.yellow {
            background: #ffbd2e;
        }

        .dot.green {
            background: #28ca42;
        }

        .browser-url {
            background: #ffffff;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            color: #666;
            flex: 1;
        }

        .website-screenshot {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        /* Mobile Mockup Styles */
        .mobile-mockup {
            perspective: 1000px;
        }

        .mobile-frame {
            background: #000;
            border-radius: 20px;
            padding: 8px;
            width: 120px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .mobile-website-screenshot {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
        }

        /* Tablet Mockup Styles */
        .tablet-mockup {
            perspective: 1000px;
        }

        .tablet-frame {
            background: #000;
            border-radius: 12px;
            padding: 6px;
            width: 160px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .tablet-website-screenshot {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Website Showcase Hover Effects */
        .website-showcase:hover .main-frame {
            transform: scale(1.05);
        }

        .website-showcase:hover .left-frame {
            transform: perspective(1000px) rotateY(10deg) scale(0.85);
        }

        .website-showcase:hover .right-frame {
            transform: perspective(1000px) rotateY(-10deg) scale(0.85);
        }

        .website-showcase:hover .side-frame {
            opacity: 0.9;
        }

        .mobile-screenshots,
        .security-screenshots,
        .festival-screenshots,
        .foster-screenshots {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 18px;
            perspective: 1000px;
        }

        .screenshot-frame {
            position: relative;
            transition: transform 0.4s ease;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.2));
            background: rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            padding: 3px;
        }

        .screenshot-frame:first-child {
            transform: perspective(1000px) rotateY(12deg);
        }

        .screenshot-frame:last-child {
            transform: perspective(1000px) rotateY(-12deg);
        }

        /* Unified image sizing for all project types - Increased for better readability */
        .mobile-screenshot,
        .security-screenshot,
        .festival-screenshot,
        .foster-screenshot {
            width: 160px;
            height: 280px;
            object-fit: contain;
            border-radius: 20px;
            border: 3px solid rgba(255, 255, 255, 0.8);
            background: #ffffff;
            padding: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* Project-specific background colors for better contrast */
        .security-screenshot {
            background: #f8f9fa;
        }

        .festival-screenshot {
            background: #fff9f0;
        }

        .foster-screenshot {
            background: #f0fdf4;
        }

        /* Enhanced visual effects for better readability */
        .festival-screenshots .screenshot-frame:first-child img {
            filter: brightness(1.1) contrast(1.05);
        }

        .festival-screenshots .screenshot-frame:nth-child(2) img {
            filter: brightness(1.15) contrast(1.1) hue-rotate(15deg);
        }

        .festival-screenshots .screenshot-frame:last-child img {
            filter: brightness(1.05) contrast(1.05) hue-rotate(30deg);
        }

        .foster-screenshots .screenshot-frame:first-child img {
            filter: brightness(1.1) contrast(1.05);
        }

        .foster-screenshots .screenshot-frame:nth-child(2) img {
            filter: brightness(1.15) contrast(1.1);
        }

        .foster-screenshots .screenshot-frame:last-child img {
            filter: brightness(1.05) contrast(1.05) sepia(0.1);
        }

        /* Hover Effects for Trifold - Enhanced readability */
        .trifold-container:hover .screenshot-frame {
            transform: perspective(1000px) rotateY(0deg) scale(1.08);
        }

        .trifold-container:hover .screenshot-frame:first-child {
            transform: perspective(1000px) rotateY(3deg) scale(1.08);
        }

        .trifold-container:hover .screenshot-frame:last-child {
            transform: perspective(1000px) rotateY(-3deg) scale(1.08);
        }

        /* Enhanced hover effect for individual images */
        .screenshot-frame:hover img {
            filter: brightness(1.2) contrast(1.15) !important;
            transition: filter 0.3s ease;
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

        /* Responsive Design - Consistent sizing for all image types */
        @media (max-width: 768px) {

            .mobile-screenshot,
            .security-screenshot,
            .festival-screenshot,
            .foster-screenshot {
                width: 120px;
                height: 200px;
                padding: 10px;
            }

            .trifold-container {
                padding: 25px 20px;
                min-height: 240px;
            }

            .mobile-screenshots,
            .security-screenshots,
            .festival-screenshots,
            .foster-screenshots {
                gap: 12px;
            }

            /* Full-Screen Showcase Responsive */
            .fullscreen-showcase {
                padding: 20px;
                min-height: 320px;
            }

            .showcase-grid {
                grid-template-columns: 1fr;
                gap: 15px;
                max-width: 400px;
            }

            .main-showcase-image {
                height: 220px;
            }

            .side-showcases {
                flex-direction: row;
                gap: 10px;
            }

            .side-showcase-image {
                min-height: 100px;
            }

            .project-badge {
                font-size: 11px;
                padding: 6px 12px;
            }

            .showcase-label {
                font-size: 10px;
                padding: 4px 8px;
            }

            /* Website Showcase Responsive */
            .website-showcase {
                flex-direction: column;
                gap: 15px;
            }

            .browser-mockup {
                width: 250px;
            }

            .mobile-frame {
                width: 100px;
            }

            .tablet-frame {
                width: 130px;
            }

            .side-frame {
                transform: none !important;
                opacity: 1 !important;
                scale: 0.9;
            }
        }

        @media (max-width: 576px) {

            .mobile-screenshot,
            .security-screenshot,
            .festival-screenshot,
            .foster-screenshot {
                width: 90px;
                height: 160px;
                padding: 8px;
            }

            .trifold-container {
                padding: 20px 15px;
                min-height: 180px;
                gap: 10px;
            }

            /* Full-Screen Showcase Mobile */
            .fullscreen-showcase {
                padding: 15px;
                min-height: 280px;
            }

            .showcase-grid {
                max-width: 320px;
                gap: 12px;
            }

            .main-showcase-image {
                height: 180px;
            }

            .side-showcase-image {
                min-height: 80px;
            }

            .project-badge {
                font-size: 10px;
                padding: 5px 10px;
            }

            /* Website Showcase Mobile */
            .browser-mockup {
                width: 200px;
            }

            .mobile-frame {
                width: 80px;
            }

            .tablet-frame {
                width: 110px;
            }

            .website-screenshot,
            .mobile-website-screenshot,
            .tablet-website-screenshot {
                height: 150px;
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
        }

        /* Smooth transitions for specific portfolio elements only */
        .portfolio-section .project-card,
        .portfolio-section .project-image,
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
            } // Button click handlers for Live Demo, Play Store, and View Code
            const allButtons = document.querySelectorAll('.project-links .btn');

            // Add click handlers for all project buttons
            allButtons.forEach(function(button) {
                const buttonText = button.textContent.trim();

                // Handle Live Demo and Play Store buttons
                if (buttonText.includes('Live Demo') || buttonText.includes('Play Store')) {
                    button.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (buttonText.includes('Play Store')) {
                            alert(
                                'This app is currently in development. The Play Store release is coming soon! Please contact me to see the app in action.');
                        } else {
                            alert(
                                'This portfolio is currently in development mode. Live demos are not available online yet. Please contact me to see the projects in action!');
                        }
                    });
                }

                // Handle View Code buttons
                if (buttonText.includes('View Code')) {
                    button.addEventListener('click', function(e) {
                        e.preventDefault();
                        alert(
                            'Source code repositories are private during development. Please contact me if you\'d like to discuss the technical implementation of these projects!');
                    });
                }
            });

            // Animate cards on scroll - only target portfolio cards specifically, exclude header
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

            // Observe only project cards within the portfolio section (exclude header)
            document.querySelectorAll('.portfolio-section .project-card').forEach(function(card) {
                card.style.opacity = '0';
                card.style.transform = 'translateY(50px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
@endpush
