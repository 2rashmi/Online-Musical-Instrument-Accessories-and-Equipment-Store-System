// // Function to display cart items and calculate total price
// function displayCart() {
//     const cart = JSON.parse(localStorage.getItem('cart')) || [];
//     const cartItemsDiv = document.getElementById('cart-items');
//     let totalPrice = 0;

//     // Clear previous cart items before displaying new ones
//     cartItemsDiv.innerHTML = '';

//     // Display cart items in separate boxes
//     cart.forEach(item => {
//         const itemBox = document.createElement('div');
//         itemBox.classList.add('cart-item-box');

//         // Create an image element and set its src attribute
//         const itemImage = document.createElement('img');
//         itemImage.classList.add('itemImage'); // You can add a class for styling if needed
//         itemImage.src = item.image; // Set the image URL from the cart item
//         itemImage.alt = item.name; // Set alternative text for accessibility
//         itemBox.appendChild(itemImage);

//         const itemName = document.createElement('div');
//         itemName.classList.add('itemName');
//         itemName.textContent = `${item.name}`;
//         itemBox.appendChild(itemName);

//         const itemQuantity = document.createElement('div');
//         itemQuantity.classList.add('itemQuantity');
//         itemQuantity.textContent = `Quantity: ${item.quantity}`;
//         itemBox.appendChild(itemQuantity);
        

//         const itemPrice = document.createElement('div');
//         itemPrice.classList.add('itemPrice');
//         itemPrice.textContent = `Price: $${item.price * item.quantity}`;
//         itemBox.appendChild(itemPrice);

//         const removeButton = document.createElement('button');
//         removeButton.textContent = 'X';
//         removeButton.classList.add('remove-button'); // Add the class to the button element
//         removeButton.addEventListener('click', () => removeItemFromCart(item.id));
//         itemBox.appendChild(removeButton);

//         cartItemsDiv.appendChild(itemBox);

//         // Calculate total price
//         totalPrice += item.price * item.quantity;
//     });

//     // Display total price
//     const totalPriceSpan = document.getElementById('totalPrice');
//     totalPriceSpan.classList.add('totalPriceSpan');
//     totalPriceSpan.textContent = totalPrice.toFixed(2);
// }

// // Function to remove an item from the cart
// function removeItemFromCart(productId) {
//     let cart = JSON.parse(localStorage.getItem('cart')) || [];

//     // Find the index of the item with the given productId in the cart array
//     const itemIndex = cart.findIndex(item => item.id === productId);

//     // If the item is found, remove it from the cart
//     if (itemIndex !== -1) {
//         cart.splice(itemIndex, 1);
//         localStorage.setItem('cart', JSON.stringify(cart));
//         // Update the cart display
//         displayCart();
//     }
// }

// // Call displayCart function when the page loads
// window.onload = displayCart;
