// ============================================
// The Flying Biscuit Café — Franchising
// Meet the Family Section (YouTube Embed)
// v1.0
// ============================================

const FamilyVideo = (function () {
	"use strict";

	let wrapper, embedContainer, playBtn, closeBtn;
	let youtubeId;
	let iframe;

	/**
	 * Build and inject the YouTube iframe
	 */
	function createIframe() {
		iframe = document.createElement("iframe");
		iframe.src =
			"https://www.youtube.com/embed/" +
			youtubeId +
			"?autoplay=1&rel=0&modestbranding=1&playsinline=1";
		iframe.setAttribute("allow", "autoplay; encrypted-media");
		iframe.setAttribute("allowfullscreen", "");
		iframe.setAttribute(
			"title",
			"Meet the Flying Biscuit team and franchisees",
		);
		embedContainer.appendChild(iframe);
	}

	/**
	 * Remove the YouTube iframe from the DOM
	 */
	function removeIframe() {
		if (iframe) {
			iframe.remove();
			iframe = null;
		}
	}

	/**
	 * Start playback
	 */
	function play() {
		createIframe();
		wrapper.classList.add("is-playing");
	}

	/**
	 * Stop and reset
	 */
	function stop() {
		wrapper.classList.remove("is-playing");
		setTimeout(removeIframe, 300);
		playBtn.focus();
	}

	/**
	 * Escape key stops video
	 */
	function handleKeydown(e) {
		if (e.key === "Escape" && wrapper.classList.contains("is-playing")) {
			e.stopPropagation();
			stop();
		}
	}

	function bindEvents() {
		playBtn.addEventListener("click", play);
		closeBtn.addEventListener("click", stop);
		wrapper.addEventListener("keydown", handleKeydown);
	}

	function cacheDOM() {
		wrapper = document.getElementById("familyVideo");
		embedContainer = document.getElementById("familyVideoEmbed");
		playBtn = document.getElementById("familyPlayBtn");
		closeBtn = document.getElementById("familyVideoClose");

		if (wrapper) {
			youtubeId = wrapper.getAttribute("data-youtube-id");
		}
	}

	function init() {
		cacheDOM();

		if (!wrapper || !embedContainer || !playBtn || !closeBtn || !youtubeId) {
			return;
		}

		bindEvents();
	}

	function destroy() {
		if (!wrapper) return;
		playBtn.removeEventListener("click", play);
		closeBtn.removeEventListener("click", stop);
		wrapper.removeEventListener("keydown", handleKeydown);
		removeIframe();
		wrapper.classList.remove("is-playing");
	}

	function autoInit() {
		if (document.getElementById("familyVideo")) {
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
		play: play,
		stop: stop,
	};
})();

export default FamilyVideo;
