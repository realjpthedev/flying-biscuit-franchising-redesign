// ============================================
// The Flying Biscuit Café — Franchising
// World-Class Support Section — Video
// v1.0
// ============================================

const Support = (function () {
	"use strict";

	var videoWrapper;
	var playBtn;
	var closeBtn;
	var youtubeId;
	var iframe;

	/**
	 * Inject YouTube iframe and show close button
	 */
	function play() {
		if (!youtubeId) return;

		iframe = document.createElement("iframe");
		iframe.src =
			"https://www.youtube.com/embed/" + youtubeId + "?autoplay=1&rel=0";
		iframe.allow = "autoplay; encrypted-media";
		iframe.setAttribute("allowfullscreen", "");
		iframe.setAttribute("title", "Flying Biscuit franchise support video");

		videoWrapper.appendChild(iframe);
		videoWrapper.classList.add("is-playing");
	}

	/**
	 * Remove iframe and restore poster state
	 */
	function stop() {
		if (iframe && iframe.parentNode) {
			iframe.parentNode.removeChild(iframe);
			iframe = null;
		}
		videoWrapper.classList.remove("is-playing");
		playBtn.focus();
	}

	/**
	 * Handle Escape key to close video
	 */
	function handleKeydown(e) {
		if (e.key === "Escape" && videoWrapper.classList.contains("is-playing")) {
			stop();
		}
	}

	function createCloseButton() {
		closeBtn = document.createElement("button");
		closeBtn.className = "support__video-close";
		closeBtn.setAttribute("type", "button");
		closeBtn.setAttribute("aria-label", "Close video");
		closeBtn.textContent = "✕";
		closeBtn.addEventListener("click", stop);
		videoWrapper.appendChild(closeBtn);
	}

	function bindEvents() {
		playBtn.addEventListener("click", play);
		document.addEventListener("keydown", handleKeydown);
	}

	function cacheDOM() {
		videoWrapper = document.querySelector(".support__video");
		if (!videoWrapper) return false;

		playBtn = videoWrapper.querySelector(".support__video-play");
		youtubeId = videoWrapper.getAttribute("data-youtube-id");
		return true;
	}

	function init() {
		if (!cacheDOM()) return;
		createCloseButton();
		bindEvents();
	}

	function destroy() {
		if (!playBtn) return;
		playBtn.removeEventListener("click", play);
		document.removeEventListener("keydown", handleKeydown);
		if (closeBtn) closeBtn.removeEventListener("click", stop);
		stop();
	}

	function autoInit() {
		if (document.querySelector(".support__video")) init();
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", autoInit);
	} else {
		autoInit();
	}

	return { init: init, destroy: destroy };
})();

export default Support;
