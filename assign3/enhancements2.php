<!--for my enchancements
		Timer For Apply Page :
			- around 15 minutes than send user to home page and gives timer alert error
		Slide Show on Home Page 
			- display games, can click on to view closer, as well as scroll game by game
-->
<!--References
https://www.w3schools.com/howto/howto_js_slideshow.asp - followed this template for mine, made only slight adjustments with design
https://www.w3schools.com/howto/howto_js_quotes_slideshow.asp
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="description" content="Assignment 1" >
  <meta name="keywords" content="Enhancement Description" >
  <meta name="author" content="Joshua Lillington-Moore"  >
  <title>Enhancements 2</title>
  <!-- References to external font 'Blade Runne Style Font' -->
  <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' >
  <!-- References to external font 'Fallout 3 Computer Style Font' -->
  <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' >
  <!-- References to external font 'Cyberpunk 2077 Font -->
  <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet' >
  <!-- References to external basic CSS file -->
  <link href= "styles/style.css" rel="stylesheet" >
</head>

<body>
	<?php
		include 'header.inc';
		include 'menu.inc';
	?>
<!-- briefly describe how it works, what a program has to do, provide a hyperlink to page where it is implemented, references on page-->
<main>
	<section class="job_listing">
		<div class="basic_info">
			<div class="job_description">
				<h2>Image Slide Show</h2>
			<div class="applybutton1">
			<a id="gotoenhancement1" href="index.html" >Go to the Enhancement</a> <!--refers user to the home page-->
			</div>
				<p>This enhancement is an image slideshow, on the index page, it allows users to use a back and next button to navigate a set on images. In order to program this, you need a variable that keeps track of the currently displayed slide, a function that +1 or -1 and updates the variable according to what is pressed. There also needs to be a function that gets the slide we want to go to, and sets the variable to that value so it can be displayed. The main work is done in the function that I have called showSlides. It retrieves the slides and dots (an array), it has loops which check to see if they are in a valid range, this allows it to go slide 1,2,3,1,2 etc. The explanation behind how it visually works is in the css and html comments, how the fading is done through opacity and animation as well as how to dots change due to their active class.</p>
			</div>
		</div>
		<div class="resp_qual">
			<div class="responsibilities">
				<h3>References </h3>
				<ul>
					<li><a href="https://www.w3schools.com/howto/howto_js_slideshow.asp"> How to JS Slideshow</a></li>
					<li><a href="https://www.w3schools.com/css/css_image_transparency.asp"> Transparency</a></li>
					<li><a href="https://www.w3schools.com/howto/howto_js_quotes_slideshow.asp"> Slideshow with Text</a></li>
				</ul>
			</div>
			</div>
	</section>
		<section class="job_listing">
		<div class="basic_info">
			<div class="job_description">
				<h2>Timer to Complete Form In</h2>
			<div class="applybutton2">
			<a id="gotoenhancement2" href="apply.html" >Go to the Enhancement</a> <!--refers user to the home page-->
			</div>
				<p>Did not finish.</p>
			</div>
		</div>
		<div class="resp_qual">
			<div class="responsibilities">
				<h3>References </h3>
				<ul>
					<li>Nil</a></li>
				</ul>
			</div>
			</div>
	</section>
	<?php
		include 'footer.inc';
	?>
</body>
</html>