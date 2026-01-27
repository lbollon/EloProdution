document.addEventListener("DOMContentLoaded", function() {
    
    // --- 1. ANIMATION SCROLL (FADE IN) ---
    const elementsToAnimate = document.querySelectorAll('.fade-in-up, .intro-box, .narrative-box, .gear-card, .video-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    elementsToAnimate.forEach(el => observer.observe(el));

    // --- 2. MENU MOBILE (Le code qui manquait !) ---
    const burgerBtn = document.getElementById('burger-toggle');
    const mobileNav = document.getElementById('mobile-nav');
    const closeBtn = document.querySelector('.close-menu');

    if (burgerBtn && mobileNav) {
        // Ouvrir
        burgerBtn.addEventListener('click', () => {
            mobileNav.classList.add('active');
            document.body.style.overflow = 'hidden'; // Bloque le scroll
        });

        // Fermer (Bouton Croix)
        if(closeBtn) {
            closeBtn.addEventListener('click', () => {
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            });
        }

        // Fermer (Clic sur un lien)
        mobileNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }
});

/* =========================================
   PARTICLES.JS (Votre config existante)
   ========================================= */
if (typeof particlesJS !== 'undefined') {
    particlesJS("particles-js", {
        "particles": {
            "number": { "value": 60, "density": { "enable": true, "value_area": 800 } },
            "color": { "value": "#ffffff" },
            "shape": { "type": "circle" },
            "opacity": { "value": 0.3, "random": true, "anim": { "enable": true, "speed": 1, "opacity_min": 0.1, "sync": false } },
            "size": { "value": 3, "random": true },
            "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.1, "width": 1 },
            "move": { "enable": true, "speed": 1.5, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false }
        },
        "interactivity": {
            "detect_on": "window",
            "events": {
                "onhover": { "enable": true, "mode": "grab" },
                "onclick": { "enable": true, "mode": "push" },
                "resize": true
            },
            "modes": {
                "grab": { "distance": 140, "line_linked": { "opacity": 0.5 } },
                "push": { "particles_nb": 1 }
            }
        },
        "retina_detect": true
    });
}