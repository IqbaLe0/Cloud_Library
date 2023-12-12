

// Hamburger Menu

const menu = document.querySelector('#menu');
const navbarNav = document.querySelector('.navbar-nav');


menu.onclick= function() {
    navbarNav.classList.toggle('active');
};

document.addEventListener('click', function(e){
    if(!menu.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active')
    }
});

// Hamburger Menu End


    // Popup Form Tambah data Start
    const addBookBtn = document.getElementById("addBookBtn");
    const addBookPopup = document.getElementById("addBookPopup");
    const addBookForm = document.getElementById("addBookForm");
    const overlay = document.getElementById("overlay");
    
    
    addBookBtn.addEventListener("click", function () {
        addBookPopup.style.display = "block";
        overlay.style.display = "block";
    });
    
    addBookForm.addEventListener("submit", function (event) {
        event.preventDefault();
        // Tambahkan penanganan pengiriman data ke server di sini jika diperlukan
        addBookForm.submit();
        addBookPopup.style.display = "none";
        overlay.style.display = "none";
    });
    
    overlay.addEventListener("click", function () {
        addBookPopup.style.display = "none";
        overlay.style.display = "none";
    });
    
    // Popup Form Tambah data End
