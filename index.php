<!DOCTYPE html>
<html>
<head>
	<title>LED controll</title>
	<style type="text/css">
		.a1{
			  background-color: #f44336;
			  color: blue;
			  padding: 14px 42px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			}
		.a2{
			  background-color: yellow;
			  color: blue;
			  padding: 14px 25px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			}
		.a3{
			  background-color: green;
			  color: blue;
			  padding: 14px 34px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  margin-bottom: 50px;
			}	
		a:hover{
  				color: black;
			}
		.center{
			text-align: center;
		}
		.left{
			text-align: right;
			font-size: 30px;
			padding-top: 100px;
		}
		.box{
			text-align: center;
			border:5px solid black;
			padding: 50px;
		}
	</style>
</head>
<body>
	<h1 class="center">HERE YOU CAN CONTROLL YOUR LED</h1>
	<div class="center">
		<p>TURN ON RED LED:</p>
		<a href="project_php1.php?state=1" class="a1">RED</a>
	</div>
	<div class="center">
		<p>TURN ON YELLOW LED:</p>
		<a href="project_php1.php?state=2" class="a2">YELLOW</a>
	</div>
	<div class="center">
		<p>TURN ON GREEN LED:</p>
		<a href="project_php1.php?state=3" class="a3">GREEN</a>
	</div>
	<div class="box">
		<?php
  		$file2= fopen("abc","r");
  		$read=fread($file2,filesize("abc"));
    	$array=explode("\n",$read);
    	foreach($array as $i)
    	echo "<br>".$i."</br>";
    	fclose($file2);
		?>
	</div>
	<footer class="left">&copy;Sabarna</footer>
</body>
</html>
