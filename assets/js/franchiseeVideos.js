// ============================================
// The Flying Biscuit Café — Franchising
// Meet Our Franchisees — Video Players
// v1.0
// ============================================

var FranchiseeVideos = (function () {
	"use strict";

	function initVideo(card) {
		var youtubeId = card.getAttribute("data-youtube-id");
		if (!youtubeId || youtubeId.indexOf("REPLACE") === 0) return;

		var embedWrap = card.querySelector(".franchisees__video-embed");

		function play() {
			if (card.classList.contains("is-playing")) return;

			var iframe = document.createElement("iframe");
			iframe.src =
				"https://www.youtube.com/embed/" +
				youtubeId +
				"?autoplay=1&rel=0&modestbranding=1&playsinline=1";
			iframe.setAttribute("allow", "autoplay; encrypted-media");
			iframe.setAttribute("allowfullscreen", "");
			iframe.setAttribute("title", "Franchisee testimonial video");
			embedWrap.appendChild(iframe);
			card.classList.add("is-playing");
		}

		card.addEventListener("click", function (e) {
			e.preventDefault();
			play();
		});
	}

	function init() {
		var videos = document.querySelectorAll(".franchisees__video");
		if (!videos.length) return;
		for (var i = 0; i < videos.length; i++) {
			initVideo(videos[i]);
		}
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", init);
	} else {
		init();
	}

	return { init: init };
})();

export default FranchiseeVideos;
