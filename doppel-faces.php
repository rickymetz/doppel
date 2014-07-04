		<?php
		if ($total == 0) {
			echo "img/doppel-egg.png";
		}
		if ($total > 0 && $total <= 20) {
			echo "img/doppel-sad-10.png";
		}
		if ($total > 20 && $total <= 45) {
			echo "img/doppel-normal-50.png";
		}
		if ($total > 45) {
			echo "img/doppel-happy-100.png";
		}
		?>