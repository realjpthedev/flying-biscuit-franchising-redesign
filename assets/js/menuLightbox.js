// ============================================
// The Flying Biscuit Café — Franchising
// Menu Page — Lightbox Gallery
// v1.0
// ============================================

var MenuLightbox = (function () {
	"use strict";

	var lightbox, image, caption, counter, closeBtn, prevBtn, nextBtn;
	var items = [];
	var current = 0;
	var startX = 0;
	var isOpen = false;

	function open(index) {
		current = index;
		show();
		lightbox.hidden = false;

		// Force reflow before adding class for transition
		void lightbox.offsetWidth;
		lightbox.classList.add("is-open");
		document.body.style.overflow = "hidden";
		isOpen = true;

		// Focus trap
		closeBtn.focus();
	}

	function close() {
		lightbox.classList.remove("is-open");
		document.body.style.overflow = "";
		isOpen = false;

		// Wait for transition then hide
		setTimeout(function () {
			lightbox.hidden = true;
		}, 300);
	}

	function show() {
		var item = items[current];
		image.style.opacity = "0";
		image.src = item.href;
		image.alt = item.caption;
		caption.textContent = item.caption;
		counter.textContent = current + 1 + " / " + items.length;

		image.onload = function () {
			image.style.opacity = "1";
		};

		// Preload neighbors
		preload(current - 1);
		preload(current + 1);
	}

	function preload(index) {
		if (index < 0 || index >= items.length) return;
		var img = new Image();
		img.src = items[index].href;
	}

	function next() {
		current = (current + 1) % items.length;
		show();
	}

	function prev() {
		current = (current - 1 + items.length) % items.length;
		show();
	}

	function onKeydown(e) {
		if (!isOpen) return;

		switch (e.key) {
			case "Escape":
				close();
				break;
			case "ArrowRight":
				next();
				break;
			case "ArrowLeft":
				prev();
				break;
		}
	}

	function onBackdropClick(e) {
		// Close if clicking the backdrop (not the image or controls)
		if (
			e.target === lightbox ||
			e.target.classList.contains("our-menu__lightbox-stage")
		) {
			close();
		}
	}

	// Touch / swipe support
	function onTouchStart(e) {
		startX = e.touches[0].clientX;
	}

	function onTouchEnd(e) {
		var endX = e.changedTouches[0].clientX;
		var diff = startX - endX;

		if (Math.abs(diff) > 50) {
			if (diff > 0) {
				next();
			} else {
				prev();
			}
		}
	}

	function init() {
		lightbox = document.getElementById("menuLightbox");
		if (!lightbox) return;

		image = document.getElementById("lightboxImage");
		caption = document.getElementById("lightboxCaption");
		counter = document.getElementById("lightboxCounter");
		closeBtn = document.getElementById("lightboxClose");
		prevBtn = document.getElementById("lightboxPrev");
		nextBtn = document.getElementById("lightboxNext");

		// Collect gallery items
		var links = document.querySelectorAll(".our-menu__gallery-item");
		for (var i = 0; i < links.length; i++) {
			(function (index) {
				items.push({
					href: links[index].getAttribute("href"),
					caption: links[index].getAttribute("data-caption") || "",
				});

				links[index].addEventListener("click", function (e) {
					e.preventDefault();
					open(index);
				});
			})(i);
		}

		// Controls
		closeBtn.addEventListener("click", close);
		prevBtn.addEventListener("click", prev);
		nextBtn.addEventListener("click", next);

		// Keyboard
		document.addEventListener("keydown", onKeydown);

		// Backdrop click
		lightbox.addEventListener("click", onBackdropClick);

		// Touch / swipe
		lightbox.addEventListener("touchstart", onTouchStart, { passive: true });
		lightbox.addEventListener("touchend", onTouchEnd, { passive: true });
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", init);
	} else {
		init();
	}

	return { init: init };
})();

export default MenuLightbox;
