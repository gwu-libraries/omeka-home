<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Omeka Custom Home</title><!-- your page title -->
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
	    <!-- print styles are included in base libheader7_lite.css --> 
  
        <!-- js links are at the bottom of the page -->
            
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
                    <div class="libheader-liblink"><a href="http://library.gwu.edu" target="_blank" title="GW Libraries website">GW Libraries</a></div>

                    <!-- optional links can go here (note: use short text, test it doesn't bump into the GW logo) -->
                    <div class="libheader-link"><a href="#" target="_blank" title="">Placeholder Link 1</a></div>
                    <!-- this is an optional 'bullet' to place between links -->
                    <div class="bullet">&bull;</div>
                    <div class="libheader-link"><a href="#" target="_blank" title="">Placeholder Link 2</a></div>
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
                <div class="span12"> <!-- this is a 'content' column that spans all 12 of the columns wihtin this content area -->
                    <h1>Omeka Custom Home</h1>
                    <p>Testing different tools for a custom Omeka 'home' page</p>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span8"> <!-- this is a 'content' column that takes up 8 of the 12 columns within this content area -->
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

  echo "<p>Total Items = " . $headerArray['Omeka-Total-Results'] . " which means " . $howMany . " pages</p>";

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
                            <span><a href="#">Utility Link 1</a></span>
                            <span> &#8226; </span>
                            <span><a href="#">Utility Link 2</a></span>
                            <span> &#8226; </span>
                            <span><a href="#">Utility Link 3</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- end Libsite7 Lite Footer -->
        
        <!-- javascript placed at the end of the document so the pages load faster -->
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script><!-- important -->
        
    </body>
</html>
