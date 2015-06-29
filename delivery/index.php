<?php
include("../zons.php");
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
<script type="text/javascript">
	tosAdspaceInfo = {
		'aid':<?php echo $newZone ?>,
		'serverbaseurl':'tad.doublemax.net/',
		'staticbaseurl':'static.doublemax.net/js/'
	}
</script>
<script type="text/javascript" src="http://static.doublemax.net/js/tr.js"></script>
<script type="text/javascript" src="//eland.doublemax.net/cfdmp/edmp_ads.js"></script>
<?php
}
}
?>
</body>
</html>
<?php
}elseif(isset($_GET['jscript'])){
	if(isset($_GET['z'])){
		$newZone = $mapArray[$_GET['z']];
		if(isset($newZone) && $newZone > 0){
			header('Content-Type: application/javascript');
			echo "
				document.write(\"<div><script type='text/javascript'>tosAdspaceInfo ={'aid':" . $newZone . ",'serverbaseurl':'tad.doublemax.net/','staticbaseurl':'static.doublemax.net/js/'}</script>\");
				document.write(\"<script type='text/javascript' src='http://static.doublemax.net/js/tr.js'></script></div>\");
				document.write(\"<script type='text/javascript' src='//eland.doublemax.net/cfdmp/edmp_ads.js'></script></div>\");
			";
		}
	}
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
			$json['html'] = "<script type='text/javascript'>tosAdspaceInfo ={'aid':" . $newZone . ",'serverbaseurl':'tad.doublemax.net/','staticbaseurl':'static.doublemax.net/js/'}</script><script type='text/javascript' src='http://static.doublemax.net/js/tr.js'><script type='text/javascript' src='//eland.doublemax.net/cfdmp/edmp_ads.js'>";		

		}else{
			$json['msg'] = "Not find new id";
		}
	}else{
		$json['msg'] = "Not find zone id";
	}
	header('Content-Type: application/javascript');
	echo "var cfad_json_".$_GET['z']." = JSON.stringify(" . json_encode($json) . ")";
}

if(isset($mapArray))
	unset($mapArray);
?>
