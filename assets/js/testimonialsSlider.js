// ============================================
// The Flying Biscuit Café — Franchising
// Testimonials Section (Slider)
// v1.0
// ============================================

const TestimonialSlider = (function () {
	"use strict";

	let slider, slides, dots, prevBtn, nextBtn;
	let currentIndex = 0;
	let totalSlides = 0;
	let autoplayTimer = null;

	function goTo(index) {
		if (index < 0) index = totalSlides - 1;
		else if (index >= totalSlides) index = 0;

		slides.forEach(function (slide, i) {
			slide.classList.toggle("is-active", i === index);
		});

		dots.forEach(function (dot, i) {
			dot.classList.toggle("is-active", i === index);
		});

		currentIndex = index;
	}

	function next() {
		goTo(currentIndex + 1);
	}
	function prev() {
		goTo(currentIndex - 1);
	}

	/**
	 * Start autoplay (8s interval)
	 */
	function startAutoplay() {
		stopAutoplay();
		autoplayTimer = setInterval(next, 8000);
	}

	/**
	 * Stop autoplay
	 */
	function stopAutoplay() {
		if (autoplayTimer) {
			clearInterval(autoplayTimer);
			autoplayTimer = null;
		}
	}

	/**
	 * Restart autoplay after user interaction
	 */
	function restartAutoplay() {
		stopAutoplay();
		startAutoplay();
	}

	function handleDotClick(e) {
		var target = e.target.closest(".testimonials__dot");
		if (!target) return;
		var index = parseInt(target.getAttribute("data-goto"), 10);
		if (!isNaN(index)) {
			goTo(index);
			restartAutoplay();
		}
	}

	function handlePrevClick() {
		prev();
		restartAutoplay();
	}

	function handleNextClick() {
		next();
		restartAutoplay();
	}

	/**
	 * Swipe support for mobile
	 */
	function addSwipeSupport() {
		var startX = 0;
		var threshold = 50;

		slider.addEventListener(
			"touchstart",
			function (e) {
				startX = e.touches[0].clientX;
			},
			{ passive: true },
		);

		slider.addEventListener(
			"touchend",
			function (e) {
				var diff = startX - e.changedTouches[0].clientX;
				if (Math.abs(diff) > threshold) {
					if (diff > 0) {
						next();
					} else {
						prev();
					}
					restartAutoplay();
				}
			},
			{ passive: true },
		);
	}

	function bindEvents() {
		prevBtn.addEventListener("click", handlePrevClick);
		nextBtn.addEventListener("click", handleNextClick);

		var dotsContainer = slider.querySelector(".testimonials__dots");
		if (dotsContainer) {
			dotsContainer.addEventListener("click", handleDotClick);
		}

		// Pause autoplay on hover
		slider.addEventListener("mouseenter", stopAutoplay);
		slider.addEventListener("mouseleave", startAutoplay);
	}

	function cacheDOM() {
		slider = document.getElementById("testimonialSlider");
		prevBtn = document.getElementById("testimonialPrev");
		nextBtn = document.getElementById("testimonialNext");

		if (slider) {
			slides = Array.from(slider.querySelectorAll(".testimonials__slide"));
			dots = Array.from(slider.querySelectorAll(".testimonials__dot"));
			totalSlides = slides.length;
		}
	}

	function init() {
		cacheDOM();
		if (!slider || !prevBtn || !nextBtn || totalSlides === 0) return;

		bindEvents();
		addSwipeSupport();
		startAutoplay();
	}

	function destroy() {
		if (!slider) return;
		stopAutoplay();
		prevBtn.removeEventListener("click", handlePrevClick);
		nextBtn.removeEventListener("click", handleNextClick);

		var dotsContainer = slider.querySelector(".testimonials__dots");
		if (dotsContainer) {
			dotsContainer.removeEventListener("click", handleDotClick);
		}

		slider.removeEventListener("mouseenter", stopAutoplay);
		slider.removeEventListener("mouseleave", startAutoplay);
	}

	function autoInit() {
		if (document.getElementById("testimonialSlider")) init();
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", autoInit);
	} else {
		autoInit();
	}

	return { init: init, destroy: destroy, next: next, prev: prev, goTo: goTo };
})();

export default TestimonialSlider;
