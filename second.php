<?php

	$age = 5;

	if ($age<18) {
		echo "alaealine";
		
	} else {
		echo "taisealine";
		
	}

?>

<br>

<?php

	//vanusele vastavalt 
	//trykime valja sona 'palju'
	
	for ( $i=1 ; $i <= $age ; $i= $i + 1) {
		
		echo $i."palju";
		
	}
	
	echo "onne!";
	

?>

<br>

<?php

	echo date("'l jS \of F Y h:i:s A'");



?>