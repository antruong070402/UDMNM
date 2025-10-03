/**
 * Pressword Theme JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile Menu Toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNavigation = document.querySelector('.main-navigation');
    const navMenu = document.querySelector('.nav-menu');
    const hamburger = document.querySelector('.hamburger');
    
    if (mobileMenuToggle && navMenu && hamburger) {
        mobileMenuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
            
            // Prevent body scroll when menu is open
            if (navMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mainNavigation.contains(e.target) && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
        
        // Close menu when clicking on nav links
        const navLinks = document.querySelectorAll('.nav-menu a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }
    
    // Search Toggle
    const searchToggle = document.querySelector('.search-toggle');
    const searchOverlay = document.querySelector('.search-overlay');
    const searchClose = document.querySelector('.search-close');
    const searchField = document.querySelector('.search-field');
    
    if (searchToggle && searchOverlay) {
        searchToggle.addEventListener('click', function() {
            searchOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                searchField.focus();
            }, 100);
        });
    }
    
    if (searchClose && searchOverlay) {
        searchClose.addEventListener('click', function() {
            searchOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
    
    // Close search overlay when clicking outside
    if (searchOverlay) {
        searchOverlay.addEventListener('click', function(e) {
            if (e.target === searchOverlay) {
                searchOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }
    
    // Close search overlay with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
            searchOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
    
    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Header scroll effect
    const siteHeader = document.querySelector('.site-header');
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            siteHeader.classList.add('scrolled');
        } else {
            siteHeader.classList.remove('scrolled');
        }
        
        lastScrollTop = scrollTop;
    });
    
    // Close mobile menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-menu a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                mainNavigation.classList.remove('active');
                hamburger.classList.remove('active');
            }
        });
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            mainNavigation.classList.remove('active');
            hamburger.classList.remove('active');
        }
    });
    
    // Hero Slider
    const heroSlider = document.querySelector('.hero-slider');
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    
    if (heroSlider && slides.length > 0) {
        let currentSlide = 0;
        let slideInterval;
        
        // Function to show slide
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            
            currentSlide = index;
        }
        
        // Function to go to next slide
        function nextSlide() {
            const next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }
        
        // Function to go to previous slide
        function prevSlide() {
            const prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
        }
        
        // Auto slide function
        function startAutoSlide() {
            slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }
        
        function stopAutoSlide() {
            clearInterval(slideInterval);
        }
        
        // Event listeners for navigation buttons
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                stopAutoSlide();
                startAutoSlide();
            });
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            });
        }
        
        // Event listeners for dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
                stopAutoSlide();
                startAutoSlide();
            });
        });
        
        // Pause auto slide on hover
        heroSlider.addEventListener('mouseenter', stopAutoSlide);
        heroSlider.addEventListener('mouseleave', startAutoSlide);
        
        // Start auto slide
        startAutoSlide();
        
        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                stopAutoSlide();
                startAutoSlide();
            }
        });
    }
    
    // Language Switcher
    const languageBtn = document.querySelector('.language-btn');
    const languageMenu = document.querySelector('.language-menu');
    const languageOptions = document.querySelectorAll('.language-option');
    const currentLangSpan = document.querySelector('.current-lang');
    
    if (languageBtn && languageMenu) {
        // Toggle language menu
        languageBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            languageMenu.classList.toggle('active');
        });
        
        // Handle language selection
        languageOptions.forEach(option => {
            option.addEventListener('click', function(e) {
                e.preventDefault();
                
                const selectedLang = this.getAttribute('data-lang');
                const flag = this.querySelector('.flag').textContent;
                const langName = this.querySelector('.lang-name').textContent;
                
                // Update current language display
                currentLangSpan.textContent = selectedLang.toUpperCase();
                
                // Remove active class from all options
                languageOptions.forEach(opt => opt.classList.remove('active'));
                
                // Add active class to selected option
                this.classList.add('active');
                
                // Close menu
                languageMenu.classList.remove('active');
                
                // Store language preference
                localStorage.setItem('selectedLanguage', selectedLang);
                
                // Show notification
                showLanguageNotification(langName);
                
                // Here you can add actual language switching logic
                // For example, redirect to different language versions
                // or load different content based on selected language
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!languageBtn.contains(e.target) && !languageMenu.contains(e.target)) {
                languageMenu.classList.remove('active');
            }
        });
        
        // Load saved language preference
        const savedLang = localStorage.getItem('selectedLanguage');
        if (savedLang) {
            const savedOption = document.querySelector(`[data-lang="${savedLang}"]`);
            if (savedOption) {
                currentLangSpan.textContent = savedLang.toUpperCase();
                languageOptions.forEach(opt => opt.classList.remove('active'));
                savedOption.classList.add('active');
            }
        }
    }
    
    // Function to show language change notification
    function showLanguageNotification(langName) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = 'language-notification';
        notification.innerHTML = `
            <div class="notification-content">
                <i class="fas fa-check-circle"></i>
                <span>Ngôn ngữ đã chuyển sang: ${langName}</span>
            </div>
        `;
        
        // Add styles
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #4a90e2, #357abd);
            color: white;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(74, 144, 226, 0.3);
            z-index: 10000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        `;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Remove after 3 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }
    
});

// Add CSS for hamburger animation
const style = document.createElement('style');
style.textContent = `
    .hamburger.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }
    
    .hamburger.active .hamburger-line:nth-child(2) {
        opacity: 0;
    }
    
    .hamburger.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }
    
    .site-header.scrolled {
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.15);
    }
`;
document.head.appendChild(style);
