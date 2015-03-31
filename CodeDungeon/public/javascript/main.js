$(document).ready(function() { 


	//================================================================
	// Step 0 Send Outside Account Info (& validate Google)
	//================================================================

	(function() {


		function isInvalidEmail(input) {
		// invalid if the email doesn't have an '@' sig

			console.log(this['input.name']);

			var emailRegex = /@/g;

			if (!emailRegex.test(input)) {
				alert("Hey, you forgot the @ sign!");
			} else {
				return true;
			};

		}

		$('.accounts').on('click', function(e) {
			e.preventDefault();

			//Was google clicked? 
			console.log(this.name);
			
			
			if ((this.name) == 'google') {
				isInvalidEmail(this['input.name']);
							

				// var button = $(this);
				// var form = button.parent();
				// var url = form.prop('action');

				// $.ajax ({
				// 	type: 'POST',
				// 	url: url,
				// 	data: form.serialize(),
				// 	success: function(data) {
				// 		console.log(data);
				// 	},
				// 	error: function(data) {
				// 		console.log(data.responseJSON);
				// 	}

				// });
				
			} else {
				return false;
			}


		});

	})();


	//================================================================
	// Complete Step 0
	//================================================================

	(function() {

		$('#step0 button').on('click', function(e) {
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
	// Complete Step 1
	//================================================================

	(function() {

		$('#step1 button').on('click', function(e) {
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
	// Complete Step 2
	//================================================================

	(function() {

		$('#step2 button').on('click', function(e) {
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
	// Complete Step 3
	//================================================================

	(function() {

		$('#step3 button').on('click', function(e) {
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
	// Complete Step 4
	//================================================================

	(function() {

		$('#step4 button').on('click', function(e) {
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
	// Complete Step 5
	//================================================================

	(function() {

		$('#step5 button').on('click', function(e) {
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
	// Complete Step 6
	//================================================================

	(function() {

		$('#step6 button').on('click', function(e) {
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