// ============================================
// The Flying Biscuit Café — Franchising
// Shared Disclaimer Toggle
// v1.0
// ============================================

var Disclaimer = (function () {
	"use strict";

	function toggle(e) {
		var btn = e.currentTarget;
		var expanded = btn.getAttribute("aria-expanded") === "true";
		var bodyId = btn.getAttribute("aria-controls");
		var body = document.getElementById(bodyId);
		if (!body) return;

		btn.setAttribute("aria-expanded", expanded ? "false" : "true");
		body.classList.toggle("is-open");
	}

	function init() {
		var triggers = document.querySelectorAll(".disclaimer__toggle");
		if (!triggers.length) return;

		for (var i = 0; i < triggers.length; i++) {
			triggers[i].addEventListener("click", toggle);
		}
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", init);
	} else {
		init();
	}

	return { init: init };
})();

export default Disclaimer;
