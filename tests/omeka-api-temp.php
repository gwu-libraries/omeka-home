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

//echo "<h2 style='margin-top:2em;'>Collections</h2>";
$j = 0;
foreach($itemArrayDesc as $info){
  //echo "<div>";

  //echo "<p><a href='http://exhibits.library.gwu.edu/collections/show/" . $info['id'] . "'>" . $info['element_texts'][0]['text'] . " (collection id " . $info['id'] . ")</p>";

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
