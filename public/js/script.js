import Typewriter from "typewriter-effect";
// navbar-fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};

// Hambuger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

function startTyping() {
    // Menambahkan delay sebelum memulai pengetikan
    setTimeout(() => {
        var typewriter = new Typewriter("#typewriter", {
            loop: true,
            delay: 75,
            deleteSpeed: 50,
            cursor: "",
        });

        typewriter
            .typeString("Ilham Adi Purnomo")
            .pauseFor(2500)
            .deleteAll()
            .start();

        // Menampilkan elemen setelah animasi pengetikan dimulai
        document.querySelector(".home-content h3").style.visibility = "visible";
    }, 1500); // Sesuaikan delay sesuai kebutuhan Anda
}

document.addEventListener("DOMContentLoaded", startTyping);
