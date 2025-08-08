const sliderContainer = document.getElementById("slider-container");

if (sliderContainer) {
    const slider = document.getElementById("slider");
    const slides = document.querySelectorAll(".slide");
    const dotsContainer = document.getElementById("dots");
    const totalSlides = slides.length;

    let currentSlide = 0;
    let autoSlideInterval;
    let isTransitioning = false;

    function createDots() {
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement("span");
            dot.classList.add("dot");
            if (i === 0) dot.classList.add("active");
            dot.addEventListener("click", () => {
                if (!isTransitioning) goToSlide(i);
            });
            dotsContainer.appendChild(dot);
        }
    }

    function updateDots() {
        const dots = document.querySelectorAll(".dot");
        dots.forEach((dot, index) => {
            dot.classList.toggle("active", index === currentSlide);
        });
    }

    function updateSlide(animate = true) {
        isTransitioning = true;
        slider.style.transition = animate ? "transform 0.5s ease-in-out" : "none";
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        updateDots();

        setTimeout(() => {
            isTransitioning = false;
        }, 500);
    }

    function nextSlide() {
        if (isTransitioning) return;
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlide();
    }

    function prevSlide() {
        if (isTransitioning) return;
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlide();
    }

    function goToSlide(index) {
        currentSlide = index;
        updateSlide();
    }

    function startAutoSlide() {
        stopAutoSlide();
        autoSlideInterval = setInterval(nextSlide, 5000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    function setupEventListeners() {
        document.querySelector('.next').addEventListener('click', () => {
            nextSlide();
            startAutoSlide();
        });

        document.querySelector('.prev').addEventListener('click', () => {
            prevSlide();
            startAutoSlide();
        });

        sliderContainer.addEventListener("mouseenter", stopAutoSlide);
        sliderContainer.addEventListener("mouseleave", startAutoSlide);

        let touchStartX = 0;
        sliderContainer.addEventListener("touchstart", (e) => {
            touchStartX = e.touches[0].clientX;
            stopAutoSlide();
        }, { passive: true });

        sliderContainer.addEventListener("touchend", (e) => {
            const touchEndX = e.changedTouches[0].clientX;
            const deltaX = touchEndX - touchStartX;

            if (deltaX > 50) prevSlide();
            else if (deltaX < -50) nextSlide();

            startAutoSlide();
        });
    }

    function init() {
        if (totalSlides > 1) {
            createDots();
            setupEventListeners();
            startAutoSlide();
        }
    }

    init();
}
