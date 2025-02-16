 // Get references to the cart elements
 const cartItemsTable = document.querySelector(".cart-items tbody");
 const cartTotalSpan = document.querySelector(".cart-total span");

 // Load the cart from local storage, or create a new cart if it doesn't exist
 let cart = JSON.parse(localStorage.getItem("cart")) || [];

 // Render the cart items
 function renderCartItems() {
   cartItemsTable.innerHTML = "";

   for (let item of cart) {
     const tr = document.createElement("tr");
     tr.innerHTML = `
       <td>${item.name}</td>
       <td>${item.price}</td>
       <td>${item.quantity}</td>
       <td>${item.price * item.quantity}</td>
     `;
     cartItemsTable.appendChild(tr);
   }

   let total = 0;
   for (let item of cart) {
     total += item.price * item.quantity;
     total=0;
   }

   cartTotalSpan.textContent = total;
 }

 renderCartItems();
