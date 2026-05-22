/**
 * Legball Federation - Main JavaScript
 * Handles mobile menu toggle and other interactive elements
 */

document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('.nav-links');
    const hasDrop = document.querySelectorAll('.has-drop');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = menuToggle.querySelector('i');
            if (icon) {
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            }
        });
    }

    // Dropdown toggle
    hasDrop.forEach(item => {
        const link = item.querySelector('a');
        const icon = item.querySelector('.fa-caret-down');
        
        // Toggle on icon click for desktop
        if (icon) {
            icon.addEventListener('click', (e) => {
                if (window.innerWidth > 768) {
                    e.preventDefault();
                    e.stopPropagation();
                    item.classList.toggle('active');
                }
            });
        }
        
        // Toggle on link click for mobile
        if (link) {
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 768) {
                    const dropdown = item.querySelector('.dropdown');
                    if (dropdown) {
                        e.preventDefault();
                        item.classList.toggle('active');
                    }
                }
            });
        }
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (navLinks && navLinks.classList.contains('active')) {
            if (!navLinks.contains(e.target) && !menuToggle.contains(e.target)) {
                navLinks.classList.remove('active');
                const icon = menuToggle.querySelector('i');
                if (icon) {
                    icon.classList.add('fa-bars');
                    icon.classList.remove('fa-times');
                }
            }
        }
        
        // Close dropdowns on desktop when clicking outside
        if (window.innerWidth > 768) {
            hasDrop.forEach(item => {
                if (item.classList.contains('active') && !item.contains(e.target)) {
                    item.classList.remove('active');
                }
            });
        }
    });

    // Hero Banner Auto-Slider
    const slides = document.querySelectorAll('.hero-slider .slide');
    if (slides.length > 1) {
        let currentSlide = 0;
        
        setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 5000); // Change slide every 5 seconds
    }
});
