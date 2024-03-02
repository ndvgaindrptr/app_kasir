// assets/js/script.js

document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.fadeInUp');

    var isInViewport = function(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    };

    var callback = function() {
        elements.forEach(function(el) {
            if (isInViewport(el)) {
                el.classList.add('animated');
            }
        });
    };

    window.addEventListener('scroll', callback);
    window.addEventListener('resize', callback);
    callback();
});
