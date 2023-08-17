<?php
	$mobile_phones=array("Apple","Oppo","Vivo","Reno","Nokia","Samsung","ITEL","IKALL","Blackberry","Lava","Karbon","Sony");
	//array index or position starts from 0
	$length=count($mobile_phones);
	//echo $length;
	$position = mt_rand(0,11);
	echo $position;
	echo "<br/>";
	echo "Sell Your ".$mobile_phones[$position];
?>