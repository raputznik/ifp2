$(function() {		

	// set up thank you box
	$( "#signup-thankyou, #signup-error" ).dialog({
		autoOpen: false,
		width: 500,
		buttons: [
			{
				text: "Ok",
				click: function() {
					$( this ).dialog( "close" );
				}
			}
		],
		modal: true
	});
	
	$('#progressbar').progressbar({
		value: false
	});
	
	// newsletter subscribe button
	$('#newsletter-sub').click(function(e) {
		e.preventDefault();
		
		$('#newsletter-email').attr('disabled','disabled');
		$('#newsletter-progress').progressbar({value:false});
		$('#newsletter-sub').hide();
		
		// set up ajax request
		var data = {
			action: 'ajax_subscribe',
			email: $('#newsletter-email').val()
		};
		
		// send request
		jQuery.post(ajax_object.ajax_url, data, function(response) {
			if( response == 1 ) {
				$('#newsletter-progress').progressbar({
					max: 1,
					value: 1,
					disabled: true
				});
				
				thankyou_box();
			} else {
				$('#newsletter-progress').progressbar("destroy");
				$('#newsletter-sub').show();
				$('#newsletter-email').attr('disabled',false);
				error_box();
			}
		});
		
	});
	
	// function to open
	function thankyou_box() {
		$( "#signup-thankyou" ).dialog( "open" );
	}
	function error_box() {
		$( "#signup-error" ).dialog( "open" );
	}
	
	// test open
	//thankyou_box();
	
});