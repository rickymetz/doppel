<?php include("header.php");?>

<div class="catchall sub">
	<div class="headsup animated fadeIn">
		<nav>
			<ul>
				<li><a href="/">back</a></li>
			</ul>
		</nav>
		<div class="doppel-tomgatchi">
			<div class="doppel-image-container">
				<div class="doppel-image">
					<h1><?php echo round($intelligence) . "%";?></h1>
				</div>
			</div>
			<h1><span>Intelligence</span></h1>
		</div>
		<div class="doppel-info">
			<h2>Your <span>Intelligence</span> <?php $total = $intelligence; include("doppel-descriptions.php");?></h2>
		</div>	
	</div>		

	<div class="container">

		<!--Individual category type start-->
		<a href="intelligence.php?intelligence-add-10=true">
		<div class="animated fadeInUp post vanish">
			<div id="myelement" class="category-container grow">
				<div class="category-name">
					<h1 class="category task">Read a book for like 30 min (+10)</h1>
					<h1 class="check">&#x2713;</h1>
				</div>
			</div>
		</div>
		</a>
		<!--Individual category type end-->	

		<!--Individual category type start-->
		<a href="intelligence.php?intelligence-add-20=true">
		<div class="animated fadeInUp post vanish">
			<div id="myelement" class="category-container grow">
				<div class="category-name">
					<h1 class="category task">Practice the location of all the countries in the world (+20)</h1>
					<h1 class="check">&#x2713;</h1>
				</div>
			</div>
		</div>
		</a>
		<!--Individual category type end-->	

		<!--Individual category type start-->
		<a href="intelligence.php?intelligence-add-30=true">
		<div class="animated fadeInUp post vanish">
			<div id="myelement" class="category-container grow">
				<div class="category-name">
					<h1 class="category task">Watch a Documentary (+30)</h1>
					<h1 class="check">&#x2713;</h1>
				</div>
			</div>
		</div>
		</a>
		<!--Individual category type end-->	

	</div>
</div>

<?php include("footer.php");?>