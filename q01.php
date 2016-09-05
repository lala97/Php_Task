<?php

//   Neticesi aşağıdakılar olan funksiya yazın

	/*
		ekranaYaz(); 								-->Boş
		ekranaYaz('salam'); 						-->arg1: salam
		ekranaYaz('salam', 'heci', 'necesen');		-->arg1: salam,arg2: heci,arg3: necesen


	*/

	function myFunc($arg) {
			for($i=0; $i<count($arg); $i++){

				if ($i==count($arg)-1){
					echo " arg".($i+1)." ".$arg[$i];
				}else{
				echo "arg".($i+1)." ".$arg[$i].",";
				}
			}

		}
		//myFunc(['Salam','Heci','Necesen']);
	myFunc(['Salam','Heci','Necesen']);

?>
