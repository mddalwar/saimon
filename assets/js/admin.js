(function($){
	$(document).ready(function(){
		$('button#about-logo').on('click', function(e){
			e.preventDefault();

			var uploader = wp.media({
				'title' : 'Logo Image',
				'button' : {
					'text' : 'Insert Logo'
				},
				'multiple' : false
			});

			uploader.open();

			uploader.on('select', function(){
				var image = uploader.state().get('selection').first().toJSON();

				var imageUrl = image.url;

				$('img#about-logo-link').attr('src', imageUrl);
				$('input#imagelink').val(imageUrl);
				$('input.widget-control-save').removeAttr('disabled').val('Save');
				$('button#about-logo').html('Change Logo');
			});

		});
	});
}(jQuery))