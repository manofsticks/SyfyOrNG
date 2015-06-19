<html>
<head>
<title>
Syfy or NG
</title>
<link href="game.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">

	//creates the initial score variable
	var score = 0; 

	//array that contains each question that will be true if the user clicks the "syfy" button
	var syfys = [3, 5, 7, 8]; 

		
	var jq = jQuery.noConflict();
	jq(document).ready(function(){


<?php
//for loop to add jquery for each button
for ($number = 0; $number < 11; $number++){
echo '
	jq("button#syfy' . $number . '").click(function() {
			jq("div#answersyfy' . $number . '").fadeIn(1500);
			jq("div#answerng' . $number . '").hide();
			jq("button#syfy' . $number .'").hide();
			jq("button#ng' . $number . '").hide();
			jq("div#nextlevel' . $number . '").fadeIn(1500);
			if (jQuery.inArray(' . $number . ', syfys)!==-1){
				score = score + 1;
				document.getElementById("score").innerHTML = score;
			}
		});
		
	jq("button#ng' . $number . '").click(function() {
			jq("div#answerng' . $number . '").fadeIn(1500);
			jq("div#answersyfy' . $number . '").hide();
			jq("button#syfy' . $number .'").hide();
			jq("button#ng' . $number. '").hide();
			jq("div#nextlevel' . $number . '").fadeIn(1500);
			if (jQuery.inArray(' . $number . ', syfys)==-1){
				score = score + 1;
				document.getElementById("score").innerHTML = score;
				}
		});
		
	jq("button#new' . $number . '").click(function(){
			jq("div#question' . ($number + 1) . '").show();
			jq("div#question' . $number . '").hide();
			jq("div#nextlevel' . $number . '").hide();
		});

	';

}


?>

					});
</script>
</head>
<body>

<?php
$title1 = "Ultimate Crocodile";
$picture1 = "croc.jpg";

$title2 = "Tornado Intercept";
$picture2 = "tornado.jpg";

$title3 = "Anacondas: Trail of Blood";
$picture3 = "anaconda.jpg";

$title4 = "Super Chopper";
$picture4 = "chopper.jpg";

$title5 = "Beyond Loch Ness";
$picture5 = "loch.jpg";

$title6 = "Bear Island";
$picture6 = "bear.jpg";

$title7 = "Shark Swarm";
$picture7 = "sharkswarm.jpg";

$title8 = "Caved In: Prehistoric Terror";
$picture8 = "caved.jpg";

$title9 = "Thunderbeast";
$picture9 = "thunder.jpg";

$title10 = "Sky Monsters";
$picture10 = "sky.jpg";



?>
<!-- beginning of game -->
<div id="question0">
<h1>Welcome to the "National Geographic OR Syfy Original" Game!</h1>
<p>The goal is simple: You will be given a movie title, and must guess if it is a Syfy Original, or National Geographic episode!</p>
<p>No cheating!</p>
<button id="new0">Start!</button>

</div>

<?php
for ($content = 1; $content < 11; $content++){
	echo '<!-- QUESTION ' . $content . '-->
	<div id="question' . $content . '" style="display:none">
	<h1>QUESTION ' . $content . '</h1>
	
	<h3>Title: "' .  ${'title' . $content} . '"</h3>
	
	<button id="syfy' . $content . '">Syfy Original</button>
	<button id="ng' . $content . '">National Geographic</button>
	
	
	<div id="answersyfy' . $content . '" style="display:none"><img src="images/' . ${'picture' . $content} . '" height="500" width="341">
	
	<script>if (jQuery.inArray(' . $content . ', syfys)!==-1){
			document.write("<br /><h1>You clicked Syfy: Correct!</h1>");
		}else {
			document.write("<br /><h1>You clicked Syfy: Incorrect!</h1>");
			}</script>';
		
	echo'</div>';
	 	

	
	echo'<div id="answerng' . $content . '" style="display:none"><img src="images/' . ${'picture' . $content} . '" height="500" width="341">
	
	<script>if (jQuery.inArray(' . $content . ', syfys)!==-1){
			document.write("<br /><h1>You clicked NG: Incorrect!</h1>");
		}else {
			document.write("<br /><h1>You clicked NG: Correct!</h1>");
		}</script>';
		echo '</div>';
	
		echo '</div>';
	
		if ($content != 11){
			echo '<div id="nextlevel' . $content .'" style="display:none">
			<button id="new' . $content . '">Next</button></div>';
		}

	}

?>

<!--Thanks-->
<div id="question11" style="display:none">
<h1>Thanks for playing!</h1>
<br /><br /><br />
<h2>Your score is: <div id = "score">0</div></h2>
</div>

</body>


</html>
