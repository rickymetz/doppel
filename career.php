<?php include("header.php");?>

<div class="catchall">
	<a href="/">back</a>
	<div class="headsup animated fadeIn">
		<div class="doppel-tomgatchi">
			<div class="doppel-image-container">
				<div class="doppel-image">
					<h1><?php echo round($career) . "%";?></h1>
				</div>
			</div>
			<h1><span>Career</span></h1>
		</div>
		<div class="doppel-info">
			<h2>Your <span>Career</span> <?php $total = $career; include("doppel-descriptions.php");?></h2>
		</div>	
	</div>		

	<div class="container">

		<!--Individual category type start-->
		<a href="career.php?career-add-10=true">
		<div class="animated fadeInUp post vanish">
			<div id="myelement" class="category-container grow">
				<div class="category-name">
					<h1 class="category task">Message someone on LinkedIn to catch up (+10)</h1>
					<h1 class="check">&#x2713;</h1>
				</div>
			</div>
		</div>
		</a>
		<!--Individual category type end-->	

		<!--Individual category type start-->
		<a href="career.php?career-add-20=true">
		<div class="animated fadeInUp post vanish">
			<div id="myelement" class="category-container grow">
				<div class="category-name">
					<h1 class="category task">Send in your Resume (+20)</h1>
					<h1 class="check">&#x2713;</h1>
				</div>
			</div>
		</div>
		</a>
		<!--Individual category type end-->	

		<!--Individual category type start-->
		<a href="career.php?career-add-30=true">
		<div class="animated fadeInUp post vanish">
			<div id="myelement" class="category-container grow">
				<div class="category-name">
					<h1 class="category task">Go to an interview (+30)</h1>
					<h1 class="check">&#x2713;</h1>
				</div>
			</div>
		</div>
		</a>
		<!--Individual category type end-->	

	</div>
</div>

<?php include("footer.php");?>