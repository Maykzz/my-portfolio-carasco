<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
    <div class="container">
        <a class="navbar-brand fw-bold animate-on-scroll d-flex align-items-center" href="{{ route('home') }}">
            <div class="brand-logo me-3">
                <div class="logo-container">
                    <i class="fas fa-code"></i>
                </div>
            </div>
            <div class="brand-text">
                <span class="brand-name">Mike Carasco</span>
                <span class="brand-title">Programmer</span>
            </div>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item animate-on-scroll" data-delay="100">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item animate-on-scroll" data-delay="200">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        <i class="fas fa-user"></i> About
                    </a>
                </li>
                <li class="nav-item animate-on-scroll" data-delay="300">
                    <a class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}" href="{{ route('skills') }}">
                        <i class="fas fa-cogs"></i> Skills
                    </a>
                </li>
                <li class="nav-item animate-on-scroll" data-delay="400">
                    <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}"
                        href="{{ route('portfolio') }}">
                        <i class="fas fa-briefcase"></i> Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">
                        <i class="fas fa-envelope"></i> Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Professional Navbar Brand Styling */
    .navbar {
        backdrop-filter: blur(10px);
        background: rgba(33, 37, 41, 0.95) !important;
        transition: all 0.3s ease;
    }

    .navbar-brand {
        text-decoration: none !important;
        transition: all 0.3s ease;
        padding: 0.5rem 0;
    }

    .navbar-brand:hover {
        transform: translateY(-1px);
    }

    .brand-logo {
        position: relative;
    }

    .logo-container {
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

    .logo-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .navbar-brand:hover .logo-container::before {
        left: 100%;
    }

    .logo-container i {
        color: white;
        font-size: 1.2rem;
        z-index: 1;
        position: relative;
    }

    .navbar-brand:hover .logo-container {
        transform: rotate(5deg) scale(1.05);
        box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
    }

    .brand-text {
        display: flex;
        flex-direction: column;
        line-height: 1.2;
    }

    .brand-name {
        font-size: 1.4rem;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: -0.5px;
        margin-bottom: -2px;
    }

    .brand-title {
        font-size: 0.75rem;
        font-weight: 400;
        color: #007bff;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Enhanced navbar toggler */
    .navbar-toggler {
        padding: 0.5rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .navbar-toggler:hover {
        background-color: rgba(0, 123, 255, 0.1);
    }

    .navbar-toggler:focus {
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
    }

    /* Enhanced nav links */
    .nav-link {
        transition: all 0.3s ease;
        border-radius: 8px;
        margin: 0 2px;
        position: relative;
        overflow: hidden;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(0, 123, 255, 0.1), transparent);
        transition: left 0.3s ease;
    }

    .nav-link:hover::before {
        left: 100%;
    }

    .nav-link:hover {
        color: #007bff !important;
        transform: translateY(-1px);
    }

    .nav-link.active {
        background-color: rgba(0, 123, 255, 0.1);
        color: #007bff !important;
    }

    .nav-link i {
        margin-right: 6px;
        font-size: 0.9rem;
    }

    /* Responsive adjustments */
    @media (max-width: 991.98px) {
        .brand-text {
            margin-left: 0.5rem;
        }

        .brand-name {
            font-size: 1.2rem;
        }

        .brand-title {
            font-size: 0.7rem;
        }

        .logo-container {
            width: 40px;
            height: 40px;
        }

        .logo-container i {
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .brand-name {
            font-size: 1.1rem;
        }

        .brand-title {
            font-size: 0.65rem;
        }

        .logo-container {
            width: 35px;
            height: 35px;
        }
    }
</style>
