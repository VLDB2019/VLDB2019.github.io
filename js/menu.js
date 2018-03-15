var smallMenu = document.querySelector('header .small-menu'),
    lastScrollY;
if (smallMenu) {
    smallMenu.addEventListener('click', function(e) {
        e.preventDefault();
        var parent = smallMenu.parentElement;
        if (parent.getAttribute('aria-expanded') === 'true') {
            parent.removeAttribute('aria-expanded');
            window.scrollTo(0, lastScrollY);
        } else {
            lastScrollY = window.scrollY;
            window.scrollTo(0, 0);
            parent.setAttribute('aria-expanded', 'true');
        }
    });
}