console.log(rand());
function rand(){
 	return Math.floor(Math.max(0, Math.random() * (9+1)));
}
var cfadsn = "ad"+rand()+rand()+rand()+rand()+rand()+rand();
//document.write("<div id='"+cfadsn+"'></div>");
document.write("<script src='//events.doublemax.net/adx/map.php?"+q+"&sn="+cfadsn+"'></script>");
var cfadthispageurl = encodeURIComponent(location.href);
var cfadelandimg = '<img src="//eland.doublemax.net/cfdmp/viewreceiver?'+q.replace('z', "p")+'&url='+cfadthispageurl+'" style="display: none;">'; 
document.write(cfadelandimg);
