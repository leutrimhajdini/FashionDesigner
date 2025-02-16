const productImages = document.querySelectorAll('.product-images img', '.product-images2 img');
const previousArrow = document.querySelector('.previous-arrow');
const nextArrow = document.querySelector('.next-arrow');

let currentImageIndex = 0;

productImages[currentImageIndex].classList.add('active');

previousArrow.addEventListener('click', () => {
  productImages[currentImageIndex].classList.remove('active');
  currentImageIndex = (currentImageIndex + productImages.length - 1) % productImages.length;
  productImages[currentImageIndex].classList.add('active');
});

nextArrow.addEventListener('click', () => {
  productImages[currentImageIndex].classList.remove('active');
  currentImageIndex = (currentImageIndex + 1) % productImages.length;
  productImages[currentImageIndex].classList.add('active');
});