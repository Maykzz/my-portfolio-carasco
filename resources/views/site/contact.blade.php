@extends('layouts.app')

@section('title', 'Contact - Mike Carasco Portfolio')

@section('content') <div class="page-header bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center animate-on-scroll">
                    <h1 class="display-4 fw-bold mb-3 animate-fadeInUp">Get In Touch</h1>
                    <p class="lead animate-on-scroll" data-delay="200">Let's connect and explore opportunities</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto animate-on-scroll" data-delay="300">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show animate-scaleIn" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="card shadow-lg card-hover">
                        <div class="card-body p-5">
                            <h2 class="text-center mb-4 animate-on-scroll" data-delay="400">Send Me a Message</h2>

                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-3 animate-on-scroll" data-delay="500">
                                        <label for="name" class="form-label">
                                            <i class="fas fa-user me-2 animate-pulse"></i>Your Name *
                                        </label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}" required
                                            placeholder="Enter your full name">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3 animate-on-scroll" data-delay="600">
                                        <label for="email" class="form-label">
                                            <i class="fas fa-envelope me-2"></i>Email Address *
                                        </label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}" required
                                            placeholder="Enter your email address">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">
                                        <i class="fas fa-comment me-2"></i>Message *
                                    </label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="6"
                                        required placeholder="Share your ideas, ask questions, or let's discuss potential collaborations...">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="form-text">
                                        Minimum 10 characters required
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 fw-bold">Other Ways to Reach Me</h2>
                    <p class="lead">Choose your preferred method of communication</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card text-center h-100 shadow-sm">
                        <div class="card-body">
                            <div class="contact-icon bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <h4>Email</h4>
                            <p class="text-muted mb-3">Drop me a line anytime</p>
                            <a href="mailto:mike.carasco@example.com" class="btn btn-outline-primary">
                                mayk@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card text-center h-100 shadow-sm">
                        <div class="card-body">
                            <div class="contact-icon bg-success text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-phone fa-2x"></i>
                            </div>
                            <h4>Phone</h4>
                            <p class="text-muted mb-3">Let's have a conversation</p>
                            <a href="tel:+639123456789" class="btn btn-outline-success">
                                +63 912 345 6789
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card text-center h-100 shadow-sm">
                        <div class="card-body">
                            <div class="contact-icon bg-info text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                                style="width: 80px; height: 80px;">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </div>
                            <h4>LinkedIn</h4>
                            <p class="text-muted mb-3">Connect with me professionally</p>
                            <a href="https://linkedin.com/in/mikecarasco" target="_blank" class="btn btn-outline-info">
                                @mayk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Let's Connect</h2>
                    <p class="lead mb-4">
                        I'm actively seeking learning opportunities, project collaborations, internships,
                        and connections with fellow developers and industry professionals. Whether you're
                        looking for a motivated student developer, have mentorship opportunities, or want
                        to collaborate on mobile/web projects, let's connect!
                    </p>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <i class="fas fa-clock text-primary me-2"></i>
                                <strong>Response Time</strong>
                            </div>
                            <p class="text-muted">Usually within 24 hours</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <i class="fas fa-globe text-success me-2"></i>
                                <strong>Time Zone</strong>
                            </div>
                            <p class="text-muted">Philippine Standard Time (UTC+8)</p>
                        </div>
                    </div>                    <div class="social-links mt-4">
                        <a href="https://github.com/mikecarasco" target="_blank" class="social-btn github-btn me-3 mb-2">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="https://t.me/mikecarasco" target="_blank" class="social-btn telegram-btn me-3 mb-2">
                            <i class="fab fa-telegram-plane"></i>
                            <span>Telegram</span>
                        </a>
                        <a href="https://instagram.com/mikecarasco" target="_blank" class="social-btn instagram-btn mb-2">
                            <i class="fab fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
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
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="20" cy="80" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.6;
        }

        .contact-icon {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .contact-icon:hover {
            transform: scale(1.15) rotate(5deg);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }

        .card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            position: relative;
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            transform: translateY(-2px);
        }

        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 50px;
            padding: 1rem 3rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        /* Enhanced Social Links Design */
        .social-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }

        .social-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2rem;
            border-radius: 15px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            min-width: 150px;
            border: 2px solid transparent;
        }

        .social-btn i {
            font-size: 1.5rem;
            margin-right: 0.75rem;
            transition: all 0.3s ease;
        }

        .social-btn span {
            font-size: 1rem;
            transition: all 0.3s ease;
        }        /* GitHub Button */
        .github-btn {
            background: linear-gradient(135deg, #24292e 0%, #4a5568 100%);
            color: white;
            border-color: #24292e;
        }

        .github-btn:hover {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            color: #24292e;
            border-color: #24292e;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(36, 41, 46, 0.3);
        }

        /* Telegram Button */
        .telegram-btn {
            background: linear-gradient(135deg, #0088cc 0%, #229ed9 100%);
            color: white;
            border-color: #0088cc;
        }

        .telegram-btn:hover {
            background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
            color: #0088cc;
            border-color: #0088cc;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(0, 136, 204, 0.3);
        }

        /* Instagram Button */
        .instagram-btn {
            background: linear-gradient(135deg, #e4405f 0%, #f77737 50%, #fccc63 100%);
            color: white;
            border-color: #e4405f;
        }

        .instagram-btn:hover {
            background: linear-gradient(135deg, #ffffff 0%, #fef7ff 100%);
            color: #e4405f;
            border-color: #e4405f;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(228, 64, 95, 0.3);
        }        /* Hover Effects for Social Buttons */
        .social-btn:hover i {
            transform: scale(1.1) rotate(5deg);
        }

        .social-btn:hover span {
            letter-spacing: 0.5px;
            font-weight: 700;
        }

        /* Enhanced text readability on hover */
        .github-btn:hover i,
        .github-btn:hover span {
            color: #24292e;
            text-shadow: none;
        }

        .telegram-btn:hover i,
        .telegram-btn:hover span {
            color: #0088cc;
            text-shadow: none;
        }

        .instagram-btn:hover i,
        .instagram-btn:hover span {
            color: #e4405f;
            text-shadow: none;
        }

        /* Contact Cards Enhancement */
        .contact-icon.bg-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        }

        .contact-icon.bg-success {
            background: linear-gradient(135deg, #56ab2f 0%, #a8e6cf 100%) !important;
        }

        .contact-icon.bg-info {
            background: linear-gradient(135deg, #0077b6 0%, #00b4d8 100%) !important;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .social-links {
                flex-direction: column;
                align-items: center;
            }

            .social-btn {
                width: 100%;
                max-width: 280px;
                margin-bottom: 0.5rem;
            }

            .btn-primary {
                padding: 0.875rem 2rem;
            }

            .card-body {
                padding: 2rem 1.5rem;
            }
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

        .animate-scaleIn {
            animation: scaleIn 0.5s ease forwards;
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }

        /* Enhanced Alert Styling */
        .alert-success {
            background: linear-gradient(135deg, rgba(86, 171, 47, 0.1) 0%, rgba(168, 230, 207, 0.1) 100%);
            border: 1px solid rgba(86, 171, 47, 0.3);
            color: #155724;
            border-radius: 10px;
        }

        /* Form Enhancement */
        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .form-text {
            font-size: 0.875rem;
            color: #6c757d;
        }

        /* Additional Polish */
        .display-5 {
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .lead {
            font-size: 1.125rem;
            font-weight: 400;
            line-height: 1.6;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Auto-hide alert after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alert = document.querySelector('.alert');
            if (alert) {
                setTimeout(() => {
                    alert.classList.remove('show');
                    setTimeout(() => {
                        alert.remove();
                    }, 150);
                }, 5000);
            }
        });

        // Character counter for message textarea
        const messageTextarea = document.getElementById('message');
        if (messageTextarea) {
            const maxLength = 1000;
            const minLength = 10;

            // Create character counter
            const counter = document.createElement('div');
            counter.className = 'text-end text-muted small mt-1';
            messageTextarea.parentNode.appendChild(counter);

            function updateCounter() {
                const currentLength = messageTextarea.value.length;
                counter.textContent = `${currentLength}/${maxLength} characters`;

                if (currentLength < minLength) {
                    counter.className = 'text-end text-danger small mt-1';
                } else if (currentLength > maxLength * 0.9) {
                    counter.className = 'text-end text-warning small mt-1';
                } else {
                    counter.className = 'text-end text-muted small mt-1';
                }
            }

            messageTextarea.addEventListener('input', updateCounter);
            updateCounter(); // Initial count
        }
    </script>
@endpush
