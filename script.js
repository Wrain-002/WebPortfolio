
        // Nav bar
        window.addEventListener("scroll", function () {
        const navbar = document.querySelector("nav");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled"); // Add background when scrolled
        } else {
            navbar.classList.remove("scrolled"); // Remove background when at top
        }
        });
        // Mobile menu toggle
        document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.querySelector(".menu-toggle");
        const nav = document.querySelector("nav");

        menuToggle.addEventListener("click", function () {
            if (nav.style.left === "0px") {
                nav.style.left = "-250px";
            } else {
                nav.style.left = "0px";
            }
        });
        });



