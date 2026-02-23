/**
 * UTM & Facebook Click Tracker for WPForms
 *
 * Persists UTM/Facebook click parameters across pages and populates
 * hidden WPForms fields with matching CSS classes.
 */
const utmTracker = (() => {
	// Map URL parameter names to your WPForms hidden-field CSS classes
	const mapping = {
		gclid: "fb_gclid",
		fbclid: "fb_fbclid",
		utm_source: "fb_utm_source",
		utm_medium: "fb_utm_medium",
		utm_campaign: "fb_utm_campaign",
		utm_content: "fb_utm_content",
		utm_term: "fb_utm_term",
	};

	// Parse the current page's query string
	const params = new URLSearchParams(window.location.search);

	// Helper: get a value from the URL
	function getParam(name) {
		return params.get(name);
	}

	// Helper: read/write localStorage
	function getStored(name) {
		return localStorage.getItem(name);
	}
	function setStored(name, value) {
		localStorage.setItem(name, value);
	}

	// Find hidden inputs by wrapper CSS class and set their value
	function updateFields(paramName, cssClass) {
		const value = getStored(paramName);
		if (!value) return;

		document
			.querySelectorAll(`.wpforms-field.${cssClass} input[type="hidden"]`)
			.forEach((input) => {
				input.value = value;
			});
	}

	// Main: stash any new URL params and populate fields
	function run() {
		Object.entries(mapping).forEach(([paramName, cssClass]) => {
			// If the URL contains the param, save it
			const fromUrl = getParam(paramName);
			if (fromUrl) {
				setStored(paramName, fromUrl);
			}
			// Populate any hidden inputs for that param
			updateFields(paramName, cssClass);
		});
	}

	// On DOM ready, kick off the tracker
	document.addEventListener("DOMContentLoaded", run);

	// Return public API in case you need it
	return {
		run,
	};
})();

export default utmTracker;
