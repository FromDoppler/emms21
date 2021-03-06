export const carousel = async () => {
	const carousel = document.querySelector(".carousel-container");
	if (carousel != null) {
		const prev = document.querySelector(".prev");
		const next = document.querySelector(".next");
		const track = document.querySelector(".track");
		const buttonNext = document.getElementById("button-next");
		const buttonPrev = document.getElementById("button-prev");
		let overflow = false;

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

			if (!overflow) {
				overflow = true;
				e.preventDefault();
				index = index + 1;

				prev.classList.add("show");
				buttonPrev.classList.remove("active");

				track.style.transform = "translateX(" + index * -width + "px)";
				next.classList.add("hide");
				buttonNext.classList.add("active");
				carousel.classList.add('new-width');
			}
		}

		function preView(e) {
			if (overflow) {
				overflow = false;
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
	}
}