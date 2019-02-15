var slideUp = {
    distance: '150%',
    origin: 'bottom',
    opacity: null
};

ScrollReveal().reveal('.slide-up', slideUp);

var node = document.querySelector('#imagen2');

ScrollReveal().reveal(node);


ScrollReveal().reveal('.item', {
    delay: 375,
    duration: 500,
    reset: true
});
