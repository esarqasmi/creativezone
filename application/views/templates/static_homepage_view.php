<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
 
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/> 
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo" />

<!-- Datepicker -->
<link href='bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href="assets/css/style.css" rel="stylesheet"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  
            <div class="header-middle-area" id="sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="<?php echo base_url() ?>"><img src="assets/images/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        
                        </div>
                       
                    </div>
                </div>
            </div>
  
  
  
   <div class="image-wrap">
        <div class="img-content">
            <img src="assets/images/banner.jpg" alt="">
        </div>
        <div class="overlay"></div>
    </div>
    <div class="banner-content">
    <div class="container">
        <p>The only place to stay</p>
        </div>
    </div>
<!-- Slider Area Start Here-->
<!--<div class="slider-area">
	<div class="bend niceties preview-2">
		<div id="ensign-nivoslider" class="slides"> <img src="assets/images/banner.jpg" alt="" title="#slider-direction-1" /> </div>
		 
		<div id="slider-direction-1" class="slider-direction">
			<div class="slider-content t-cn s-tb slider-1">
				<div class="container mt-17">
					<div class="row ">
						<div class="col-md-7">
							<h1 class="text-center love_uae4">The only place to stay</h1>  
							 </div>
						 
					</div>
				</div>
			</div>
		</div>
		 
	</div>
</div>-->


<section>
<div class="container">
<div class="row">
<div class="card card-with-bg card-border col-md-5" >
  <div class="card-body">
    <h1 class="card-title">Welcome</h1> 
    <p class="card-text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales mauris vitae nisl lacinia, a ullamcorper dolor sollicitudin. Suspendisse egestas ex non aliquet efficitur.</p>
<p>
Quisque vel nunc tempor, scelerisque magna vitae, viverra erat. Fusce iaculis metus ut ex elementum interdum.</p>
 
  </div>
</div>
<div class="card card-border col-md-5" > 
  <div class="card-body">
    <h1 class="card-title">Book Now</h1> 
    <p class="card-text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales mauris vitae nisl lacinia, a ullamcorper dolor sollicitudin.
<div class="booking_form">
<form name="booking" id="booking" action="Booking/save_booking">
 <div class="form-group col-md-12">
 <input type="text" name="name" value="" autocomplete="off" class="form-control" placeholder="Name *" require="required"/> 
  </div>
  
 <div class="form-group col-md-7">
 <input type="text" name="phone" value="" autocomplete="off" class="form-control"  placeholder="Phone *" require="required"/> 
  </div>
 <div class="form-group col-md-5">
 <input type="submit" name="submit" value="Submit" class="btn btn-submit"/> 
  <img src="assets/images/loader.gif" style="display:none; margin:0 auto; position:absolute; left:0; right:0; bottom:0; width:50px;" class="loader-gif" />  
  </div>
   <div class="form-group col-md-12 ">
    <div id="form_submit_message"></div>
    </div>
</form>

</div>
</p> 
  </div>
</div>
</div>
<div class="row">
<div class="card card-border col-md-5" >
  <div class="card-body">
    <h1 class="card-title">Facilities</h1> 
    <p class="card-text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales mauris vitae nisl lacinia, a ullamcorper dolor sollicitudin. Suspendisse egestas ex non aliquet efficitur.</p>
<p>Quisque vel nunc tempor, scelerisque magna vitae, viverra erat. Fusce iaculis metus ut ex elementum interdum.</p>
 
  </div>
</div>
<div class="card card-image col-md-5" > 
  <div class="card-body">
    <img src="assets/images/image.jpg"/>
    
  </div>
</div>
</div>

</div>
</section>


<section> 
 <div class="row"> 
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.823432224186!2d55.27207996690591!3d25.20008846213185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42816bda9f1f%3A0x104095fee4c1b163!2sCreative%20Zone!5e0!3m2!1sen!2sae!4v1625408320527!5m2!1sen!2sae" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>
 
</section>
 
<div class="footer">
	<div class="row">
		<div class="col-md-12">
	 <div class="container">
	 <div class="col-sm-6 text-left"><p>&copy; 2020 | Creative Zone </p></div> 
	 <div class="col-sm-6 text-right">
    <a href="https://www.facebook.com/CreativeZoneUAE" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/creativezonedxb" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="https://www.instagram.com/creativezonedxb/" target="_blank"><i class="fa fa-instagram"></i></a> 
  </div>
  </div>
		</div>
	</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script> 

<script src='bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>

<script>
  $(document).ready(function() {
	  
 $('#datepicker').datepicker(); 
 
    $('#booking').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                        stringLength: { 
						max:25,
                    },
                        notEmpty: {
                        message: 'Please enter your name.'
                    }
                }
            },  
            phone: {
                       
                validators: { 
				stringLength: { 
						min:3,
						max:20,
						message: 'Please enter valid contact number length.'
                    },
					 regexp: {
                        regexp: /^[0-9 ()+-]+$/,
                        message: 'The phone can consist of numeric, hyphen,  + and spaces only'
                    },
                    notEmpty: {
                        message: 'Please enter your contact number.'
                    } 
                }
            } 
            }
        })
        .on('success.form.bv', function(e) {
			var form_id = $(this).closest("form").attr('id');
			console.log(form_id);
            $('#'+form_id+' #success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             //   $('#booking').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);
 
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator'); 
			$('.loader-gif').show();
            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
				$('.loader-gif').hide();
				 if(result > 0){
					 alert('Successfully Submitted.');
				  $('#'+form_id+' #form_submit_message').html('<span class="alert alert-success" style="display:block;">Thank you for your contact details. We will get intouch with you shortly.</span>');   
				   }else {
					   $('.loader-gif').hide();
				    $('#'+form_id+' #form_submit_message').html('<span class="alert alert-danger"  style="display:block;">Oops! Some error has occured. Please try again or give us a call. Thanks for your patience.</span>');
				   } 
            }, 'json');
			 
 
        }); 
 
});

</script>
  </body>
</html>