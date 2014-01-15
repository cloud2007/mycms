<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index Page</title>
<script src="/Public/js/jquery-1.9.1.js"></script>
<script src="/Public/js/ui/jquery.ui.position.js"></script>
<script src="./Public/js/ui/jquery.ui.core.js"></script>
<script src="/Public/js/ui/jquery.ui.widget.js"></script>

<script src="/Public/js/ui/jquery.ui.tabs.js"></script>

<script src="/Public/js/ui/jquery.ui.mouse.js"></script>
<script src="/Public/js/ui/jquery.ui.draggable.js"></script>

<link rel="stylesheet" href="/Public/css/reset.css">
<link rel="stylesheet" href="/Public/css/style.css">
<link rel="stylesheet" href="/Public/css/ui/jquery.ui.all.css">
<link rel="stylesheet" href="/Public/css/ui/demos.css">
<style>
*{ outline:none}
html,body{height:98%;} 
#tabs { height:100%;}
#tabs ul.menu{ height:29px; display:block}
#tabs li .ui-icon-close { float: left; margin: 0.4em 0.2em 0 0; cursor: pointer; }
#tabs-1 { height:95%;}
#tabs-1 li{ margin:10px; float:left; display:block;}
</style>
</head>
<body>
<div id="tabs">
	<ul class="menu">
		<li><a href="#tabs-1">Nunc tincidunt</a></li>
	</ul>
	<div id="tabs-1">
		<ul>
			<li><a class="addTab" href="javascript:;" id="2" title="baidu" url="http://www.baidu.com"><img src="/Public/images/1.jpg" width="50" height="50" /></a></li>
			<li><a class="addTab" href="javascript:;" id="3" title="baidu" url="http://www.baidu.com"><img src="/Public/images/2.jpg" width="50" height="50" /></a></li>
			<li><a class="addTab" href="javascript:;" id="4" title="baidu" url="http://www.baidu.com"><img src="/Public/images/3.jpg" width="50" height="50" /></a></li>
		</ul>
	</div>
</div>
</body>
</html>
<script>
$(function() {
	$( ".addTab" ).draggable({ containment: "#tabs-1", scroll: false });
	
	var tabs = $( "#tabs" ).tabs();
	
	$('.addTab').click(function(){
		var id = $(this).attr('id');
		var title = $(this).attr('title');
		var url = $(this).attr('data-url');
		addTab(id,title,url);
	})
	
	function addTab(id,title,url) {
		var id = "tabs-" + id;
		var	li = "<li><a href='#"+id+"'>"+title+"</a> <span class='ui-icon ui-icon-close' role='presentation'>Remove Tab</span></li>";
		tabs.find( ".ui-tabs-nav" ).append( li );
		tabs.append( "<div id='" + id + "' style='height:100%'><p><iframe frameborder='0' height='100%' width='100%' vspace='0' hspace='0' src='"+ url +"'></iframe></p></div>" );
		tabs.tabs( "refresh" );
	}
	
	tabs.delegate( "span.ui-icon-close", "click", function() {
		var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
		$( "#" + panelId ).remove();
		tabs.tabs( "refresh" );
	});
	
});

</script>