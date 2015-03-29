$(document).ready(function() { 


	//================================================================
	// Google Username
	//================================================================

	(function() {

		$('#google button').on('click', function(e) {
			e.preventDefault();
			var button = $(this);
			var form = button.parent();
			var url = form.prop('action');

			$.ajax ({
				type: 'POST',
				url: url,
				data: form.serialize(),
				success: function(data) {
					console.log(data);
				},
				error: function(data) {
					console.log(data.responseJSON);
				}

			});

		});

	})();

	//================================================================
	// GitHub Username
	//================================================================

	(function() {

		$('#github button').on('click', function(e) {
			e.preventDefault();
			var button = $(this);
			var form = button.parent();
			var url = form.prop('action');

			$.ajax ({
				type: 'POST',
				url: url,
				data: form.serialize(),
				success: function(data) {
					console.log(data);
				},
				error: function(data) {
					console.log(data.responseJSON);
				}

			});

		});

	})();

	//================================================================
	// Twitter Username
	//================================================================

	(function() {

		$('#twitter button').on('click', function(e) {
			e.preventDefault();
			var button = $(this);
			var form = button.parent();
			var url = form.prop('action');

			$.ajax ({
				type: 'POST',
				url: url,
				data: form.serialize(),
				success: function(data) {
					console.log(data);
				},
				error: function(data) {
					console.log(data.responseJSON);
				}

			});

		});

	})();

	//================================================================
	// Accordion (Checklist Page)
	//================================================================

	function close_accordion_section() {
		$('.accordion .accordion-section-title').removeClass('active');
		$('.accordion .accordion-section-content').slideUp(300).removeClass('open');
	}

	$('.accordion-section-title').click(function(e) {
		var getAnchorValue = $(this).attr('href');

		if($(e.target).is('.active')) {
			close_accordion_section();
		}else {
			close_accordion_section();

			// Add active class to section title
			$(this).addClass('active');
			// Open up the hidden content panel
			$('.accordion ' + getAnchorValue).slideDown(300).addClass('open'); 
		}

		e.preventDefault();
	});

});