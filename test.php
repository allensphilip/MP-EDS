<?php
	function console_log($msg) {
		echo '<script>' .
          'console.log("'.$msg .' ")</script>';
	}

	console_log("Hi there!");
?>