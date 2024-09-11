// Toggle mobile menu
function toggleMenu() {
    const menu = document.querySelector('.nav-menu');
    menu.classList.toggle('active');
}

// Add a dynamic background to the navigation
window.addEventListener('scroll', function() {
    var navbar = document.querySelector('nav');
    // Add class "scrolled" when page is scrolled down by 50px
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Initialisation of aos animation
AOS.init();