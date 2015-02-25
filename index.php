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
        <link href="omeka-home.css" rel="stylesheet">
	<!-- print styles are included in base libheader7_lite.css --> 
  
        <!-- js (some js links are at the bottom of the page) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            
        <!-- IE css mods and HTML5 shim, for IE6-8 support of HTML5 elements --><!-- important! -->
        <!--[if lt IE 9]>
        <link href="css/libheader7_lite_ie.css" rel="stylesheet">
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
                                
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="http://library.gwu.edu/app-assets/libheader/2_002/favicon.ico">
        <link rel="apple-touch-icon" href="http://library.gwu.edu/app-assets/libheader/2_002/img/apple-touch-icon-iphone.png"><!-- optional, and this is just the min version -->

    </head> 
    <body>
        <header class="navbar-fixed-top"><!-- this is the Libsite7 Lite Header -->
            <div id="libheader-container">
                <div id="libheader" class="container">
                    <div class="libheader-logo hide-lo"><a href="http://www.gwu.edu" target="_blank" title="GWU website"><img src="http://library.gwu.edu/app-assets/libheader/2_002/img/gwheaderlogo.png" alt="logo: The George Washington University" /></a></div>
                    <div class="libheader-liblink"><a href="http://library.gwu.edu" target="_blank" title="GW Libraries website">Omeka Custom Home</a></div>

                    <!-- optional links can go here (note: use short text, test it doesn't bump into the GW logo) -->
                    <div class="libheader-link"><a href="#" target="_blank" title="">(this blue banner with be replaced by the "exhibits" banner)</a></div>
                    <!-- end optional links -->

                    <!-- optional bootstrap user icons, example placement -->
                    <!--<div class="libheader-icon">
                        <i class='icon-off icon-white'></i>&nbsp;<a href="/logout/">logout</a>
                    </div>
                    <div class="libheader-icon">
                        <i class='icon-cog icon-white'></i>&nbsp;<a href="/change_password/">settings</a>
                    </div>
                    <div class="libheader-icon">
                        <i class='icon-user icon-white'></i>&nbsp;guest
                    </div>-->
                    <!-- end optional bootstrap user icons -->
                </div>
            </div>
        </header><!-- end Libsite7 Lite Header -->
        
        <!-- page content: put your content inside the <article> tag and customize/format with the Bootstrap scaffolding: http://twitter.github.com/bootstrap/scaffolding.html -->
        <article class="libsite-container container">
        
            <div class="row-fluid">
                <div class="span12" style="margin-top:1em; background:#ccc; height:200px; width:100%;"> <!-- this is a 'content' column that spans all 12 of the columns wihtin this content area -->
                    <h2>(this is the container for the image slideshow)</h2>
                </div>
            </div>
            <div class="row-fluid" style="margin-top:1em; background:#ccc; width:100%;">
              <div class="span2">
		ABOUT US	
              </div>
              <div class="span2">
                EXHIBITS
              </div>
              <div class="span2">
                CALENDAR
              </div>
              <div class="span2">
                COLLECTIONS
              </div>
              <div class="span2">
                ITEMS
              </div>
              <div class="span2">
                CONTACT US
              </div>
            </div>

	    <div style="margin-top:1em; background:#ccc;" class="row-fluid">
	      <div class="span12">
		<h1>EXHIBITS AT THE UNIVERSITY LIBRARIES</h1>
	      </div>
	    </div>
	    <div style="background:#ccc; min-height:150px;" class="row-fluid">
	      <div style="font-size:.8em;" class="span5">
	        <p class="overview-left-text">Donec suspendisse ac, erat nec hac quam vitae, nibh sapien, magnis tortor ut et vitae elementum enim. Tincidunt vel sed augue praesent consequat magna, aenean eu orci. Pellentesque dictum nibh nibh id, molestie non, turpis id vestibulum nunc amet lectus, tortor amet placerat, illo mollis scelerisque malesuada vitae sed. Cum dis habitant dignissim orci, orci ligula arcu lobortis, cras consectetuer tempor ut, facilisi morbi, hendrerit massa ut in iaculis sem eget.</p>
	      </div>
              <div style="font-size:.8em;" class="span5">
		<p class="overview-right-text">Nisl nonummy. Feugiat est nibh rhoncus auctor, felis ligula aliquam amet condimentum, amet lobortis vitae quam id. Iaculis placerat vitae, porttitor ac ornare quis. Libero eu varius et vivamus est sapien, porttitor lobortis diam a sodales, nisl adipiscing vel ac, risus dui platea neque condimentum. Porttitor in tempus, eu eu lorem ornare, dictum vitae velit laoreet ut bibendum vitae. Lorem dui, ultrices at commodo lobortis hendrerit, faucibus libero.</p>
              </div>
              <div class="span2">
		(empty span2)
              </div>
	    </div>

            <div style="margin-top: 1em;" class="row-fluid">
              <div class="span3" style="min-height:380px; background:#ccc;">
		<div class="content-block">
                <h2>COLLECTIONS</h2>
		<style>li {font-size:.8em;}</style>
		  <ul>
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
		</ul>
		<p style="margin-left:25px; font-size: .9em;"><a href="http://exhibits.library.gwu.edu/collections/browse">Browse Collections</a></p>
		<h2>RECENT ITEMS</h2>
		<ul>
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
  echo "<li><a href=''>" . $info['element_texts'][0]['text'] . "</a></li>";

  if (++$i == 7) break;
}
?>
		</ul>
		<p style="margin-left:25px; font-size: .9em;"><a href="http://exhibits.library.gwu.edu/items/browse">Browse Items</a></p>
		</div>
              </div>
              <div class="span6" style="min-height:380px; background:#ccc;">
		<div class="content-block">
                (featured exhibit)
		</div>
              </div>
              <div class="span3" style="min-height:380px; background:#ccc;">
		<div class="content-block">
                <h2>ONLINE EXHIBITS</h2>
		</div>
              </div>
            </div>

            <div class="row-fluid" style="display:none;">
                <div class="span8" style="height:500px; overflow:hidden;"> <!-- this is a 'content' column that takes up 8 of the 12 columns within this content area -->
                    <h2>Var Dump</h2>
<?php 
$json_string = 'http://exhibits.library.gwu.edu/api/items';
$jsondata = file_get_contents($json_string);
//$obj = json_decode($jsondata,true);

// get header info
echo "<p>Header Response</p>";

$url = 'http://exhibits.library.gwu.edu/api/items';
print_r(get_headers($url));
print_r(get_headers($url, 1));

$headerArray = get_headers($url, 1);
echo "<p style='margin-top:2em;'>header total results: " . $headerArray['Omeka-Total-Results'] . "</p>";

$itemArray  = json_decode($jsondata, true); // decode JSON to associative array

echo '<p>&nbsp;</p><p>Dump of Items json</p>';

var_dump($itemArray); 
?>
                </div>
                <div class="span4" style="overflow:hidden;"> <!-- this is a 'sidebar' column that takes up 4 of the 12 columns within this content area -->
                    <h2>Omeka API Test</h2>

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

echo "<p>Total Items = " . $headerArray['Omeka-Total-Results'] . " which means " . $howMany . " pages (sets of 50)</p>";

$i = 0;
foreach($itemArrayDesc as $info){
  echo "<div style='margin-bottom:3em;'>"; 

  $theVar = $info['files']['url'];
  $json_string2 = $theVar;
  $jsondata2 = file_get_contents($json_string2);
  $itemArray2  = json_decode($jsondata2, true);
    foreach($itemArray2 as $info2){
      echo "<div style='margin:.5em .5em 0;'><img style='border:1px solid #ccc;' src='" . $info2['file_urls']['thumbnail'] . "'></div><br />";
    }
  echo "<div style='font-size:.8em;'>" . $info['element_texts'][0]['text'] . " (item id " . $info['id'] . ")</div></div>";
        
  if (++$i == 5) break;
}

// exhibits

$json_string = 'http://exhibits.library.gwu.edu/api/exhibits';
$jsondata = file_get_contents($json_string);
//$obj = json_decode($jsondata,true);

$itemArray  = json_decode($jsondata, true); // decode JSON to associative array
$itemArrayDesc = array_reverse($itemArray);

echo "<h2>Exhibits</h2>";
//$j = 0;
foreach($itemArrayDesc as $info){
  //echo "<div>";

  echo "<p><a href='http://exhibits.library.gwu.edu/exhibits/show/" . $info['slug'] . "'>" . $info['title'] . "</a> (exhibit id " . $info['id'] . ")</p>";

  //if (++$j == 30) break;
}

// collections

$json_string = 'http://exhibits.library.gwu.edu/api/collections';
$jsondata = file_get_contents($json_string);
//$obj = json_decode($jsondata,true);

$itemArray  = json_decode($jsondata, true); // decode JSON to associative array
$itemArrayDesc = array_reverse($itemArray);

echo "<h2 style='margin-top:2em;'>Collections</h2>";
$j = 0;
foreach($itemArrayDesc as $info){
  //echo "<div>";

  echo "<p><a href='http://exhibits.library.gwu.edu/collections/show/" . $info['id'] . "'>" . $info['element_texts'][0]['text'] . " (collection id " . $info['id'] . ")</p>";

  if (++$j == 30) break;
}

// var_dump($itemArray2);

$arr = $obj;
foreach ($arr as &$value) {
  //echo 'test ' . $arr[0] . '<br>';
}

//echo "<pre>";
//print_r($obj);
//echo "</pre>";
?>
                    
            </div>
            
        </article> <!-- /container -->
        <!-- end page content -->
        
        <footer class="navbar-fixed-bottom"><!-- the Libsite7 Lite Footer -->
            <div id="libfooter-container">
                <div id="libfooter" class="container">
                    <div class="libfooter-text">
                        <div id="footer-contact">
                            <span class="address"><a href="http://library.gwu.edu" target="_blank" title="GW Libraries Website">GW Libraries</a> &#8226; 2130 H Street NW &#8226; Washington DC 20052</span> &#8226; <span class="tel">202.994.6558</span> &#8226; <a href="mailto:gelman@gwu.edu" target="_blank" title="">gelman@gwu.edu</a>
                        </div>
                        <div id="footer-utility">
                            <span><a href="#">(this blue footer will be the darker taller Exhibits footer)</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- end Libsite7 Lite Footer -->
        
        <!-- javascript placed at the end of the document so the pages load faster -->
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script><!-- important -->
        
    </body>
</html>

