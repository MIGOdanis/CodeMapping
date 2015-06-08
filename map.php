<?php
$mapArray = array(
	"4468" => 1001515, //CF-CM-TEST
);
if(isset($_GET['z'])){
	$newZone = $mapArray[$_GET['z']];
	if(isset($newZone) && $newZone > 0){
		header('Content-Type: application/javascript');
		echo "
			document.write(\"<script type='text/javascript'>tosAdspaceInfo ={'aid':" . $newZone . ",'serverbaseurl':'tad.doublemax.net/','staticbaseurl':'static.doublemax.net/js/'}</script><script type='text/javascript' src='http://static.doublemax.net/js/tr.js'>\")
		";
	}
}
?>