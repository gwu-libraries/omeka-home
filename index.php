<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GW Libraries Exhibits</title><!-- your page title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- important! -->
    <meta name="description" content=""><!-- optional -->
    <meta name="author" content=""><!-- optional -->
        
    <!-- styles -->
    <!-- these are the stylesheets: first two grab the Bootstrap cdn and Font Awesome! cdn stylesheets, the other two are for the Library theme -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet" media="all">
    <!-- Font Awesome! http://fontawesome.io/get-started -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://library.gwu.edu/app-assets/libheader/2_002/css/libheader7_lite.css" rel="stylesheet" media="all">
    <link href="http://library.gwu.edu/app-assets/libheader/2_002/css/libheader7_lite_bootswatch.css" rel="stylesheet" media="all">
    <!-- basic-slider css -->
    <link href="bjqs.css" rel="stylesheet" />
    <!-- omeka-home custom css -->
    <link href="omeka-home.css" rel="stylesheet" />

    <!-- js (some js links are at the bottom of the page) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- basic slider github.com/jcobb/basic-jquery-slider/ and some of his/her own custom css on basic-slider.com -->
    <script src="js/bjqs-1.3.min.js"></script>

    <!-- IE css mods and HTML5 shim, for IE6-8 support of HTML5 elements --><!-- important! -->
    <!--[if lt IE 9]>
    <link href="http://library.gwu.edu/app-assets/libheader/2_002/css/libheader7_lite_ie.css" rel="stylesheet">
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
    <link rel="shortcut icon" href="http://library.gwu.edu/app-assets/libheader/2_002/favicon.ico">
    <link rel="apple-touch-icon" href="http://library.gwu.edu/app-assets/libheader/2_002/img/apple-touch-icon-iphone.png"><!-- optional, and this is just the min version -->

  </head> 

  <body>
    <!-- portal header -->
    <header>
    	<div id="header-container">
        <div id="header-contents">
    	    <img src="header-image.png" />
        </div>
      </div>
    </header>
    <!-- end portal header -->
        
    <!-- page content: put your content inside the <article> tag and customize/format with the Bootstrap scaffolding: http://twitter.github.com/bootstrap/scaffolding.html -->
    <article class="libsite-container container">

      <div class="row-fluid">
        <div class="span12" id="slider-row"> 
          <div style="margin:0 auto;" id="slider">
	          <ul class="bjqs">
              <!-- title is used as caption -->
		          <li><img src="masthead-slideshow-placeholder.png" alt="The PNC-RIGGS Collection" title="The PNC-RIGGS Collection" /></li>
		          <li><img src="masthead-slideshow-placeholder-2.png" alt="alt tag here" title="The Test Collection" /></li>
              <li><img src="masthead-slideshow-placeholder-3.png" alt="alt tag here" title="The Monument Collection" /></li>
	          </ul>
          </div>
        </div>
      </div>

      <script>
      jQuery(document).ready(function($) {
      	$('#slider').bjqs({
      		'height' : 320,
      		'width' : 1200,
      		'responsive' : true,
          'nexttext' : '<i class="fa fa-angle-right fa-2x"></i>', 
          'prevtext' : '<i class="fa fa-angle-left fa-2x"></i>' 
      	});
      });
      </script>

      <p class="handheld-nav-toggle"><span class="showit expand-1" id="plus1">MENU <i class="fa fa-bars"></i></span><span class="hideit expand-1" id="minus1">MENU <i class="fa fa-minus-square-o"></i></span></p>

      <div class="row-fluid nav-items content-1" id="nav-items">
        <div class="span2">
          <a href="http://exhibits.library.gwu.edu/about" title="more information about GW Libraries Exhibits">ABOUT US</a>	
        </div>
        <div class="span2">
          <a href="https://library.gwu.edu/collections/exhibits" title="see our online Exhibits">EXHIBITS</a>
        </div>
        <div class="span2">
          <a href="#" title="see our schedule of upcoming events">CALENDAR</a>
        </div>
        <div class="span2">
          <a href="http://library.gwu.edu/scrc/collections" title="see our online Collections">COLLECTIONS</a>
        </div>
        <div class="span2 nav-items nav-items-items">
          <a href="http://exhibits.library.gwu.edu/items/browse" title="browse items in our collections">ITEMS</a>
        </div>
        <div class="span2 nav-items nav-items-contact">
          <a href="https://library.gwu.edu/scrc/general/contact" title="contact information for Special Collections Research Center at GW Libraries">CONTACT US</a>
        </div>
      </div>

	    <div id="intro-title-container" class="row-fluid">
	      <div class="span12">
      		<div class="content-block" id="intro-title">
      		  <h1>EXHIBITS AT THE UNIVERSITY LIBRARIES</h1>
      		</div>
	      </div>
	    </div>
	    <div id="intro-content-container" class="row-fluid">
	      <div class="span5">
  		    <div class="content-block">
  	        <p class="overview-left-text">Donec suspendisse ac, erat nec hac quam vitae, nibh sapien, magnis tortor ut et vitae elementum enim. Tincidunt vel sed augue praesent consequat magna, aenean eu orci. Pellentesque dictum nibh nibh id, molestie non, turpis id vestibulum nunc amet lectus, tortor amet placerat, illo mollis scelerisque malesuada vitae sed.</p>
  		    </div>
        </div>
        <div class="span5">
      		<div class="content-block">
      		  <p class="overview-right-text">Nisl nonummy. Feugiat est nibh rhoncus auctor, felis ligula aliquam amet condimentum, amet lobortis vitae quam id. Iaculis placerat vitae, porttitor ac ornare quis. Libero eu varius et vivamus est sapien, porttitor lobortis diam a sodales, nisl adipiscing vel ac, risus dui platea neque condimentum.</p>
      		</div>
        </div>
          <div class="span2">
		        <!--<p>(empty span2)</p>-->
          </div>
	    </div>

      <div id="three-col-showcase" class="row-fluid">
        <div class="span3 showcase-column-3">
		      <div class="content-block">
            <h2>COLLECTIONS</h2>
	          <ul id="collection-list">

              <?php
              // collections

              $json_string = 'http://exhibits.library.gwu.edu/api/collections';
              $jsondata = file_get_contents($json_string);

              $itemArray  = json_decode($jsondata, true); // decode JSON to associative array
              $itemArrayDesc = array_reverse($itemArray);

              $j = 0;
              foreach($itemArrayDesc as $info){

                echo "<li><a href='http://exhibits.library.gwu.edu/collections/show/" . $info['id'] . "'>" . $info['element_texts'][0]['text'] . "</a></li>";

                if (++$j == 30) break;
              }
              ?>

            <script>
            $('#collection-list > :first-child').addClass("first");
            </script>

        		</ul>
        		<p class="browse-link"><a href="http://exhibits.library.gwu.edu/collections/browse">Browse Collections</a></p>
        		<h2>RECENT ITEMS</h2>
        		<ul id="items-list">

              <?php
              // items

              $headerArray = get_headers($url, 1);
              // echo "<p style='margin-top:2em;'>header total results: " . $headerArray['Omeka-Total-Results'] . "</p>";

              $howMany = ceil($headerArray['Omeka-Total-Results'] / 50);

              $json_string = "http://exhibits.library.gwu.edu/api/items?page=" . $howMany;
              $jsondata = file_get_contents($json_string);
              //$obj = json_decode($jsondata,true);

              $itemArray  = json_decode($jsondata, true); // decode JSON to associative array
              $itemArrayDesc = array_reverse($itemArray);

              //echo "<p>Total Items = " . $headerArray['Omeka-Total-Results'] . " which means " . $howMany . " pages (sets of 50)</p>";

              $i = 0;
              foreach($itemArrayDesc as $info){
                //echo "<div style='margin-bottom:3em;'>";

                $theVar = $info['files']['url'];
                $json_string2 = $theVar;
                $jsondata2 = file_get_contents($json_string2);
                $itemArray2  = json_decode($jsondata2, true);
                  foreach($itemArray2 as $info2){
                    //echo "<div style='margin:.5em .5em 0;'><img style='border:1px solid #ccc;' src='" . $info2['file_urls']['thumbnail'] . "'></div><br />";
                  }
                echo "<li><a href='http://exhibits.library.gwu.edu/items/show/" . $info['id']  . "'>" . $info['element_texts'][0]['text'] . "</a></li>";

                if (++$i == 7) break;
              }
              ?>

		        </ul>

              <script>
              $('#items-list > :first-child').addClass("first");
              </script>

          	<p class="browse-link"><a href="http://exhibits.library.gwu.edu/items/browse">Browse Items</a></p>
        	</div>
        </div>

        <div class="span6 showcase-column">
      		<img id="featured-exhibit-image" src="featured-placeholder.png" />
          <div class="content-block">
            <h2>Hear in DC: The DC Vernacular Music Archive</h2>
            <p>Feugiat est nibh rhoncus auctor, felis ligula aliquam amet condimentum, amet lobortis vitae quam id. Iaculis placerat vitae, porttitor ac ornare quis. Libero eu varius et vivamus est sapien, porttitor lobortis diam a sodales, nisl adipiscing vel ac, risus dui platea neque condimentum. <a href="#">more</a></p>
            <h3 class="current-exhibits-link"><a href="#">CURRENTLY INSTALLED EXHIBITS</a><h3>
      		</div>
        </div>

        <div class="span3 showcase-column-3">
      		<div class="content-block">
            <h2>ONLINE EXHIBITS</h2>
            <div>
              <img src="exhibit-hebrew.png" />
              <p class="online-exhibit-title">Hebrew Printing in Ukraine</p>
              <p class="online-exhibit-text">Iaculis placerat vitae, porttitor ac ornare quis. Libero eu varius et vivamus est sapien. <a href="#">more</a></p>
            </div>
            <div>
              <img src="exhibit-president.png" />
              <p class="online-exhibit-title">Presidential Presence</p>
              <p class="online-exhibit-text">Libero eu varius et vivamus est sapien, porttitor lobortis diam a sodales, nisl adipiscing vel ac, risus dui platea neque condimentum. <a href="#">more</a></p>
            </div>
              <h3 class="all-online-exhibits-link"><a href="#">SEE ALL ONLINE EXHIBITS</a><h3>
		      </div>
        </div>
      </div>
   
    </article> <!-- /container -->
        <!-- end page content -->
       
    <footer> 
      <div id="footer-container">
        <div id="footer-content">

          <section class="pane clear" id="local-footer"> 

            <div id="logo-container">
              <img style="" src="gw_iddol_libraries_wht_rev_resized.png">
            </div>

	          <div class="footer-lib-logo">
		          <h2>GW Libraries</h2>
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
        
    <!-- javascript placed at the end of the document so the pages load faster -->
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script><!-- important -->
        
  </body>
</html>
