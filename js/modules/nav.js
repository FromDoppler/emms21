'use strict';

document.addEventListener('DOMContentLoaded', () => {
	const hamburger = document.querySelector(".hamburger");
	const navMenu = document.querySelector(".nav-menu");
	const navLink = document.querySelectorAll(".nav-link");
	const navbar = document.getElementById("navbar");
	let sticky = navbar.offsetTop;

	hamburger.addEventListener("click", mobileMenu);

	function mobileMenu() {
		hamburger.classList.toggle("active");
		navMenu.classList.toggle("active");
	}


	navLink.forEach(n => n.addEventListener("click", closeMenu));

	function closeMenu() {
		hamburger.classList.remove("active");
		navMenu.classList.remove("active");
	}


	window.onscroll = function () {
		stickyMenu()
	};

	function stickyMenu() {
		if (window.pageYOffset > sticky + 110) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
	}
});