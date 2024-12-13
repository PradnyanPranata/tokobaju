const productImages = document.querySelectorAll('.card-img-top');

productImages.forEach(image => {
    image.addEventListener('mouseover', () => {
        image.style.transform = 'scale(1.1)'; // Zoom in
        image.style.transition = 'transform 0.3s ease'; // Animasi halus
    });

    image.addEventListener('mouseout', () => {
        image.style.transform = 'scale(1)'; // Kembali ke ukuran semula
    });
});
