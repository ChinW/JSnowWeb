<?php

$winterNotifyTime = [
	 28800,//60*60*8
	 36000,//60*60*10
	 48500,//60*60*13.5
	 55800,//60*60*15.5
	 66600,//60*60*18.5
];
$summerNotifyTime = [
	 28800,//60*60*8
	 36000,//60*60*10
	 48500,//60*60*13.5
	 55800,//60*60*15.5
	 66600,//60*60*18.5
];
$notify = ["time"=> "winter", "winter" => $winterNotifyTime, "summer"=> $summerNotifyTime];
$config = ["term_startdate" => "02-21", "notify" => $notify];
echo json_encode($config);