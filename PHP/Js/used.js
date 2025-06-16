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




