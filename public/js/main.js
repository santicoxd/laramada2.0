
pathArray = location.href.split( '/' );
protocol = pathArray[0];
host = pathArray[2];
site = pathArray[3];


$(document).ready(function(){
   	
   	$(".side-nav-item").each(function(i, obj) {
   		if(obj.id.indexOf(site)>0)
   			$(this).addClass('active');
	});
})