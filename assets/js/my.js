$(function () {
	let mainSlider = function(){
		$('#js-main-slider').slick({
			dots: true,
			arrows: false,
			infinite: true,
			// autoplay: true,
			autoplaySpeed: 2000,
			speed: 300,
			fade: true
		});
	};
	mainSlider();

	let singlePopup = function () {
		$('#js-media-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			// tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			}
		});
	};
	singlePopup();

	let mainTable = function () {
		$('#js-main-table').magnificPopup({
			delegate: 'a',
			type: 'image',
			// tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			}
		});
	};
	mainTable();
});