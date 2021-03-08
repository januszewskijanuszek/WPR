<?php
	function star_txt($input){
		for($i = 0 ; $i < strlen($input); $i++){
			echo("*");
		}
	}
	$arr_banned_words = ["kamien", "klops", "makaron"];
	$user_word = strtolower("makaron");
	foreach($arr_banned_words as $chata){
		if($user_word == $chata){
			star_txt($chata);
		}
	}
?>