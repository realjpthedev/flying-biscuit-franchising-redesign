// ============================================
// The Flying Biscuit Café — Franchising
// Reasons Section (Disclaimer Disclosure)
// v1.0
// ============================================

const Reasons = (function () {
	"use strict";

	let disclaimer, toggle, body;

	/**
	 * Toggle the disclaimer open/closed
	 */
	function toggleDisclaimer() {
		var isOpen = disclaimer.classList.contains("is-open");
		disclaimer.classList.toggle("is-open");
		toggle.setAttribute("aria-expanded", isOpen ? "false" : "true");
	}

	/**
	 * Bind event listeners
	 */
	function bindEvents() {
		toggle.addEventListener("click", toggleDisclaimer);
	}

	/**
	 * Cache DOM references
	 */
	function cacheDOM() {
		toggle = document.getElementById("reasonsDisclaimerToggle");
		body = document.getElementById("reasonsDisclaimerBody");
		disclaimer = toggle ? toggle.closest(".reasons__disclaimer") : null;
	}

	/**
	 * Initialize
	 */
	function init() {
		cacheDOM();

		if (!toggle || !body || !disclaimer) {
			return;
		}

		bindEvents();
	}

	/**
	 * Tear down
	 */
	function destroy() {
		if (!toggle) return;
		toggle.removeEventListener("click", toggleDisclaimer);
		disclaimer.classList.remove("is-open");
		toggle.setAttribute("aria-expanded", "false");
	}

	// Auto-initialize
	function autoInit() {
		if (document.getElementById("reasonsDisclaimerToggle")) {
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
	};
})();

export default Reasons;
