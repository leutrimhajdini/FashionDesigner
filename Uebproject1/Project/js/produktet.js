document.addEventListener('DOMContentLoaded', function() {
  const addToCartButtons = document.querySelectorAll('.yellow-button');
  const productsInCart = document.getElementById('products_in_cart');
  const cartValue = document.getElementById('shporta');

  function updateCart(price) {
      // Update count
      let currentCount = parseInt(localStorage.getItem('currentItemCount')) || 0;
      currentCount++;
      localStorage.setItem('currentItemCount', currentCount);
      productsInCart.textContent = currentCount;

      // Update value
      let currentCartValue = parseFloat(localStorage.getItem('cartValue')) || 0;
      currentCartValue += price;
      localStorage.setItem('cartValue', currentCartValue);
      cartValue.textContent = currentCartValue.toFixed(2).replace('.', ',') + '€';
  }

  addToCartButtons.forEach(button => {
      button.addEventListener('click', function() {
          const priceElement = this.closest('.product-price').querySelector('.productPrice');
          const priceText = priceElement.textContent.replace('€', '').trim();
          const price = parseFloat(priceText.replace(',', '.'));
          updateCart(price);
      });
  });
});
