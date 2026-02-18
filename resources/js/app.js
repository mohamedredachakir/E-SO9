import './bootstrap';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {

    // Hero Section Animation
    const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });

    heroTl.fromTo('.hero-title',
        { y: 50, opacity: 0 },
        { y: 0, opacity: 1, duration: 1, delay: 0.2 }
    )
        .fromTo('.hero-subtitle',
            { y: 30, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.8 },
            "-=0.6"
        )
        .fromTo('.hero-actions .btn',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.6, stagger: 0.2 },
            "-=0.4"
        )
        .fromTo('.hero-visual',
            { scale: 0.9, opacity: 0, y: 50 },
            { scale: 1, opacity: 1, y: 0, duration: 1.2, ease: 'elastic.out(1, 0.7)' },
            "-=0.8"
        );

    // Navbar Animation (on load)
    gsap.from('.navbar', {
        y: -100,
        opacity: 0,
        duration: 1,
        ease: 'power2.out'
    });

    // Animate Product Cards on Scroll
    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach((card, index) => {
        gsap.fromTo(card,
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                },
                delay: index * 0.1 // Stagger effect based on index
            }
        );
    });

    // Features Section
    gsap.from('.features-item', {
        scrollTrigger: {
            trigger: '.features-section',
            start: 'top 80%',
        },
        y: 50,
        opacity: 0,
        duration: 0.8,
        stagger: 0.2
    });

    // Hover effects for Buttons (Magnetic effect optional, keeping simple for now)
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            gsap.to(btn, { scale: 1.05, duration: 0.3 });
        });
        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, { scale: 1, duration: 0.3 });
        });
    });

    // Logo Pulse interaction
    const logo = document.querySelector('.logo');
    if (logo) {
        logo.addEventListener('mouseenter', () => {
            gsap.to('.logo-dot', { scale: 1.5, duration: 0.3, yoyo: true, repeat: 1 });
        });
    }

});
