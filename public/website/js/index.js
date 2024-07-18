
// sticky navbar

let nav = document.querySelector("nav");
window.onscroll = function () {
    if (document.documentElement.scrollTop > 20) {
        nav.classList.add("sticky");
    } else {
        nav.classList.remove("sticky");
    }
}

// responsive menu buttton

const menuBtn = document.querySelector(".menu-icon span");
const searchBtn = document.querySelector(".search-icon");
const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".nav-items");
const form = document.querySelector("form");
menuBtn.onclick = () => {
    items.classList.add("active");
    menuBtn.classList.add("hide");
    searchBtn.classList.add("hide");
    cancelBtn.classList.add("show");
}
cancelBtn.onclick = () => {
    items.classList.remove("active");
    menuBtn.classList.remove("hide");
    searchBtn.classList.remove("hide");
    cancelBtn.classList.remove("show");
    form.classList.remove("active");
    cancelBtn.style.color = "#E70013";
}
// popup function
document.addEventListener('DOMContentLoaded', function () {
    const openPopupBtn = document.getElementById('openPopupBtn');
    const popup = document.getElementById('popup');
    const closeBtn = document.querySelector('.close-btn');

    openPopupBtn.addEventListener('click', function () {
        popup.style.display = 'block';
    });

    closeBtn.addEventListener('click', function () {
        popup.style.display = 'none';
    });

    window.addEventListener('click', function (event) {
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    });
});

 // Owl Carousel

 $(function () {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        items: 3,
        margin: 40,
        loop: true,
        nav: true,
        responsive: {
            0: {
                items: 2,
                margin: 20
            },
            990: {
                items: 3
            }
        }
    });
});

// programs slider
        // script.js

        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 0;

        const showSlide = (index) => {
            slides.forEach((slide, i) => {
                slide.style.display = 'none';
                slide.classList.remove('active');
            });
            slides[index].style.display = 'block';
            slides[index].classList.add('active');

            // Update button states
            if (index === 0) {
                prevBtn.classList.add('disabled');
            } else {
                prevBtn.classList.remove('disabled');
            }

            if (index === slides.length - 1) {
                nextBtn.classList.add('disabled');
            } else {
                nextBtn.classList.remove('disabled');
            }
        };

        const nextSlide = () => {
            if (currentIndex < slides.length - 1) {
                currentIndex++;
                showSlide(currentIndex);
            }
        };

        const prevSlide = () => {
            if (currentIndex > 0) {
                currentIndex--;
                showSlide(currentIndex);
            }
        };

        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);

        // Initialize the slider
        showSlide(currentIndex);