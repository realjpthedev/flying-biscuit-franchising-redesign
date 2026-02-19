// ============================================
// The Flying Biscuit Café — Franchising
// Reviews Section (Marquee)
// v1.0
// ============================================

const Reviews = (function () {
	"use strict";

	/**
	 * Clone all cards inside each track so the animation loops seamlessly.
	 * The CSS translateX(-50%) syncs with the duplicated content.
	 */
	function duplicateTracks() {
		var tracks = document.querySelectorAll(".reviews__track");

		tracks.forEach(function (track) {
			var cards = track.innerHTML;
			track.innerHTML = cards + cards;
		});
	}

	function init() {
		var section = document.querySelector(".reviews");
		if (!section) return;

		duplicateTracks();
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", init);
	} else {
		init();
	}

	return { init: init };
})();

export default Reviews;
