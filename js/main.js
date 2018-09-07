(function(){
	"use strict";

	document.addEventListener('DOMContentLoaded',function(){

		var map = L.map('mapa').setView([-12.021304, -76.814775], 16);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);

		L.marker([-12.021304, -76.814775]).addTo(map)
		    .bindPopup('Iglesia SAMARIA <br> Ondas de Amor Celestial')
		    .openPopup()
		    .bindTooltip('Te esperamos')
		    .openTooltip();

	});
}());