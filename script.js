
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
            const overlay = document.getElementById("navOverlay");
        
            menuToggle.addEventListener("click", function () {
                const isOpen = nav.style.left === "0px";
                nav.style.left = isOpen ? "-250px" : "0px";
                overlay.style.display = isOpen ? "none" : "block";
            });
        
            overlay.addEventListener("click", function () {
                nav.style.left = "-250px";
                overlay.style.display = "none";
            });
        });
        



