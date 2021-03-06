<!DOCTYPE html>
<html lang="en">
<head>
<title>Strain</title>
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
							<a href="index.html">RPARS<span><sup>Database</sup></span></a>
						</h1>
					</div>
				</div>
				<div class="clearfix"> </div>
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
									<li><a class="active" href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="ribosomalProtein.php">Ribosomal Protein</a></li>
											<li><a class="hvr-bounce-to-bottom" href="resistanceGene.php">Resistance Gene</a></li>          
										</ul>
									</li>
									<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="rpSearch.php">Ribosomal Protein</a></li>
											<li><a class="hvr-bounce-to-bottom" href="rgSearch.php">Resistance Gene</a></li>          
										</ul>
									</li>									
									<li><a href="help.html">Help</a></li>
									<li><a class="list-border1" href="links.html">Links</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
			</div>
		</div>
	</div>
	
	<!-- gallery -->
	<div class="gallery">
		<div class="container">
		<?php
		echo '<div class="about-heading"><div class="container"><h2>'. $_GET["strain"].'</h2></div></div>';
$conn=mysql_connect("localhost","root","root") or die("can't connect".mysql_error());
			mysql_select_db("rpars",$conn) or die;

            $query1 = sprintf("SELECT * FROM `resistance gene` WHERE `strain name`='%s'", $_GET["strain"]);
            $result1 = mysql_query($query1,$conn); //查询
            
			echo '<table width="500" border="1" class="altrowstable" id="alternatecolor">';
			echo '<tr><th>gene ID</th><th>strain name</th><th>gene type</th><th>antibiotic name</th><th>description</th></tr>';
            while ($row = mysql_fetch_array($result1)) {
				echo '<tr>';
				echo '<td><div style="width:100px;word-wrap:break-word;" >' . $row['resistance gene ID']. '</div></td>';
				echo '<td><div style="width:100px;word-wrap:break-word;" >' . $row['gene type'] . '</div></td>';
				echo '<td><div style="width:100px;word-wrap:break-word;" >' . $row['antibiotic name'] . '</div></td>';
                echo '<td><div style="width:200px;word-wrap:break-word;" >' . $row['strain name'] . '</div></td>';
                echo '<td><div style="width:350px;word-wrap:break-word;" >' . $row['description'] . '</div></td>';
				echo '</tr>';
                }
            

            echo '<tr>';
            echo '<td><div style="width:100px;word-wrap:break-word;" > </div></td>';
            echo '<td><div style="width:100px;word-wrap:break-word;" > </div></td>';
            echo '<td><div style="width:100px;word-wrap:break-word;" > </div></td>';
            echo '<td><div style="width:200px;word-wrap:break-word;" > </div></td>';
            echo '<td><div style="width:350px;word-wrap:break-word;" > </div></td>';
            echo '</tr>';
			// echo '</table>';


$query2 = sprintf("SELECT * FROM `ribosomal protein` WHERE `strain name`='%s'", $_GET["strain"]);
$result2 = mysql_query($query2,$conn); //查询

// echo '<table width="500" border="1" class="altrowstable" id="alternatecolor">';
echo '<tr><th>entry ID</th><th>protein name</th><th>gene name</th><th>strain name</th><th>amino acid sequence</th></tr>';
while ($row = mysql_fetch_array($result2)) {
    echo '<tr>';
    echo '<td><div style="width:75px;word-wrap:break-word;" ><a href=" '. $row['fasta link'].'" >'.$row['entry ID'] . '</a></div></td>';
    echo '<td><div style="width:75px;word-wrap:break-word;" >' .  $row['protein name']. '</div></td>';
    echo '<td><div style="width:75px;word-wrap:break-word;" >' .  $row['coding gene name']. '</div></td>';
    echo '<td><div style="width:200px;word-wrap:break-word;" >' . $row['strain name'] . '</div></td>';
    echo '<td><div style="width:600px;word-wrap:break-word;" >' . $row['amino acid sequence'] . '</div></td>';
    echo '</tr>';
}
echo '</table>';

?>
			
	</div>
	</div>
	<!-- //gallery -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Address</h3>
					<p>NO. 800 Dongchuan Road, Minhang District, Shanghai, China</p>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Team Members</h3>
					<ul>
						<li>Ruitian Gao </a></li>
						<li>Tongwei Dai</a></li>
						<li>Tiantian Cheng</a></li>
						<li>Wen Wen </li>
					</ul>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Navigation</h3>
					<ul>
						<li class="text"><a href="index.html">Home</a></li>
						<li class="text"><a href="about.html">About</a></li>
						<li class="text"><a href="ribosomalProtein.php">Browse</a></li>
						<li class="text"><a href="rpSearch.php">Search</a></li>
						<li class="text"><a href="help.html">Help</a></li>
						<li class="text"><a href="links.html">Links</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Related Links</h3>
					<ul>
						<li class="text"><a href="https://www.uniprot.org/">UniProt (Universal Protein)</a></li>
						<li class="text"><a href="https://ardb.cbcb.umd.edu/">ARDB (Antibiotic Resistance Gene Database)</a></li>
						<li class="text"><a href="https://card.mcmaster.ca/">CARD(Comprehensive Antibiotic Resistance Database)</a></li>
						<li class="text"><a href="http://life.sjtu.edu.cn/">School of Life Sciences and Biotechnology, SJTU </a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->

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


