<footer class="bg-dark text-light">
    <!-- Main Footer Content -->
    <div class="py-5">
        <div class="container">
            <div class="row g-4"> <!-- About Section -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">
                        <div class="footer-brand d-flex align-items-center mb-3">
                            <div class="footer-logo me-3">
                                <div class="footer-logo-container">
                                    <i class="fas fa-code"></i>
                                </div>
                            </div>
                            <div class="footer-brand-text">
                                <h5 class="footer-brand-name mb-0">Mike Carasco</h5>
                                <span class="footer-brand-title">Programmer</span>
                            </div>
                        </div>
                        <p class="text-light mb-3">
                            3rd Year BSIT Student passionate about creating innovative mobile and web solutions.
                            Always eager to learn new technologies and tackle challenging projects.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary">Mobile Development</span>
                            <span class="badge bg-success">Web Development</span>
                            <span class="badge bg-info">UI/UX Design</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h6 class="fw-bold mb-3 text-primary">Quick Links</h6>
                        <ul class="list-unstyled footer-links">
                            <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Home</a></li>
                            <li><a href="{{ route('about') }}" class="text-light text-decoration-none">About</a></li>
                            <li><a href="{{ route('portfolio') }}" class="text-light text-decoration-none">Projects</a>
                            </li>
                            <li><a href="{{ route('skills') }}" class="text-light text-decoration-none">Skills</a></li>
                            <li><a href="{{ route('contact') }}" class="text-light text-decoration-none">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Technologies -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-section">
                        <h6 class="fw-bold mb-3 text-primary">Technologies</h6>
                        <ul class="list-unstyled footer-links">
                            <li class="text-light mb-1"><i class="fab fa-laravel text-danger me-2"></i>Laravel</li>
                            <li class="text-light mb-1"><i class="fab fa-js-square text-warning me-2"></i>JavaScript
                            </li>
                            <li class="text-light mb-1"><i class="fab fa-react text-info me-2"></i>React Native</li>
                            <li class="text-light mb-1"><i class="fas fa-mobile-alt text-primary me-2"></i>Flutter</li>
                            <li class="text-light mb-1"><i class="fas fa-database text-warning me-2"></i>Firebase</li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-section">
                        <h6 class="fw-bold mb-3 text-primary">Get In Touch</h6>
                        <div class="contact-info mb-3">
                            <p class="text-light mb-2">
                                <i class="fas fa-envelope me-2 text-primary"></i>
                                <a href="mailto:mike@example.com"
                                    class="text-light text-decoration-none">mayk@gmail.com</a>
                            </p>
                            <p class="text-light mb-2">
                                <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                                Bolinao, Pangasinan
                            </p>
                            <p class="text-light mb-0">
                                <i class="fas fa-graduation-cap me-2 text-primary"></i>
                                Available for internships
                            </p>
                        </div>

                        <!-- Social Links -->
                        <div class="social-links">
                            <a href="#" class="btn btn-outline-light btn-sm me-2 mb-2" title="GitHub">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="btn btn-outline-light btn-sm me-2 mb-2" title="LinkedIn">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="btn btn-outline-light btn-sm me-2 mb-2" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="mailto:mike@example.com" class="btn btn-outline-light btn-sm mb-2" title="Email">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom bg-darker py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                    <div class="footer-copyright">
                        <small class="text-light d-flex align-items-center">
                            <i class="fas fa-copyright me-2 text-primary"></i>
                            <span>{{ date('Y') }} <strong>Mike Carasco</strong>. All rights reserved.</span>
                        </small>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-3 mb-lg-0 text-center">
                    <div class="footer-tech-badge">
                        <small class="text-light d-flex align-items-center justify-content-center">
                            <i class="fab fa-laravel text-danger me-2"></i>
                            <span>Developed with Laravel</span>
                        </small>
                    </div>
                </div>

                <div class="col-lg-4 text-lg-end text-center">
                    <div class="footer-status">
                        <small
                            class="text-light d-flex align-items-center justify-content-lg-end justify-content-center">
                            <div class="status-indicator me-2"></div>
                            <span>Available for opportunities</span>
                        </small>
                    </div>
                </div>
            </div>

            <!-- Optional: Back to top button -->
            <div class="text-center mt-3">
                <a href="#" class="back-to-top btn btn-outline-primary btn-sm"
                    onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;">
                    <i class="fas fa-arrow-up me-1"></i>
                    Back to Top
                </a>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-section h6 {
        position: relative;
        padding-bottom: 10px;
    }

    .footer-section h6::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 30px;
        height: 2px;
        background: var(--bs-primary);
    }

    .footer-links li {
        margin-bottom: 8px;
        transition: all 0.3s ease;
    }

    .footer-links li:hover {
        transform: translateX(5px);
    }

    .footer-links a:hover {
        color: var(--bs-primary) !important;
    }

    .social-links .btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .social-links .btn:hover {
        background-color: var(--bs-primary);
        border-color: var(--bs-primary);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
    }

    .contact-info i {
        width: 20px;
    }

    .badge {
        font-size: 0.7rem;
        padding: 0.4em 0.8em;
    }

    /* Footer Brand Styling - Matching Navbar */
    .footer-brand {
        transition: all 0.3s ease;
    }

    .footer-logo-container {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .footer-logo-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .footer-brand:hover .footer-logo-container::before {
        left: 100%;
    }

    .footer-logo-container i {
        color: white;
        font-size: 1.2rem;
        z-index: 1;
        position: relative;
    }

    .footer-brand:hover .footer-logo-container {
        transform: rotate(5deg) scale(1.05);
        box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
    }

    .footer-brand-text {
        display: flex;
        flex-direction: column;
        line-height: 1.2;
    }

    .footer-brand-name {
        font-size: 1.4rem;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: -0.5px;
        margin-bottom: -2px;
    }

    .footer-brand-title {
        font-size: 0.75rem;
        font-weight: 400;
        color: #007bff;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Responsive adjustments for footer brand */
    @media (max-width: 768px) {
        .footer-brand-name {
            font-size: 1.2rem;
        }

        .footer-brand-title {
            font-size: 0.7rem;
        }

        .footer-logo-container {
            width: 40px;
            height: 40px;
        }

        .footer-logo-container i {
            font-size: 1rem;
        }
    }

    /* Professional Footer Bottom Styling */
    .footer-bottom {
        background: rgba(0, 0, 0, 0.4);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
    }

    .footer-copyright,
    .footer-tech-badge,
    .footer-status {
        transition: all 0.3s ease;
    }

    .footer-copyright:hover,
    .footer-tech-badge:hover,
    .footer-status:hover {
        transform: translateY(-2px);
    }

    .footer-copyright i,
    .footer-tech-badge i {
        font-size: 0.9rem;
    }

    .status-indicator {
        width: 8px;
        height: 8px;
        background: #28a745;
        border-radius: 50%;
        animation: pulse 2s infinite;
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.7);
    }

    @keyframes pulse {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 8px rgba(40, 167, 69, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(40, 167, 69, 0);
        }
    }

    .back-to-top {
        border-radius: 25px;
        padding: 0.4rem 1rem;
        font-size: 0.8rem;
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 123, 255, 0.5);
        background: rgba(0, 123, 255, 0.1);
    }

    .back-to-top:hover {
        background: var(--bs-primary);
        border-color: var(--bs-primary);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
    }

    .footer-bottom small {
        font-size: 0.8rem;
        font-weight: 400;
        letter-spacing: 0.3px;
    }

    .footer-bottom strong {
        font-weight: 600;
        color: #007bff;
    }

    /* Responsive adjustments for footer bottom */
    @media (max-width: 768px) {
        .footer-bottom {
            text-align: center;
        }

        .footer-copyright small,
        .footer-tech-badge small,
        .footer-status small {
            justify-content: center !important;
        }

        .back-to-top {
            font-size: 0.75rem;
            padding: 0.3rem 0.8rem;
        }
    }

    @media (max-width: 576px) {
        .footer-bottom .col-lg-4 {
            margin-bottom: 1rem;
        }

        .footer-bottom small {
            font-size: 0.75rem;
        }
    }
</style>
