// ============================================
// The Flying Biscuit Café — Franchising
// FAQ Section — Accordion
// v1.0
// ============================================

const FAQ = (function () {
	"use strict";

	var triggers;
	var items;

	/**
	 * Close a specific FAQ item
	 */
	function closeItem(trigger) {
		var answerId = trigger.getAttribute("aria-controls");
		var answer = document.getElementById(answerId);
		if (!answer) return;

		trigger.setAttribute("aria-expanded", "false");
		answer.classList.remove("is-open");
	}

	/**
	 * Open a specific FAQ item
	 */
	function openItem(trigger) {
		var answerId = trigger.getAttribute("aria-controls");
		var answer = document.getElementById(answerId);
		if (!answer) return;

		trigger.setAttribute("aria-expanded", "true");
		answer.classList.add("is-open");
	}

	/**
	 * Close all items except the one being opened
	 */
	function closeAllExcept(activeTrigger) {
		triggers.forEach(function (trigger) {
			if (trigger !== activeTrigger) {
				closeItem(trigger);
			}
		});
	}

	/**
	 * Handle trigger click — toggle open/closed, close others
	 */
	function handleTriggerClick(e) {
		var trigger = e.currentTarget;
		var isOpen = trigger.getAttribute("aria-expanded") === "true";

		closeAllExcept(trigger);

		if (isOpen) {
			closeItem(trigger);
		} else {
			openItem(trigger);
		}
	}

	/**
	 * Keyboard navigation within the accordion
	 * Home/End jump to first/last, Up/Down move between triggers
	 */
	function handleKeydown(e) {
		var index = triggers.indexOf(e.currentTarget);
		var next;

		switch (e.key) {
			case "ArrowDown":
				e.preventDefault();
				next = triggers[(index + 1) % triggers.length];
				next.focus();
				break;
			case "ArrowUp":
				e.preventDefault();
				next = triggers[(index - 1 + triggers.length) % triggers.length];
				next.focus();
				break;
			case "Home":
				e.preventDefault();
				triggers[0].focus();
				break;
			case "End":
				e.preventDefault();
				triggers[triggers.length - 1].focus();
				break;
		}
	}

	function bindEvents() {
		triggers.forEach(function (trigger) {
			trigger.addEventListener("click", handleTriggerClick);
			trigger.addEventListener("keydown", handleKeydown);
		});
	}

	function cacheDOM() {
		triggers = Array.from(document.querySelectorAll(".faq__trigger"));
		items = Array.from(document.querySelectorAll(".faq__item"));
	}

	function init() {
		cacheDOM();
		if (triggers.length === 0) return;
		bindEvents();
	}

	function destroy() {
		if (!triggers || triggers.length === 0) return;

		triggers.forEach(function (trigger) {
			trigger.removeEventListener("click", handleTriggerClick);
			trigger.removeEventListener("keydown", handleKeydown);
		});
	}

	function autoInit() {
		if (document.querySelector(".faq")) init();
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", autoInit);
	} else {
		autoInit();
	}

	return { init: init, destroy: destroy };
})();

export default FAQ;
