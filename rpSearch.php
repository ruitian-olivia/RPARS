<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<!--<link href="http://fonts.googleapis.com/css?family=Playball&amp;subset=latin-ext" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>-->
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script type="text/javascript">

function altRows(id){

	if(document.getElementsByTagName){  

		

		var table = document.getElementById(id);  

		var rows = table.getElementsByTagName("tr"); 

		 

		for(i = 0; i < rows.length; i++){          

			if(i % 2 == 0){

				rows[i].className = "evenrowcolor";

			}else{

				rows[i].className = "oddrowcolor";

			}      

		}

	}

}

 

window.onload=function(){

	altRows('alternatecolor');

}

</script>


<!-- CSS goes in the document HEAD or added to your external stylesheet -->

<style type="text/css">

table.altrowstable {

	font-family: verdana,arial,sans-serif;

	font-size:11px;

	color:#333333;

	border-width: 1px;

	border-color: #a9c6c9;

	border-collapse: collapse;

}

table.altrowstable th {

	border-width: 1px;

	padding: 8px;

	border-style: solid;

	border-color: #a9c6c9;
	background-color:#5caecd;

}

table.altrowstable td {

	border-width: 1px;

	padding: 8px;

	border-style: solid;

	border-color: #a9c6c9;

}

.oddrowcolor{

	background-color:#d4e3e5;
	/* background-color: */

}

.evenrowcolor{

	background-color:#c3dde0;
	/* background-color:#b3bf06; */
}
form input[type="submit"] {
	color: #212121;
    font-size: 1.2em;
    border: solid 1px #bdcd00;
    padding: .5em 2em;
    text-decoration: none;
    background: #bdcd00;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
form input[type="submit"]:hover {
	background:#212121;
	color:#FFFFFF;
    border: solid 1px #bdcd00;
}
select {
	border: solid 0.5px #bdcd00;
	padding: .5em 2em;
	margin: 0.5em;
}
input {
	border: solid 0.5px #bdcd00;
	padding: .5em 2em;
	margin: 0.5em;
}

</style>
</head>
<body>
	<!-- banner -->
	<div class="banner about-banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.html">RPARS<span><sup>DATABASE</sup></span></a>
						</h1>
					</div>
				</div>
			
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="list-border" href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li ><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="ribosomalProtein.php">Ribosomal Protein</a></li>
											<li><a  class="hvr-bounce-to-bottom" href="resistanceGene.php">Resistance Gene</a></li>          
										</ul>
									</li>								
									<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="rpSearch.php">Ribosomal Protein</a></li>
											<li><a class="active" class="hvr-bounce-to-bottom" href="rgSearch.php">Resistance Gene</a></li>          
										</ul>
									</li>									
									<li><a href="blog.html">Help</a></li>
									<li><a class="list-border1" href="links.html">Links</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<div class="about-heading">	
		<div class="container">
			<h2>Ribosomal Protein Search</h2>
		</div>
	</div>
	<!-- gallery -->
	<div class="gallery">
		<div class="container">


<form action="search_rp.php" method="get">
<select name="r1">
	<option value=""></option>
	<option value="NOT">NOT</option>
</select>
<select name="t1">
	<option value="ALL">ALL</option>
	<option value="entry ID">ENTRY ID</option>
	<option value="protein name">PROTEIN NAME</option>
	<option value="coding gene name">CODING GENE NAME</option>
	<option value="strain name">ORGANISM(STRAIN)</option>
</select>
<input type="text" name="s1"><br>
<select name="r2">
	<option value="AND">AND</option>
	<option value="OR">OR</option>
	<option value="NOT">NOT</option>
</select>
<select name="t2">
	<option value="ALL">ALL</option>
	<option value="entry ID">ENTRY ID</option>
	<option value="protein name">PROTEIN NAME</option>
	<option value="coding gene name">CODING GENE NAME</option>
	<option value="strain name">ORGANISM(STRAIN)</option>
</select>
<input type="text" name="s2"><br>
<select name="r2">
	<option value="AND">AND</option>
	<option value="OR">OR</option>
	<option value="NOT">NOT</option>
</select>
<select name="t3">
	<option value="ALL">ALL</option>
	<option value="entry ID">ENTRY ID</option>
	<option value="protein name">PROTEIN NAME</option>
	<option value="coding gene name">CODING GENE NAME</option>
	<option value="strain name">ORGANISM(STRAIN)</option>
</select>
<input type="text" name="s3"><br>
<select name="r4">
	<option value="AND">AND</option>
	<option value="OR">OR</option>
	<option value="NOT">NOT</option>
</select>
<select name="t4">
	<option value="ALL">ALL</option>
	<option value="entry ID">ENTRY ID</option>
	<option value="protein name">PROTEIN NAME</option>
	<option value="coding gene name">CODING GENE NAME</option>
	<option value="strain name">ORGANISM(STRAIN)</option>
</select>
<input type="text" name="s4"><br>
<select name="r5">
	<option value="AND">AND</option>
	<option value="OR">OR</option>
	<option value="NOT">NOT</option>
</select>
<select name="t5">
	<option value="ALL">ALL</option>
	<option value="entry ID">ENTRY ID</option>
	<option value="protein name">PROTEIN NAME</option>
	<option value="coding gene name">CODING GENE NAME</option>
	<option value="strain name">ORGANISM(STRAIN)</option>
</select>
<input type="text" name="s5"><br>
<input type="submit" value="SEARCH">
</form>



		</div>
	</div>
	<!-- //gallery -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>About</h3>
					<p>Aenean cursus dignissim porta. Quisque mattis dolor sem, nec ultrices arcu consequat vel. Phasellus sollicitudin dui diam, et scelerisque nunc venenatis non. Cras dapibus, urna et pellentesque egestas</p>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Events</h3>
					<ul>
						<li>12th Aug <a href="single.html">Curabitur</a></li>
						<li>10th Sept <a href="single.html">Fusce urna</a></li>
						<li>24th Sept <a href="single.html">Praesent</a></li>
						<li>17th Oct <a href="single.html">Malesuada </a></li>
						<li>09th Dec <a href="single.html">Cum sociis</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Navigation</h3>
					<ul>
						<li class="text"><a href="about.html">About</a></li>
						<li class="text"><a href="typography.html">Typography</a></li>
						<li class="text"><a href="icons.html">Icons</a></li>
						<li class="text"><a href="gallery.html">Gallery</a></li>
						<li class="text"><a href="blog.html">Blog</a></li>
						<li class="text"><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Newsletter</h3>
					<form action="#" method="post">
						<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p>Copyright &copy; 2017.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
		</div>
	</div>
	<!-- //copyright -->
		<script src="js/lightbox-plus-jquery.min.js"> </script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>