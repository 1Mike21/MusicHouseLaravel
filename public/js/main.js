$(document).ready(function() {
	let center = [55.7667056879933, 37.60289606627276];
	function init() {
		let map = new ymaps.Map('map', {
			zoom: 16,
			center: center
		});

		let MusicHouse = new ymaps.Placemark(center, {
			iconLayout: 'default#image',
			iconImageSize: [64, 74],
			iconImageOffset: [0, 0]
		});

		map.geoObjects.add(MusicHouse);
	}
	ymaps.ready(init);
})
