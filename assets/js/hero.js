// ============================================
// The Flying Biscuit Café — Franchising
// Hero Component (YouTube Embed)
// v1.0
// ============================================

const Hero = (function () {
	"use strict";

	let wrapper, embedContainer, poster, playBtn, closeBtn;
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
		iframe.setAttribute("title", "Flying Biscuit franchise opportunity video");
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
	 * Start video playback — inject iframe
	 */
	function play() {
		createIframe();
		wrapper.classList.add("is-playing");
	}

	/**
	 * Stop video and return to poster state
	 */
	function stop() {
		wrapper.classList.remove("is-playing");

		// Small delay so the fade-out transition plays before removing the iframe
		setTimeout(removeIframe, 300);
		playBtn.focus();
	}

	/**
	 * Handle keyboard on the wrapper (Escape to stop)
	 */
	function handleKeydown(e) {
		if (e.key === "Escape" && wrapper.classList.contains("is-playing")) {
			e.stopPropagation();
			stop();
		}
	}

	/**
	 * Bind all event listeners
	 */
	function bindEvents() {
		playBtn.addEventListener("click", play);
		closeBtn.addEventListener("click", stop);
		wrapper.addEventListener("keydown", handleKeydown);
	}

	/**
	 * Cache DOM references
	 */
	function cacheDOM() {
		wrapper = document.getElementById("heroVideoWrapper");
		embedContainer = document.getElementById("heroVideoEmbed");
		poster = document.getElementById("heroVideoPoster");
		playBtn = document.getElementById("heroPlayBtn");
		closeBtn = document.getElementById("heroVideoClose");

		if (wrapper) {
			youtubeId = wrapper.getAttribute("data-youtube-id");
		}
	}

	/**
	 * Initialize the hero component
	 */
	function init() {
		cacheDOM();

		if (!wrapper || !embedContainer || !playBtn || !closeBtn || !youtubeId) {
			console.warn("Hero: Required DOM elements or YouTube ID not found.");
			return;
		}

		bindEvents();
	}

	/**
	 * Tear down event listeners
	 */
	function destroy() {
		if (!wrapper) return;

		playBtn.removeEventListener("click", play);
		closeBtn.removeEventListener("click", stop);
		wrapper.removeEventListener("keydown", handleKeydown);

		removeIframe();
		wrapper.classList.remove("is-playing");
	}

	// Auto-initialize when DOM is ready if hero markup is present
	function autoInit() {
		if (document.getElementById("heroVideoWrapper")) {
			init();
		}
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", autoInit);
	} else {
		autoInit();
	}

	// Public API
	return {
		init: init,
		destroy: destroy,
		play: play,
		stop: stop,
	};
})();

export default Hero;
