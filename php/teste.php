<html>
<head>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9;FF=3;chrome=1;OtherUA=4" />
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	
<style>

iframe.iframe-skeleton {
	position: fixed;
  top:      0;
  left:     0; 
  bottom:   0;
  right:    0;
  width:    100%;
  height:   100%;
  border:   0;
  margin:   0;
  padding:  0;
}
</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
//alert('before ready');
$(document).ready(function(){
	//alert('teste');
	//alert('on ready w:'+$(window).width()+' h:'+$(window).height());
	/*$('iframe').css({ 
		width: $(window).width(),
		height: $(window).height() 
	});
	*/
	/*
	$('body').css({ 
		width: $('iframe').width(),
		height: $('iframe').height() 
	});	*/
	//alert('after iframe resize');
	/*$(window).resize(function(){
		var $this = $(this);
		//alert('resizing window w:'+$this.width()+' h:'+$this.height());
		$('iframe').css({ 
			width: $this.width(),
			height: $this.height() 
		});
		$('body').css({ 
			width: $('iframe').width(),
			height:$('iframe').height() 
		});
		
	});*/
	if (/iPhone|iPod|iPad/.test(navigator.userAgent)){
		//alert('teste');
		var $this = $('iframe');
		$this.css({ 
			position: 'relative' 
		});
		/*$('iframe').wrap(function(){
			var $this = $(this);
			$this.css({ 
				position: 'relative' 
			});
			//alert('wraping iframe w:'+$this.width()+' h:'+$this.height());
			return $('<div />').css({
				width: $this.attr('width'),
				height: $this.attr('height'),
				overflow: 'scroll',
				'-webkit-overflow-scrolling': 'touch'
			})
		});*/
	}
});
</script>
</head>
<body>
<!-- <iframe class="iframe-skeleton" src="/teste/teste2.php"></iframe>-->
<iframe class="iframe-skeleton" src="//acuvue1day-stage.web.rga.com/?x=:undefined&__utma=246834964.1533914072.1391521773.1392994293.1393008535.38&__utmb=246834964.1.10.1393008535&__utmc=246834964&__utmx=-&__utmz=246834964.1391521773.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)&__utmv=-&__utmk=144722615"></iframe>
</body>
</html>