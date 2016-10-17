<?php

$appid = '43361b00c218d8648f6e2b8f699bff67'; 

error_reporting(0);
include('../includes/html_dom.php');

function between($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}

if(empty($_GET['c'])){

	$data = file_get_html("http://www.ipaddresslocation.org/ip-address-locator.php?lookup=".$_SERVER['REMOTE_ADDR']);

	$city = strip_tags(between($data,'IP City: <b>','<i>IP Latitude:'));
	$city = str_replace('%ED','i',urlencode(rtrim($city)));

	$country = strip_tags(between($data,'<i>IP Country:</i> <b>','</b>'));
}else{
	$city = $_GET['c'];
	$city = urlencode(htmlspecialchars(urldecode($city)));
	$city = ltrim($city," ");
	$city = rtrim($city," ");
}

$wdata = json_decode(file_get_html("http://api.openweathermap.org/data/2.5/forecast/daily?q=$city&mode=json&appid=$appid&cnt=6&units=metric"));
$city_name = $wdata->{'city'}->{'name'};
$country_name = $wdata->{'city'}->{'country'};

if($wdata->{'list'}){

	$current = $wdata->{'list'}[0];
	$icon = $current->{'weather'}[0]->{'icon'};
	$condition = $current->{'weather'}[0]->{'main'};
	$min_temp = round($current->{'temp'}->{'min'});
	$max_temp = round($current->{'temp'}->{'max'});
	$humidity = $current->{'humidity'};
	
	echo "<table width='380px' border='0px' align='left'>
	<tr><td>
	Weather today in $city_name, $country_name <br/>
	<img src=\"http://openweathermap.org/img/w/$icon.png\" style=\"vertical-align: top;\"/>
	<span style=\"font-size:40px; font-weight:bold;\">$min_temp-$max_temp&deg;C</span>
	<br/>$condition - $humidity% humidity<br/><br/>
	Forecast for the next 5 days:<br/>
	<table width='380px' border='0px' style='text-align: center;border-collapse: collapse;'><tr>";

	for($i=1;$i<6;$i++){
		$current = $wdata->{'list'}[$i];
		$icon = $current->{'weather'}[0]->{'icon'};
		$min_temp = round($current->{'temp'}->{'min'});
		$max_temp = round($current->{'temp'}->{'max'});
		$day = date('D',$current->{'dt'});
		echo"<td><b>$day</b><br/>
		<img src=\"http://openweathermap.org/img/w/$icon.png\" style=\"vertical-align: middle;\"/><br/>
		$min_temp-$max_temp &deg;C</td>";
	}

	echo"</tr></p></td></tr></table><br/>";

}

?>
