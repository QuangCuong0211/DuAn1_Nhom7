// JavaScript to handle image switching and interactive elements

const thumbnails = document.querySelectorAll('.thumbnail-images img');
const mainImage = document.querySelector('.main-image');

thumbnails.forEach(thumb => {
    thumb.addEventListener('click', function() {
        mainImage.src = thumb.src;
    });
});

// Add color and size selection functionality
const colorButtons = document.querySelectorAll('.color-btn');
const sizeButtons = document.querySelectorAll('.size-btn');

colorButtons.forEach(btn => {
    btn.addEventListener('click', function() {
        colorButtons.forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
    });
});

sizeButtons.forEach(btn => {
    btn.addEventListener('click', function() {
        sizeButtons.forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
    });
});
