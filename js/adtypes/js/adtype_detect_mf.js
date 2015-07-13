//This is for IE compatibility of function //document.getElementsByClassName()
(function(){ 
	if(document.getElementsByClassName){ 
		return;} 
		else{ 
 
			document.getElementsByClassName=function(className){ 
 
				var allElements=document.getElementsByTagName("*"); 
				var resultArray=[]; 
 
				for(var i=0,j=0;i<allElements.length;i++){ 
					if(allElements[i].className==className){ 
						resultArray[j]=allElements[i]; 
						j++; 
					} 
				}
				return resultArray; 
			} 
		} 
 
	})(); 

// close the ad banner
function close_ads() {
	// document.getElementById("doublemax_ads_cross").style.cssText = "display: none;";
	var elem = document.getElementById("doublemax_ads_cross");
		elem.parentNode.removeChild(elem);
}
function close_ads_float() {
	// document.getElementById("doublemax_ads_float").style.cssText = "display: none;";
	var elem = document.getElementById("doublemax_ads_float");
		elem.parentNode.removeChild(elem);	
}

// detect the client's variable

// position from top
if(typeof(ads_mf_position_top) !== 'undefined'){
	document.getElementById("ads_container").style.cssText = "top: " + ads_mf_position_top + "px;";
}

// mask's opacity
if(typeof(ads_mf_mask_opacity) !== 'undefined'){
	document.getElementById("mask").style.cssText = "filter: alpha(opacity=" + ads_mf_mask_opacity *100 + "); -khtml-opacity: " + ads_mf_mask_opacity + "; opacity: " + ads_mf_mask_opacity + "; -moz-opacity: " + ads_mf_mask_opacity + "; background:" + ads_mf_mask_color + ";";
}

// ad's horizontal align
var ads_mf_width = "320";
if(typeof(ads_mf_position_horizontal) !== 'undefined' && typeof(ads_mf_width) !== 'undefined') {
	if(ads_mf_position_horizontal !== 'center') {
		document.getElementById("mask_float").style.cssText = "display: none;";
		document.getElementById("ads_container_float").style.cssText = "float: " + ads_mf_position_horizontal + ";width: " + ads_mf_width + "px;";
	} else {}
}