import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".tab-link");

    function activateLink() {
        let scrollY = window.scrollY + 100; // offset for header

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                navLinks.forEach((link) => {
                    link.classList.remove(
                        "border-[var(--midnight)]",
                        "text-[var(--charcoal)]"
                    );
                    link.classList.add(
                        "border-transparent",
                        "text-[var(--slate-gray)]"
                    );
                });

                document
                    .querySelector(`.tab-link[href="#${sectionId}"]`)
                    .classList.add(
                        "border-[var(--midnight)]",
                        "text-[var(--charcoal)]"
                    );
            }
        });
    }

    window.addEventListener("scroll", activateLink);

    const button = document.getElementById("profileMenuButton");
    const dropdown = document.getElementById("profileDropdown");

    button.addEventListener("click", () => {
        dropdown.classList.toggle("hidden");
    });

    // Optional: Close when clicking outside
    document.addEventListener("click", (e) => {
        if (!button.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.add("hidden");
        }
    });
});

(function () {
    const body = document.body;

    // Profile dropdown
    const profileBtn = document.getElementById("dv-profile-btn");
    const profileMenu = document.getElementById("dv-profile-menu");

    function closeProfile() {
        if (profileMenu) {
            profileMenu.classList.add("hidden");
            profileBtn?.setAttribute("aria-expanded", "false");
        }
    }
    function toggleProfile() {
        if (!profileMenu) return;
        const isHidden = profileMenu.classList.contains("hidden");
        document
            .querySelectorAll("#dv-profile-menu")
            .forEach((el) => el.classList.add("hidden"));
        if (isHidden) {
            profileMenu.classList.remove("hidden");
            profileBtn?.setAttribute("aria-expanded", "true");
        } else {
            closeProfile();
        }
    }
    profileBtn?.addEventListener("click", (e) => {
        e.stopPropagation();
        toggleProfile();
    });

    // Close on click outside / Esc
    document.addEventListener("click", (e) => {
        if (
            profileMenu &&
            !profileMenu.contains(e.target) &&
            e.target !== profileBtn
        ) {
            closeProfile();
        }
    });
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            closeProfile();
            closeMobile();
        }
    });

    // Mobile menu
    const openBtn = document.getElementById("dv-mobile-btn");
    const closeBtn = document.getElementById("dv-mobile-close");
    const panel = document.getElementById("dv-mobile-panel");
    const backdrop = document.getElementById("dv-backdrop");

    function openMobile() {
        if (!panel || !backdrop) return;
        panel.classList.remove("translate-x-full");
        backdrop.classList.remove("hidden");
        openBtn?.setAttribute("aria-expanded", "true");
        body.style.overflow = "hidden"; // prevent scroll behind
    }
    function closeMobile() {
        if (!panel || !backdrop) return;
        panel.classList.add("translate-x-full");
        backdrop.classList.add("hidden");
        openBtn?.setAttribute("aria-expanded", "false");
        body.style.overflow = "";
    }

    openBtn?.addEventListener("click", openMobile);
    closeBtn?.addEventListener("click", closeMobile);
    backdrop?.addEventListener("click", closeMobile);

    // Improve focus handling: move focus into panel on open
    openBtn?.addEventListener("click", () => {
        setTimeout(() => {
            const firstFocusable = panel?.querySelector(
                "a, button, input, select, textarea"
            );
            firstFocusable?.focus();
        }, 210);
    });
})();
