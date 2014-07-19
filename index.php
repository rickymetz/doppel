<?php include("header.php");?>

<div class="catchall">
	<div class="headsup animated fadeIn">
		<nav>
			<ul>
				<li><a href="/love.php">love</a></li>
				<li><a href="/">refresh</a></li>
			</ul>
		</nav>
		<div class="doppel-tomgatchi">
			<div class="doppel-image-container">
				<div class="doppel-image">
					<!-- php to find doppel's faces -->
					<img src="<?php include("doppel-faces.php");?>">
				</div>
			</div>
			<h1><span>Doppel</span> <?php include("doppel-descriptions.php"); echo " (" . round($total) . "%)"?></h1>
		</div>
		<div class="doppel-info">
			<!-- php to find the time Doppel's been alive for -->
			<h2><?php if ($seconds > 0){echo 'Alive for ' . secondsToTime($seconds);}?></h2>
		</div>	
	</div>		

	<div class="container">

		<!-- start -->
		<?php if ($total == 0){ ?>

		<a href="start.php?start=true">
		<div class="animated fadeInUp post vanish">
			<div id="myelement" class="category-container grow">
				<div class="category-name">
					<h1 class="category task">Hatch a new Doppel</h1>
					<h1 class="check">&#x2713;</h1>
				</div>
			</div>
		</div>
		</a>

		<?php } else { ?>
			<?php include("main.php");?>
		<?php } ?>

	</div>
</div>

<?php include("header.php");?>