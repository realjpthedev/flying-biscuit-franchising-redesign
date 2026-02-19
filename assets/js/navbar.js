// ============================================
// The Flying Biscuit Café — Franchising
// Navbar Component
// v1.0
// ============================================

const Navbar = (function () {
	"use strict";

	let hamburger, drawer, overlay, closeBtn, navbar, mainContent;
	let dropdown, dropdownTrigger, dropdownMenu;
	let drawerDropdown, drawerDropdownTrigger;
	let hoverTimeout;

	/**
	 * Collect all focusable elements inside the drawer
	 */
	function getFocusableElements() {
		return drawer.querySelectorAll(
			'a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])',
		);
	}

	/**
	 * Open the mobile drawer
	 */
	function openDrawer() {
		hamburger.classList.add("is-open");
		drawer.classList.add("is-open");
		overlay.classList.add("is-visible");
		document.body.classList.add("nav-open");

		hamburger.setAttribute("aria-expanded", "true");
		drawer.setAttribute("aria-hidden", "false");
		overlay.setAttribute("aria-hidden", "false");

		if (mainContent) {
			mainContent.setAttribute("aria-hidden", "true");
			mainContent.setAttribute("inert", "");
		}
		navbar.setAttribute("aria-hidden", "true");
		navbar.setAttribute("inert", "");

		closeBtn.focus();
	}

	/**
	 * Close the mobile drawer
	 */
	function closeDrawer() {
		hamburger.classList.remove("is-open");
		drawer.classList.remove("is-open");
		overlay.classList.remove("is-visible");
		document.body.classList.remove("nav-open");

		hamburger.setAttribute("aria-expanded", "false");
		drawer.setAttribute("aria-hidden", "true");
		overlay.setAttribute("aria-hidden", "true");

		if (mainContent) {
			mainContent.removeAttribute("aria-hidden");
			mainContent.removeAttribute("inert");
		}
		navbar.removeAttribute("aria-hidden");
		navbar.removeAttribute("inert");

		hamburger.focus();

		// Reset mobile accordion
		closeDrawerDropdown();
	}

	/**
	 * Toggle drawer open/closed
	 */
	function toggleDrawer() {
		drawer.classList.contains("is-open") ? closeDrawer() : openDrawer();
	}

	/**
	 * Trap Tab focus within the drawer while open
	 */
	function handleFocusTrap(e) {
		if (e.key !== "Tab" || !drawer.classList.contains("is-open")) return;

		const focusable = getFocusableElements();
		if (focusable.length === 0) return;

		const firstFocusable = focusable[0];
		const lastFocusable = focusable[focusable.length - 1];

		if (e.shiftKey) {
			if (document.activeElement === firstFocusable) {
				e.preventDefault();
				lastFocusable.focus();
			}
		} else {
			if (document.activeElement === lastFocusable) {
				e.preventDefault();
				firstFocusable.focus();
			}
		}
	}

	/**
	 * Handle keyboard events (Escape + focus trap)
	 */
	function handleKeydown(e) {
		if (e.key === "Escape" && drawer.classList.contains("is-open")) {
			closeDrawer();
		}
		handleFocusTrap(e);
	}

	/**
	 * Toggle scroll shadow on navbar
	 */
	function handleScroll() {
		navbar.classList.toggle("is-scrolled", window.scrollY > 10);
	}

	// ----------------------------------------
	// DESKTOP DROPDOWN
	// ----------------------------------------

	/**
	 * Open the desktop dropdown
	 */
	function openDropdown() {
		clearTimeout(hoverTimeout);
		dropdown.classList.add("is-open");
		dropdownTrigger.setAttribute("aria-expanded", "true");
	}

	/**
	 * Close the desktop dropdown
	 */
	function closeDropdown() {
		dropdown.classList.remove("is-open");
		dropdownTrigger.setAttribute("aria-expanded", "false");
	}

	/**
	 * Close dropdown after a short delay (hover grace period)
	 */
	function closeDropdownDelayed() {
		hoverTimeout = setTimeout(closeDropdown, 150);
	}

	/**
	 * Handle keyboard navigation within the dropdown
	 */
	function handleDropdownKeydown(e) {
		var items = dropdownMenu.querySelectorAll(".navbar__dropdown-item");
		var currentIndex = Array.prototype.indexOf.call(
			items,
			document.activeElement,
		);

		switch (e.key) {
			case "ArrowDown":
				e.preventDefault();
				if (!dropdown.classList.contains("is-open")) {
					openDropdown();
					items[0].focus();
				} else {
					var nextIndex =
						currentIndex < items.length - 1 ? currentIndex + 1 : 0;
					items[nextIndex].focus();
				}
				break;

			case "ArrowUp":
				e.preventDefault();
				if (dropdown.classList.contains("is-open")) {
					var prevIndex =
						currentIndex > 0 ? currentIndex - 1 : items.length - 1;
					items[prevIndex].focus();
				}
				break;

			case "Escape":
				if (dropdown.classList.contains("is-open")) {
					e.stopPropagation();
					closeDropdown();
					dropdownTrigger.focus();
				}
				break;
		}
	}

	// ----------------------------------------
	// MOBILE DRAWER DROPDOWN (ACCORDION)
	// ----------------------------------------

	/**
	 * Toggle the mobile drawer accordion dropdown
	 */
	function toggleDrawerDropdown() {
		var isOpen = drawerDropdown.classList.contains("is-open");
		drawerDropdown.classList.toggle("is-open");
		drawerDropdownTrigger.setAttribute(
			"aria-expanded",
			isOpen ? "false" : "true",
		);
	}

	/**
	 * Close the mobile drawer accordion dropdown
	 */
	function closeDrawerDropdown() {
		drawerDropdown.classList.remove("is-open");
		drawerDropdownTrigger.setAttribute("aria-expanded", "false");
	}

	/**
	 * Close dropdown when focus leaves the container entirely
	 */
	function handleDropdownFocusout(e) {
		// Small delay to let the browser update activeElement
		setTimeout(function () {
			if (
				dropdown.classList.contains("is-open") &&
				!dropdown.contains(document.activeElement)
			) {
				closeDropdown();
			}
		}, 0);
	}

	/**
	 * Bind all event listeners
	 */
	function bindEvents() {
		// Drawer
		hamburger.addEventListener("click", toggleDrawer);
		closeBtn.addEventListener("click", closeDrawer);
		overlay.addEventListener("click", closeDrawer);
		document.addEventListener("keydown", handleKeydown);
		window.addEventListener("scroll", handleScroll, { passive: true });

		drawer
			.querySelectorAll(".navbar__drawer-link, .navbar__drawer-cta")
			.forEach(function (link) {
				link.addEventListener("click", closeDrawer);
			});

		// Desktop dropdown — hover
		if (dropdown) {
			dropdown.addEventListener("mouseenter", openDropdown);
			dropdown.addEventListener("mouseleave", closeDropdownDelayed);

			// Desktop dropdown — click toggle (for touch laptops)
			dropdownTrigger.addEventListener("click", function () {
				dropdown.classList.contains("is-open")
					? closeDropdown()
					: openDropdown();
			});

			// Desktop dropdown — keyboard
			dropdown.addEventListener("keydown", handleDropdownKeydown);

			// Close when focus leaves the dropdown entirely
			dropdown.addEventListener("focusout", handleDropdownFocusout);

			// Close dropdown when clicking outside
			document.addEventListener("click", function (e) {
				if (
					dropdown.classList.contains("is-open") &&
					!dropdown.contains(e.target)
				) {
					closeDropdown();
				}
			});
		}

		// Mobile drawer dropdown — accordion
		if (drawerDropdownTrigger) {
			drawerDropdownTrigger.addEventListener("click", toggleDrawerDropdown);
		}
	}

	/**
	 * Cache DOM references
	 */
	function cacheDOM() {
		hamburger = document.getElementById("navHamburger");
		drawer = document.getElementById("navDrawer");
		overlay = document.getElementById("navOverlay");
		closeBtn = document.getElementById("navClose");
		navbar = document.getElementById("navbar");
		mainContent = document.getElementById("main-content");

		// Desktop dropdown
		dropdown = document.getElementById("navDropdown");
		dropdownTrigger = dropdown
			? dropdown.querySelector(".navbar__dropdown-trigger")
			: null;
		dropdownMenu = document.getElementById("navDropdownMenu");

		// Mobile drawer dropdown
		drawerDropdown = document.getElementById("navDrawerDropdown");
		drawerDropdownTrigger = drawerDropdown
			? drawerDropdown.querySelector(".navbar__drawer-dropdown-trigger")
			: null;
	}

	/**
	 * Initialize the navbar component
	 */
	function init() {
		cacheDOM();

		if (!hamburger || !drawer || !overlay || !closeBtn || !navbar) {
			console.warn("Navbar: Required DOM elements not found.");
			return;
		}

		bindEvents();
	}

	/**
	 * Tear down event listeners (for SPA / dynamic removal)
	 */
	function destroy() {
		if (!hamburger) return;

		hamburger.removeEventListener("click", toggleDrawer);
		closeBtn.removeEventListener("click", closeDrawer);
		overlay.removeEventListener("click", closeDrawer);
		document.removeEventListener("keydown", handleKeydown);
		window.removeEventListener("scroll", handleScroll);

		drawer
			.querySelectorAll(".navbar__drawer-link, .navbar__drawer-cta")
			.forEach(function (link) {
				link.removeEventListener("click", closeDrawer);
			});

		if (dropdown) {
			dropdown.removeEventListener("mouseenter", openDropdown);
			dropdown.removeEventListener("mouseleave", closeDropdownDelayed);
			dropdown.removeEventListener("keydown", handleDropdownKeydown);
			dropdown.removeEventListener("focusout", handleDropdownFocusout);
			closeDropdown();
		}

		if (drawerDropdownTrigger) {
			drawerDropdownTrigger.removeEventListener("click", toggleDrawerDropdown);
		}

		closeDrawer();
	}

	// Auto-initialize when DOM is ready if navbar markup is present
	function autoInit() {
		if (document.getElementById("navbar")) {
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
		open: openDrawer,
		close: closeDrawer,
		toggle: toggleDrawer,
	};
})();

export default Navbar;
