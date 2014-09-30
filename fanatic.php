<?php

error_reporting(0);
@ini_set('display_errors', 0);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Super Fanatic</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script>

function initialize()
{
var srchterm = document.myform.q.value;
console.log (srchterm);
if(srchterm == "buf Buffalo Bills")
		{
			
			var lat = 42.77329;
			var lon = -78.78691;
		}
	if(srchterm == "mia Miami Dolphins")
		{
			var lat =25.95763 ;
			var lon = -80.23856;
		}	
	if(srchterm == "nwe New England Patriots")
		{
			var lat = 42.09090;
			var lon =-71.26436 ;
		}	
	if(srchterm == "nyj New York Jets")
		{
			var lat =40.81335;
			var lon =-74.07454;
		}	
	if(srchterm == "bal Baltimore Ravens")
		{
			var lat = 39.27791;
			var lon =-76.62277 ;
		}	
	if(srchterm == "cin Cincinnati Bengals")
		{
			var lat = 39.09520;
			var lon = -84.51617;
		}	
	if(srchterm == "cle Cleveland Browns")
		{
			var lat = 41.50588;
			var lon = -81.69957;
		}	
	if(srchterm == "pit Pittsburgh Steelers")
		{
			var lat = 40.44662;
			var lon = -80.01600;
		}	
	if(srchterm == "hou Houston Texans")
		{
			var lat =29.68470 ;
			var lon =-95.41077 ;
		}	
	if(srchterm == "ind Indianapolis Colts")
		{
			var lat = 39.75971;
			var lon = -86.16464;
		}	
	if(srchterm == " jac Jacksonville Jaguars")
		{
			var lat =30.32406 ;
			var lon =-81.63734 ;
		}	
	if(srchterm == "ten Tennessee Titans")
		{
			var lat =36.16621 ;
			var lon =-86.77141 ;
		}	
	if(srchterm == "den Denver Broncos")
		{
			var lat =39.74388 ;
			var lon =-105.02010 ;
		}
	if(srchterm == "kan Kansas City Chiefs")
		{
			var lat = 39.04879;
			var lon = -94.48422;
		}
	if(srchterm == "oak Oakland Raiders")
		{
			var lat =37.75172 ;
			var lon = -122.20050;
		}	
	if(srchterm == "sdg San Diego Chargers")
		{
			var lat =32.78295 ;
			var lon = -117.11984;
		}
	if(srchterm == "dal Dallas Cowboys")
		{
			var lat =32.74758 ;
			var lon =-97.09288;
		}	
	if(srchterm == "nyg New York Giants")
		{
			var lat =40.81335;
			var lon =-74.07454;
		}			
	if(srchterm == "phi Philadelphia Eagles")
		{
			var lat =39.90073 ;
			var lon = -75.16753;
		}		
	if(srchterm == "was Washington Redskins")
		{
			var lat =38.90753 ;
			var lon = -76.86447;
		}		
	if(srchterm == "chi Chicago Bears")
		{
			var lat =41.86227 ;
			var lon =-87.61674 ;
		}			
	if(srchterm == "det Detroit Lions")
		{
			var lat = 42.33983;
			var lon = -83.04565;
		}			
	if(srchterm == "gnb Green Bay Packers")
		{
			var lat =44.50128 ;
			var lon =-88.06229 ;
		}			
	if(srchterm == "min Minnesota Vikings")
		{
			var lat =44.97379 ;
			var lon = -93.25813;
		}			
	if(srchterm == "atl Atlanta Falcons")
		{
			var lat = 33.75781;
			var lon = -84.40122;
		}			
	if(srchterm == "car Carolina Panthers")
		{
			var lat =35.22563 ;
			var lon = -80.85274;
		}		
	if(srchterm == "nor New Orleans Saints")
		{
			var lat =29.95107 ;
			var lon =-90.08111 ;
		}		
	if(srchterm == "tam Tampa Bay Buccaneers")
		{
			var lat = 27.97583;
			var lon = -82.50329;
		}		
	if(srchterm == "ari Arizona Cardinals")
		{
			var lat =33.52731;
			var lon =-112.26226;
		}		
	if(srchterm == "sfo San Francisco 49ers")
		{
			var lat = 37.71336 ;
			var lon = -122.38624;
		}		
	if(srchterm == "sea Seattle Seahawks")
		{
			var lat = 47.59517 ;
			var lon =-122.33165 ;
		}		
	if(srchterm == "stl St. Louis Rams")
		{
			var lat =38.63256 ;
			var lon =-90.18840 ;
		}

var mapProp = {
  center:new google.maps.LatLng(lat,lon),
  zoom:16,
  mapTypeId:google.maps.MapTypeId.SATELLITE
  };
var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);

$(document).ready(function(){
  
  $("#Map").hide();
  $("#stub").hide();
  $("#yahoo").hide();
  $("#tube").hide();
 $("#news").click(function(){
    $("#yahoo").show();
	$("#Map").hide();
	$("#stub").hide();
	$("#tube").hide();
	$("#info").hide();
	
  });
   $("#stadium").click(function(){
    $("#Map").show();
	$("#stub").hide();
	$("#yahoo").hide();
	$("#tube").hide();
	$("#info").hide();
	//var center = new google.maps.LatLng(lat,lon)
	google.maps.event.trigger($("#googleMap")[0], 'resize');
	//map.center(center);

	
	

  });
   $("#schedule").click(function(){
    $("#stub").show();
	$("#Map").hide();
	$("#yahoo").hide();
	$("#tube").hide();
	$("#info").hide();
  });
   $("#videos").click(function(){
    $("#tube").show();
	$("#Map").hide();
	$("#stub").hide();
	$("#yahoo").hide();
	$("#info").hide();
  });
});

</script>

<style>
body,html {

	margin-left: auto;
    margin-right: auto;
	
	width:100%;
	height:100%;
	background-color:#ADADAD;
   
}





#newstitle {
	
	
}
#googleMap {

	
}
#stubhub {
	
	
}

#time {
	
}
#rss {
	
	

}
#rssdesc {
	
}
#rsstitle {
	
}
#googleMap{
margin-left:auto;
margin-right:auto;
display:block;
margin-top:20px;

}
#yahoo{
width:600px;
margin-left:auto;
margin-right:auto;

}

#stub{
width:600px;
margin-left:auto;
margin-right:auto;
margin-top:20px;
}


#youtube {
	
	width:750px;
	display:block;
	margin:auto;
	padding-top:20px;
}
#thumbmnail{

}
#header{

width:850px;
height:100px;
background-color:#ff0000;
margin:0 auto;

border-top-style:solid;
border-color:#ff0000;

}
#con{
min-height:100%;
width:850px;
background-color:#ffffff;
margin-top:-20px;
margin-left:auto;
margin-right:auto;
box-shadow: 8px 0px 5px -5px #999, -8px 0px 5px -5px #999;
}
h1{
color:#ffffff;
font-size:50px;
font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
padding-left:5px;
font-variant:small-caps;
}
h2{
color:#000000;
font-size:30px;
font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
padding-left:5px;


}
.nav{

    border:2px solid #585a5d;
    border-width:3px 0;
    list-style:none;
    margin-left:auto;
	margin-right:auto;
	margin-top:-43px;
    padding:0;
    text-align:center;
	background-color:#FF0000;
	font-size:20px;
	width:650px;
	padding-left:200px;
	height:32px;
	 box-shadow: 0 4px 4px -2px #232323;
    -moz-box-shadow: 0 4px px -2px #232323;
    -webkit-box-shadow: 0 4px 4px -2px #232323;
}
.nav li{
    display:inline;
	padding:0;
	
	
}
.nav a{
    display:inline-block;
   
}
#q{
margin-top:-30px;
padding-left:20px;
}
button{

color:#FFFFFF;
font-weight:bold;
width:80px;
height:32px;
background-color:#ff0000;
border-style:solid;
border-color:#ff0000;

}
button:hover{

background-color:#ffffff;
color:#ff0000;
border-style:solid;
border-color:#ffffff;
cursor:pointer;

}
th{
background-color:#000000;
color:#ffffff;

}
table{
border-style:solid;
border-color:#000000;

}

tr:nth-child(even) {background: #ADADAD;}
tr:nth-child(odd) {background: #FFF;}
p{
margin-top:40px;
text-align:center;
font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;


}
</style>
</head>
<body>
<div id="con">
<div id="header">
<h1>Superfanatic</h1>

<ul class="nav">
  <li><button id="news">News</button></li>
	 <li><button id="stadium">Stadiums</button></li>
	  <li><button id="videos">Videos</button></li>
	   <li><button id="schedule">Tickets</button></li>
</ul>
</div>	
   

  

<div id="topbanner"></div>

<div id="top">
<div>
<form action="" method="get" name="myform" >
<select id="q" name="q">
<option value="" disabled="disabled" selected="selected">Choose a team</option>
<option value="ari Arizona Cardinals" <?php if($_GET['q'] == 'ari Arizona Cardinals'){ echo 'selected="selected"';} ?>>Arizona Cardinals</option>
<option value="atl Atlanta Falcons" <?php if($_GET['q'] == 'atl Atlanta Falcons'){ echo 'selected="selected"';} ?>>Atlanta Falcons</option>
<option value="bal Baltimore Ravens" <?php if($_GET['q'] == 'bal Baltimore Ravens'){ echo 'selected="selected"';} ?>>Baltimore Ravens</option>
<option value="buf Buffalo Bills" <?php if($_GET['q'] == 'buf Buffalo Bills'){ echo 'selected="selected"';} ?>>Buffalo Bills</option>
<option value="car Carolina Panthers" <?php if($_GET['q'] == 'car Carolina Panthers'){ echo 'selected="selected"';} ?>>Carolina Panthers</option>
<option value="chi Chicago Bears" <?php if($_GET['q'] == 'chi Chicago Bears'){ echo 'selected="selected"';} ?>>Chicago Bears</option>
<option value="cin Cincinnati Bengals" <?php if($_GET['q'] == 'cin Cincinnati Bengals'){ echo 'selected="selected"';} ?>>Cincinnati Bengals</option>
<option value="cle Cleveland Browns" <?php if($_GET['q'] == 'cle Cleveland Browns'){ echo 'selected="selected"';} ?>>Cleveland Browns</option>
<option value="dal Dallas Cowboys" <?php if($_GET['q'] == 'dal Dallas Cowboys'){ echo 'selected="selected"';} ?>>Dallas Cowboys</option>
<option value="den Denver Broncos" <?php if($_GET['q'] == 'den Denver Broncos'){ echo 'selected="selected"';} ?>>Denver Broncos</option>
<option value="det Detroit Lions" <?php if($_GET['q'] == 'det Detroit Lions'){ echo 'selected="selected"';} ?>>Detroit Lions</option>
<option value="gnb Green Bay Packers" <?php if($_GET['q'] == 'gnb Green Bay Packers'){ echo 'selected="selected"';} ?>>Green Bay Packers</option>
<option value="hou Houston Texans" <?php if($_GET['q'] == 'hou Houston Texans'){ echo 'selected="selected"';} ?>>Houston Texans</option>
<option value="ind Indianapolis Colts" <?php if($_GET['q'] == 'ind Indianapolis Colts'){ echo 'selected="selected"';} ?>>Indianapolis Colts</option>
<option value="jac Jacksonville Jaguars" <?php if($_GET['q'] == 'jac Jacksonville Jaguars'){ echo 'selected="selected"';} ?>>Jacksonville Jaguars</option>
<option value="kan Kansas City Chiefs" <?php if($_GET['q'] == 'kan Kansas City Chiefs'){ echo 'selected="selected"';} ?>>Kansas City Chiefs</option>
<option value="mia Miami Dolphins" <?php if($_GET['q'] == 'mia Miami Dolphins'){ echo 'selected="selected"';} ?>>Miami Dolphins</option>
<option value="min Minnesota Vikings" <?php if($_GET['q'] == 'min Minnesota Vikings'){ echo 'selected="selected"';} ?>>Minnesota Vikings</option>
<option value="nwe New England Patriots" <?php if($_GET['q'] == 'nwe New England Patriots'){ echo 'selected="selected"';} ?>>New England Patriots</option>
<option value="nor New Orleans Saints" <?php if($_GET['q'] == 'nor New Orleans Saints'){ echo 'selected="selected"';} ?>>New Orleans Saints</option>
<option value="nyg New York Giants" <?php if($_GET['q'] == 'nyg New York Giants'){ echo 'selected="selected"';} ?>>New York Giants</option>
<option value="nyj New York Jets" <?php if($_GET['q'] == 'nyj New York Jets'){ echo 'selected="selected"';} ?>>New York Jets</option>
<option value="oak Oakland Raiders" <?php if($_GET['q'] == 'oak Oakland Raiders'){ echo 'selected="selected"';} ?>>Oakland Raiders</option>
<option value="phi Philadelphia Eagles" <?php if($_GET['q'] == 'phi Philadelphia Eagles'){ echo 'selected="selected"';} ?>>Philadelphia Eagles</option>
<option value="pit Pittsburgh Steelers" <?php if($_GET['q'] == 'pit Pittsburgh Steelers'){ echo 'selected="selected"';} ?>>Pittsburgh Steelers</option>
<option value="sdg San Diego Chargers" <?php if($_GET['q'] == 'sdg San Diego Chargers'){ echo 'selected="selected"';} ?>>San Diego Chargers</option>
<option value="sfo San Francisco 49ers" <?php if($_GET['q'] == 'sfo San Francisco 49ers'){ echo 'selected="selected"';} ?>>San Francisco 49ers</option>
<option value="sea Seattle Seahawks" <?php if($_GET['q'] == 'sea Seattle Seahawks'){ echo 'selected="selected"';} ?>>Seattle Seahawks</option>
<option value="stl St. Louis Rams" <?php if($_GET['q'] == 'stl St. Louis Rams'){ echo 'selected="selected"';} ?>>St. Louis Rams</option>
<option value="tam Tampa Bay Buccaneers" <?php if($_GET['q'] == 'tam Tampa Bay Buccaneers'){ echo 'selected="selected"';} ?>>Tampa Bay Buccaneers</option>
<option value="ten Tennessee Titans" <?php if($_GET['q'] == 'ten Tennessee Titans'){ echo 'selected="selected"';} ?>>Tennessee Titans</option>
<option value="was Washington Redskins" <?php if($_GET['q'] == 'was Washington Redskins'){ echo 'selected="selected"';} ?>>Washington Redskins</option>
</select>
<input type="submit" value="Submit"  >
</form>
</div>
<div id="info">
<p> To start select an NFL team, then choose News,Stadiums, Videos, or Tickets for for info on them.</p>
</div>
<div id="Map">
<h2>Google Map view of Stadium</h2>
<div id="googleMap" style="width:500px;height:500px;"></div>
</div>







 <!-- STUB HUB-->
 <div id="stub">
 <h2> Find tickets using stubhub </h2>
 <?php
	// Keywords from Query String
	error_reporting(E_PARSE);
	
	$getq = $_GET['q'];
	$srchterm = substr($getq, 4, strlen($getq));
	$searched_lower = strtolower($srchterm);
	$searched = strtoupper($searched_lower);
	$searchedURL = urlencode($searched); 
	
	$endpoint_stubhub = "http://publicfeed.stubhub.com/listingCatalog/select/";
	
	if(!empty($_GET['ancestorDescriptions'])){
		$ancestorDescriptions = $_GET['ancestorDescriptions'];
	}elseif(empty($_GET['ancestorDescriptions'])){
		$ancestorDescriptions = '';
	}
	
	if(!empty($_GET['sort_what'])){
		$sort_what = $_GET['sort_what'];
	}elseif(empty($_GET['sort_what'])){
		$sort_what = 'event_date_time_local';
	}
	
	if(!empty($_GET['sort_how'])){
		$sort_how = $_GET['sort_how'];
	}elseif(empty($_GET['sort_how'])){
		$sort_how = 'asc';
	}
	
	// StubHub API Query - JSON Response
	$url = "$endpoint_stubhub?q=%252BstubhubDocumentType%253Aevent%250D%250A%252B"
			. "%2Bleaf%253A%2Btrue%250D%250A%252B"
			. "%2Bdescription%253A%2B%22$searchedURL%22%250D%250A%252B"
			. "%3B$sort_what%20$sort_how"
			. "&version=2.2"
			. "&start=0"
			. "&indent=on"
			. "&wt=json"
			. "&fl=description+event_date+event_date_local+event_time_local+geography_parent+venue_name+city+state+genreUrlPath+urlpath+leaf+channel";
	
	
	// Send Request
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_REFERER, "http://people.rit.edu/jjw9765/432/p2/fanatic.php");
	$body = curl_exec($ch);
	
	curl_close($ch);
	
	// Process JSON string - Convert JSON to PHP Array
	$json = json_decode($body);
		
	// Number of Returned Results
	$num = $json->response->numFound;
	$results_events = '';

	function contains($str, $content, $ignorecase=true){
		if ($ignorecase){
			$str = strtolower($str);
			$content = strtolower($content);
		}  
		return strpos($content,$str) ? true : false;
	}
							
		if ($num > 0){
			// Today's timestamp date
			$today = date('c');
			// Results Loop 
			$i = 0;
			while ($i<$num) {
				// Filter out results with event title "mirror" - StubHub API anomaly
				if(strstr($json->response->docs[$i]->description,"mirror") == false){
				// Filter out results with event title "coming soon" - StubHub API anomaly
				if(strstr($json->response->docs[$i]->description,"coming soon") == false){
				// Filter out results with event title "posted here" - StubHub API anomaly
				if(strstr($json->response->docs[$i]->description,"posted here") == false){
				// Filter out results with event date earlier than today
				if ($json->response->docs[$i]->event_date_local >= $today)
				{
				if(substr($json->response->docs[$i]->description, 0, 7) != "PARKING" && substr($json->response->docs[$i]->description, strlen($json->response->docs[$i]->description) - 1, strlen($json->response->docs[$i]->description)) != ")" && substr($json->response->docs[$i]->description, strlen($json->response->docs[$i]->description) - 6, strlen($json->response->docs[$i]->description)) != "PASSES")
				{
				// Result format with JSON variables
				$results_events .= "
					<tr>\r\n
						<td valign=\"top\"><a href='http://www.stubhub.com/". $json->response->docs[$i]->urlpath ."'>" . $json->response->docs[$i]->description . "</a></td>\r\n
						<td valign=\"top\">".date("F j, Y", strtotime($json->response->docs[$i]->event_date_local))."</td>\r\n
						<td valign=\"top\">".$json->response->docs[$i]->venue_name."</td>
						<td valign=\"top\">".$json->response->docs[$i]->city.", ".$json->response->docs[$i]->state."</td>\r\n
					</tr>\r\n";
				}
				}
				}
				}
				}
			// Loop continuance - finite
			$i++;
			}
			}elseif ($num == 0){
				$results_events .= "
					<tr>\r\n
						<td>There are currently no events listed for your query.</td>\r\n
					</tr>\r\n";
			}
?>
<div id="stubhub">
<table width="600" cellspacing="0" cellpadding="2">
	<thead height="35px" >
    	<th width="400" align="left">Upcoming Games</th>
        <th width="200" align="left">Date</th>
        <th width="250" align="left">Stadium</th>
        <th width="200" align="left">Location</th>
    </thead>
	<?=$results_events?>
</table>
</div>

 <!-- Twitter -->


</div>
</div>
<div id="yahoo">
<!-- Yahoo Sports RSS -->
<h2>Latest News from yahoo sports RSS </h2>
<?php
	echo "<div id='rss'>";
	$getq = $_GET['q'];
	$srchterm = substr($getq, 0, 3);
	$urlthis = "http://sports.yahoo.com/nfl/teams/" . $srchterm . "/rss.xml";
	$rss = new DOMDocument();
	$rss->load($urlthis);
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 5;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		echo '<p><div id="rsstitle"><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</div></a></strong><br />';
		echo '<small><em>Posted on '.$date.'</small></em></p>';
		echo '<div id="rssdesc"><p>'.$description.'</div></p>';
	}
	echo "</div>";
	
?>
</div>

<div id="tube">
<h2>Latest videos from Youtube</h2>
<!--YOUTUBE -->
<?php
	echo "<div id='youtube'>";
    require_once dirname(__FILE__).'/youtube.lib.php';
	
	$getq = $_GET['q'];
	$srchterm = substr($getq, 4, strlen($getq));

    $yt = new Youtube(array('user' => 'google', 'limit' => 4));
	$videos = $yt->searchForVideos( array('search' => $srchterm, 'limit' => 4) );

    foreach ($videos as $i => $video) 
	{
        $embed = $yt->getEmbedHTML($video); 
		
	?>
<span class="thumbnail">
<?php echo $embed; ?>
</span>
<?php
    }
	echo "</div>";
?>
</div>
</div>
</body>
</html>