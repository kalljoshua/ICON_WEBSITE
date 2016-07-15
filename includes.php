<?php
function topbanner(){
?>
<!--banner-->
<div class="banner">
	<div class="container">
			<div class="header-nav">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a class="navbar-brand link link--yaku" href="index.html"><span>I</span><span>C</span><span>O</span><span>N</span><span>2</span><span>5</span><span>6</span></a>
								</h1>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav class="cl-effect-1">
									<ul class="nav navbar-nav ">
										<li><a class="hvr-overline-from-left button2 active scroll" href="index.html">Home</a></li>
										<li><a class="hvr-overline-from-left button2 scroll" href="#about">About</a></li>
										<li><a class="hvr-overline-from-left button2 scroll" href="#team">Team</a></li>
										<li><a class="hvr-overline-from-left button2 scroll" href="#services">Recent Projects</a></li>
										<li><a class="hvr-overline-from-left button2 scroll" href="#work">work</a></li>
										<li><a class="hvr-overline-from-left button2 scroll" href="#portfolio">Portfolio</a></li>
										<li><a class="hvr-overline-from-left button2 scroll" href="#contact">Contact</a></li>
									</ul>
								</nav>
							</div><!-- /navbar-collapse -->
						</nav>
			</div>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner-info">
						<h3>THE BEST <span>IT SOLUTIONS</span></h3>
						<p>for the most ambitious companies</p>
						<div class="clearfix"></div>
						<div class="arrow text-center"><a class="scroll" href="#about"><img src="images/icon.png" alt=" " /></a></div>
					</div>
				</li>
				<li>
					<div class="banner-info">
						<h3>THE FUTURE <span>BELONGS TO ICON256</span></h3>
						<p>for the most ambitious companies</p>
						<div class="clearfix"></div>
						<div class="arrow text-center"><a class="scroll" href="#about"><img src="images/icon.png" alt=" " /></a></div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--//banner-->
<?php
}
?>

<?php
function footer(){
?>
<!-- footer -->
<div class="footer">
	<div class="container">
		<form action="#" method="post">
			<div class="col-md-6 footer-left">
				<input type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
				<input type="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="text" value="Mobile Number" name="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
			</div>
			<div class="col-md-6 footer-right">			
				<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>	
				<input type="submit" value="Submit Now">	
			</div>
			<div class="clearfix"></div>
				
		</form>
		<p class="copy-rights">&copy; 2016 Consortium. All Rights Reserved | Design by </p>

	</div>
</div>
<!-- //footer -->
<?php
}
?>


<?php
function contact(){
?>
<!-- contact -->
<div id="contact" class="contact">
		<div class="col-md-4 contact_left text-center">
			<ul>
				<li><a class="fb" href="#"></a></li>
				<li><a class="twit" href="#"></a></li>
				<li><a class="goog" href="#"></a></li>
				<li><a class="drib" href="#"></a></li>
				<li><a class="pin" href="#"></a></li>
			</ul>
		</div>
		<div class="col-md-8 contact_right text-center">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
			<div class="map">
				<h3 class="title">CONTACT</h3>
				<p class="para">Duis aute irure dolor reprehenderit<span> in voluptate velit</span> esse cillum dolore eu 
				fugiat.</p>
				<ul class="contact-list text-left">
					<li>756 Global Place, New York.</li>
					<li>+7(888)91-34-34</li>
					<li><a href="mailto:example@mail.com">mail@example.com</a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
</div>
<!-- //contact -->

<?php
}
?>


<?php
function portfolio(){
?>
<!-- portfolio -->
<div id="portfolio" class="portfolio all_pad text-center">
	<div class="container">
		<h3 class="title">PORTFOLIO</h3>
		<p class="para">Duis aute irure dolor reprehenderit<span> in voluptate velit</span> esse cillum dolore eu 
		fugiat nulla pariatur. Excepteur sint occaecat.</p>
        <div class="filtr-container ">
                <div class=" col-md-6 filtr-item baner-top" data-category="1, 5" data-sort="Busy streets">
					<a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g1.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>CONSORTIUM</h4>
										<span class="divider"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="divider"></span>
									</div>
								</div>
							</div>
					</a>
                </div>
                <div class="col-md-6 filtr-item baner-top" data-category="2, 5" data-sort="Luminous night">
					<a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g2.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>CONSORTIUM</h4>
										<span class="divider"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="divider"></span>
									</div>
								</div>
							</div>
					</a>
                </div>
				<div class="col-md-4 filtr-item baner-top ban-mar" data-category="3, 4" data-sort="Industrial site">
					<a href="images/g3.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g3.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>CONSORTIUM</h4>
										<span class="divider"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias.</p>
										<span class="divider"></span>
									</div>
								</div>
							</div>
					</a>
                </div>
                <div class="col-md-4 filtr-item baner-top ban-mar" data-category="2, 4" data-sort="Peaceful lake">
					<a href="images/g4.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g4.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>CONSORTIUM</h4>
										<span class="divider"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias.</p>
										<span class="divider"></span>
									</div>
								</div>
							</div>
					</a>
                </div>
                <div class="col-md-4  filtr-item baner-top ban-mar" data-category="1, 5" data-sort="City lights">
                    <a href="images/g5.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g5.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>CONSORTIUM</h4>
										<span class="divider"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias.</p>
										<span class="divider"></span>
									</div>
								</div>
							</div>
					</a>
                </div>
                <div class="col-md-6 filtr-item baner-top" data-category="1, 4" data-sort="City wonders">
					<a href="images/g6.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g6.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>CONSORTIUM</h4>
										<span class="divider"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="divider"></span>
									</div>
								</div>
							</div>
					</a>
                </div>
                <div class=" col-md-6 filtr-item baner-top" data-category="3" data-sort="In production">
					<a href="images/g3.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g3.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>CONSORTIUM</h4>
										<span class="divider"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="divider"></span>
									</div>
								</div>
							</div>
					</a>
                </div>
                
               
               <div class="clearfix"> </div>
           
		</div> 
	</div>
</div>
<!-- //portfolio -->
<?php
}
?>

<?php
function work(){
?>

<!-- work -->
<div id="work" class="work all_pad text-center">
	<div class="container">
		<h3 class="title">WORK STEPS</h3>
		<p class="para">Duis aute irure dolor reprehenderit<span> in voluptate velit</span> esse cillum dolore eu 
		fugiat nulla pariatur. Excepteur sint occaecat.</p>
		<div class="col-md-8 where-right">
			<div class="wel-left">
				<div class="work-left">
					<h4>01</h4>
				</div>
				<div class="work-right text-left">
					<h5>PROJECT UNDERSTANDING</h5>
					<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
						fugiat nulla pariatur. Excepteur sint occaecat.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="wel-right ">
				<div class="content-item item-image1">
					<div class="overlay"></div>
					  <div class="corner-overlay-content"></div>
					  <div class="overlay-content">
					  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-8 where-right no-marg">
			<div class="wel-right2">
				<div class="content-item item-image2">
					<div class="overlay"></div>
					  <div class="corner-overlay-content"></div>
					  <div class="overlay-content">
					  </div>
				</div>
			</div>
			<div class="wel-left2">
				<div class="work-left">
					<h4>02</h4>
				</div>
				<div class="work-right text-left">
					<h5>RESEARCH & PLANNING</h5>
					<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
						fugiat nulla pariatur. Excepteur sint occaecat.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>


<?php
}
?>

<?php
function services(){
?>

<!-- services -->
<!-- welcome -->
<div id="services">
	<div class="welcome">
		<div class="container">
			<h3><span></span>Special Services</h3>
			<div class="welcome-grids">
				<div class="col-md-4 welcome-grid">
					<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
					<h4><a class="link link--kumya" href="single.html"><span data-letters="Minim veniam adminim">Minim veniam adminim</span></a></h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
						laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
				</div>
				<div class="col-md-4 welcome-grid">
					<i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
					<h4><a class="link link--kumya" href="single.html">
					<span data-letters="Ullam corporis suscipit">Ullam corporis suscipit</span></a></h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
						laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
				</div>
				<div class="col-md-4 welcome-grid">
					<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
					<h4><a class="link link--kumya" href="single.html"><span data-letters="Ut aliquid ex ea comm">Ut aliquid ex ea comm</span></a></h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
						laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="welcome-grids">
				<div class="col-md-4 welcome-grid">
					<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
					<h4><a class="link link--kumya" href="single.html"><span data-letters="Minim veniam adminim">Minim veniam adminim</span></a></h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
						laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
				</div>
				<div class="col-md-4 welcome-grid">
					<i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
					<h4><a class="link link--kumya" href="single.html">
					<span data-letters="Ullam corporis suscipit">Ullam corporis suscipit</span></a></h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
						laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
				</div>
				<div class="col-md-4 welcome-grid">
					<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
					<h4><a class="link link--kumya" href="single.html"><span data-letters="Ut aliquid ex ea comm">Ut aliquid ex ea comm</span></a></h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
						laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
</div>
<!-- //welcome -->
<!-- //services -->
<?php
}
?>

<?php
function team(){
?>
<!-- team -->
<div id="team" class="team all_pad text-center">
	<div class="container">
		<h3 class="title">OUR TEAM</h3>
		<p class="para">Duis aute irure dolor reprehenderit<span> in voluptate velit</span> esse cillum dolore eu 
		fugiat nulla pariatur. Excepteur sint occaecat.</p>
			<div class="col-md-3 about-poleft">
				<div class="about_img"><img src="images/team4.jpg" alt="">
				  <h5>Victoria<span>Web Designer</span></h5>
				  <div class="about_opa">
					<ul class="fb_icons2 text-center">
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3 about-poleft yes_marg">
				<div class="about_img"><img src="images/team2.jpg" alt="">
				  <h5>Henry<span>Manager</span></h5>
				  <div class="about_opa">
					<ul class="fb_icons2 text-center">
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-3 about-poleft yes_marg">
				<div class="about_img"><img src="images/team1.jpg" alt="">
				  <h5>Shevena<span>Project Manager</span></h5>
				  <div class="about_opa">
					<ul class="fb_icons2 text-center">
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3 about-poleft ">
				<div class="about_img"><img src="images/team3.jpg" alt="">
				  <h5>Patrick<span>Assistant</span></h5>
				  <div class="about_opa">
					<ul class="fb_icons2 text-center">
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="clearfix"></div>
	</div>
</div>
<!-- //team -->
<?php
}
?>

<?php
function about(){
?>
<!-- about -->
<div id="about" class="about all_pad text-center">
	<!--skills-->
	<div class="skills">
		<div class="container">
			<div class="title">
				<h3>Skills</h3>
				<p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p>
			</div>
			<div class="skills-row">
				<div class="col-md-6 skills-left">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">History</a></li>
							<li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl">Our Goal</a></li>
							<li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab" aria-controls="james">Achievements</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div class="tabcontent-grids">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis. Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget. Nulla ornare purus nunc, ut dapibus leo sodales adipiscing. Praesent sit amet justo diam. Quisque sagittis egestas sem vitae vestibulum. Quisque nec lacus ornare, volutpat arcu in, lacinia dolor.</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
								<div class="tabcontent-grids">
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
										cupidatat non proident, sunt in culpa qui officia deserunt mollit 
										anim id est laborum.</p>
									<ul>
										<li><span class="glyphicon glyphicon-menu-right"></span> Sed tincidunt lorem sed </li>
										<li><span class="glyphicon glyphicon-menu-right"></span> Excepteur sint occaecat </li>
										<li><span class="glyphicon glyphicon-menu-right"></span> Duis aute irure dolor in </li>
									</ul>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
								<div class="tabcontent-grids">
									<p>Excepteur sint occaecat 
										cupidatat non proident, sunt in culpa qui officia deserunt mollit 
										anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse 
										cillum dolore eu fugiat nulla pariatur. </p>
									<ul>
										<li><span class="glyphicon glyphicon-menu-right"></span> Sed tincidunt lorem sed </li>
										<li><span class="glyphicon glyphicon-menu-right"></span> Excepteur sint occaecat </li>
										<li><span class="glyphicon glyphicon-menu-right"></span> Duis aute irure dolor in </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 skills-right bar_group">
					<div class='bar_group__bar thin' label='Lorem ipsum &nbsp;&nbsp; 80%' value='200'></div>
					<div class='bar_group__bar thin' label='Quis nostrud &nbsp;&nbsp; 100%' value='250'></div>
					<div class='bar_group__bar thin' label='Sed do eiusmod &nbsp;&nbsp; 72%' value='180'></div>
					<div class='bar_group__bar thin' label='Ut enim adnim &nbsp;&nbsp; 88%' value='220'></div>
				</div>
				<!--bar-js-->
				<script src="js/bars.js"></script>
				<!--bar-js-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//skills-->
	
</div>
<!-- //about -->
<?php
}
?>
