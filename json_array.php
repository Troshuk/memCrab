<?php

$memory = memory_get_usage();
echo round( ( memory_get_usage() ) / 1024 / 1024, 5 ) . " MB (до) \n";
echo " Create array \n";
$z = [];
for ($i=0; $i < 1000000; $i++) { 
	$z[$i] = "$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i";
}
echo round( ( memory_get_usage() ) / 1024 / 1024, 5 ) . " MB (після) \n";
// echo round( ( memory_get_usage() - $memory ) / 1024 / 1024, 5 ) . " MB \n";

$memory = memory_get_usage();
echo round( ( memory_get_usage() ) / 1024 / 1024, 5 ) . " MB (до) \n";
echo " json_encode \n";
$z = json_encode( $z, JSON_UNESCAPED_UNICODE );
echo round( ( memory_get_usage() ) / 1024 / 1024, 5 ) . " MB (після) \n";
// echo round( ( memory_get_usage() - $memory ) / 1024 / 1024, 5 ) . " MB \n";

$memory = memory_get_usage();
echo round( ( memory_get_usage() ) / 1024 / 1024, 5 ) . " MB (до) \n";
echo " json_decode \n";
$z = json_decode($z, true);
echo round( ( memory_get_usage() ) / 1024 / 1024, 5 ) . " MB (після) \n";
// echo round( ( memory_get_usage() - $memory ) / 1024 / 1024, 5 ) . " MB \n";


echo round( ( memory_get_usage() ) / 1024 / 1024, 5 ) . " MB (до) \n";

echo " Update array \n";
for ($i=0; $i < 1000; $i++) { 
	$z[] = "$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i$i";
}
echo round( ( memory_get_usage() ) / 1024 / 1024, 5 ) . " MB (після) \n";
