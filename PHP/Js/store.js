document.querySelectorAll('.crtbtn').forEach(button => {
    button.addEventListener('click', () => {
        const productId = button.getAttribute('data-product-id');
        const itemImage = button.parentElement.parentElement.querySelector('.img').src;
        const productName = button.parentElement.parentElement.querySelector('.desc1').textContent;
        const productPrice = parseFloat(button.parentElement.parentElement.querySelector('.price').textContent.slice(1));
        addToCart(productId, productName, productPrice, itemImage);
    });
});

// Function to add items to the cart
function addToCart(productId, productName, productPrice, itemImage) {
    // Retrieve the cart from localStorage or initialize an empty array
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Check if the product is already in the cart
    const existingProductIndex = cart.findIndex(item => item.id === productId);
    if (existingProductIndex !== -1) {
        // If the product is already in the cart, update its quantity
        cart[existingProductIndex].quantity++;
    } else {
        // If the product is not in the cart, add it
        cart.push({ id: productId, name: productName, price: productPrice, quantity: 1, image: itemImage });
    }

    // Save the updated cart to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
}
//login popup
document.querySelector("#dec2").addEventListener("click", function() {
    document.querySelector(".overlay").style.display = "block";
    document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click", function() {
    document.querySelector(".overlay").style.display = "none";
    document.querySelector(".popup").classList.remove("active");
});

//signin popup
document.querySelector("#dec1").addEventListener("click", function() {
    document.querySelector(".overlay1").style.display = "block";
    document.querySelector(".popup1").classList.add("active");
});

document.querySelector(".popup1 .close-btn").addEventListener("click", function() {
    document.querySelector(".overlay1").style.display = "none";
    document.querySelector(".popup1").classList.remove("active");
});

function checkpassword(){
	var Password=document.getElementById("pwd").value;
	var cPassword=document.getElementById("repwd").value;
    var messageElement = document.getElementById("password-message");
	
	if(Password != cPassword){
		alert("Password Not Match...");
	}
	else{
		alert("Success");
		return true;
	}
}	


function enablebtn(){
	if(document.getElementById("check").checked)
	{
		
		document.getElementById("submit").disabled=false;
	}
	else{
		document.getElementById("submit").disabled=true;
	}
}

//category showing
document.addEventListener('DOMContentLoaded', function() {
    var categoryToggle = document.getElementById('categoryToggle');
    var categoryListWrapper = document.getElementById('categoryListWrapper');
    var isOpen = false;

    categoryToggle.addEventListener('click', function(event) {
        event.stopPropagation();
        isOpen = !isOpen;
        updateCategoryListVisibility();
    });

    document.addEventListener('click', function(event) {
        isOpen = false;
        updateCategoryListVisibility();
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === ' ') {
            isOpen = !isOpen;
            updateCategoryListVisibility();
        }
    });

    function updateCategoryListVisibility() {
        categoryListWrapper.style.display = isOpen ? 'block' : 'none';
    }
});

//favorite
document.getElementById('favlink').addEventListener('click', function(event) {
    alert('Please login to Watch your Favorite');
});
//Cart
document.getElementById('carting').addEventListener('click', function(event) {
    alert('Please login to Watch your Cart');
});
//selling
document.getElementById('sell').addEventListener('click', function(event) {
    alert('Please login to Sell Your Meloba Items');
});
//order
document.getElementById('orders').addEventListener('click', function(event) {
    alert('Please login to See Your Meloba Orders');
});
//returns
document.getElementById('return').addEventListener('click', function(event) {
    alert('Please login to Return your Melobea Items');
});




