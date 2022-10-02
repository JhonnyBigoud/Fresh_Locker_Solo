// Burger button/menu

const hamburgerButton = document.querySelector(".nav-toggler");
const navigation = document.querySelector(".nav-mobile");

hamburgerButton.addEventListener("click", toggleNav)

function toggleNav() {
    hamburgerButton.classList.toggle("active")
    navigation.classList.toggle("active")
}

// Fin burger/button

// Navigation active
const activePage = window.location.pathname;
console.log(activePage);

const navLinks = document.querySelectorAll('nav a').forEach(link => {
    if(link.href.includes(`${activePage}`)) {
        link.classList.add('activated');
    }
})

// Fin navigation 