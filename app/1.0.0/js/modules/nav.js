'use strict';

document.addEventListener('DOMContentLoaded', () => {
	const hamburger = document.querySelector(".hamburger");
	const navMenu = document.querySelector(".nav-menu");
	const navLink = document.querySelectorAll(".nav-link");
	const navbar = document.getElementById("navbar");
	const scheduleScroll = document.getElementById("schedule-scroll");
	const hash = window.location.hash;

	if (hash === '#agenda') {
		console.log('Entro')
		scrollSchedule();
	}
	if (scheduleScroll != null) {
		scheduleScroll.addEventListener("click", () => {
			scrollSchedule();
		});
	}




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
		if (window.pageYOffset > sticky + 10) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
	}

	function scrollSchedule() {
		const schedule = document.getElementById("schedule");
		const pos = schedule.getBoundingClientRect()
		let x = pos.left;
		let y = pos.top;
		window.scrollTo(x - 150, y - 150);
	}

});