<?php 
	function shortedText($text) {
		if (strlen($text) > 100) {
			$returned_text = "";
			for ($i = 0; $i < strlen($text) / 2; $i+=1) {
				$returned_text .= $text[$i];
			}
			return $returned_text." ...";
		}
	}
	$company_name = "ՀԱՅՔ";
	$small_logo_path = "images/logo_small.jpg";
	$about_us = "Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.";
	
 ?>