// ============================================
// The Flying Biscuit Café — Franchising
// FAQ Page — Accordion
// v1.0
// ============================================

var FaqPage = (function () {
	"use strict";

	function init() {
		var items = document.querySelectorAll(".faq-page__item");
		if (!items.length) return;

		var triggers = document.querySelectorAll(".faq-page__trigger");

		for (var i = 0; i < triggers.length; i++) {
			triggers[i].addEventListener("click", function () {
				var btn = this;
				var item = btn.closest(".faq-page__item");
				var isOpen = item.classList.contains("is-open");

				// Close all
				for (var j = 0; j < items.length; j++) {
					items[j].classList.remove("is-open");
					items[j]
						.querySelector(".faq-page__trigger")
						.setAttribute("aria-expanded", "false");
				}

				// Open clicked (if it was closed)
				if (!isOpen) {
					item.classList.add("is-open");
					btn.setAttribute("aria-expanded", "true");
				}
			});

			// Keyboard: Enter & Space
			triggers[i].addEventListener("keydown", function (e) {
				if (e.key === "Enter" || e.key === " ") {
					e.preventDefault();
					this.click();
				}
			});
		}
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", init);
	} else {
		init();
	}

	return { init: init };
})();

export default FaqPage;
