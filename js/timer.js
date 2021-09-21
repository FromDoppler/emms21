"use strict";

document.addEventListener('DOMContentLoaded', () => {

	const countDownDate = new Date("Nov 11, 2021 18:00:00").getTime();


	let x = setInterval(function () {
		const spanDay = document.getElementById('day');
		const spanHour = document.getElementById('hour');
		const spanMinute = document.getElementById('minute');

		let now = new Date().getTime();
		let distance = countDownDate - now;
		let days = Math.floor(distance / (1000 * 60 * 60 * 24));
		let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));


		spanDay.innerHTML = days;
		spanHour.innerHTML = hours;
		spanMinute.innerHTML = minutes;



		checkClienWidth(spanDay, 'd');
		checkClienWidth(spanHour, 'h');
		checkClienWidth(spanMinute, 'm');

		if (distance < 0) {
			clearInterval(x);
			document.getElementById("demo").innerHTML = "TERMINO";
		}
	}, 1000);


	// Esta funcion detecta el width de los elementos 
	// para estimar la cantidad de digitos y asi asignar un clase.
	// No se puede abstraer más dado que las clases varian.
	function checkClienWidth(element, type) {

		if (element.clientWidth <= 30 && type === 'd') {
			element.classList.add('dayLeft');
		} else {
			element.classList.remove('dayLeft');
		}

		if (element.clientWidth >= 30 && type === 'h') {
			element.classList.add('hourLeft');
		} else {
			element.classList.remove('hourLeft');
		}


		if (element.clientWidth >= 30 && type === 'm') {
			element.classList.add('minuteLeft');
		} else {
			element.classList.remove('minuteLeft');
		}


	}
});