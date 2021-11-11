window.addEventListener('DOMContentLoaded', (event) => {
	
	const elementToObserve = document.querySelector("#current-state");

	
	const observer = new MutationObserver(function () {
		const carousel = document.querySelector(".carousel-container");
		if (carousel != null) {
			const prev = document.querySelector(".prev");
			const next = document.querySelector(".next");
			const track = document.querySelector(".track");
			const buttonNext = document.getElementById("button-next");
			const buttonPrev = document.getElementById("button-prev");

			let width = carousel.offsetWidth;
			let index = 0;
			window.addEventListener("resize", function () {
				width = carousel.offsetWidth;
			});
			next.addEventListener("click", nextView);
			prev.addEventListener("click", preView);
			buttonNext.addEventListener("click", nextView);
			buttonPrev.addEventListener("click", preView);

			function nextView(e) {
				e.preventDefault();
				console.log(width);
				index = index + 1;
				prev.classList.add("show");
				buttonPrev.classList.remove("active");

				track.style.transform = "translateX(" + index * -width + "px)";
				if (track.offsetWidth - index * width < index * width) {
					next.classList.add("hide");
					buttonNext.classList.add("active");
				}
				carousel.classList.add('new-width');
			}

			function preView(e) {
				index = index - 1;
				next.classList.remove("hide");
				buttonNext.classList.remove("active");

				if (index === 0) {
					prev.classList.remove("show");
					buttonPrev.classList.add("active");

				}
				track.style.transform = "translateX(" + index * -width + "px)";
				carousel.classList.remove('new-width');
			}
		}
	});

	
	observer.observe(elementToObserve, { subtree: true, childList: true });

});