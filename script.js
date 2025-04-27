// Nav bar background change on scroll
window.addEventListener("scroll", function () {
    const navbar = document.querySelector("nav");
    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

// Mobile menu toggle
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector("nav");
    const overlay = document.getElementById("navOverlay");

    menuToggle.addEventListener("click", function (event) {
        event.stopPropagation(); // prevent click from bubbling
        const isOpen = nav.style.left === "0px";
        nav.style.left = isOpen ? "-250px" : "0px";
        overlay.style.display = isOpen ? "none" : "block";
    });

    overlay.addEventListener("click", function () {
        closeNav();
    });

    document.addEventListener("click", function (event) {
        const isNavOpen = nav.style.left === "0px";
        const clickedInsideNav = nav.contains(event.target);
        const clickedMenuToggle = event.target.closest(".menu-toggle");

        if (isNavOpen && !clickedInsideNav && !clickedMenuToggle) {
            closeNav();
        }
    });

    function closeNav() {
        nav.style.left = "-250px";
        overlay.style.display = "none";
    }
});
