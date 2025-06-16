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





