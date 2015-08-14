<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Exhibits at the GW Libraries</title><!-- your page title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- important! -->
    <meta name="description" content=""><!-- optional -->
    <meta name="author" content=""><!-- optional -->
        
    <!-- styles -->
    <!-- these are the stylesheets: the first two grab the Bootstrap cdn and Font Awesome! cdn stylesheets, the next two are for the Library bootswatch, followed by the slideshow css. Last is the "portal" css -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet" media="all">
    <!-- Font Awesome! http://fontawesome.io/get-started -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://gwappassets-prod.wrlc.org/app-assets/libheader/2_002/css/libheader7_lite.css" rel="stylesheet" media="all">
    <link href="http://gwappassets-prod.wrlc.org/app-assets/libheader/2_002/css/libheader7_lite_bootswatch.css" rel="stylesheet" media="all">
    <!-- basic-slider css -->
    <link href="css/bjqs.css" rel="stylesheet" />
    <!-- omeka-home custom css -->
    <link href="css/omeka-home.css" rel="stylesheet" />
    <!-- Google font css -->
    <link href='http://fonts.googleapis.com/css?family=BenchNine:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>

    <!-- js (some js links are at the bottom of the page) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- basic slider github.com/jcobb/basic-jquery-slider/ and some of his/her own custom css on basic-slider.com -->
    <script src="js/bjqs-1.3.min.js"></script>

    <!-- IE css mods and HTML5 shim, for IE6-8 support of HTML5 elements --><!-- important! -->
    <!--[if lt IE 9]>
    <link href="http://gwappassets-prod.wrlc.org/app-assets/libheader/2_002/css/libheader7_lite_ie.css" rel="stylesheet">
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery(".expand-1").click(function()
      {
        jQuery(".content-1").slideToggle(300);
          if($('#plus1').hasClass('showit')) {
            $("#plus1").attr("class", "hideit");
            $("#minus1").attr("class", "showit");
          }
          else {
            $("#plus1").attr("class", "showit");
            $("#minus1").attr("class", "hideit");
          }
      });
    });
    </script>
                                
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="http://gwappassets-prod.wrlc.org/app-assets/libheader/2_002/favicon.ico">
    <link rel="apple-touch-icon" href="http://gwappassets-prod.wrlc.org/app-assets/libheader/2_002/img/apple-touch-icon-iphone.png"><!-- optional, and this is just the min version -->

  </head> 

  <body>
    <!-- portal header -->
    <header>
    	<div id="header-container">
        <div id="header-contents">
          <div class="header-title">
            <img alt="header image for the Exhibits page" src="assets/exhibitslogo.png" />
          </div>
        </div>
      </div>
    </header>
    <!-- end portal header -->
        
    <!-- page content: put your content inside the <article> tag and customize/format with the Bootstrap scaffolding: http://twitter.github.com/bootstrap/scaffolding.html -->
    <article class="libsite-container container">

      <div class="row-fluid">
        <div class="span8">Wider column content</div>
	<div class="span4">Narrower column content</div>
      </div>

    </article> <!-- /container -->
        <!-- end page content -->
      
    <footer> 
      <div id="footer-container">
        <div id="footer-content">

          <section class="pane clear" id="local-footer"> 

            <div id="logo-container">
              <img alt="logo: GW Libraries" src="assets/gw_iddol_libraries_wht_rev_resized.png">
            </div>

	          <div class="footer-lib-logo">
		          <h3>GW Libraries</h3>
	          </div>
	
	          <article class="address">
		        <p class="address">
		          <span class="address">2130 H Street, NW</span><br />
		          <span class="city">Washington, DC 20052</span><br />
		          <span class="phone"><span class="tel">(202) 994-6558</span></span> | <span class="email"><a href="mailto:gelman@gwu.edu">gelman@gwu.edu</a></span></p>
	          </article>
          	<div class="right" id="local-footer-links">
          		<article>
          		<div class="local-links">
          			<a href="http://library.gwu.edu/hours">Hours</a> | <a href="http://library.gwu.edu/contact">Contact Us</a> | <a href="http://www.gwu.edu/explore/visitingcampus/">Maps &amp; Directions</a> | <span id="give-to"><a href="http://go.gwu.edu/gwlibraries">Give to GW Libraries</a> | </span><a href="/admin">Admin Login</a></div>
          		</article> 
          		<article>
          		<div class="social-links">
          			<ul>
          				<li>
          					<a href="http://www.facebook.com/gelmanlibrary"><i class="fa fa-facebook-square"></i>&nbsp;Gelman Library<span class="sr-only">follow Gelman Library on Facebook</span></a>
          				</li>
          				<li>
          					<a href="http://twitter.com/gelmanlibrary"><i class="fa fa-twitter"></i>&nbsp;@GelmanLibrary<span class="sr-only">follow Gelman Library on Twitter</span></a>
          				</li>
          				<li>
          					<a href="http://pinterest.com/gelmanlibrary/"><i class="fa fa-pinterest"></i>&nbsp;Gelman Library<span class="sr-only">follow Gelman Library on Pinterest</span></a>
          				</li>
          			</ul>
          		</div>
          		</article>
          	</div>
        	</section> 
	<!-- end Libraries Footer -->	

        </div>
      </div>
    </footer><!-- end portal footer -->
        
    <!-- javascript placed at the end of the document so page loads faster -->
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script><!-- important -->
        
  </body>
</html>

