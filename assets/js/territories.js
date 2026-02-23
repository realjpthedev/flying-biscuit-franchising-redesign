/**
 * Available Territories — SVG Map + State List → Custom Modal
 * The Flying Biscuit Café — Franchising
 * Replaces Bootstrap modal with custom implementation
 * v1.0
 */

const Territories = (() => {
	const validStates = [
		"Maine",
		"New Hampshire",
		"Vermont",
		"Massachusetts",
		"Rhode Island",
		"Connecticut",
		"New York",
		"New Jersey",
		"Pennsylvania",
		"Delaware",
		"Maryland",
		"Virginia",
		"West Virginia",
		"North Carolina",
		"South Carolina",
		"Georgia",
		"Florida",
		"Alabama",
		"Mississippi",
		"Louisiana",
		"Texas",
		"Arkansas",
		"Oklahoma",
		"Tennessee",
		"Kentucky",
		"Ohio",
		"Michigan",
		"Indiana",
		"Wisconsin",
		"Illinois",
		"Minnesota",
		"Iowa",
		"Missouri",
		"North Dakota",
		"South Dakota",
		"Nebraska",
		"Kansas",
		"Colorado",
		"Wyoming",
		"Montana",
		"Idaho",
		"Washington",
		"Oregon",
		"California",
		"Nevada",
		"Utah",
		"Arizona",
		"Alaska",
		"Hawaii",
		"New Mexico",
	];

	function isValidState(name) {
		return validStates.includes(name);
	}

	// ── Custom Modal ──────────────────────────────────────────

	function openModal(stateName) {
		const modal = document.getElementById("territoriesModal");
		if (!modal) return;

		// Populate content
		modal.querySelector(
			".territories__modal-title",
		).textContent = `Bring the Biscuit Magic to ${stateName}!`;
		modal.querySelector(
			".territories__modal-desc",
		).textContent = `Transform mornings in ${stateName} with our unique menu. Your opportunity to shine as a Flying Biscuit franchisee awaits!`;
		modal
			.querySelector("#territoriesModalCta")
			.setAttribute(
				"href",
				`/contact?wpf65_13=${encodeURIComponent(stateName)}`,
			);

		// Show
		modal.removeAttribute("hidden");
		document.body.style.overflow = "hidden";

		// Focus trap — focus the CTA
		requestAnimationFrame(() => {
			const cta = modal.querySelector(".territories__modal-cta");
			if (cta) cta.focus();
		});
	}

	function closeModal() {
		const modal = document.getElementById("territoriesModal");
		if (!modal) return;
		modal.setAttribute("hidden", "");
		document.body.style.overflow = "";
	}

	// ── Init ──────────────────────────────────────────────────

	document.addEventListener("DOMContentLoaded", () => {
		// SVG state clicks
		document
			.querySelectorAll("svg#availableTerritoriesMap .state")
			.forEach((state) => {
				state.addEventListener("click", (e) => {
					const el = e.target.closest(".state");
					const name = el ? el.getAttribute("data-state-name") : null;
					if (name && isValidState(name)) openModal(name);
				});
			});

		// Mobile list clicks
		document.querySelectorAll(".territories__state-item").forEach((item) => {
			item.addEventListener("click", () => {
				const name = item.getAttribute("data-state-name");
				if (name && isValidState(name)) openModal(name);
			});
		});

		// Close modal — backdrop + close button
		document.querySelectorAll("[data-close-modal]").forEach((el) => {
			el.addEventListener("click", closeModal);
		});

		// Close on Escape
		document.addEventListener("keydown", (e) => {
			if (e.key === "Escape") closeModal();
		});
	});
})();

export default Territories;
