const swiper = new Swiper('.swiper', {
    // Property to make slider loop
    loop: true,
    
    // Changes slides on it's own
    autoplay: {
        delay: 5000,
    },

    // Assign pagination to element
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },

    // Assign navigation arrows to element
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    }
});