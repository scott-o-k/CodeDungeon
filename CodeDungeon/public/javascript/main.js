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


});