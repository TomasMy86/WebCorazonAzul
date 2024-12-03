document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const header = document.querySelector('header');
    const headerHeight = header.offsetHeight;

    const options = {
        root: null,
        rootMargin: `-${headerHeight}px 0px -50% 0px`,
        threshold: 0
    };

    let currentActive = '';

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                currentActive = entry.target.id;
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${currentActive}-section`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }, options);

    sections.forEach(section => {
        observer.observe(section);
    });

    // Remove 'active' when scrolling above the first section
    window.addEventListener('scroll', () => {
        if (window.scrollY < headerHeight) {
            navLinks.forEach(link => link.classList.remove('active'));
        }
    });
});