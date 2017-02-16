<?php
// Where we're pulling content from
$url = 'http://www.nhra.com/standings/2017/nhra-mello-yello-drag-racing/top-fuel';
$contents = file_get_contents($url); 

// The container we'd like to pull
$title = explode('<div class="tab-panels">',$contents); 
$title = explode("</div>",$title[1]); 

// Remove all tags but keep table structure
$stripped_tags = strip_tags($title[0], '<div><table><td><tr><th>');

// Where we'll be writing the data to
$fp = fopen ("points.html", "w+"); 

fwrite ($fp, "$final"); 
fclose ($fp); 
?>