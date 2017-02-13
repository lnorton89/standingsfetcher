<?php
$url = 'http://www.nhra.com/standings/2017/nhra-mello-yello-drag-racing/top-fuel';

$contents = file_get_contents($url); 

$title = explode('<div class="tab-panels">',$contents); 
$title = explode("</div>",$title[1]); 

$stripped_tags = strip_tags($title[0], '<div><table><td><tr><th>');

$final = str_replace('Jimmy', 'Clay', $stripped_tags);

$fp = fopen ("points.html", "w+"); 

fwrite ($fp, "$final"); 
fclose ($fp); 

require_once("points.html");
?>