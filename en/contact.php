<?php $title = "Awaken Empowerment Coaching Website"; require_once("includes/header.inc.php") ?>


<!-- My Profile Modal -->
<div id="TrialModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" class="muted slim">Subscribe</h3>
  </div>
	<div class="modal-body">
	
		<div class="row-fluid text-center">
			<?php include("includes/subscription-form.inc.php"); ?>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" type="submit">Close <i class="icon-remove "></i></button>
	</div>
</div> <!-- End of Modal -->

<!-- Carousel -->
<div id="myCarousel" class="carousel slide">
 <div id="indicators">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0"  class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
 </div>
  <!-- Carousel items -->
  <div class="carousel-inner">

    <div class="active item jumbotron">
        <h1 class="handwritten">Empowerment <br class="visible-phone"> Coaching!</h1>
        <p class="lead">Take Massive Action<br>Produce Rapid Results - Experience Life Long Change</p>
		<a class="btn btn-large btn-success" data-toggle="modal" href="#TrialModal">Get started today <i class="icon-ok icon-white"></i></a>
        <img class="carousel-img" src="img/coaching.jpg" alt="Life Coaching" >
    </div>

    <div class="item jumbotron">
		<h1 class="handwritten">Business Coaching!</h1>
		<p class="lead">Generate more leads<br>Increase Conversion Rates - Earn Greater Profits</p>
		<a class="btn btn-large btn-success" data-toggle="modal" href="#TrialModal">Get started today <i class="icon-ok icon-white"></i></a>
		<img class="carousel-img" src="img/Group-Coaching.jpg" alt="Business Coaching" >
    </div>

    <div class="item jumbotron">
        <h1 class="handwritten">Satisfaction Guaranteed</h1>
        <p class="lead">Our Coaching Techniques are Proven to be<br>100% Effective or your Money Back</p>
		<a class="btn btn-large btn-success" data-toggle="modal" href="#TrialModal">Get started today <i class="icon-ok icon-white"></i></a>
        <img class="carousel-img" src="img/friendship.jpg"  alt="Trust" >
    </div>

  </div>

  <!-- Carousel nav
  ==================
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> -->
</div>

	 <!-- Content -->
<div class="row-fluid text-center separator-top">
<h1 class="handwritten big">Empowerment Coaching meets Business Coaching</h1>
<h2 class="muted slim">Mental & Emotional Transformation Combined <br class="visible-desktop"> with Expert Business Advice</h2>
</div>

	 <div class="row-fluid">
		<div class="span4 box">
			<h3>Empowerment Coaching</h3>
			<ul>
		      <li>1:1 Personalized Coaching</li>
		      <li>Instantly Change Your States</li>
		      <li>Manage Your Emotions</li>
		      <li>Procrastination to Motivation</li>
			  <li>Rapidly Change Limiting Beliefs</li>
		      <li>Overcome Fears, Doubts & Concerns</li>
		      <li>Train your Unconscious to Work Towards your Goals</li>
			</ul>
			<a class="btn" href="empowerment-coaching.php">Learn More »</a>
		</div>

		<div class="span4 box">
			<h3>Business Coaching</h3>
			<ul>
				<li>Generate More Leads</li>
				<li>Increase Conversion Rates</li>
				<li>Compel More Frequent Transactions</li>
				<li>Command Higher Prices</li>
				<li>Earn Greater Profits</li>
				<li>Build a Million Dollar Business</li>
				<li>Live Weekly Webinars</li>
				<li>Advanced Business Training</li>
			</ul>
			<a class="btn" href="business-coaching.php">Learn More »</a>
		</div>

		<div  class="span4 box">
			<?php include("includes/subscription-form.inc.php"); ?>
		</div>
	 </div>


	<!-- Row of 3 columns -->
	<h2 class="separator-top">Testominals</h2>
		<div class="row-fluid">

		<!-- Carousel -->
		<div id="myCarouselTestimonials" class="carousel slide span6">
		 <div id="Testimonial-indicators">
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		 </div>

		  <!-- Carousel items -->
		  <div class="carousel-inner">

		    <div class="active item">
					<blockquote class="pull-left">
						<p>"Hi, my name is Alice. I began my coaching journey with Matthew today and what a great session it was! I feel enlightened to the power of emotional coaching as we explored some past and present emotions and developed a strategy to harness the power of those emotions.  Matthew's easy demeanor and fluid teaching style makes him a great coach. I'm super excited and can't wait to see my personal and business worlds become exactly what I want them to be!!  I will be recommending this to everyone I know that needs help getting what they really want out of life."</p>
						<small><cite title="Source Title">Alice from New Orleans, LA</cite></small>
					</blockquote>
		    </div>

		    <div class="item">
					<blockquote class="pull-left">
						<p>"Hi, my name is Alice. I began my coaching journey with Matthew today and what a great session it was! I feel enlightened to the power of emotional coaching as we explored some past and present emotions and developed a strategy to harness the power of those emotions.  Matthew's easy demeanor and fluid teaching style makes him a great coach. I'm super excited and can't wait to see my personal and business worlds become exactly what I want them to be!!  I will be recommending this to everyone I know that needs help getting what they really want out of life."</p>
						<small><cite title="Source Title">Anonymous</cite></small>
					</blockquote>
		    </div>

		    <div class="item">
					<blockquote class="pull-left">
						<p>"Hi, my name is Alice. I began my coaching journey with Matthew today and what a great session it was! I feel enlightened to the power of emotional coaching as we explored some past and present emotions and developed a strategy to harness the power of those emotions.  Matthew's easy demeanor and fluid teaching style makes him a great coach. I'm super excited and can't wait to see my personal and business worlds become exactly what I want them to be!!  I will be recommending this to everyone I know that needs help getting what they really want out of life."</p>
						<small><cite title="Source Title">Anonymous</cite></small>
					</blockquote>
		    </div>

		  </div>
		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#myCarouselTestimonials" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarouselTestimonials" data-slide="next">&rsaquo;</a>
		</div>

		<div class="span6">
			<iframe id="youtube-video" src="http://www.youtube.com/embed/5x_fqhiRbfI" ></iframe>
		</div>
  </div><!-- End Row  -->

<div class="separator-top">

	<div class="row-fluid box hidden-phone">
		<div class="span8">
			<h3>Find Us on Facebook</h3>
			<div class="fb-like-box" data-href="http://www.facebook.com/pages/Awaken-Empowerment-Coaching/432750413457587" data-width="646" data-height="300" data-show-faces="false" data-stream="true" data-border-color="white" data-header="false"></div>
		</div>
		<div class="span4">
			<h3>Our Fans</h3>
			<div class="fb-like-box" data-href="http://www.facebook.com/pages/Awaken-Empowerment-Coaching/432750413457587" data-width="292" data-height="300" data-show-faces="true" data-stream="false" data-border-color="white" data-header="false"></div>
		</div>
	</div>

	<div class="row-fluid box visible-phone">
		<div class="span12">
			<h3>Find Us on Facebook ...</h3>
			<div class="fb-like-box" data-href="http://www.facebook.com/pages/Awaken-Empowerment-Coaching/432750413457587" data-width="705" data-height="500" data-show-faces="true" data-stream="true" data-border-color="white" data-header="false"></div>
		</div>
	</div>

</div>

<?php require_once("includes/footer.inc.php") ?>