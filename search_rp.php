<!DOCTYPE html>
<html lang="en">
<head>
<title>Ribosomal Protein Search</title>
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
							<a href="index.html">RPARS<span><sup>DATABASE</sup></span></a>
						</h1>
					</div>
				</div>
				<!-- <div class="header-right">
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div> -->
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
									<li><a class="active" href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="rpSearch.php">Ribosomal Protein</a></li>
											<li><a class="active" class="hvr-bounce-to-bottom" href="rgSearch.php">Resistance Gene</a></li>          
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
	<!-- //banner -->
	<div class="about-heading">	
		<div class="container">
			<h2>Ribosomal Protein Search Result</h2>
		</div>
	</div>
	<!-- gallery -->
	<div class="gallery">
		<div class="container">

<?php
$conn=mysql_connect("localhost","root","root") or die("can't connect".mysql_error());
mysql_select_db("rpars",$conn) or die;



$query="FROM `ribosomal protein` WHERE ";
if ($_GET['s1'] == "" && $_GET['s2'] == "" && $_GET['s3'] == "" && $_GET['s4'] == "" && $_GET['s5'] == ""){
	$query .= "1";
}
if ($_GET['s1'] != ""){
	if ($_GET['r1'] == "NOT" && $_GET['t1'] == "ALL"){
		$qp = sprintf("(`entry ID` NOT LIKE '%%%s%%' OR `protein name` NOT LIKE '%%%s%%' OR `coding gene name` NOT LIKE '%%%s%%' OR `strain name` NOT LIKE '%%%s%%')", 
		$_GET['s1'], $_GET['s1'], $_GET['s1'], $_GET['s1']);
		$query .= $qp;
	}
	if ($_GET['r1'] == "" && $_GET['t1'] == "ALL"){
		$qp = sprintf("(`entry ID` LIKE '%%%s%%' OR `protein name` LIKE '%%%s%%' OR `coding gene name` LIKE '%%%s%%' OR `strain name` LIKE '%%%s%%')", 
		$_GET['s1'], $_GET['s1'], $_GET['s1'], $_GET['s1']);
		$query .= $qp;
	}
	if ($_GET['r1'] == "NOT" && $_GET['t1'] != "ALL"){
		$qp = sprintf("`%s` NOT LIKE '%%%s%%'", $_GET['t1'], $_GET['s1']);
		$query .= $qp;
	}
	if ($_GET['r1'] == "" && $_GET['t1'] != "ALL"){
		$qp = sprintf("`%s` LIKE '%%%s%%'", $_GET['t1'], $_GET['s1']);
		$query .= $qp;
	}
}
if ($_GET['s2'] != ""){
	if ($_GET['r2'] == "NOT" && $_GET['t2'] == "ALL"){
		$qp = sprintf(" AND (`entry ID` NOT LIKE '%%%s%%' OR `protein name` NOT LIKE '%%%s%%' OR `coding gene name` NOT LIKE '%%%s%%' OR `strain name` NOT LIKE '%%%s%%')", 
		$_GET['s2'], $_GET['s2'], $_GET['s2'], $_GET['s2']);
		$query .= $qp;
	}
	if ($_GET['r2'] == "OR" && $_GET['t2'] == "ALL"){
		$qp = sprintf(" OR (`entry ID` LIKE '%%%s%%' OR `protein name` LIKE '%%%s%%' OR `coding gene name` LIKE '%%%s%%' OR `strain name` LIKE '%%%s%%')", 
		$_GET['s2'], $_GET['s2'], $_GET['s2'], $_GET['s2']);
		$query .= $qp;
	}
	if ($_GET['r2'] == "AND" && $_GET['t2'] == "ALL"){
		$qp = sprintf(" AND (`entry ID` LIKE '%%%s%%' OR `protein name` LIKE '%%%s%%' OR `coding gene name` LIKE '%%%s%%' OR `strain name` LIKE '%%%s%%')", 
		$_GET['s2'], $_GET['s2'], $_GET['s2'], $_GET['s2']);
		$query .= $qp;
	}
	if ($_GET['r2'] == "NOT" && $_GET['t2'] != "ALL"){
		$qp = sprintf(" AND `%s` NOT LIKE '%%%s%%'", $_GET['t2'], $_GET['s2']);
		$query .= $qp;
	}
	if ($_GET['r2'] == "OR" && $_GET['t2'] != "ALL"){
		$qp = sprintf(" OR `%s` LIKE '%%%s%%'", $_GET['t2'], $_GET['s2']);
		$query .= $qp;
	}
	if ($_GET['r2'] == "AND" && $_GET['t2'] != "ALL"){
		$qp = sprintf(" AND `%s` LIKE '%%%s%%'", $_GET['t2'], $_GET['s2']);
		$query .= $qp;
	}
}
if ($_GET['s3'] != ""){
	if ($_GET['r3'] == "NOT" && $_GET['t3'] == "ALL"){
		$qp = sprintf(" AND (`entry ID` NOT LIKE '%%%s%%' OR `protein name` NOT LIKE '%%%s%%' OR `coding gene name` NOT LIKE '%%%s%%' OR `strain name` NOT LIKE '%%%s%%')", 
		$_GET['s3'], $_GET['s3'], $_GET['s3'], $_GET['s3']);
		$query .= $qp;
	}
	if ($_GET['r3'] == "OR" && $_GET['t3'] == "ALL"){
		$qp = sprintf(" OR (`entry ID` LIKE '%%%s%%' OR `protein name` LIKE '%%%s%%' OR `coding gene name` LIKE '%%%s%%' OR `strain name` LIKE '%%%s%%')", 
		$_GET['s3'], $_GET['s3'], $_GET['s3'], $_GET['s3']);
		$query .= $qp;
	}
	if ($_GET['r3'] == "AND" && $_GET['t3'] == "ALL"){
		$qp = sprintf(" AND (`entry ID` LIKE '%%%s%%' OR `protein name` LIKE '%%%s%%' OR `coding gene name` LIKE '%%%s%%' OR `strain name` LIKE '%%%s%%')", 
		$_GET['s3'], $_GET['s3'], $_GET['s3'], $_GET['s3']);
		$query .= $qp;
	}
	if ($_GET['r3'] == "NOT" && $_GET['t3'] != "ALL"){
		$qp = sprintf(" AND `%s` NOT LIKE '%%%s%%'", $_GET['t3'], $_GET['s3']);
		$query .= $qp;
	}
	if ($_GET['r3'] == "OR" && $_GET['t3'] != "ALL"){
		$qp = sprintf(" OR `%s` LIKE '%%%s%%'", $_GET['t3'], $_GET['s3']);
		$query .= $qp;
	}
	if ($_GET['r3'] == "AND" && $_GET['t3'] != "ALL"){
		$qp = sprintf(" AND `%s` LIKE '%%%s%%'", $_GET['t3'], $_GET['s3']);
		$query .= $qp;
	}
}
if ($_GET['s4'] != ""){
	if ($_GET['r4'] == "NOT" && $_GET['t4'] == "ALL"){
		$qp = sprintf(" AND (`entry ID` NOT LIKE '%%%s%%' OR `protein name` NOT LIKE '%%%s%%' OR `coding gene name` NOT LIKE '%%%s%%' OR `strain name` NOT LIKE '%%%s%%')", 
		$_GET['s4'], $_GET['s4'], $_GET['s4'], $_GET['s4']);
		$query .= $qp;
	}
	if ($_GET['r4'] == "OR" && $_GET['t4'] == "ALL"){
		$qp = sprintf(" OR (`entry ID` LIKE '%%%s%%' OR `protein name` LIKE '%%%s%%' OR `coding gene name` LIKE '%%%s%%' OR `strain name` LIKE '%%%s%%')", 
		$_GET['s4'], $_GET['s4'], $_GET['s4'], $_GET['s4']);
		$query .= $qp;
	}
	if ($_GET['r4'] == "AND" && $_GET['t4'] == "ALL"){
		$qp = sprintf(" AND (`entry ID` LIKE '%%%s%%' OR `protein name` LIKE '%%%s%%' OR `coding gene name` LIKE '%%%s%%' OR `strain name` LIKE '%%%s%%')", 
		$_GET['s4'], $_GET['s4'], $_GET['s4'], $_GET['s4']);
		$query .= $qp;
	}
	if ($_GET['r4'] == "NOT" && $_GET['t4'] != "ALL"){
		$qp = sprintf(" AND `%s` NOT LIKE '%%%s%%'", $_GET['t4'], $_GET['s4']);
		$query .= $qp;
	}
	if ($_GET['r4'] == "OR" && $_GET['t4'] != "ALL"){
		$qp = sprintf(" OR `%s` LIKE '%%%s%%'", $_GET['t4'], $_GET['s4']);
		$query .= $qp;
	}
	if ($_GET['r4'] == "AND" && $_GET['t4'] != "ALL"){
		$qp = sprintf(" AND `%s` LIKE '%%%s%%'", $_GET['t4'], $_GET['s4']);
		$query .= $qp;
	}
}
if ($_GET['s5'] != ""){
	if ($_GET['r5'] == "NOT" && $_GET['t5'] == "ALL"){
		$qp = sprintf(" AND (`entry ID` NOT LIKE '%%%s%%' OR `protein name` NOT LIKE '%%%s%%' OR `coding gene name` NOT LIKE '%%%s%%' OR `strain name` NOT LIKE '%%%s%%')", 
		$_GET['s5'], $_GET['s5'], $_GET['s5'], $_GET['s5']);
		$query .= $qp;
	}
	if ($_GET['r5'] == "OR" && $_GET['t5'] == "ALL"){
		$qp = sprintf(" OR (`entry ID` LIKE '%%%s%%' OR `protein name` LIKE '%%%s%%' OR `coding gene name` LIKE '%%%s%%' OR `strain name` LIKE '%%%s%%')", 
		$_GET['s5'], $_GET['s5'], $_GET['s5'], $_GET['s5']);
		$query .= $qp;
	}
	if ($_GET['r5'] == "AND" && $_GET['t5'] == "ALL"){
		$qp = sprintf(" AND (`entry ID` LIKE '%%%s%%' OR `protein name` LIKE '%%%s%%' OR `coding gene name` LIKE '%%%s%%' OR `strain name` LIKE '%%%s%%')", 
		$_GET['s5'], $_GET['s5'], $_GET['s5'], $_GET['s5']);
		$query .= $qp;
	}
	if ($_GET['r5'] == "NOT" && $_GET['t5'] != "ALL"){
		$qp = sprintf(" AND `%s` NOT LIKE '%%%s%%'", $_GET['t5'], $_GET['s5']);
		$query .= $qp;
	}
	if ($_GET['r5'] == "OR" && $_GET['t5'] != "ALL"){
		$qp = sprintf(" OR `%s` LIKE '%%%s%%'", $_GET['t5'], $_GET['s5']);
		$query .= $qp;
	}
	if ($_GET['r5'] == "AND" && $_GET['t5'] != "ALL"){
		$qp = sprintf(" AND `%s` LIKE '%%%s%%'", $_GET['t5'], $_GET['s5']);
		$query .= $qp;
	}
}


$pageSize = 10;   //每页显示的数量
$rowCount = 0;   //要从数据库中获取
$pageNow = 1;    //当前显示第几页
 
//如果有pageNow就使用，没有就默认第一页。
if (!empty($_GET['pageNow'])){
  $pageNow = $_GET['pageNow'];
}
 
$pageCount = 0;  //表示共有多少页
 
$sql1="SELECT count(*)".$query;
$res1 = mysql_query($sql1);
 
if($row1=mysql_fetch_row($res1)){
  $rowCount = $row1[0];
}
 
//计算共有多少页，ceil取进1
$pageCount = ceil(($rowCount/$pageSize));
 
//使用sql语句时，注意有些变量应取出赋值。
$pre = ($pageNow-1)*$pageSize;





$qp = sprintf("limit %s, %s", $pre, $pageSize);
$query = "SELECT * ".$query.$qp;

$result = mysql_query($query,$conn); 

echo '<table width="500" border="1" class="altrowstable" id="alternatecolor">';
			echo '<tr><th>entry ID</th><th>protein name</th><th>gene name</th><th>strain name</th><th>amino acid sequence</th><th>sequence length</th></tr>';
			while ($row = mysql_fetch_array($result)) {
				echo '<tr>';
				echo '<td><a href=" '. $row['fasta link'].'" >'.$row['entry ID'] . '</a></td>';
				echo '<td><div style="width:130px;word-wrap:break-word;" >' .  $row['protein name']. '</div></td>';
				echo '<td>' .  $row['coding gene name']. '</td>';
				echo '<td><div style="width:180px;word-wrap:break-word;" ><a href="related.php?strain=' . $row['strain name'] . '">'. $row['strain name'].'</div></td>';
				echo '<td><div style="width:600px;word-wrap:break-word;" >' . $row['amino acid sequence'] . '</div></td>';
				echo '<td><div style="width:50px;word-wrap:break-word;" >' . $row['sequence length'] . '</div></td>';
				echo '</tr>';
			}
			echo '</table>';

			// if($pageNow>1){
			// 	$prePage = $pageNow-1;
			// 	echo "<a href='ribosomalProtein.php?pageNow=$prePage'>pre</a> ";
			//   }
			//   if($pageNow<$pageCount){
			// 	$nextPage = $pageNow+1;
			// 	echo "<a href='search_rp.php?pageNow=$nextPage'>next</a> ";
				
			// 	echo "当前页{$pageNow}/共{$pageCount}页";
			//   }
			//   echo "<br/><br/>";

			$QUERY_NAME = $_SERVER['QUERY_STRING'];
			$page_pos = strpos($QUERY_NAME, "&pageNow");
			if ($page_pos !== false){
				$QUERY_NAME = substr($QUERY_NAME, 0, $page_pos);
			}

			if($pageNow>1){
				$prePage = $pageNow-1;
				$PRE = sprintf("<a href='search_rp.php?%s&pageNow=%s'>pre</a> ", $QUERY_NAME, $prePage);
				echo $PRE;
			  }
			  if($pageNow<$pageCount){
				$nextPage = $pageNow+1;
				$NEXT = sprintf("<a href='search_rp.php?%s&pageNow=%s'>next</a> ", $QUERY_NAME, $nextPage);
				echo $NEXT;
				
				echo "Current page {$pageNow}/Total {$pageCount} pages";
			  }
			  echo "<br/><br/>";
			  
$FORM = '<form action="search_rp.php?'.$QUERY_NAME.'">';
$r1 = '<input type="hidden" name="r1", value="'.$_GET['r1'].'">';
$t1 = '<input type="hidden" name="t1", value="'.$_GET['t1'].'">';
$s1 = '<input type="hidden" name="s1", value="'.$_GET['s1'].'">';
$r2 = '<input type="hidden" name="r2", value="'.$_GET['r2'].'">';
$t2 = '<input type="hidden" name="t2", value="'.$_GET['t2'].'">';
$s2 = '<input type="hidden" name="s2", value="'.$_GET['s2'].'">';
$r3 = '<input type="hidden" name="r3", value="'.$_GET['r3'].'">';
$t3 = '<input type="hidden" name="t3", value="'.$_GET['t3'].'">';
$s3 = '<input type="hidden" name="s3", value="'.$_GET['s3'].'">';
$r4 = '<input type="hidden" name="r4", value="'.$_GET['r4'].'">';
$t4 = '<input type="hidden" name="t4", value="'.$_GET['t4'].'">';
$s4 = '<input type="hidden" name="s4", value="'.$_GET['s4'].'">';
$r5 = '<input type="hidden" name="r5", value="'.$_GET['r5'].'">';
$t5 = '<input type="hidden" name="t5", value="'.$_GET['t5'].'">';
$s5 = '<input type="hidden" name="s5", value="'.$_GET['s5'].'">';
echo <<<label
	$FORM
	$r1
	$t1
	$s1
	$r2
	$t2
	$s2
	$r3
	$t3
	$s3
	$r4
	$t4
	$s4
	$r5
	$t5
	$s5
	<input type="text" name="pageNow">
	<input type="submit" value="GO">
	</form>
label


?>
<!-- <form action="search_rp.php">
				<input type="text" name="pageNow">
				<input type="submit" value="GO">
			  </form> -->

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
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>