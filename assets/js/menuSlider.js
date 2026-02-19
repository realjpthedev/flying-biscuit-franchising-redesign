// ============================================
// The Flying Biscuit Café — Franchising
// Menu Section (Slider)
// v1.0
// ============================================

const MenuSlider = (function () {
	"use strict";

	let slider, slides, dots, prevBtn, nextBtn;
	let currentIndex = 0;
	let totalSlides = 0;

	/**
	 * Go to a specific slide by index
	 */
	function goTo(index) {
		// Wrap around
		if (index < 0) {
			index = totalSlides - 1;
		} else if (index >= totalSlides) {
			index = 0;
		}

		// Update slides
		slides.forEach(function (slide, i) {
			slide.classList.toggle("is-active", i === index);
		});

		// Update dots
		dots.forEach(function (dot, i) {
			dot.classList.toggle("is-active", i === index);
			dot.setAttribute("aria-selected", i === index ? "true" : "false");
			dot.setAttribute("tabindex", i === index ? "0" : "-1");
		});

		currentIndex = index;
	}

	/**
	 * Go to next slide
	 */
	function next() {
		goTo(currentIndex + 1);
	}

	/**
	 * Go to previous slide
	 */
	function prev() {
		goTo(currentIndex - 1);
	}

	/**
	 * Handle dot click
	 */
	function handleDotClick(e) {
		var target = e.target.closest(".menu-section__dot");
		if (!target) return;
		var index = parseInt(target.getAttribute("data-goto"), 10);
		if (!isNaN(index)) {
			goTo(index);
		}
	}

	/**
	 * Handle keyboard navigation on dots
	 */
	function handleDotKeydown(e) {
		var target = e.target.closest(".menu-section__dot");
		if (!target) return;

		switch (e.key) {
			case "ArrowRight":
			case "ArrowDown":
				e.preventDefault();
				next();
				dots[currentIndex].focus();
				break;

			case "ArrowLeft":
			case "ArrowUp":
				e.preventDefault();
				prev();
				dots[currentIndex].focus();
				break;

			case "Home":
				e.preventDefault();
				goTo(0);
				dots[0].focus();
				break;

			case "End":
				e.preventDefault();
				goTo(totalSlides - 1);
				dots[totalSlides - 1].focus();
				break;
		}
	}

	/**
	 * Bind all event listeners
	 */
	function bindEvents() {
		prevBtn.addEventListener("click", prev);
		nextBtn.addEventListener("click", next);

		var dotsContainer = slider.querySelector(".menu-section__dots");
		if (dotsContainer) {
			dotsContainer.addEventListener("click", handleDotClick);
			dotsContainer.addEventListener("keydown", handleDotKeydown);
		}
	}

	/**
	 * Cache DOM references
	 */
	function cacheDOM() {
		slider = document.getElementById("menuSlider");
		prevBtn = document.getElementById("menuSliderPrev");
		nextBtn = document.getElementById("menuSliderNext");

		if (slider) {
			slides = Array.from(slider.querySelectorAll(".menu-section__slide"));
			dots = Array.from(slider.querySelectorAll(".menu-section__dot"));
			totalSlides = slides.length;
		}
	}

	/**
	 * Initialize
	 */
	function init() {
		cacheDOM();

		if (!slider || !prevBtn || !nextBtn || totalSlides === 0) {
			console.warn("MenuSlider: Required DOM elements not found.");
			return;
		}

		// Set roving tabindex on dots
		dots.forEach(function (dot, i) {
			dot.setAttribute("tabindex", i === 0 ? "0" : "-1");
		});

		bindEvents();
	}

	/**
	 * Tear down
	 */
	function destroy() {
		if (!slider) return;

		prevBtn.removeEventListener("click", prev);
		nextBtn.removeEventListener("click", next);

		var dotsContainer = slider.querySelector(".menu-section__dots");
		if (dotsContainer) {
			dotsContainer.removeEventListener("click", handleDotClick);
			dotsContainer.removeEventListener("keydown", handleDotKeydown);
		}
	}

	// Auto-initialize
	function autoInit() {
		if (document.getElementById("menuSlider")) {
			init();
		}
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", autoInit);
	} else {
		autoInit();
	}

	return {
		init: init,
		destroy: destroy,
		next: next,
		prev: prev,
		goTo: goTo,
	};
})();

export default MenuSlider;
