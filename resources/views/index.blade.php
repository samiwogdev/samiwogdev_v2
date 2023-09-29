@extends('layout.include')
@section('content')
    <!-- Page -->
	<div class="page" id="home-section">

		<!-- Preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Started Background -->
		<div class="started-bg">
			<div class="slide" style="background-image: url({{ asset('assets/images/slide-bg.jpg') }});"></div>
		</div>

		<!-- Header -->
		<header>
			<div class="top-menu">
				<ul>
					<li class="active">
						<a class="btn_animated" href="index-1.html#home-section"><span class="circle">Home</span></a>
					</li>
					<li>
						<a class="btn_animated" href="index-1.html#about-section"><span class="circle">About</span></a>
					</li>
					<li>
						<a class="btn_animated" href="index-1.html#skills-section"><span class="circle">Skills</span></a>
					</li>
					<li>
						<a class="btn_animated" href="index-1.html#experience-section"><span class="circle">Experience</span></a>
					</li>
					<li>
						<a class="btn_animated" href="index-1.html#service-section"><span class="circle">Services</span></a>
					</li>
					<li>
						<a class="btn_animated" href="index-1.html#education-section"><span class="circle">Education</span></a>
					</li>
					<li>
						<a class="btn_animated" href="index-1.html#works-section"><span class="circle">Portfolio</span></a>
					</li>
					<li>
						<a class="btn_animated" href="index-1.html#clients-section"><span class="circle">Clients</span></a>
					</li>
					<li>
						<a class="btn_animated" href="index-1.html#pricing-section"><span class="circle">Pricing</span></a>
					</li>
					<li>
						<a class="btn_animated" href="index-1.html#blog-section"><span class="circle">Blog</span></a>
					</li>
					<li>
						<a class="btn_animated" href="index-1.html#contact-section"><span class="circle">Contact Me</span></a>
					</li>
				</ul>
				<a href="index-1.html#" class="menu-btn"><span></span></a>
			</div>
		</header>

		<!-- Container -->
		<div class="container">

			<!-- Started -->
			<div class="section started">
				<div class="st-box">
					<div class="st-bts">
						<a href="mailto:smorgan@domain.com" class="btn_animated">
							<span class="circle"><i class="icon ion ion-plus"></i></span>
						</a>
					</div>
					<div class="st-image"><img src="https://bslthemes.com/html/mcard/theme_colors/blue/images/man.png" alt="" /></div>
					<div class="st-title">Steve Morgan</div>
					<div class="st-subtitle">UX/UI Designer & Front-end Developer</div>
					<div class="st-soc">
						<a target="blank" href="https://www.facebook.com/" class="btn_animated">
							<span class="circle"><i class="icon ion ion-social-facebook"></i></span>
						</a>
						<a target="blank" href="https://github.com/" class="btn_animated">
							<span class="circle"><i class="icon ion ion-social-github"></i></span>
						</a>
						<a target="blank" href="https://twitter.com/" class="btn_animated">
							<span class="circle"><i class="icon ion ion-social-twitter"></i></span>
						</a>
						<a href="skype:smorgan" class="btn_animated">
							<span class="circle"><i class="icon ion ion-social-skype"></i></span>
						</a>
						<a target="blank" href="https://plus.google.com/" class="btn_animated">
							<span class="circle"><i class="icon ion ion-social-googleplus"></i></span>
						</a>
					</div>
				</div>
			</div>

			<!-- Wrapper -->
			<div class="wrapper">

				<!-- Section About -->
				<div class="section about" id="about-section">
					<div class="content-box">
						<div class="row">
							<div class="col col-m-12 col-t-5 col-d-5">
								<div class="info-list">
									<ul>
										<li><strong><span>Age:</span></strong> 22 Years</li>
										<li><strong><span>Job:</span></strong> Freelancer</li>
										<li><strong><span>Citizenship:</span></strong> United States</li>
										<li><strong><span>Address:</span></strong> 358 W Jefferson St, Bensenville, IL 60112</li>
										<li><strong><span>Phone:</span></strong> <a href="tel:12562548456">+1 256 254 84 56</a></li>
										<li><strong><span>E-mail:</span></strong> <a href="mailto:smorgan@domain.com">smorgan@domain.com</a></li>
									</ul>
								</div>
							</div>
							<div class="col col-m-12 col-t-7 col-d-7">
								<div class="text-box">
									<p><strong>Hello! I’m Steve Morgan</strong></p>
									<p>
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
										eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
										voluptatem quia voluptas sit aspernatur aut odit aut fugit. Sed ut perspiciatis unde omnis iste natus error sit
										voluptatem accusantium doloremque.
									</p>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
									</p>
								</div>
								<div class="bts">
									<a href="index-1.html#" class="btn btn_animated"><span class="circle">Download CV</span></a>
									<a href="index-1.html#" class="btn extra contact-btn btn_animated"><span class="circle">Contact Me</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Section Skills -->
				<div class="section skills" id="skills-section">
					<div class="title">Skills</div>
					<div class="row">
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-gear-b"></i></div>
									<div class="name">Professional</div>
								</div>
								<div class="skills">
									<ul>
										<li>
											<div class="name">UI/UX Design</div>
											<div class="progress">
												<div class="percentage" style="width:78%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
										<li>
											<div class="name">Web Application</div>
											<div class="progress">
												<div class="percentage" style="width:90%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
										<li>
											<div class="name">Mobile Application</div>
											<div class="progress">
												<div class="percentage" style="width:84%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
										<li>
											<div class="name">Writing</div>
											<div class="progress">
												<div class="percentage" style="width:60%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
										<li>
											<div class="name">Photography</div>
											<div class="progress">
												<div class="percentage" style="width:72%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-person"></i></div>
									<div class="name">Personal</div>
								</div>
								<div class="skills">
									<ul>
										<li>
											<div class="name">Communication</div>
											<div class="progress">
												<div class="percentage" style="width:78%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
										<li>
											<div class="name">Team Work</div>
											<div class="progress">
												<div class="percentage" style="width:90%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
										<li>
											<div class="name">Leadership</div>
											<div class="progress">
												<div class="percentage" style="width:60%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
										<li>
											<div class="name">Creativity</div>
											<div class="progress">
												<div class="percentage" style="width:84%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
										<li>
											<div class="name">Language</div>
											<div class="progress">
												<div class="percentage" style="width:72%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Experience -->
				<div class="section experience" id="experience-section">
					<div class="title">
						Experience
						<span class="circle"><i class="icon ion ion-ios-briefcase"></i></span>
					</div>
					<div class="cd-timeline">
						<div class="cd-timeline-block animated">
							<div class="cd-timeline-point">
								<i class="icon ion ion-ios-checkmark-empty"></i>
							</div>
							<div class="cd-timeline-content">
								<div class="content-box">
									<div class="date">2013-2016</div>
									<div class="name">Facebook Inc.</div>
									<div class="category">Art Director</div>
									<p>
										Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique
										maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates
										sapientem sed, pri zril ubique ut. Lorem ipsum dolor sit amet, in quodsi.
									</p>
								</div>
							</div>
						</div>
						<div class="cd-timeline-block animated">
							<div class="cd-timeline-point">
								<i class="icon ion ion-ios-checkmark-empty"></i>
							</div>
							<div class="cd-timeline-content">
								<div class="content-box">
									<div class="date">2009-2013</div>
									<div class="name">Google Inc.</div>
									<div class="category">Front-end Developer</div>
									<p>
										Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi
										tacimates sapientem sed, pri zril ubique ut. Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent
										mediocritatem an, cule dicta iriure at.
									</p>
								</div>
							</div>
						</div>
						<div class="cd-timeline-block animated">
							<div class="cd-timeline-point">
								<i class="icon ion ion-ios-checkmark-empty"></i>
							</div>
							<div class="cd-timeline-content">
								<div class="content-box">
									<div class="date">2004-2009</div>
									<div class="name">Abc Inc.</div>
									<div class="category">Senior Developer</div>
									<p>
										Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi
										tacimates sapientem sed, pri zril ubique ut. Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent
										mediocritatem an, cule dicta iriure at.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="section service" id="service-section">
					<div class="title">Services</div>
					<div class="row">
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-android-color-palette"></i></div>
									<div class="name">UI/UX Design</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis
									lobortis. Vestibulum posuere molestie ipsum vel. Vestibulum venenatis vestibulum elit ultricies. Lorem ipsum dolor
									sit amet, consectetur adipiscing elit.
								</p>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-social-chrome"></i></div>
									<div class="name">Web Application</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis
									lobortis. Vestibulum posuere molestie ipsum vel. Vestibulum venenatis vestibulum elit ultricies. Lorem ipsum dolor
									sit amet, consectetur adipiscing elit.
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-social-android"></i></div>
									<div class="name">Android Application</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis
									lobortis. Vestibulum posuere molestie ipsum vel. Vestibulum venenatis vestibulum elit ultricies.
								</p>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-social-apple"></i></div>
									<div class="name">IOS Application</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis
									lobortis. Vestibulum posuere molestie ipsum vel. Vestibulum venenatis vestibulum elit ultricies. Lorem ipsum dolor
									sit amet, consectetur adipiscing elit.
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-android-create"></i></div>
									<div class="name">Writing</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis
									lobortis. Vestibulum posuere molestie ipsum vel. Vestibulum venenatis vestibulum elit ultricies.
								</p>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-camera"></i></div>
									<div class="name">Photography</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis
									lobortis. Vestibulum posuere molestie ipsum vel. Vestibulum venenatis vestibulum elit ultricies. Lorem ipsum dolor
									sit amet, consectetur adipiscing elit.
								</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Section Education -->
				<div class="section education" id="education-section">
					<div class="title">
						Education
						<span class="circle"><i class="icon ion ion-university"></i></span>
					</div>
					<div class="cd-timeline">
						<div class="cd-timeline-block animated">
							<div class="cd-timeline-point">
								<i class="icon ion ion-ios-checkmark-empty"></i>
							</div>
							<div class="cd-timeline-content">
								<div class="content-box">
									<div class="date">2002-2004</div>
									<div class="name">Art University</div>
									<div class="category">New York</div>
									<p>
										Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique
										maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates
										sapientem sed, pri zril ubique ut.
									</p>
								</div>
							</div>
						</div>
						<div class="cd-timeline-block animated">
							<div class="cd-timeline-point">
								<i class="icon ion ion-ios-checkmark-empty"></i>
							</div>
							<div class="cd-timeline-content">
								<div class="content-box">
									<div class="date">2000-2002</div>
									<div class="name">Front-end Course</div>
									<div class="category">London</div>
									<p>
										Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi
										tacimates sapientem sed, pri zril ubique ut. Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent
										mediocritatem an, cule dicta iriure at.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Portfolio -->
				<div class="section works" id="works-section">
					<div class="title">Portfolio</div>
					<div class="filter-menu">
						<div class="filters">
							<div class="btn-group">
								<div class="f_btn btn_animated active">
									<div class="circle">
										<label><input type="radio" name="fl_radio" value="box-item" />All</label>
									</div>
								</div>
								<div class="f_btn btn_animated">
									<div class="circle">
										<label><input type="radio" name="fl_radio" value="f-mockup" />Mockups</label>
									</div>
								</div>
								<div class="f_btn btn_animated">
									<div class="circle">
										<label><input type="radio" name="fl_radio" value="f-graphic" />Graphics</label>
									</div>
								</div>
								<div class="f_btn btn_animated">
									<div class="circle">
										<label><input type="radio" name="fl_radio" value="f-icons" />Icons</label>
									</div>
								</div>
								<div class="f_btn btn_animated">
									<div class="circle">
										<label><input type="radio" name="fl_radio" value="f-ui" />UI Kits</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row box-items">
						<div class="col col-m-12 col-t-6 col-d-4 box-item f-mockup animated">
							<div class="image">
								<a href="index-1.html#popup-1" class="has-popup"><img src="https://bslthemes.com/html/mcard/theme_colors/blue/images/works/work1.jpg" alt="" /></a>
							</div>
							<div class="content-box">
								<div class="category">Mockups</div>
								<a href="index-1.html#popup-1" class="name has-popup">Realistic Business Cards MockUp</a>
								<p>
									Here’s a new b-cards mock-up with several business cards...
								</p>
							</div>
							<div id="popup-1" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<img src="https://bslthemes.com/html/mcard/theme_colors/blue/images/works/work1.jpg" alt="">
									</div>
									<div class="desc">
										<div class="category">Mockups</div>
										<h4>Realistic Business Cards MockUp</h4>
										<p>
											Here’s a new b-cards mock-up with several business cards scattered across the scene. The PSD file allows you
											to easily. Here’s a new b-cards mock-up with several business cards scattered across the scene.
										</p>
										<a href="index-1.html#" class="btn btn_animated"><span class="circle">View Project</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-4 box-item f-graphic animated">
							<div class="image">
								<a href="index-1.html#popup-2" class="has-popup"><img src="images/works/work3.jpg" alt="" /></a>
							</div>
							<div class="content-box">
								<div class="category">Graphic</div>
								<a href="index-1.html#popup-2" class="name has-popup">The Mountainbiker Freebie</a>
								<p>
									The freebie of the day is a logo design kit with an original theme...
								</p>
							</div>
							<div id="popup-2" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<img src="images/works/work3.jpg" alt="">
									</div>
									<div class="desc">
										<div class="category">Graphic</div>
										<h4>The Mountainbiker Freebie</h4>
										<p>
											The freebie of the day is a logo design kit with an original theme that will help you create
											stunning mountain bike related logos in just minutes.
										</p>
										<a href="index-1.html#" class="btn btn_animated"><span class="circle">View Project</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-4 box-item f-mockup animated">
							<div class="image">
								<a href="index-1.html#popup-3" class="has-popup"><img src="images/works/work2.jpg" alt="" /></a>
							</div>
							<div class="content-box">
								<div class="category">Mockups</div>
								<a href="index-1.html#popup-3" class="name has-popup">Notebook MockUp PSD</a>
								<p>
									Today we’re happy to share with you the mockup of a classic...
								</p>
							</div>
							<div id="popup-3" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<img src="images/works/work2.jpg" alt="">
									</div>
									<div class="desc">
										<div class="category">Mockups</div>
										<h4>Notebook MockUp PSD</h4>
										<p>
											Today we’re happy to share with you the mockup of a classic notebook that will help you showcase your
											drawings. Today we’re happy to share with you the mockup of a classic notebook that will help.
										</p>
										<a href="index-1.html#" class="btn btn_animated"><span class="circle">View Project</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-4 box-item f-icons animated">
							<div class="image">
								<a href="index-1.html#popup-4" class="has-popup"><img src="https://bslthemes.com/html/mcard/theme_colors/blue/images/works/work4.jpg" alt="" /></a>
							</div>
							<div class="content-box">
								<div class="category">Icons</div>
								<a href="index-1.html#popup-4" class="name has-popup">Capitalist Icons</a>
								<p>
									Today we have for you a set of 20 icons available in 2 styles: colored...
								</p>
							</div>
							<div id="popup-4" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<img src="https://bslthemes.com/html/mcard/theme_colors/blue/images/works/work4.jpg" alt="">
									</div>
									<div class="desc">
										<div class="category">Icons</div>
										<h4>Capitalist Icons</h4>
										<p>
											Today we have for you a set of 20 icons available in 2 styles: colored flat and line version,
											designed on a 128px grid. These polished icons come in multiple formats so you can easily include
											them in your projects.
										</p>
										<a href="index-1.html#" class="btn btn_animated"><span class="circle">View Project</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-4 box-item f-ui animated">
							<div class="image">
								<a href="index-1.html#popup-5" class="has-popup"><img src="images/works/work5.jpg" alt="" /></a>
							</div>
							<div class="content-box">
								<div class="category">UI Kits</div>
								<a href="index-1.html#popup-5" class="name has-popup">Mapogo UI Kit</a>
								<p>
									Mapogo is an expertly crafted UI kit perfect for iOS designers...
								</p>
							</div>
							<div id="popup-5" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<img src="images/works/work5.jpg" alt="">
									</div>
									<div class="desc">
										<div class="category">UI Kits</div>
										<h4>Mapogo UI Kit</h4>
										<p>
											Mapogo is an expertly crafted UI kit perfect for iOS designers and developers. The free sample
											includes 10 screens (750×1334 px) that can be easily customized in Photoshop
										</p>
										<a href="index-1.html#" class="btn btn_animated"><span class="circle">View Project</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-4 box-item f-ui animated">
							<div class="image">
								<a href="index-1.html#popup-6" class="has-popup"><img src="https://bslthemes.com/html/mcard/theme_colors/blue/images/works/work6.jpg" alt="" /></a>
							</div>
							<div class="content-box">
								<div class="category">UI Kits</div>
								<a href="index-1.html#popup-6" class="name has-popup">Chameleon UI Kit</a>
								<p>
									The freebie of the day is Chameleon, a modern UI kit perfect to...
								</p>
							</div>
							<div id="popup-6" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<img src="https://bslthemes.com/html/mcard/theme_colors/blue/images/works/work6.jpg" alt="">
									</div>
									<div class="desc">
										<div class="category">UI Kits</div>
										<h4>Chameleon UI Kit</h4>
										<p>
											The freebie of the day is Chameleon, a modern UI kit perfect to use for creating a stylish and
											clean mobile app. This kit includes 10 screens from various categories that can be easily edited.
										</p>
										<a href="index-1.html#" class="btn btn_animated"><span class="circle">View Project</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>

				<!-- Section Clients -->
				<div class="section clients" id="clients-section">
					<div class="title">Clients</div>
					<div class="reviews-carousel animated">
						<div class="owl-carousel">
							<div class="item">
								<div class="content-box">
									<div class="reviews-item">
										<div class="image"><img src="https://bslthemes.com/html/mcard/theme_colors/blue/images/clients/rev1.jpg" alt="" /></div>
										<div class="name">— Robert Chase, CEO</div>
										<p>
											"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod
											iaculis lobortis. Vestibulum posuere molestie ipsum vel. Vestibulum venenatis vestibulum elit ultricies.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod
											iaculis lobortis."
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="content-box">
									<div class="reviews-item">
										<div class="image"><img src="images/clients/rev2.jpg" alt="" /></div>
										<div class="name">— Helen Floyd, Art Director</div>
										<p>
											"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod
											iaculis lobortis. Vestibulum posuere molestie ipsum vel. Vestibulum venenatis vestibulum elit ultricies.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod
											iaculis lobortis. Vestibulum posuere molestie ipsum vel."
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="content-box">
									<div class="reviews-item">
										<div class="image"><img src="https://bslthemes.com/html/mcard/theme_colors/blue/images/clients/rev3.jpg" alt="" /></div>
										<div class="name">— Jhon Newton, Photographer</div>
										<p>
											"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod
											iaculis lobortis. Vestibulum posuere molestie ipsum vel. Vestibulum venenatis vestibulum elit ultricies.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod
											iaculis lobortis."
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Section Pricing -->
				<div class="section pricing" id="pricing-section">
					<div class="title">Pricing</div>
					<div class="row">
						<div class="col col-m-12 col-t-6 col-d-3">
							<div class="content-box animated">
								<div class="pricing-table">
									<div class="i_title">
										<div class="icon"><i class="icon ion ion-battery-empty"></i></div>
										<div class="pt-title">Basic</div>
									</div>
									<div class="pt-amount">
										<span class="dollar">$</span>
										<span class="amount">15</span>
										<span class="period">/hr</span>
									</div>
									<div class="pt-feature-list">
										<ul>
											<li class="disable">UI/UX Design</li>
											<li>Web Development</li>
											<li class="disable">IOS Application <strong>New</strong></li>
											<li class="disable">Android Application</li>
											<li class="disable">Writing</li>
											<li class="disable">Photography <strong>New</strong></li>
										</ul>
									</div>
									<a href="index-1.html#" class="btn btn_animated"><span class="circle">Buy Now</span></a>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-3">
							<div class="content-box animated">
								<div class="pricing-table">
									<div class="i_title">
										<div class="icon"><i class="icon ion ion-battery-low"></i></div>
										<div class="pt-title">Start-Up</div>
									</div>
									<div class="pt-amount">
										<span class="dollar">$</span>
										<span class="amount">29</span>
										<span class="period">/hr</span>
									</div>
									<div class="pt-feature-list">
										<ul>
											<li>UI/UX Design</li>
											<li>Web Development</li>
											<li class="disable">IOS Application <strong>New</strong></li>
											<li class="disable">Android Application</li>
											<li class="disable">Writing</li>
											<li class="disable">Photography <strong>New</strong></li>
										</ul>
									</div>
									<a href="index-1.html#" class="btn btn_animated"><span class="circle">Buy Now</span></a>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-3">
							<div class="content-box animated">
								<div class="pricing-table">
									<div class="i_title">
										<div class="icon"><i class="icon ion ion-battery-half"></i></div>
										<div class="pt-title">Business</div>
									</div>
									<div class="pt-amount">
										<span class="dollar">$</span>
										<span class="amount">49</span>
										<span class="period">/hr</span>
									</div>
									<div class="pt-feature-list">
										<ul>
											<li>UI/UX Design</li>
											<li>Web Development</li>
											<li>IOS Application <strong>New</strong></li>
											<li>Android Application</li>
											<li class="disable">Writing</li>
											<li class="disable">Photography <strong>New</strong></li>
										</ul>
									</div>
									<a href="index-1.html#" class="btn extra btn_animated"><span class="circle">Buy Now</span></a>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-3">
							<div class="content-box animated">
								<div class="pricing-table">
									<div class="i_title">
										<div class="icon"><i class="icon ion ion-battery-charging"></i></div>
										<div class="pt-title">Enterprise</div>
									</div>
									<div class="pt-amount">
										<span class="dollar">$</span>
										<span class="amount">89</span>
										<span class="period">/hr</span>
									</div>
									<div class="pt-feature-list">
										<ul>
											<li>UI/UX Design</li>
											<li>Web Development</li>
											<li>IOS Application <strong>New</strong></li>
											<li>Android Application</li>
											<li>Writing</li>
											<li>Photography <strong>New</strong></li>
										</ul>
									</div>
									<a href="index-1.html#" class="btn btn_animated"><span class="circle">Buy Now</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Blog -->
				<div class="section blog" id="blog-section">
					<div class="title">Blog</div>
					<div class="row">
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="blog_item animated">
								<div class="image">
									<a href="https://bslthemes.com/html/mcard/theme_colors/blue/blog-page.html"><img src="images/blog/blog1.jpg" alt="" /></a>
								</div>
								<div class="content-box">
									<div class="i_title">
										<div class="icon"><strong>27</strong> July</div>
									</div>
									<div class="category_bts">
										<a href="index-1.html#" class="category">#branding</a>
										<a href="index-1.html#" class="category">#ui-ux</a>
									</div>
									<a href="https://bslthemes.com/html/mcard/theme_colors/blue/blog-page.html" class="name">Music Player Design</a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis
										lobortis. Vestibulum posuere molestie ipsum vel...
									</p>
									<a href="https://bslthemes.com/html/mcard/theme_colors/blue/blog-page.html" class="btn btn_animated"><span class="circle">Read more</span></a>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="blog_item animated">
								<div class="image">
									<a href="https://bslthemes.com/html/mcard/theme_colors/blue/blog-page.html"><img src="https://bslthemes.com/html/mcard/theme_colors/blue/images/blog/blog2.jpg" alt="" /></a>
								</div>
								<div class="content-box">
									<div class="i_title">
										<div class="icon"><strong>27</strong> July</div>
									</div>
									<div class="category_bts">
										<a href="index-1.html#" class="category">#branding</a>
										<a href="index-1.html#" class="category">#ui-ux</a>
									</div>
									<a href="https://bslthemes.com/html/mcard/theme_colors/blue/blog-page.html" class="name">Music Player Design</a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis
										lobortis. Vestibulum posuere molestie ipsum vel...
									</p>
									<a href="https://bslthemes.com/html/mcard/theme_colors/blue/blog-page.html" class="btn btn_animated"><span class="circle">Read more</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="bts align-center">
						<a href="blog.html" class="btn btn_animated"><span class="circle">View Blog</span></a>
					</div>
				</div>

				<!-- Section Text -->
				<div class="section ceo_text">
					<div class="title">Text Section</div>
					<div class="content-box animated">
						<div class="text-box">
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
								eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
								voluptatem quia voluptas sit aspernatur aut odit aut fugit. Sed ut perspiciatis unde omnis iste natus error sit
								voluptatem accusantium doloremque.
							</p>
							<p>
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
							</p>
						</div>
					</div>
				</div>

				<!-- Section Contacts -->
				<div class="section contacts" id="contact-section">
					<div class="title">Contact Me</div>
					<div class="row">
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="info-list">
									<ul>
										<li><strong><span>Address:</span></strong> 358 W Jefferson St, Bensenville, IL 60112</li>
										<li><strong><span>Phone:</span></strong> <a href="tel:12562548456">+1 256 254 84 56</a></li>
										<li><strong><span>E-mail:</span></strong> <a href="mailto:smorgan@domain.com">smorgan@domain.com</a></li>
									</ul>
								</div>
								<div class="map" id="map"></div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<h4>Write a message:</h4>
								<div class="contact-form">
									<form id="cform" method="post">
										<div class="group-val">
											<input type="text" name="name" placeholder="Your Name" />
										</div>
										<div class="group-val">
											<input type="text" name="email" placeholder="Your Email" />
										</div>
										<div class="group-val">
											<input type="text" name="subject" placeholder="Subject" />
										</div>
										<div class="group-val ct-gr">
											<textarea name="message" placeholder="Message"></textarea>
										</div>
										<a href="index-1.html#" class="btn btn_animated" onclick="$('#cform').submit(); return false;"><span class="circle">Send Message</span></a>
									</form>
									<div class="alert-success">
										<p>Thanks, your message is sent successfully. We will contact you shortly!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer -->
			<footer>
				<div class="copy">© 2023 samiwogdev. All rights reserved.</div>
			</footer>

		</div>

	</div>
@endsection
