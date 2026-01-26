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