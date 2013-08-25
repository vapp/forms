<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Pune Ganeshostav 2013</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<header class="row-fluid top-header" id="examples-parallax">
  <div class="container">
    <div class="row-fluid">
      <div class="span12"> <a href="#" class="logo">Pune Ganeshostav</a> </div>
    </div>
  </div>
</header>
<div class="row-fluid blue-banner">
  <div class="container">
    <div class="span12">
        <div class="custom-form">
				<?php if($_POST) { ?>
   <div class="alert alert-success hide">
	  Well done! You successfully read this important alert message.
	</div>
	<?php } ?>

	<form class="form-horizontal" id="registerHere" method='post' action='signup.php'>
	  <fieldset>
	    <legend>Registration</legend>
	    <div class="control-group">
	      <label class="control-label" for="input01">Name</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="user_name" name="user_name" rel="popover" data-content="Enter your first and last name." data-original-title="Full Name">
	        
	      </div>
	</div>
	
	 <div class="control-group">
		<label class="control-label" for="input01">Email</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="user_email" name="user_email" rel="popover" data-content="What's your email address?" data-original-title="Email">
	       
	      </div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="input01">Mobile No.</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="mbn" name="mbn" rel="popover" data-content="10 Digits! Be tricky" data-original-title="Moblie" >
	       
	      </div>
	</div>
	
	
	
	 <div class="control-group">
		<label class="control-label" for="input01">Gender</label>
	      <div class="controls">
	        <select name="gender" id="gender" >
            				<option value="">Gender</option>
			                <option value="male">Male</option>
			                <option value="female">Female</option>
			<option value="other">Other</option>
			               
			              </select>
	       
	      </div>
	
	</div>
	
	
	<div class="control-group">
		<label class="control-label" for="input01"></label>
	      <div class="controls">
	       <button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip">Sign Up for news letter</button>
	       
	      </div>
	
	</div>
	
	
	   
	  </fieldset>
	</form>
                    
        </div>
        
    </div>
    
  </div>
</div>


<footer class="row-fluid">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <p class="text-center">©2013 Ganesh Utsav </p>
      </div>
    </div>
  </div>
</footer>
<script src="js/vendor/jquery-1.9.1.min.js"></script> 
<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/TweenMax.min.js"></script>
<script src="js/TimelineMax.min.js"></script>
<script src="js/jquery.superscrollorama.js"></script>
<script src="js/main.js"></script>
<script src="js/jq-val.js"></script>


<script type="text/javascript">
	  $(document).ready(function(){
			$('input').hover(function()
			{
			
		});
			$("#registerHere").validate({
				rules:{
					user_name:"required",
					user_email:{
							required:true,
							email: true
						},
					mbn:{
						required:true,
						minlength:10
					},
					
					gender:"required"
				},
				messages:{
					user_name:"Enter your first and last name",
					user_email:{
						required:"Enter your email address",
						email:"Enter valid email address"
					},
					mbn:{
						required:"Enter your Moblie No.",
						minlength:"Mobile No. must be 10 Digit"
					},
					
					gender:"Select Gender"
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.control-group').addClass('error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.control-group').removeClass('error');
					$(element).parents('.control-group').addClass('success');
				}
			});
		});
	  </script>


</body>
</html>
