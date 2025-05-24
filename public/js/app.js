// Custom JavaScript for Mike Carasco Portfolio

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all animations and interactions
    initScrollAnimations();
    initSmoothScrolling();
    initTypingEffect();
    initParallaxEffect();
    initProgressBars();
    initNavbarEffects();
    initCounterAnimations();
    initStaggeredAnimations();
    initImageAnimations();
});

// Enhanced scroll animations with buttery smooth stagger effect
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add smooth stagger delay for multiple elements
                const delay = entry.target.dataset.delay || 0;
                
                setTimeout(() => {
                    entry.target.style.transition = 'all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                    entry.target.classList.add('animate-fadeInUp');
                }, parseInt(delay));
            }
        });
    }, observerOptions);

    // Observe all elements with animation classes
    document.querySelectorAll('.card, .skill-item, .project-card, .animate-on-scroll').forEach((el, index) => {
        el.dataset.delay = index * 120; // Slightly longer stagger for smoother effect
        observer.observe(el);
    });
}

// Ultra-smooth navbar scroll effects
function initNavbarEffects() {
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;
    let ticking = false;

    function updateNavbar() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Add background blur on scroll with smooth transition
        if (scrollTop > 50) {
            navbar.style.transition = 'all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }

        // Smooth hide/show navbar on scroll
        if (scrollTop > lastScrollTop && scrollTop > 120) {
            navbar.style.transform = 'translateY(-100%)';
            navbar.style.transition = 'transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        } else {
            navbar.style.transform = 'translateY(0)';
            navbar.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        }
        
        lastScrollTop = scrollTop;
        ticking = false;
    }

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateNavbar);
            ticking = true;
        }
    });
}

// Silky smooth staggered animations for grid items
function initStaggeredAnimations() {
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -120px 0px'
    };

    const staggerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const children = entry.target.querySelectorAll('.stagger-item');
                children.forEach((child, index) => {
                    setTimeout(() => {
                        child.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                        child.classList.add('animate-slideInUp');
                    }, index * 180); // Longer delay for smoother stagger
                });
            }
        });
    }, observerOptions);

    document.querySelectorAll('.stagger-container').forEach(container => {
        staggerObserver.observe(container);
    });
}

// Butter-smooth counter animations
function initCounterAnimations() {
    const counters = document.querySelectorAll('.counter');
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.dataset.target);
                animateCounterSmooth(counter, target);
            }
        });
    }, { threshold: 0.6 });

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}

function animateCounterSmooth(element, target) {
    let current = 0;
    const duration = 2500; // Longer duration for smoother animation
    const startTime = performance.now();
    
    function easeOutQuart(t) {
        return 1 - (--t) * t * t * t;
    }
    
    function updateCounter(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easedProgress = easeOutQuart(progress);
        
        current = Math.floor(target * easedProgress);
        element.textContent = current;
        
        if (progress < 1) {
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = target;
        }
    }
    
    requestAnimationFrame(updateCounter);
}

// Silky smooth image animations with enhanced lazy loading
function initImageAnimations() {
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                
                // Add smooth transition
                img.style.transition = 'all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                
                setTimeout(() => {
                    img.classList.add('image-loaded');
                }, 100); // Small delay for smoother effect
                
                imageObserver.unobserve(img);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.animate-image').forEach(img => {
        imageObserver.observe(img);
    });
}

// Smooth scrolling for anchor links
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Typing effect for hero section
function initTypingEffect() {
    const typingElement = document.querySelector('.typing-effect');
    if (typingElement) {
        const text = typingElement.textContent;
        typingElement.textContent = '';
        typingElement.style.opacity = '1';
        
        let i = 0;
        const typeWriter = () => {
            if (i < text.length) {
                typingElement.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 80); // Slightly slower for better effect
            } else {
                // Add class when typing is complete to keep cursor blinking
                typingElement.classList.add('typing-complete');
            }
        };
        
        // Start typing after a delay
        setTimeout(typeWriter, 1000);
    }
}

// Parallax effect for hero section
function initParallaxEffect() {
    const hero = document.querySelector('.hero-section');
    if (hero) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            hero.style.transform = `translateY(${rate}px)`;
        });
    }
}

// Animate progress bars when they come into view
function initProgressBars() {
    const progressBars = document.querySelectorAll('.progress-bar');
    const progressObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progressBar = entry.target;
                const width = progressBar.getAttribute('aria-valuenow');
                progressBar.style.width = '0%';
                setTimeout(() => {
                    progressBar.style.width = width + '%';
                }, 300);
                progressObserver.unobserve(progressBar);
            }
        });
    });

    progressBars.forEach(bar => {
        progressObserver.observe(bar);
    });
}

// Navbar scroll effect
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
        navbar.style.backgroundColor = 'rgba(52, 58, 64, 0.95)';
        navbar.style.backdropFilter = 'blur(10px)';
    } else {
        navbar.classList.remove('scrolled');
        navbar.style.backgroundColor = '';
        navbar.style.backdropFilter = '';
    }
});

// Form enhancements
document.addEventListener('DOMContentLoaded', function() {
    // Contact form validation
    const contactForm = document.querySelector('form[action*="contact"]');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');
            
            let isValid = true;
            
            // Clear previous error states
            [name, email, message].forEach(field => {
                field.classList.remove('is-invalid');
            });
            
            // Validate name
            if (name.value.trim().length < 2) {
                showFieldError(name, 'Name must be at least 2 characters long');
                isValid = false;
            }
            
            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                showFieldError(email, 'Please enter a valid email address');
                isValid = false;
            }
            
            // Validate message
            if (message.value.trim().length < 10) {
                showFieldError(message, 'Message must be at least 10 characters long');
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
            } else {
                // Show loading state
                const submitBtn = contactForm.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
                submitBtn.disabled = true;
                
                // Re-enable button after 3 seconds (in case of slow server response)
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 3000);
            }
        });
    }
});

function showFieldError(field, message) {
    field.classList.add('is-invalid');
    let feedback = field.parentNode.querySelector('.invalid-feedback');
    if (!feedback) {
        feedback = document.createElement('div');
        feedback.className = 'invalid-feedback';
        field.parentNode.appendChild(feedback);
    }
    feedback.textContent = message;
}

// Lazy loading for images
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('loading');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => {
        imageObserver.observe(img);
    });
});

// Skills page animations
if (window.location.pathname.includes('skills')) {
    window.addEventListener('load', function() {
        // Animate skill progress bars with delay
        const skillItems = document.querySelectorAll('.skill-item');
        skillItems.forEach((item, index) => {
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
                
                const progressBar = item.querySelector('.progress-bar');
                if (progressBar) {
                    const width = progressBar.getAttribute('aria-valuenow');
                    progressBar.style.width = width + '%';
                }
            }, index * 100);
        });
    });
}

// Portfolio page masonry layout
if (window.location.pathname.includes('portfolio')) {
    window.addEventListener('load', function() {
        // Stagger animation for project cards
        const projectCards = document.querySelectorAll('.project-card');
        projectCards.forEach((card, index) => {
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 150);
        });
    });
}

// Add to favorites functionality (placeholder)
function addToFavorites(projectId) {
    // This would typically make an AJAX call to save the favorite
    const btn = event.target;
    const icon = btn.querySelector('i');
    
    if (icon.classList.contains('far')) {
        icon.classList.remove('far');
        icon.classList.add('fas');
        btn.classList.add('text-danger');
    } else {
        icon.classList.remove('fas');
        icon.classList.add('far');
        btn.classList.remove('text-danger');
    }
}

// Share functionality
function shareProject(title, url) {
    if (navigator.share) {
        navigator.share({
            title: title,
            url: url
        });
    } else {
        // Fallback - copy to clipboard
        navigator.clipboard.writeText(url).then(() => {
            showToast('Link copied to clipboard!');
        });
    }
}

// Simple toast notification
function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `alert alert-${type} position-fixed top-0 end-0 m-3`;
    toast.style.zIndex = '9999';
    toast.innerHTML = `
        <i class="fas fa-check-circle me-2"></i>
        ${message}
        <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
    `;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}

// Easter egg - Konami code
let konamiCode = '';
const konamiSequence = 'ArrowUpArrowUpArrowDownArrowDownArrowLeftArrowRightArrowLeftArrowRightKeyBKeyA';

document.addEventListener('keydown', function(e) {
    konamiCode += e.code;
    if (konamiCode.length > konamiSequence.length) {
        konamiCode = konamiCode.slice(-konamiSequence.length);
    }
    
    if (konamiCode === konamiSequence) {
        showToast('🎉 You found the easter egg! You are awesome!', 'warning');
        konamiCode = '';
    }
});

// Performance monitoring
window.addEventListener('load', function() {
    // Log page load time
    const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
    console.log(`Page loaded in ${loadTime}ms`);
    
    // Lazy load non-critical resources
    setTimeout(() => {
        // Load additional fonts or scripts if needed
    }, 2000);
});
