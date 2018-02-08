<!DOCTYPE html>
<html>
	<head>

		<title>Jon Brown</title>
		<meta charset="utf-8">

	    <!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	</head>

	<body>

		<!-- php-->

		<?php

		$randomQuotes = array(
			"I have never let my schooling interfere with my education.",
			"Travel is fatal to prejudice, bigotry, and narrow-mindedness.",
			"If you tell the truth, you don't have to remember anything.",
			"The secret of getting ahead is getting started.",
			"Whenever you find yourself on the side of the majority, it is time to pause and reflect.",
			"The two most important days in your life are the day you are born and the day you find out why.",
			"The report of my death was an exaggeration.",
			"Truth is stranger than fiction, but it is because Fiction is obliged to stick to possibilities; Truth isn't.",
			"Golf is a good walk spoiled.",
			"It's not the size of the dog in the fight, it's the size of the fight in the dog."

		);

		?>

		<!-- end php-->

		<div class="container">
			<h1 class="text-center">Jon Brown</h1>

			<div class="row">
				<div class="span4"></div>
				<div class="span4">
					<img class="text-center" src='img/leafy.jpg' alt='Jon Brown'>	
				</div>
				<div class="span4"></div>
			</div>

			<div class="row">
				<div class="span2"></div>
				<div class="span8">

					<h2 class="text-center">About Me</h2>
					<p class="text-center">
						My name is Jon Brown. I have been building software applications for a good 7 years starting out with good Ol' C and objective C. From there, I have done web design to working with numerous API's my favorite html/css version of which being Twitter's Bootstrap. I have done a bit of back end web design with PHP in the past (so this should be a good time), courses and work in .NET, and in the recent past I have moved on the Apple side to Swift 3.
					</p>

					<br>

					<p class="text-center">
						I also love to write music and hope to someday cross both wires of music and software development. Maybe write algorithms that mimic the composition process (although that been done and not too successfully) or write programs to help musicians or engage music listeners.
					</p>

					
					<br>
					<blockquote>
						<h3>
							<?php echo $randomQuotes[mt_rand(0,count($randomQuotes)-1)]; ?>
						</h3>
					</blockquote>
					<br>
					<h4>- Mark Twain</h4>
					
				</div>
				<div class="span2"></div>
			</div>

		</div>

	</body>

</html>


