// Burger button/menu

const hamburgerButton = document.querySelector(".nav-toggler");
const navigation = document.querySelector(".nav-mobile");

hamburgerButton.addEventListener("click", toggleNav)

function toggleNav() {
    hamburgerButton.classList.toggle("active")
    navigation.classList.toggle("active")
}

// Fin burger/button