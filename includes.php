<?php
function topbanner(){
?>
<!--banner-->
<div class="banner">
	<div class="container">
			<div class="header-nav" >
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header logo">
								
								<h1>
									<a class="navbar-brand link" href="index.php">
									<img src="images/iconLogo.png" height="150" width="170">
								</h1>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil"  id="bs-example-navbar-collapse-1">
								<nav class="cl-effect-1">
									<ul class="nav navbar-nav " >
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
						<h2>Icon Two Five Six Business Leveraging & Information<br/>
							Support Systems (ICON 256) Limited.</h2>
						<p>The Software Development Outsourcing Company</p>
						<div class="clearfix"></div>
						<div class="arrow text-center"><a class="scroll" href="#about"><img src="images/icon.png" alt=" " /></a></div>
					</div>
				</li>
				<li>
					<div class="banner-info">
						<h2>Icon Two Five Six Business Leveraging & Information<br/>
							Support Systems (ICON 256) Limited.</h2>
						<p>The Software Development Outsourcing Company</p>
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
		<p class="copy-rights">&copy; <?php echo date('Y');?> ICON256BLISS. All Rights Reserved</p>

	</div>
</div>
<!-- //footer -->
<?php
}
?>


<?php
function contact(){
?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- contact -->
<div id="contact" class="contact">
			<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
			<div class="title">
				<h3 class="title" style="font-size:43px">CONTACT</h3>
				<p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p>
			</div>
			
			<div class="contact">
				<div class="container">
					<div class="contact-page">
						<div class="contact-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15959.011841833097!2d32.6055229!3d0.3279573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafdd85329ea588a!2sYouth+Initiatives+for+Youth+Actions+Foundation+(YIYA)!5e0!3m2!1sen!2s!4v1468658763680" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			
			<div class="contact-grids">
				<div class="col-md-5 address">
					<h4>Contact Info</h4>
					<div class="address-row">
						<div class="col-md-2 address-left">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 address-right">
							<h5>Visit Us</h5>
							<p>123 Fourth Avenue, SEATTLE WA 98104, USA </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-md-2 address-left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 address-right">
							<h5>Mail Us</h5>
							<p><a href="mailto:info@example.com"> mail@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-md-2 address-left">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 address-right">
							<h5>Call Us</h5>
							<p>+11 222 333 44444444</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-7 contact-form">
					<form action="#" method="post">
						<input type="text" name="First Name" placeholder="Full Name" required="">
						<input class="email" name="Last Name" type="text" placeholder="Last Name" required="">
						
						<input type="text" name="Number" placeholder="Mobile Number" required=""><br/>
						<input style="margin-left: 1.5em;" class="email" name="Email" type="text" placeholder="Email" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!--//contact-->
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
<div id="work" class="work all_pad text-center" style="background-color:#FFE673;">
	<div class="container">
		<h3 class="title">WORK STEPS</h3>
		<p class="para">Duis aute irure dolor reprehenderit<span> in voluptate velit</span> esse cillum dolore eu 
		fugiat nulla pariatur. Excepteur sint occaecat.</p>	
			
		
		<!--banner-starts-->
				<div class="flexslider">
					<ul class="slides">
						<li>
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

						</li><li>
							<div class="col-md-8 where-right mySlides 4">
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
										<h5>RESEARCH & PLANNING 2</h5>
										<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
											fugiat nulla pariatur. Excepteur sint occaecat.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>

						</li><li>
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

						</li><li>
							<div class="col-md-8 where-right mySlides 4">
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
										<h5>RESEARCH & PLANNING 4</h5>
										<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
											fugiat nulla pariatur. Excepteur sint occaecat.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>

						</li>
					</ul>
				</div>
			

	<!--banner-end-->
	
		
		<div class="clearfix"></div>

	</div>
</div>
<!--FlexSlider-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

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
			<h3><span></span>SERVICES</h3>
			<div class="welcome-grids">
				<div class="col-md-4 welcome-grid">
					<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
					<h4><a class="link link--kumya" href="#demoa" class="btn btn-info" data-toggle="collapse">
					<span data-letters="Web Applicatins and Websites">Web Applicatins and Websites</span></a></h4>
					<p>We possess vast experience in creating Web applications of various types, levels of sophistication and
						purpose. All our applications are delivered using the most up-to-date computer technologies and
						development principles, including Web 2.0. We have been involved in developing such applications as
						<a href="#demoa" data-toggle="collapse" style="color:#FFE673;">More...</a></p>
						<div id="demoa" class="collapse">
							<p>	<ul style="list-style-type:disc">
							<li>Real Time Trading Systems</li>
							<li>E-commerce Applications</li>
							<li>Content and Knowledge Management Applications</li>
							<li>Internet-oriented systems for Customer Relations</li>
							<li>Management (CRM-systems)</li>
							<li>Office Automation</li>
							<li>Mailing list management</li>
							<li>Database management applications</li>
							<li>Diverse websites of different level of complexity and sophistication.</li>
								</ul><p>
						</div>
				</div>
				<div class="col-md-4 welcome-grid">
					<i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
					<h4><a class="link link--kumya" href="#demob" class="btn btn-info" data-toggle="collapse">
					<span data-letters="Custom Software Development">Custom Software Development</span></a></h4>
					<p>The Icon 256 development team is competent in diverse fields of software development and its areas
						of expertise include, but are not limited to:
						<a href="#demob" data-toggle="collapse" style="color:#FFE673;">More...</a></p></p>
						
						<div id="demob" class="collapse">
							<p>	<ol>
							<li><a href="#demob1" data-toggle="collapse" style="color:#FFE673;">GUI APPLICATIONS</a></li>
							<div id="demob1" class="collapse">
							<p>
							Icon 256 can deliver programs for virtually any business purpose for the wide range of platforms
							(Windows, UNIX, Cross-platform applications in Java and more). Primarily, these are business
							applications such as:
								<ul style="list-style-type:disc">
									<li>Business Automation</li>
									<li>Trade systems</li>
									<li>Accounting systems</li>
									<li>Courseware</li>
									<li>E-learning software</li>
									<li>Document circulation supporting systems.</li>
								</ul>
							As an example of our capabilities, we would like to highlight the production quality control system for
							manufacturers we developed, which allows searching for data directly from a CD-ROM, without
							having to install it on a computer's hard disk.
							</p>
							</div>
							
							<li>
							<a href="#demob2" data-toggle="collapse" style="color:#FFE673;">PROGRAMS FOR POCKET PCS, WIRELESS AND MOBILE DEVICES</a></li>
							<div id="demob2" class="collapse">
							<p>
							We actively work to increase our involvement in a new prospective market of software development
							for pocket, mobile and wireless devices. Our expertise is the usage of the communicative potential of
							the devices, both when they communicate with each other and while accessing the Internet or a
							corporate network, however we are looking into broadening the range of our skills for this area.
							</p>
							</div>
							<li><a href="#demob3" data-toggle="collapse" style="color:#FFE673;">SOFTWARE PRODUCTS FOR RESALE</a></li>
							<div id="demob3" class="collapse">
							<p>
							«Box» software products development is another prominent direction of our company activities. We
							realize the entire product development cycle:
							<ol type="I">
									<li>Future demand estimation for the developed product including; Market analysis, 
										Competitors and competing products analysis, Sales forecast.</li>
									<li>Preparation for the software product implementation including; Determination of a range of functions necessary for the product
										Variety of the product's versions to suit particular requirements,
										Creation of the technical documentation and user manuals,
										Implementation process mapping.</li>
									<li>Release of the new versions, including; Design, Programming, Testing and fine-tuning of a software product</li>
									<li>Sale and after sale services, including; Publication of the information about the product on the internet,
									Creating a promotional website for the product, Conducting advertising campaigns,
									User support, Feedback processing and analysis</li>
							</ol>
							We are open to collaboration in the field of co-producing box software for the future retailing of the
							resulting product on the market.
							</p>
							</div>
							<li><a href="#demob4" data-toggle="collapse" style="color:#FFE673;">CONTRACT PROGRAMMING</a></li>
							<div id="demob4" class="collapse">
							<p>
							Icon 256’s talented and skilled personnel possess knowledge of most of the computer technologies
							and languages available and we always keep up to date with the latest developments in this era.
							</p>
							</div>
								</ol><p>
						</div>
				</div>
				<div class="col-md-4 welcome-grid">
					<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
					<h4><a class="link link--kumya" href="#democ" class="btn btn-info" data-toggle="collapse">
					<span data-letters="Project Management and Business Analysis">Project Management and Business Analysis</span></a></h4>
					<p>Personal years of hands-on experience and the time-proven Project Management Methodology,
						which has been incorporated into most of our company’s development process, guarantee that our
						project managers can successfully plan, oversee and guide virtually any project, no matter how large
						and challenging, that comes their way. 
						<a href="#democ" data-toggle="collapse" style="color:#FFE673;">More...</a></p>
						<div id="democ" class="collapse">
							<p>	Our project leaders possess strong technical skills, allowing
								them to take on an active technical management role as well as their Project Management role.
								Moreover, it is vital that clients' business needs are correctly identified so that appropriate solutions
								to their business problems could be worked out. Our managers possess solid analytical skills and will
								work with you to achieve sufficient understanding of the structure and the dynamics of the
								organization in which a system is to be utilized and derive the system requirements needed to
								support the business goals of the target organization.<p>
						</div>
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
	<div height="10px"> <br/><br/></div>
	<div class="container">
		
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
<div id="about">
<div class="about all_pad text-center">
	<div class="container">
		<h3 class="title">ABOUT ICON256</h3>
		<p class="para">Icon 256 is a software development company of young talented graduates that are successfully
						presenting innovative applications to address social challenges in their communities for the last one
						year, and are steadily growing into regarded players in the Ugandan software development industry
						and has proven to be a reliable, efficient and trustworthy service provider to small and medium
						businesses in the region.</p>
		<div class="col-md-4 abt-grid">
			<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
				<a href="#" class="hi-icon icon1"></a>
			</div>
			<h4>OUR MISSION</h4>
			<p>To provide customized ICT solutions that are relevant and effective in solving social challenges for social
			transformation.</p>
		</div>
		<div class="col-md-4 abt-grid yes_marg">
			<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
				<a href="#" class="hi-icon icon2"></a>
			</div>
			<h4>OUR VISION</h4>
			<p>Information communication solutions for everyday life.</p>
		</div>
		<div class="col-md-4 abt-grid">
			<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
				<a href="#" class="hi-icon icon3"></a>
			</div>
			<h4>PROMOTION</h4>
			<p>To provide customized ICT solutions that are relevant and effective in solving social challenges for social
			transformation.</p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
	<!--skills-->
	<div class="skills">
		<div class="container">
			<div class="skills-row">
				<div class="col-md-6 skills-left">
					<div class="banner-bottom" id="banner-bottom">
						<div class="container">
						<h3>WHY ICON 256 </h3><br/>
							<div class="banner-bottom-grids">
							
								<div class="col-md-6 banner-bottom-grid-left">
								<p >The reasons why we believe that Icon 256 is the most optimal choice for outsourcing your software
								development to are numerous, so below we provided just a handful of examples of what sets us apart
								from the competition:</p>
									<ul>
										<li><i>1.</i><a class="link link--kumya" href="#demo" class="btn btn-info" data-toggle="collapse">
										<span data-letters="Value and Skill set">Value and Skill set &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;</span></a><br/>
										<div id="demo" class="collapse">
										<p>
											Our clients benefit significantly from utilizing the professional skills and personal experience of
											our development team for the fraction of the price the equivalently skilled local professionals would
											demand. All that while being guaranteed to obtain only the highest quality end results.<p>
										</div>
										</li>
										<li><i>2.</i><a class="link link--kumya" href="#demo2" class="btn btn-info" data-toggle="collapse">
										<span data-letters="Predictable of the quality of our results">Predictable of the quality of our results</span></a>
										<div id="demo2" class="collapse">
										<p>
											Each project, no matter whether it is considerable or small,
											we regard as an opportunity to showcase the high level of expertise and professionalism that we
											possess. Our developers and quality assurance specialists work to ensure that our clients can at all
											times rely on us to obtaining a product or solution that will pass the strictest tests on efficiency,
											practicability, robustness, adaptability to different environments and stability.<p>
										</div>
										</li>
										<li><i>3.</i><a class="link link--kumya" href="#demo3" class="btn btn-info" data-toggle="collapse">
										<span data-letters="Advanced analytical skills">Advanced analytical skills
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
										<div id="demo3" class="collapse">
										<p>
											The Company’s analyst has over five years of experience in business
											analysis in the wide range of human activities. That ensures that we can easily interpret any
											requirements we receive from our clients, work out the most suitable development approach and
											transform them into an advanced cost and performance-efficient technical solution, which takes into
											account the client's business goals, technical settings, expected frequency of updates and more.<p>
										</div>
										</li>
										<li><i>4.</i><a class="link link--kumya" href="#demo4" class="btn btn-info" data-toggle="collapse">
										<span data-letters="Efficient development process organization">Efficient development process organization</span></a>
										<div id="demo4" class="collapse">
										<p>
											During the few years of collaboration and interaction
											with experienced software development business we have achieved outstanding efficiency in
											organizing the development process (highly experienced project management, automated control
											over development process and reporting system). As a result, we manage to evade unforeseen
											overhead expenses and the benefits are passed on directly to our clients in a form of cost efficiency of
											their projects realization and obtaining the results within the most optimal timeframes.<p>
										</div>
										</li>
										<li><i>5.</i><a class="link link--kumya" href="#demo5" class="btn btn-info" data-toggle="collapse">
										<span data-letters="Superior communication skills">Superior communication skills</span></a>
										<div id="demo5" class="collapse">
										<p>
											At Icon 256 we believe that every client has a unique set of needs to
												be fulfilled by contracting a software development company. That is why we work closely with each
												client to gain a full understanding of what those needs are and come up with the solution that serves
												them best.<p>
										</div>
										</li>
										<li><i>6.</i><a class="link link--kumya" href="single.html">
										<span data-letters="Eos qui ratione voluptatem sequi">Eos qui ratione voluptatem sequi</span></a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
	</div>
<!-- //banner-bottom -->
				</div>
				<h3>AREAS OF EXPERTISE </h3><br/>
				<div class="col-md-6 skills-right bar_group">
					
					<div class='bar_group__bar thin' label='Web Applicatins and Websites &nbsp;&nbsp; 80%' value='200'></div>
					<div class='bar_group__bar thin' label='Custom Sosftware Development &nbsp;&nbsp; 100%' value='250'></div>
					<div class='bar_group__bar thin' label='Project Management and Business Analysis &nbsp;&nbsp; 72%' value='180'></div>
					<div class='bar_group__bar thin' label='Website Design &nbsp;&nbsp; 88%' value='220'></div>
					<div class='bar_group__bar thin' label='Technical Support and Maintenance &nbsp;&nbsp; 88%' value='220'></div>
					<div class='bar_group__bar thin' label='Other Services &nbsp;&nbsp; 88%' value='220'></div>
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
