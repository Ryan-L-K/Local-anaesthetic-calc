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
	<div class="main">
			<h1>Welcome to the local anaesthetic calculator</h1>
			<h3> This is a LA dose calculator local anaesthetic operations.
			<h3>Enter your patient's weight, and hit "Calculate" to receive the dose for lignocaine and bupivacaine.</h3> 
			<h4> This is NOT intended for clinical use.</h4>

		
	<form method="POST" action="calculate.php">	
	
		<div class="input-section">
			<h3>Weight (Kg)</h3>
			<input type="number" name="weight" required>
		</div>

		<div class="input-section">
			<button type="submit">Calculate</button>
		</div>

	</form>

	</body>

</html>