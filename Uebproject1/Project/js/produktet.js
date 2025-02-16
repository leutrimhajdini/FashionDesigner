/*document.addEventListener("DOMContentLoaded", function() {
  const addToCartButton = document.querySelector(".yellow-button");

  function addToCart(event) {
    const button = event.target;
    const product = button.parentNode;
    const nameElement = product.querySelector(".product-description");
    const priceElement = product.querySelector(".product-price");

    // If the product name or price elements are not found, stop the script
    if (!nameElement || !priceElement) {
      return;
    }

    const name = nameElement.textContent;
    const price = parseFloat(priceElement.textContent.slice(1));

    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    console.log("Before adding item:", cart);

    const existingItem = cart.find(item => item.name === name);
    if (existingItem) {
      existingItem.quantity++;
    } else {
      cart.push({ name, price, quantity: 1 });
    }

    localStorage.setItem("cart", JSON.stringify(cart));

    console.log("After adding item:", cart);
  }

  // Attach an event listener to the add to cart button
  addToCartButton.addEventListener("click", addToCart);
});*/


let addToCartButton = document.querySelectorAll(".yellow-button");
let productsInCart = document.getElementById("products_in_cart");

let currentCount = parseInt(productsInCart.innerHTML, 10);


console.log(productsInCart.innerHTML);


addToCartButton.forEach(button => {
  button.addEventListener("click", function() {
    currentCount++;
    productsInCart.innerHTML = currentCount;
  });
});


let cart = document.getElementById('shporta');
let addToCartButtons = document.querySelectorAll('.yellow-button');

function extractPrice(priceString) {
    let match = priceString.match(/(\d+,\d+)/);
    if (match) {
        return parseFloat(match[0].replace(',', '.')); 
    }
    return 0;
}

let currentCartValue = parseFloat(localStorage.getItem('cartValue') || '0');

cart.innerHTML = currentCartValue.toFixed(2).replace('.', ',');

addToCartButtons.forEach((button, index) => {
  button.addEventListener("click", function() {
    let priceElement = document.querySelectorAll('.productPrice')[index];
    let priceValue = extractPrice(priceElement.innerText);
    currentCartValue += priceValue;
    cart.innerHTML = currentCartValue.toFixed(2).replace('.', ',');
    
    
    localStorage.setItem('cartValue', currentCartValue);
  });
});


