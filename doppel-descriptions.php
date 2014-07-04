		<?php
		if ($total == 0) {
			echo "";
		}
		if ($total > 0 && $total <= 10) {
			echo "is almost dead.";
		}
		if ($total > 10 && $total <= 20) {
			echo "isn't looking too hot.";
		}
		if ($total > 20 && $total <= 30) {
			echo "could be better.";
		}
		if ($total > 30 && $total <= 40) {
			echo "is okay.";
		}
		if ($total > 40 && $total <= 50) {
			echo "is pretty good.";
		}
		if ($total > 50 && $total <= 60) {
			echo "is feeling great!";
		}
		if ($total > 60 && $total <= 70) {
			echo "is fantastic!";
		}
		if ($total > 70 && $total <= 80) {
			echo "is superb!";
		}
		if ($total > 80 && $total <= 90) {
			echo "is feeling like a million bucks!";
		}
		if ($total > 90 && $total <= 100) {
			echo "feels like he's riding a unicorn into deep space!";
		}
		if ($total >= 100) {
			echo "has become the cosmos.";
		}
		?>