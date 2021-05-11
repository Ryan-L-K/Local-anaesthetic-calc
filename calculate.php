<html lang="en">

	<head>
		<!--
		In the <head> tag, you may choose to load any files or other assets required for your page. You might also choose to set some page settings, such as the <title>.

		The text in here will not be visible in the user's browser.

		For now, let's put some settings in and load some files that I think are good for every beginner:
		-->

		<title>LA calculator</title>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Fenix&display=swap" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>


	<body>
		<!--
		The actual content of your web page belongs in here, in the <body> tag.
		
		Your code starts below here:
		-->
		<?php

			$weight = $_POST['weight'];
			$MaxLignodose = $weight * 3;
			$MaxLignoAdrendose = $weight *7;
			$MaxBupivacaine = $weight *2;
			$MaxLignoVolumen1 = $MaxLignodose*0.1;
			$MaxLignoVolumen2 = $MaxLignodose*0.05;
			$MaxLignoAdrenVol1 = $MaxLignoAdrendose*0.1;
			$MaxLignoAdrenVol2 = $MaxLignoAdrendose*0.05;
			$MaxBupiVol25 = $weight *0.8;
			$MaxBupiVol5 = $weight *0.4;
			?>

			<div class="main">
			<h1>Results</h1>
			<h3> This is NOT intended for clinical use.</h3>


			<div class="results">
		
			<h1><?php echo '1% Lignocaine  = ' .$MaxLignoVolumen1.'ml'; ?></h1>
			<h1><?php echo '2% Lignocaine  = ' .$MaxLignoVolumen2.'ml'; ?></h1>
			<h1><?php echo '1% Lignocaine with adrenaline   = ' .$MaxLignoAdrenVol1.'ml'; ?></h1>
			<h1><?php echo '2% Lignocaine with adrenaline   = ' .$MaxLignoAdrenVol2.'ml'; ?></h1>
			<h1><?php echo '0.25% bupivavaine (or equivalent)   = ' .$MaxBupiVol25.'ml'; ?></h1>
			<h1><?php echo '0.5% bupivavaine (or equivalent)   = ' .$MaxBupiVol5.'ml'; ?></h1>

			<p><?php echo 'Based on a weight of '.$weight.'kg'; ?>
 </p>



</div>
			
 </div>