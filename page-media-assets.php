<?php

/*


 Template Name: Media Resources


*/

?>



<?php get_header(); ?>



		<div id="content">


			<div id="sub-header" style="background: url('<?php echo get_template_directory_uri(); ?>/library/images/contact-header.jpg') no-repeat scroll left center / cover rgba(0, 0, 0, 0);">
            		
                <div class="wrap cf">
            
            		<h3>Media Resources</h3>
                    
            	</div>
                
            </div>
            
		<div id="tier2-nav" class="news-sub">
        
        	<div class="wrap cf">
            
            	       
          <?php

$defaults = array(

	'menu'            => 'news',
	
);

wp_nav_menu( $defaults );

?>
            </div>
        
        
        </div>
        
        <div id="contact-hero" class="media-main" data-stellar-background-ratio=".8">
            
            	<div class="wrap cf">
                
                <h1>Everything You Need to <br>Know About Sojern</h1>
                
               




                
                </div>
                </div>
        
   
       
       <section id="media-about" class="page-section" style="background-color:#fff;">
       
       	<div class="wrap cf">
        
          <ul id="team-anchors">
        	
            <li><a href="#aboutsojern">About Sojern</a></li>
            <li><a href="#keypersonnel">Key Personnel Bios & Photos</a></li>
            <li><a href="#brandassets">Brand Assets</a></li>
            
         
            
        </ul>
        
        
        
        	<h3 id="aboutsojern">About Sojern</h3>
            <p>Sojern is travel's leading data-driven performance marketing engine. Through its Sojern Traveler Platform and billions of traveler intent signals across online and mobile channels, Sojern puts more heads in beds and travelers in town for its clients worldwide. </p>
            
<p>Currently one of the fastest growing travel tech companies, Sojern works with top travel brands and independent hotels in North America, Latin America, Europe, Middle East, Africa and Asia-Pacific. </p>

<p>The company is headquartered in San Francisco, with key offices in Dubai, London, New York, Omaha and Singapore. </p>
<p> The three key ingredients to our success are: our travel expertise, our cutting-edge technology and our excellent team.</p>

<h4>Travel Expertise</h4>
<p>We’ve helped 600+ of the world's top travel companies reach, convert and retain customers.</p>

<h4>Technology</h4>
<p>350 million traveler proﬁles, billions of intent data points, and a powerful platform all enable us to maximize direct revenue and profitability for our clients by delivering consumers who convert.</p>

<h4>Team</h4>

<p>Our seasoned team of travel and online media veterans has optimized tens of thousands of campaigns for travel brands.</p>

<h4>Headquarters</h4>
<p>118 2nd St, 3rd Floor<br>
San Francisco, CA 94105</p>

<h4>Year Founded</h4>
<p>2007</p>

<h4>Investors</h4>
<ul id="customer-partners">
                <li style="border-bottom:0;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/northwest.jpg" /></li>
                <li  style="border-bottom:0;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/trident.jpg" /></li>
                <li  style="border-bottom:0;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/focus.jpg" /></li>
                <li  style="border-bottom:0;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/industry.jpg" /></li>
                <li  style="border-bottom:0;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/triangle.jpg" /></li>
                
                </ul>  
                
                <div class="cta-container">
                <a class="blue-cta" target="_blank" href="<?php echo get_template_directory_uri(); ?>/library/images/Sojern_About_Us.pdf">Download PDF</a>
                </div>
            </div>
        
        </section>
        
         <section id="media-about" class="page-section" style="background-color:#f7f8f9;">
       
       	<div class="wrap cf">
        
        
        <h3 id="keypersonnel">Key Personnel Bios & Photos</h3>
        <p>Everything for your press-related needs. Click photo to download zipped file.</p>
        
        
        <?php 

$args = array(
	'post_type' => 'team',
	'order' => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'team_cat',
			'field'    => 'term_id',
			'terms'    => array( 404 ),
		
		),
	),
);
$the_query = new WP_Query( $args ); ?>
 <ul  class="og-grid og-grid-container">


				
<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Mark_Rabe.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/mark.jpg" />

	</div>
        
	<h2>Mark Rabe</h2>
        
	<span class="title">CEO and President</span>

</li><!------------- END TEAM MEMBER ---->


<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Curtis_Atkisson.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/curtis-atkisson.jpg" />

	</div>
        
	<h2>Curtis Atkisson</h2>
        
	<span class="title">Chief Financial Officer</span>

</li><!------------- END TEAM MEMBER ---->


<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Jeremy_Daw.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/jeremy-daw.jpg" />

	</div>
        
	<h2>Jeremy Daw</h2>
        
	<span class="title">Chief Technology Officer</span>

</li><!------------- END TEAM MEMBER ---->


<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Brent_Brummer.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/brent-brummer.jpg" />

	</div>
        
	<h2>Brent Brummer</h2>
        
	<span class="title">Vice President of Operations</span>

</li><!------------- END TEAM MEMBER ---->


<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Stewart_Hunter.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/stewart.jpg" />

	</div>
        
	<h2>Stewart Hunter</h2>
        
	<span class="title">Director of Sales and Partnerships,<br> Asia Pacific</span>

</li><!------------- END TEAM MEMBER ---->


<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Brad_King.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/brad-king.jpg" />

	</div>
        
	<h2>Brad King</h2>
        
	<span class="title">Vice President of Sales</span>

</li><!------------- END TEAM MEMBER ---->



<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Maly_Ly.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/maly-ly.jpg" />

	</div>
        
	<h2>Maly Ly</h2>
        
	<span class="title">Vice President of Global Marketing</span>

</li><!------------- END TEAM MEMBER ---->



<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Aaron_Ritoper.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/aaron.jpg" />

	</div>
        
	<h2>Aaron Ritoper</h2>
        
	<span class="title">Strategic Partnerships Director, <br> EMEA and APAC</span>

</li><!------------- END TEAM MEMBER ---->


<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Stewart_Smith.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/stewart-smith.jpg" />

	</div>
        
	<h2>Stewart Smith</h2>
        
	<span class="title">Senior Director of Sales, Middle East <br> and Africa</span>

</li><!------------- END TEAM MEMBER ---->


<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Stephen_Taylor.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/stephen-taylor.jpg" />

	</div>
        
	<h2>Stephen Taylor</h2>
        
	<span class="title">Vice President and Managing <br> Director, International</span>

</li><!------------- END TEAM MEMBER ---->



<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Kurt_Weinsheimer.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/kurt.jpg" />

	</div>
        
	<h2>Kurt Weinsheimer</h2>
        
	<span class="title">Vice President of Business <br> Development</span>

</li><!------------- END TEAM MEMBER ---->



<li class="team-member"> 
	<div class="team-image-container">

 		<a href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Russell_Young.zip">
        
 		<div class="download-overlay">

			<i class="fa fa-download"></i>
            
			<p>Download Bio & Hi-Res Photo</p>

		</div>   
		</a> 
        
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/team/russel.jpg" />

	</div>
        
	<h2>Russell Young</h2>
        
	<span class="title">Commercial Director ­Europe, Middle <br> East & Africa, and Asia-Pacific</span>

</li><!------------- END TEAM MEMBER ---->













 
	
</ul>
<div class="cta-container">
<a class="blue-cta" target="_blank" href="<?php echo get_template_directory_uri(); ?>/library/images/team/bios/Sojern_Management_BioPhoto.zip">Download all Bios & Photos</a>
</div>


        </div>
        
        </section>   
        
        
         <section class="page-section" style="background-color:#daf0ef;">
       
       	<div class="wrap cf">
        
        <div class="media-press">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/press-release-icon.png" />
        <h4>Press Releases<br> <span>Sojern Company Announcements</span></h4>
        
        <a href="<?php echo site_url(); ?>/?page_id=2087">Link <i class="fa fa-long-arrow-right"></i></a>
        </div>
        
           <div class="media-press">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/in-the-news.png" />
        <h4>Sojern in the News<br> <span>News Articles & Contributed Content</span></h4>
        <a href="<?php echo site_url(); ?>/?page_id=1915">Link <i class="fa fa-long-arrow-right"></i></a>
        </div>
        
        
        </div>
        
        </section>       
       
       
        <section class="page-section" style="background-color:#fff;">
       
       	<div class="wrap cf">
        
        	<h3 id="brandassets">Brand Assets</h3>
            <p>“Feel free to use our brand assets for your needs, but please take them as they are.</p>
            
            <h4 style="text-align:left; margin:0;">Logo Guideline</h5>
            <p style="margin:0;">To maintain the integrity of the Sojern logo, and to promote the consistency of the brand, it is important to use the logo as described in these guidelines.</p>
            
            <ul id="brand-assets">
            
            <li><img src="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/logo-1.png" />
            <p>Orange logo on light background</p>
            <a download="Sojern_Orange_Logo.png" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_logo/Sojern_Orange_Logo.png">PNG</a> 
            <span> / </span> 
            <a download="Sojern_Orange_Logo.eps" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_logo/Sojern_Orange_Logo.eps">EPS</a>
            </li>
            
            
             <li><img src="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/logo-2.png" />
            <p>White logo on dark background</p>
              <a download="Sojern_White_Logo.png" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_logo/Sojern_White_Logo.png">PNG</a> 
            <span> / </span> 
            <a download="Sojern_White_Logo.eps" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_logo/Sojern_White_Logo.eps">EPS</a>
            
            </li>
            
            
             <li><img src="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/logo-3.png" />
            <p>Orange logo with tagline on light background</p>
              <a download="Sojern_Orange_Tagline_Logo.png" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_tagline_logo/Sojern_Orange_Tagline_Logo.png">PNG</a> 
            <span> / </span> 
            <a download="Sojern_Orange_Tagline_Logo.eps" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_tagline_logo/Sojern_Orange_Tagline_Logo.eps">EPS</a>
             <span> / </span> 
            <a  href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_tagline_logo/sojern_tagline_logo.zip">EMEA & APAC VERSION</a>
            
          
            </li>
            
             <li><img src="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/logo-4.png" />
            <p>White logo with tagline on dark background</p>
                  <a download="Sojern_White_Tagline_Logo.png" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_tagline_logo/Sojern_White_Tagline_Logo.png">PNG</a> 
            <span> / </span> 
            <a download="Sojern_White_Tagline_Logo.eps" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_tagline_logo/Sojern_White_Tagline_Logo.eps">EPS</a>
             <span> / </span> 
            <a download="Sojern_White_Logo.png" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_tagline_logo/sojern_tagline_logo_white.zip">EMEA & APAC VERSION</a>
            </li>
            
             <li><img src="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/logo-5.png" />
            <p>Grey icon on light background</p>
              <a download="Sojern_Grey_Compass.png" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_compass/Sojern_Grey_Compass.png">PNG</a> 
            <span> / </span> 
            <a download="Sojern_Grey_Compass.eps" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_compass/Sojern_Grey_Compass.eps">EPS</a>
            </li>
            
             <li><img src="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/logo-6.png" />
            <p>White icon on dark background</p>
             <a download="Sojern_White_Compass.png" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_compass/Sojern_White_Compass.png">PNG</a> 
            <span> / </span> 
            <a download="Sojern_White_Compass.eps" href="<?php echo get_template_directory_uri(); ?>/library/images/brand-assets/sojern_compass/Sojern_White_Compass.eps">EPS</a>
            </li>
            
            </ul>
            
           
            <p>Please don’t edit, change, distort, recolor, or reconfigure the logo. Thanks for not embellishing on the logo with shadows, gradients, or patterns.  Our logo looks great the way it is!</p>
            
             <h4 style="text-align:left; margin:0;">Brand Colors</h5>
            
 <p style="margin:0;">These are Sojern’s primary brand colors. Copy the HEX codes below.</p>
 
 <ul id="brand-hex">
 
<li><div class="hex-square" style="background:#ff6600;"></div><p>#ff6600</p></li>
<li><div class="hex-square" style="background:#ffcc00;"></div><p>#ffcc00</p></li>
<li><div class="hex-square" style="background:#66cccc;"></div><p>#66cccc</p></li>
<li><div class="hex-square" style="background:#f7f8f9;"></div><p>#f7f8f9</p></li>
<li><div class="hex-square" style="background:#777777;"></div><p>#777777</p></li>
</ul>
 
 
 
 
        
        </div>
        
        </section>
        
         <section class="page-section" style="background-color:#f7f8f9;">
       
       	<div class="wrap cf">
        
        <h4 style="margin-bottom:0;">For press inquiries and more, connect with<br>
Camelia Gendreau, Director of PR & Communications, at <a href="mailto:pr@sojern.com">pr@sojern.com</a></h4>
        
        </div>
        
        </section>
  

        </div>	



<?php get_footer(); ?>