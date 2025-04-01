
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

        // Image gallery functionality
        const gallery = document.getElementById('gallery');
        const prev = document.getElementById('prev');
        const next = document.getElementById('next');
        const img = document.getElementById('current-image');

        const images = [
            'img/pt2.jpg',
            'img/pt3.jpg',
            'img/pt4.jpg'
        ];
        let currentIndex = 0;

        prev.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateImage();
        });

        next.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            updateImage();
        });

        function updateImage() {
            img.classList.add('fade-out');
            setTimeout(() => {
                img.src = images[currentIndex];
                img.alt = 'Image ${currentIndex + 1}';
                img.classList.remove('fade-out');
            }, 500);
        }

        // Modal functionality
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImg");
        const closeModal = document.querySelector(".close");

        img.addEventListener("click", () => {
            modal.style.display = "flex";
            setTimeout(() => {
                modal.style.opacity = "1";
                modal.style.visibility = "visible";
            }, 10);
            modalImg.src = img.src;
        });

        function hideModal() {
            modal.style.opacity = "0";
            setTimeout(() => {
                modal.style.visibility = "hidden";
                modal.style.display = "none";
            }, 300);
        }
        closeModal.addEventListener("click", hideModal);

        window.addEventListener("click", (e) => {
            if (e.target === modal) {
                hideModal();
            }
        });

