@extends('layout.app')

@section('title')
Bekederemo Portfolio
@endsection

@section('content')
<!-- <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_2.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm a <span>web developer</span> based in Nigeria</h1>
			            <p><a href="https://wa.me/7032064138" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section> -->

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(assets/images/bg_14.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About Me</h2>
		            <p>As a highly skilled Full Stack Web Developer, I bring a versatile and comprehensive approach to web development, combining expertise in both front-end and back-end technologies. I am proficient in creating user-friendly, responsive websites and applications using HTML, CSS, JavaScript, and popular frameworks.</p>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span>Bekederemo Tamara-Ebi</span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span>September 18, 2002</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>Marble Hill School Road Okpanam, N0 21</span></li>
		            	<li class="d-flex"><span>State:</span> <span>Delta</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>bekederemo9087@gmail.com</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>+234-703-206-41-38</span></li>
		            </ul>
		          </div>
		        </div>

				<!-- download CV PDF -->
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
              	<p class="mb-4">
	                <span class="number" data-number="89">0</span>
	                <span>Project complete</span>
                </p>
                <p><a href="/document/Gozbeks Admission Form.pdf" class="btn btn-primary py-3 px-3  ">Download CV</a></p>
				
              </div>
	          </div>
			  <!-- download CV PDF -->
	        </div>
        </div>
    	</div>
    </section>



	<a href="https://wa.me/7032064138" target="_blank" style="text-decoration: none; position: fixed; right: 20px; bottom: 20px; z-index: 1000;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width: 50px; height: 50px; vertical-align: middle;" />
    <span style="font-size: 16px; margin-left: 5px; color:#ffffff;">Chat with us on WhatsApp</span>
</a>


    <section class="ftco-section ftco-no-pb" id="resume-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Resume</h1>
            <h2 class="mb-4">Resume</h2>
            <p>A highly skilled Full Stack Developer with expertise in front-end and back-end development, creating dynamic and responsive websites and applications. Proficient in modern technologies like HTML, CSS, JavaScript, PHP, Laravel, and databases such as MySQL</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2020-2023</span>
    					<h2>Master Degree of Web-Developer</h2>
    					<span class="position">SCHOOLVILLE COMPANY</span>
    					<p class="mt-4">I hold a Master’s degree in Full Stack Development and had the opportunity to work with School Vile from 2020 to 2023. During this time, I honed my skills in both front-end and back-end development.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2020-2024</span>
    					<h2>Bachelor's Degree of C.A</h2>
    					<span class="position">Chukwuemeka Odumegwu Ojukwu University</span>
    					<p class="mt-4">I completed my Bachelor’s degree in Computer Science at Chukwuemeka Odumegwu Ojukwu University, studying from 2020 to 2024. During my time there, I developed a strong foundation in software development, programming.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2014-2015</span>
    					<h2>Diploma in Computer</h2>
    					<span class="position">Cambridge University</span>
    					<p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    			</div>

    			<div class="col-md-6">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2014-2015</span>
    					<h2>Art &amp; Creative Director</h2>
    					<span class="position">Cambridge University</span>
    					<p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2017-2019</span>
    					<h2>Wordpress Developer</h2>
    					<span class="position">Government Acquisition Skills program</span>
    					<p class="mt-4">I gained valuable experience in WordPress through the Government Acquisition Skills program, where I learned to create and manage websites, customize themes, and optimize user experiences.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2017-2018</span>
    					<h2>UI/UX Designer</h2>
    					<span class="position">Cambridge University</span>
    					<p class="mt-4">I gained valuable knowledge in UI/UX design through the Government Acquisition Skills program, where I learned how to create user-friendly and visually appealing interfaces that enhance user experience across digital platforms.</p>
    				</div>
    			</div>
    		</div>
    		<div class="row justify-content-center mt-5">
    			<div class="col-md-6 text-center ftco-animate">
    				<p><a href="/document/Gozbeks Admission Form.pdf" class="btn btn-primary py-4 px-5">Download CV</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section" id="services-section">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Services</h1>
            <h2 class="mb-4">Services</h2>
            <p>"I offer a variety of web development services, including custom website creation that is responsive and user-friendly, full stack development from front-end to back-end, and optimized e-commerce solutions for online stores. I also provide API integration to enhance website functionality, develop websites using popular content management systems like WordPress and Laravel, and offer ongoing website maintenance and support to ensure your site remains secure and up-to-date."</p>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Design</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Photography</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Developer</h3>
							</div>
						</a>
					</div>

					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">App Developing</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Branding</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Product Strategy</h3>
							</div>
						</a>
					</div>
				</div>
    	</div>
    </section>

		
		<section class="ftco-section" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Skills</h1>
            <h2 class="mb-4">My Skills</h2>
            <p>As a full stack web developer, I have expertise in both front-end and back-end development. On the front end, I am proficient in HTML5, CSS3, and JavaScript, as well as frameworks like Vue.js, and Bootstrap, ensuring responsive, mobile-first design and intuitive user interfaces. My back-end skills include working with PHP and Laravel to create robust server-side applications, along with Node.js and Express for building real-time applications and APIs. I have strong database management experience, handling both SQL (MySQL, PostgreSQL) and NoSQL (MongoDB), and I am adept at API development and third-party API integration.</p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Php</h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
							  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span>90%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>jQuery</h3>
							<div class="progress">
							 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
							  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
							    <span>85%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>HTML5</h3>
							<div class="progress">
							 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
							  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
							    <span>95%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>CSS3</h3>
							<div class="progress">
							 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
							  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span>90%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Python</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
							    <span>70%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Laravel</h3>
							<div class="progress">
							 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span>98%</span>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
 

    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Projects</h1>
            <h2 class="mb-4">Our Projects</h2>
            <p>My projects showcase a range of web development skills, from building fully responsive school management systems and e-commerce websites to developing custom web applications using Laravel and PHP. I have created interactive and dynamic websites for clients, incorporating both front-end and back-end functionalities to deliver seamless user experiences.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/project-4.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/project-5.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Ui/Ux Design &amp; Figma</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>

    			<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/project-1.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp;Design</a></h3>
	    					<span>Web Developers</span>
	    				</div>
    				</div>

    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/project-6.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Laravel  &amp; Developers</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="row">
    					<div class="col-md-12">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/project-2.jpg);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
			    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
			    					<span>Web Design</span>
			    				</div>
		    				</div>
	    				</div>
	    				<div class="col-md-12">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/project-3.jpg);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
			    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
			    					<span>Web Design</span>
			    				</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Blog</h1>
            <h2 class="mb-4">Our Blog</h2>
            <p>In my blog, I share insights, tutorials, and industry updates on web development,
                focusing on both front-end and back-end technologies. I cover topics ranging from best practices in responsive design and modern JavaScript frameworks to advanced Laravel techniques and the latest trends in full-stack development. My aim is to provide valuable content for developers at all levels, offering practical solutions and tips to enhance their coding skills and stay updated with evolving technologies."</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('assets/images/image_1.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">September 21, 2024</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <h3 class="heading"><a href="single.html">Sustainability in Web Development</a></h3>
                <p>With increasing awareness of environmental impact, developers are focusing on building sustainable websites that reduce energy consumption. Practices such as optimizing images, minimizing code, and using efficient hosting solutions are becoming essential.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('assets/images/image_2.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">December 21, 2024</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 5</a>
	                </p>
                </div>
                <h3 class="heading"><a href="single.html">Laravel 10 </a></h3>
                <p>Laravel 10 was recently released, bringing exciting features such as improved performance, enhanced job batching, and the introduction of a new query builder interface, making it even more efficient for developers.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('assets/images/image_3.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">October 21, 2024</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 9</a>
	                </p>
                </div>
                <h3 class="heading"><a href="single.html">Bootstrap 5.2 Updates</a></h3>
                <p>Bootstrap 5.2 has rolled out new components and utility classes, making responsive web design even more flexible and allowing developers to create visually appealing interfaces with minimal effort.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container">
				<div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="100">0</strong>
                <span>Requests</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="89">0</strong>
                <span>Complete Projects</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="82">0</strong>
                <span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="40">0</strong>
                <span>Cups of coffee</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(assets/images/bg_1.jpg)">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 ftco-animate text-center">
						<h2>I'm <span>Available</span> for freelancing</h2>
						<p>As a freelance web developer, I specialize in creating tailored web solutions that cater to the unique needs of my clients. With a keen eye for detail and a passion for innovative design, I develop responsive and user-friendly websites that enhance user engagement and drive business growth.</p>
						<p class="mb-0"><a href="https://wa.me/7032064138" class="btn btn-primary py-3 px-5">Hire me</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p>f you would like to get in touch, please feel free to reach out via email at [bekederemo9087@gmail.com]. I welcome inquiries about potential collaborations, project discussions, or any questions you may have about my work.I look forward to hearing from you!</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Marble Hill Road Okpanam N0 21,Delta State</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+234 7032 064 138</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">bekederemo9087@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">Tamara-Ebi Website</a></p>
	          </div>
          </div>
        </div>
 @endsection