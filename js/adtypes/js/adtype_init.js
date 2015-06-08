var cf_mobiles = new Array
(
	"midp", "j2me", "avant", "docomo", "novarra", "palmos", "palmsource",
	"240x320", "opwv", "chtml", "pda", "windows ce", "mmp/",
	"blackberry", "mib/", "symbian", "wireless", "nokia", "hand", "mobi",
	"phone", "cdm", "up.b", "audio", "sie-", "sec-", "samsung", "htc",
	"mot-", "mitsu", "sagem", "sony", "alcatel", "lg", "eric", "vx",
	"NEC", "philips", "mmm", "xx", "panasonic", "sharp", "wap", "sch",
	"rover", "pocket", "benq", "java", "pt", "pg", "vox", "amoi",
	"bird", "compal", "kg", "voda", "sany", "kdd", "dbt", "sendo",
	"sgh", "gradi", "dddi", "moto", "iphone", "android",
	"iPod", "incognito", "webmate", "dream", "cupcake", "webos",
	"s8000", "bada", "googlebot-mobile"
)

var ua = navigator.userAgent.toLowerCase();

var cf_isMobile = false;
for (var i = 0; i < cf_mobiles.length; i++) {
	if (ua.indexOf(cf_mobiles[i]) > 0) {
		cf_isMobile = true;
	}
}

if(cf_isMobile != true) {
	if(cf_adtype != null){
		document.write("<script src='//events.doublemax.net/adx/map.php?"+q+"&sn=' ></script>");
	}
} else if(cf_isMobile = true){
	if(mf_adtype != null){
		document.write("<script src='//events.doublemax.net/adx/map.php?"+ads_zone_id+"&sn=' ></script>");
	}
}