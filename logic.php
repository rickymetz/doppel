		<?php
		// Set the rate of seconds per percentage of bar. 864 makes the bar a day.
		$rate = 2;

		// This converts seconds to the days, hours, minutes, seconds format
		function secondsToTime($seconds) {
		    $dtF = new DateTime("@0");
		    $dtT = new DateTime("@$seconds");
		    return $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
		}

		// FOR INTELLIGENCE ================================================================
		// If the cookie "intelligence" exists, get its value.
		if (isset($_COOKIE['intelligence'])) {
			$cookie = json_decode( $_COOKIE[ "intelligence" ] );
			$expiry = $cookie->expiry;
			$intelligence = ($expiry - time())/$rate;
		}
		// Otherwise, set intelligence to 0
		else {
			$intelligence = 0;
		}
		// If url is set to 10, meaning the button has been clicked, then add 10 to the counter and set the cookie to that new value
		  if (isset($_GET['intelligence-add-10'])) {
		    $intelligence = $intelligence + 10;
		  }
		  if (isset($_GET['intelligence-add-20'])) {
		    $intelligence = $intelligence + 20;
		  }
		  if (isset($_GET['intelligence-add-30'])) {
		    $intelligence = $intelligence + 30;
		  }
			$expiry = time() + ($intelligence * $rate);
			$cookieData = (object) array( "expiry" => $expiry );
			setcookie( "intelligence", json_encode( $cookieData ), $expiry );

		// FOR CAREER ================================================================
		// If the cookie "intelligence" exists, get its value.
		if (isset($_COOKIE['career'])) {
			$cookie = json_decode( $_COOKIE[ "career" ] );
			$expiry = $cookie->expiry;
			$career = ($expiry - time())/$rate;
		}
		// Otherwise, set intelligence to 0
		else {
			$career = 0;
		}
		// If url is set to 10, meaning the button has been clicked, then add 10 to the counter and set the cookie to that new value
		  if (isset($_GET['career-add-10'])) {
		    $career = $career + 10;
		  }
		  if (isset($_GET['career-add-20'])) {
		    $career = $career + 20;
		  }
		  if (isset($_GET['career-add-30'])) {
		    $career = $career + 30;
		  }
			$expiry = time() + ($career * $rate);
			$cookieData = (object) array( "expiry" => $expiry );
			setcookie( "career", json_encode( $cookieData ), $expiry );

		// START ================================================================
		// First, check the total of everything thus far
			$total = ($intelligence + $career) / 2;
		// If start button has been clicked and the total of everything is 0
		  if (isset($_GET['start']) && $total == 0) {
		  	// Sets all values on the page to 50
		  	$intelligence = 50;
		  	$career = 50;
		  	// And sets the cookie expiry timer to 50
			$expiry = time() + (50 * $rate);
			$cookieData = (object) array( "expiry" => $expiry );
			// Applies expiry time above to all relevant cookies
			setcookie( "intelligence", json_encode( $cookieData ), $expiry );
			setcookie( "career", json_encode( $cookieData ), $expiry );
			setcookie( "doppel-local-test", 'hi', $expiry );
		// Now since we're starting, lets set a cookie as a timer to track how long the user's been playing
			$expiry = time() + (60 * 60 * 24 * 7 * 52 * 10); // timer will run for 10 years
			$cookieData = (object) array( "expiry" => $expiry, "timerStart" => time() );
			setcookie( "timer", json_encode( $cookieData ), $expiry );
		}

		// TOTAL ================================================================
		// Sets the total counter after all the logic has run
		$total = ($intelligence + $career) / 2;

		// TIMER ================================================================
		// Get info from the timer cookie; start time, end time, locked, and finally set the time
		if (isset($_COOKIE['timer']) && $total > 0) {
			$cookie = json_decode( $_COOKIE[ "timer" ] );
			$timerStart = $cookie->timerStart;
			$seconds = time() - $timerStart;
		}
		else {
			$seconds = 0;
		}
		?>