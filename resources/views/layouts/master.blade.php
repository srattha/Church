<!DOCTYPE html>
<html  ng-app="app">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title></title>
	<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Theme CSS - Includes Bootstrap -->
	<link href="css/creative.min.css" rel="stylesheet">
	

	@yield('css')
	<style type="text/css">
		#overlay{
			position:fixed;
			z-index:99999;
			top:0;
			left:0;
			bottom:0;
			right:0;
			background:#f5f5f7;
			transition: 1s 0.4s;
		}
		#progress{
			height:5px;
			background:#0f6d7b;
			position:absolute;
			width:0;                
			top:50%;
		}
		#progstat{
			font-size:24px;
			letter-spacing: 3px;
			position:absolute;
			top:50%;
			margin-top:-40px;
			width:100%;
			text-align:center;
			color:#0f6d7b;
		}
	</style>
	<script type="text/javascript">
		;(function(){
			function id(v){ return document.getElementById(v); }
			function loadbar() {
				var ovrl = id("overlay"),
				prog = id("progress"),
				stat = id("progstat"),
				img = document.images,
				c = 0,
				tot = img.length;
				if(tot == 0) return doneLoading();

				function imgLoaded(){
					c += 1;
					var perc = ((100/tot*c) << 0) +"%";
					prog.style.width = perc;
					stat.innerHTML = "Loading "+ perc;
					if(c===tot) return doneLoading();
				}
				function doneLoading(){
					ovrl.style.opacity = 0;
					setTimeout(function(){ 
						$('.sidebar-category').fadeIn();
						$('.navbar-right').fadeIn();
					}, 300);
					
					setTimeout(function(){ 
						ovrl.style.display = "none";
					}, 1500);
				}
				for(var i=0; i<tot; i++) {
					var tImg     = new Image();
					tImg.onload  = imgLoaded;
					tImg.onerror = imgLoaded;
					tImg.src     = img[i].src;
				}    
			}
			document.addEventListener('DOMContentLoaded', loadbar, false);
		}());
	</script>
</head>

<body class="navbar-top">
	<div id="overlay">
		<div id="progstat"></div>
		<div id="progress"></div>
	</div>
</body>

@yield('script')
</html>
