document.addEventListener("DOMContentLoaded", function() {
    // Animation d'apparition au scroll (Fade In Up)
    const elementsToAnimate = document.querySelectorAll('.fade-in-up, .intro-box, .narrative-box, .gear-card');
    
    // Ajoute la classe initiale si elle n'est pas déjà dans le HTML
    elementsToAnimate.forEach(el => {
        if (!el.classList.contains('fade-in-up')) {
            el.classList.add('fade-in-up');
        }
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    elementsToAnimate.forEach(el => observer.observe(el));
});

/* =========================================
   PARTICLES.JS CONFIG
   ========================================= */
if (typeof particlesJS !== 'undefined') {
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80, // <--- MODIFIÉ : 80 particules au lieu de 40 pour un fond plus riche
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle"
            },
            "opacity": {
                "value": 0.3,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.1,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1.5,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false
            }
        },
        "interactivity": {
            "detect_on": "window",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 0.5
                    }
                },
                "push": {
                    "particles_nb": 1 // On garde 1 seule particule au clic pour éviter le lag
                }
            }
        },
        "retina_detect": true
    });
}