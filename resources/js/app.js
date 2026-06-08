import '../css/custom.css'

window.addEventListener("scroll", function () {
    const nav = document.querySelector("nav");

    if (window.scrollY > 20) {
        nav.classList.add("nav-scroll");
    } else {
        nav.classList.remove("nav-scroll");
    }
});