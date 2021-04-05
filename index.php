<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>
<?php

$url = 'http://www.watchnews.pro/wp-content/streamings/msnbcz.php?file=playlist.m3u8';

$headers=get_headers($url);

//print_r(get_headers($url, 1));

//echo"<br/><br/> echo the header position 2<br/>";

//print_r($headers[2]);

//echo"<br/><br/> start from https <br/>";

//echo substr($headers[2], 10);

$link=substr($headers[2], 10);

//echo"<br/><br/> replace the end with mono.m3u8<br/>";

//echo str_replace("index.m3u8","tracks-v1a1/mono.m3u8",$link);

$link_to_redirect=str_replace("index.m3u8","tracks-v1a1/mono.m3u8",$link);

// make an image just to inject link in headers to be sniffed

echo "<img src='".$link_to_redirect."'/>";





?>

</body>
</html>