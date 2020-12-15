<style type="text/css">
{
 margin: 0;
 padding: 0;
 border: 0;
 padding: 0;
}

header {
 position: relative;
 z-index: -1;
}

nav ul li {
 display: inline;
}

nav img,
nav ul {
 vertical-align: middle;
 text-align: center;
 margin:0 auto;
 margin-left: 120px;
 padding: 50px 0px 0px 0px;
}


nav a {
 text-decoration: none;
 color:#F37A21;
 position: relative;
 font-family: brother-1816-printed, sans-serif;
 font-weight: 400;
 font-style: normal;
 margin-right: 100px;

}
body {
  background-image: url('../images/concrete-wall.png');
  background-repeat: no-repeat;
}
.container {
  max-width: 900px;
  margin: 0 auto;
  text-align: center;

}
.top-rip {
  position: absolute;
}

.bottom-rip {
  bottom: 0;
  left: 0;
  position: fixed;
  text-align: center;
  width: 100%;

}
</style>

<header>
	<img class="top-rip" src="images/top-rip.png" alt="top-rip" title="top-rip"/>

	<div id="bg">
		<img src="images/concrete-wall2.png"
		alt="Background image">
	</div>
	<nav>
		<ul>
			<li><a href="index.html">HOME</a></li>
			<li><a href="about.html">ABOUT</a></li>
			<li><a href="art.html">ART</a></li>
			<li><a href="design.html">DESIGN</a></li>
			<li><a href="contact.html">CONTACT</a></li>
		</ul>
	</nav>
</header>

<div class="container">

	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
<footer>
	<img class="bottom-rip" src="images/bottom-rip.png" alt="footer" title="footer"/>
</footer>
