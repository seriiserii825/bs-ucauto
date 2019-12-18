$(function () {
	let mainSlider = function () {
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
				preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
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
				preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
			}
		});
	};
	mainTable();

	let writeForm = function () {
		function getRadioValue($this) {
			$('.write-content__table tbody input[type="radio"]').removeAttr('checked');
			$this.prev().attr('checked', 'checked');

			$('.write-content__table tbody tr').addClass('disable');
			$this.closest('tr').removeClass('disable');
		}

		$('.write-content__table .wpcf7-list-item-label').each(function () {
			let radioTime = $(this).closest('tr').find('.radio-time').text();
			let radioDays = $(this).closest('tr').find('.radio-days').text();
			let radioDate = $(this).closest('tr').find('.radio-date').text();
			$(this).prev().val('Ora: ' + radioTime + '; Zilele: ' + radioDays + '; Data inceperii: ' + radioDate + ';');
		});

		$('.write-content__table .wpcf7-list-item-label').on('click', function () {
			getRadioValue($(this));
		});
	};
	writeForm();
});