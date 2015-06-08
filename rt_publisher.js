var domain = "//103.17.10.57";

// function rand(){
//  	return Math.floor(Math.max(0, Math.random() * (9+1)));
// }
//var cfadsn = "ad"+rand()+rand()+rand()+rand()+rand()+rand();
//document.write("<div id='"+cfadsn+"'></div>");

document.write("<script src='"+domain+"/adx/map.php?"+q+"''></script>");
var cfadthispageurl = encodeURIComponent(location.href);
var cfadelandimg = '<img src="//eland.doublemax.net/cfdmp/viewreceiver?'+q.replace('z', "p")+'&url='+cfadthispageurl+'" style="display: none;">'; 
document.write(cfadelandimg);
