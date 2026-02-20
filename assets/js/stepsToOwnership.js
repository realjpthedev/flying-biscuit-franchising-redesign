// ============================================
// The Flying Biscuit Café — Franchising
// Steps to Ownership — FAQ Accordion
// v1.0
// ============================================

var OwnershipFAQ = (function () {
	"use strict";

	var triggers;

	function toggle(e) {
		var btn = e.currentTarget;
		var item = btn.closest(".ownership__faq-item");
		var expanded = btn.getAttribute("aria-expanded") === "true";

		// Close all
		triggers.forEach(function (t) {
			t.setAttribute("aria-expanded", "false");
			t.closest(".ownership__faq-item").classList.remove("is-open");
		});

		// Open clicked (if it was closed)
		if (!expanded) {
			btn.setAttribute("aria-expanded", "true");
			item.classList.add("is-open");
		}
	}

	function handleKeydown(e) {
		var index = Array.prototype.indexOf.call(triggers, e.currentTarget);
		var next;

		switch (e.key) {
			case "ArrowDown":
				e.preventDefault();
				next = (index + 1) % triggers.length;
				triggers[next].focus();
				break;
			case "ArrowUp":
				e.preventDefault();
				next = (index - 1 + triggers.length) % triggers.length;
				triggers[next].focus();
				break;
			case "Home":
				e.preventDefault();
				triggers[0].focus();
				break;
			case "End":
				e.preventDefault();
				triggers[triggers.length - 1].focus();
				break;
		}
	}

	function init() {
		triggers = document.querySelectorAll(".ownership__faq-trigger");
		if (!triggers.length) return;

		triggers.forEach(function (btn) {
			btn.addEventListener("click", toggle);
			btn.addEventListener("keydown", handleKeydown);
		});
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", init);
	} else {
		init();
	}

	return { init: init };
})();

export default OwnershipFAQ;
