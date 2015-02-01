<?php


$city=$_GET['city'];

$city=str_replace(" ", "", $city);

try {
	@$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

} catch (Exception $ex) {
	
	alert("wooooooooo");
	$contents="";
	
}


if ($contents!=""){

$a=preg_match("/\<span class\=\"phrase\"\>(.*?)\<\/span\>/", $contents, $matches);

print_r($matches[1]);
}

?>