jQuery(function($) {

	$(document).ready(function() {

		var desktopDropdownToggle = $('#desktopdropdowntoggle'),
			mobileDropdownToggle = $('#mobiledropdowntoggle'),
			desktopDropdownNav = $('.dropdown-nav .nav.desktop'),
			mobileDropdownNav = $('#mobile-nav'),
			searchToggle = $('.search-toggle'),
			searchForm = $('.search-wrapper.mobile form'),
			searchFormField = $('.search-wrapper.mobile form .search-field'),
			searchFormInput = $('.search-wrapper.mobile form input'),
			searchFormClose = $('.search-wrapper.mobile form .search-field .search-close'),
			pageOverlay = $('.page-overlay');

		// Dropdown menu on toggle
		desktopDropdownToggle.click(function(e) {
			desktopDropdownNav.toggleClass('open');
			desktopDropdownToggle.toggleClass('active');

			e.stopPropagation();
		});

		mobileDropdownToggle.click(function(e) {
			mobileDropdownNav.toggleClass('open');
			mobileDropdownToggle.toggleClass('active');
			pageOverlay.toggleClass('active');

			e.stopPropagation();
		});
		
		// Show search form on toggle
		searchToggle.click(function(e) {
			searchForm.addClass('open');
			searchFormInput.focus();
			searchToggle.addClass('active');
			pageOverlay.addClass('active');

			e.stopPropagation();
		});
		
		// Hide dropdown menu on document click
		pageOverlay.click(function() {
			if (mobileDropdownNav.is(':visible')) {
				mobileDropdownNav.removeClass('open');
				mobileDropdownToggle.removeClass('active');
				pageOverlay.removeClass('active');
			}
			
			if (searchFormField.is(':visible')) {
				searchForm.removeClass('open');
				searchToggle.removeClass('active');
				pageOverlay.removeClass('active');
			}
			
			if (pageOverlay.is(':visible')) {
				pageOverlay.removeClass('active');
			}
		});
		
		$(document).click(function() {
			if (desktopDropdownNav.is(':visible')) {
				desktopDropdownNav.removeClass('open');
				desktopDropdownToggle.removeClass('active');
			}
		});

		// Close search form on close click
		searchFormClose.click(function() {
			searchForm.removeClass('open');
			searchToggle.removeClass('active');
			if (mobileDropdownNav.is(':hidden')) {
				pageOverlay.removeClass('active');
			}
		});

		// Adds FitVids to all videos with the page wrapper
		$('.page-wrapper').fitVids();
	});

});
