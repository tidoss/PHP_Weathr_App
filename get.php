<html>
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Weather Report of <?php echo $_GET['q']; ?> </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

</head>
<style>
</style>
<body>

<?php
error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
date_default_timezone_set($get['timezone']);
$city = $_GET['q'];
$string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=9da8fc9f5278faff6df04df30f41805c";
$data = json_decode(file_get_contents($string),true);

$temp = $data['main']['temp'];

$icon = $data['weather'][0]['icon'];
$visibility = $data['visibility'];
$visibilitykm = $visibility / 1000;
$country =  "<h1 class='w3-xxxlarge w3-animate-zoom'><b>".$data['name'].",".$data['sys']['country']."</h1></b>";

$logo = "<center><img src='http://openweathermap.org/img/w/".$icon.".png'></center>";
$desc = "<b><p>".$data['weather'][0]['description']."</p></b>";

$temperature =  "<b>Temp:".$temp."°C</b><br>";
$clouds = "<b>Clouds:".$data['clouds']['all']."%</b><br>";
$humidity = "<b>Humidity:".$data['main']['humidity']."%</b><br>";
$windspeed = "<b>Wind Speed:".$data['wind']['speed']."m/s</b><br>";
$pressure = "<b>Pressure:".$data['main']['pressure']."hpa</b><br>";
$visibility =  "<b>Visibility:".$visibilitykm."Km</b><br>";
$sunrise = "<b>Sunrise:".date('h:i A', $data['sys']['sunrise'])."</b><br>";
$sunset = "<b>Sunset:".date('h:i A', $data['sys']['sunset'])."</b>";

?>

<div class="w3-display-container w3-wide">
	<img style="width:100%;height:100%;" class="w3-image">
	<div class="w3-display-topmiddle w3-margin-top">
		<?php
		echo $country;
		echo $logo;
		echo "<center><h2>".$desc."</h1></center>";
		?>
	</div>

	<div class="w3-display-middle w3-margin-top w3-padding-top">
		<div class="w3-animate-left w3-margin-top"><br><br><br>
			<h1 class="w3-xlarge">
				<?php echo $temperature; ?>
				<?php echo $clouds; ?>
				<?php echo $humidity; ?>
				<?php echo $$windspeed; ?>
				<?php echo $pressure; ?>
				<?php echo $$visibility; ?>
				<?php echo $sunrise; ?>
				<?php echo $sunset; ?>
			</h2>
		</div>
	</div>
</div>

</body>
</html>
