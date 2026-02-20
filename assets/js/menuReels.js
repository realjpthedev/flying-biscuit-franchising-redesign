// ============================================
// The Flying Biscuit Café — Franchising
// Menu Page — Reel Video Players
// v1.0
// ============================================

var MenuReels = (function () {
	"use strict";

	function initReel(reel) {
		var youtubeId = reel.getAttribute("data-youtube-id");
		if (!youtubeId || youtubeId.indexOf("REPLACE") === 0) return;

		var embedWrap = reel.querySelector(".our-menu__reel-embed");

		function play() {
			if (reel.classList.contains("is-playing")) return;

			var iframe = document.createElement("iframe");
			iframe.src =
				"https://www.youtube.com/embed/" +
				youtubeId +
				"?autoplay=1&rel=0&modestbranding=1&playsinline=1";
			iframe.setAttribute("allow", "autoplay; encrypted-media");
			iframe.setAttribute("allowfullscreen", "");
			iframe.setAttribute("title", "Flying Biscuit Café food reel");
			embedWrap.appendChild(iframe);
			reel.classList.add("is-playing");
		}

		reel.addEventListener("click", function (e) {
			e.preventDefault();
			play();
		});
	}

	function init() {
		var reels = document.querySelectorAll(".our-menu__reel");
		for (var i = 0; i < reels.length; i++) {
			initReel(reels[i]);
		}
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", init);
	} else {
		init();
	}

	return { init: init };
})();

export default MenuReels;
