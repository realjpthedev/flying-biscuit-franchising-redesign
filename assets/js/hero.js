// ============================================
// The Flying Biscuit Café — Franchising
// Hero Component (YouTube Embed)
// v1.0
// ============================================

var Hero = (function () {
	"use strict";

	var wrapper, embedContainer, playBtn, closeBtn;
	var youtubeId;
	var iframe;

	/**
	 * Start video playback — inject iframe
	 */
	function play() {
		if (wrapper.classList.contains("is-playing")) return;

		iframe = document.createElement("iframe");
		iframe.src =
			"https://www.youtube.com/embed/" +
			youtubeId +
			"?autoplay=1&rel=0&modestbranding=1&playsinline=1";
		iframe.setAttribute("allow", "autoplay; encrypted-media");
		iframe.setAttribute("allowfullscreen", "");
		iframe.setAttribute("title", "Flying Biscuit franchise opportunity video");
		embedContainer.appendChild(iframe);
		wrapper.classList.add("is-playing");
	}

	/**
	 * Stop video and return to poster state
	 */
	function stop() {
		wrapper.classList.remove("is-playing");

		setTimeout(function () {
			if (iframe) {
				iframe.remove();
				iframe = null;
			}
		}, 300);

		playBtn.focus();
	}

	/**
	 * Handle keyboard (Escape to stop)
	 */
	function handleKeydown(e) {
		if (e.key === "Escape" && wrapper.classList.contains("is-playing")) {
			e.stopPropagation();
			stop();
		}
	}

	/**
	 * Initialize the hero component
	 */
	function init() {
		wrapper = document.getElementById("heroVideoWrapper");
		if (!wrapper) return;

		embedContainer = document.getElementById("heroVideoEmbed");
		playBtn = document.getElementById("heroPlayBtn");
		closeBtn = document.getElementById("heroVideoClose");
		youtubeId = wrapper.getAttribute("data-youtube-id");

		if (!embedContainer || !playBtn || !closeBtn || !youtubeId) return;

		// Click on the wrapper to play (same pattern as franchisee videos)
		wrapper.addEventListener("click", function (e) {
			// Ignore clicks on the close button
			if (e.target.closest(".hero__video-close")) return;
			e.preventDefault();
			play();
		});

		closeBtn.addEventListener("click", function (e) {
			e.stopPropagation();
			stop();
		});

		wrapper.addEventListener("keydown", handleKeydown);
	}

	/**
	 * Tear down
	 */
	function destroy() {
		if (!wrapper) return;

		if (iframe) {
			iframe.remove();
			iframe = null;
		}
		wrapper.classList.remove("is-playing");
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", init);
	} else {
		init();
	}

	return {
		init: init,
		destroy: destroy,
		play: play,
		stop: stop,
	};
})();

export default Hero;
