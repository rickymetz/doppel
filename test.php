<?php echo time(); ?>

<?php
		$first_name = 'I see that you are back!';
		setcookie('first_name',$first_name,time() + 10); // 86400 = 1 day

		echo 'Hello, '.($_COOKIE['first_name']!='' ? $_COOKIE['first_name'] : 'I see it is your first time here!'); // Hello Ben!
		
?>