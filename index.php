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
<div class="banner row-fluid">
  <div class="banner-text">
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <h2 class="font-raleway text-center">Do you want way to see</h2>
          <h1 class="text-center">Ganeshostav <span class="font-raleway question">?</span></h1>
          <div class="yellow-border" id="anim1"> <i class="i-yellow-arrow ic">Down</i> </div>
          <h3 class="text-center font-raleway">We can help you find them instantly.</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row-fluid blue-banner">
  <div class="container">
    <div class="row-fluid">
      <div class="span4">
        <div class="yellow-block"> <img src="img/yellow-pic1.png" alt=""> </div>
      </div>
      <div class="span4">
        <div class="yellow-block"> <img src="img/yellow-pic2.png" alt=""> </div>
      </div>
      <div class="span4">
        <div class="yellow-block"> <img src="img/yellow-pic3.png" alt=""> </div>
      </div>
    </div>
    <div class="white-section" id="anim2">
      <h3 class="font-raleway text-center">We will notify you way instantly </h3>
      <h4 class="text-center">through </h4>
      <h2 class="text-center">web, email, app.</h2>
    </div>
  </div>
</div>
<section class="main-content">
  <div class="container">
    <div class="row-fluid">
      <div class="span12" id="anim3">
        <div class="section-text banner-text">
          <div class="blue-check" id="fly-it"></div>
          <h2 class="font-raleway text-center black">Get immediate confirmations on this</h2>
          <h1 class="text-center">Ganeshostav</h1>
          <div class="yellow-border"> <i class="i-yellow-arrow ic grey">Down</i> </div>
          <h3 class="text-center font-raleway"> Unlimited Mandals to Unlimited Ways</h3>
        </div>
        <div class="clearfix"></div>
        <!--<div class="row-fluid">
          <div class="span6">
            <div class="note-wrap pull-right" id="yoright"> <span class="orange-text">Only</span>
              <h1 class="text-center">$5</h1>
              <div class="term-text">
  <h4 class="text-center">Per appointment if the <br>
    appointment  is confirmed.</h4>
              </div>
            </div>
          </div>
          <div class="span6 ">
            <div class="note-wrap pull-left" id="yoleft">
              <h2 class="text-center">Risk<br>
                Free</h2>
              <h6 class="text-center">Risk-free trial for<br>
                <span>90 days</span> or first <span>15<br>
                appointments.</span></h6>
            </div>
          </div>
        </div>-->
        <div class="clearfix"></div>
        <a href="signup.php" class="sign-up">Sign Up</a>
        <div class="term-text">
          <h4 class="text-center">5000+ Mandals from Pune. </h4>
          <p class="text-center">Fill the <a href="#">details</a> by clicking on sign up button.</p>
        </div>
      </div>
    </div>
  </div>
</section>
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


<script>
if ($(window).height() < 1000){
		var controller = $.superscrollorama({
			triggerAtCenter: false,
			playoutAnimations: true
			
		});
		
	controller.addTween('#anim1', 
	TweenMax.from($('.row-fluid .span4:first-child .yellow-block'), .5, {css:{right:40,opacity:0}}) ,0 ,0 ,false);
	
	controller.addTween('#anim1', 
	TweenMax.from($('.row-fluid .span4:nth-child(2) .yellow-block'), 1, {css:{bottom:1000,opacity:0}}) ,0 ,0 ,false);
	
	controller.addTween('#anim1', 
	TweenMax.from($('.row-fluid .span4:nth-child(3) .yellow-block'), 1.5, {css:{left:40,opacity:0}}) ,0 ,0 ,false);

		
		controller.addTween('#anim1', 
	    TweenMax.from($('.white-section'), .5, {css:{top:1000, opacity:1}}),0 ,0 ,true);
		
		controller.addTween('#anim2', 
		TweenMax.from( $('#fly-it'), .25, {css:{opacity:0, rotation: 720}, ease:Quad.easeOut}),0 ,0 ,true);
		
		controller.addTween('#anim3', 
	    TweenMax.from($('.note-wrap'), .5, {css:{bottom:900, opacity:0}}),0 ,0 ,true);
}

</script>


</body>
</html>
