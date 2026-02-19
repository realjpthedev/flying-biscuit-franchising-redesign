// ============================================
// The Flying Biscuit Café — Franchising
// Single Post — Copy Link
// v1.0
// ============================================

var SinglePost = (function () {
	"use strict";

	function copyToClipboard(text) {
		// Try modern clipboard API first (requires HTTPS)
		try {
			if (
				navigator.clipboard &&
				typeof navigator.clipboard.writeText === "function"
			) {
				return navigator.clipboard.writeText(text);
			}
		} catch (err) {
			// fall through to fallback
		}

		// Fallback for HTTP / older browsers
		var textarea = document.createElement("textarea");
		textarea.value = text;
		textarea.style.position = "fixed";
		textarea.style.opacity = "0";
		document.body.appendChild(textarea);
		textarea.select();

		try {
			document.execCommand("copy");
		} catch (err) {
			// silently fail
		}

		document.body.removeChild(textarea);
		return Promise.resolve();
	}

	function handleCopyClick(e) {
		e.preventDefault();
		var btn = e.currentTarget;
		var url = btn.getAttribute("data-url");
		if (!url) return;

		copyToClipboard(url).then(function () {
			btn.classList.add("is-copied");
			setTimeout(function () {
				btn.classList.remove("is-copied");
			}, 1500);
		});
	}

	function init() {
		var copyBtns = document.querySelectorAll(".single-post__share-copy");
		if (!copyBtns.length) return;

		for (var i = 0; i < copyBtns.length; i++) {
			copyBtns[i].addEventListener("click", handleCopyClick);
		}
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", init);
	} else {
		init();
	}

	return { init: init };
})();

export default SinglePost;
