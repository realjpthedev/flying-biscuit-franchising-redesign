// ============================================
// The Flying Biscuit Café — Franchising
// Sticky "Talk with Andrew" CTA
// v1.0
// ============================================

var StickyCta = (function () {
	"use strict";

	var btn, target;

	function onScroll() {
		var rect = target.getBoundingClientRect();
		// Show when the form card is fully above the viewport
		if (rect.bottom < 0) {
			btn.classList.add("is-visible");
		} else {
			btn.classList.remove("is-visible");
		}
	}

	function onClick(e) {
		e.preventDefault();
		target.scrollIntoView({ behavior: "smooth", block: "center" });
	}

	function init() {
		btn = document.getElementById("stickyCta");
		if (!btn) return;

		target = document.getElementById("heroFormCard");
		if (!target) return;

		window.addEventListener("scroll", onScroll, { passive: true });
		btn.addEventListener("click", onClick);
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", init);
	} else {
		init();
	}

	return { init: init };
})();

export default StickyCta;
