<?php

$memory = memory_get_usage();
$z = [];
for ($i=0; $i < 1000000; $i++) { 
	$z[] = "$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i";
}
echo round( ( memory_get_usage() - $memory ) / 1024 / 1024, 5 ) . " MB \n";

$memory = memory_get_usage();
$json = json_encode( $z, JSON_UNESCAPED_UNICODE );
echo round( ( memory_get_usage() - $memory ) / 1024 / 1024, 5 ) . " MB \n";

$memory = memory_get_usage();
$json2 = json_decode($json, true);
echo round( ( memory_get_usage() - $memory ) / 1024 / 1024, 5 ) . " MB \n";