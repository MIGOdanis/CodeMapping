<?php
$mapArray = array(
	"4029" => 717
);

if(isset($_GET['iframe'])){
?>
<html>
<head>
<style type="text/css">
body,html{
margin: 0px;
}
</style>
</head>
<body>
<?php 
if(isset($_GET['z'])){
$newZone = $mapArray[$_GET['z']];
if(isset($newZone) && $newZone > 0){
?>
<script type='text/javascript'>
ac_as_id = <?php echo $newZone ?>;
ac_format = 0;
ac_mode = 1; 
ac_group_id = 1; 
ac_server_base_url ='iped.mlt01.com/';
</script> 
<script type='text/javascript' src='http://static.mlt01.com/k.js'></script>
<?php
}
}
?>
</body>
</html>
<?php
}else{
	$json['status'] = 12;
	$json['result'] = -1;
	$json['zone'] = 0;
	$json['msg'] = "";
	$json['html'] = "";
	if(isset($_GET['z'])){
		$json['zone'] = (int)$_GET['z'];
		$newZone = $mapArray[$_GET['z']];
		if(isset($newZone) && $newZone > 0){
			$json['status'] = 0;
			$json['result'] = 0;
			$json['html'] = "<script type=\"text/javascript\"> ac_as_id = ".$newZone."; ac_format = 0;  ac_mode = 1; ac_group_id = 1; ac_server_base_url =\"iped.mlt01.com/\";</script> <script type=\"text/javascript\" src=\"http://static.mlt01.com/k.js\"></script>";		

		}else{
			$json['msg'] = "Not find new id";
		}
	}else{
		$json['msg'] = "Not find zone id";
	}
	header('Content-Type: application/javascript');
	echo "var cfad_json_".$_GET['z']." = JSON.stringify(" . json_encode($json) . ")";
}
?>
