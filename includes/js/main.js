jQuery(document).ready(function($) {
	
	
		var myform = $('#subForm-header');

		var myform_modal = $('#subForm-modal');
		$('#submit').on('click', function(event) {
			event.preventDefault();
			submitForm_2 ();
		});

		$( myform ).on("submit", function (event) {
		   	event.preventDefault();
		   	submitForm ();

		});
		
		
		function submitForm () {
			$.ajax({
					  type: 'POST',
					  url: 'contact-form.php',
					  data: myform.serialize(),
					  beforeSend: function(){
							    	ajaxDone ();
						}
					}).
					done(function(data) {

		                // log data to the console so we can see
		                //console.log('hello From Ajax done'); 
		               console.log(data);
		                ajaxSuccess(data);

		                // here we will handle errors and validation messages
		            }).
			           fail(function(jqXHR, textStatus, errorThrown ) {
						     ajaxFailed();
						     console.log(arguments);
						     console.log(jqXHR);
							 console.log(textStatus);
							 console.log(errorThrown);
					});

			     function ajaxDone () {
			     	$('#subForm-header button').text('Submiting...');
			     }

			     // Success Call
				function ajaxSuccess(text){
				    console.log(text);
				    if (text == "success") {				
						
						var msg = '<i class="glyphicon glyphicon-ok"></i>Your have been Subscibed!';
						var msgClasses = "animated green";
						
						 updateResponse( msg , msgClasses );


				    }  else { 	             
			            var msg = '<p>opps somthing wrong!</p>';
			            var msgClasses = "red";
			               updateResponse( msg , msgClasses );

			         }    
				}


				function updateResponse( msg , msgClasses ){	       
				   
				   	$( myform ).slideUp('fast');
				   	$( myform )[0].reset();
				   	$('#subForm-header button').text('Request for Early Access');
				   	$(".notification").removeClass('red green').addClass( msgClasses );
				   	$(".notification").slideDown('slow');
				   	$('.notification p').html( msg );
				    
				}
		 		


		}//submitForm


		function submitForm_2 () {
			$.ajax({
					  type: 'POST',
					  url: 'contact-form.php',
					  data: myform.serialize(),
					  beforeSend: function(){
							    	ajaxDone ();
						}
					}).
					done(function(data) {

		                // log data to the console so we can see
		                //console.log('hello From Ajax done'); 
		               console.log(data);
		                ajaxSuccess(data);

		                // here we will handle errors and validation messages
		            }).
			           fail(function(jqXHR, textStatus, errorThrown ) {
						     ajaxFailed();
						     console.log(arguments);
						     console.log(jqXHR);
							 console.log(textStatus);
							 console.log(errorThrown);
					});

			// Ajax done.

			function ajaxDone () {
			     	$('#subForm-modal submit').text('Submiting...');
			     }

			// Success Call
			function ajaxSuccess(text){
				    console.log(text);
				    if (text == "success") {				
						
						var msg = '<i class="glyphicon glyphicon-ok"></i>Your have been Subscibed!';
						var msgClasses = "animated  green";
						
						 updateResponse( msg , msgClasses );


				    }  else { 	             
			            
			            var msg = 'opps somthing wrong!';
			            var msgClasses = "red";
			               updateResponse( msg , msgClasses );

			         }    
			}


			

			function updateResponse( msg , msgClasses ){	       
			   
			   	
			   	$( myform_modal ).slideUp('fast');
			   	$( myform_modal )[0].reset();
				$('#subForm-modal submit').text('Request for Early Access');
			   	$( '#submit' ).hide();
			   	$(".notification.modalform").removeClass('red green').addClass( msgClasses );
			   	$(".notification.modalform").slideDown('slow');
			   	$('.notification.modalform p').html( msg );
			    
			}




		}//submitForm_2

		

		

		

		



	
	
});//on laod


  

