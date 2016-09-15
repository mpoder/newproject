<?php

	$age = 99;

	if ($age < 18) {

		echo "You're too young gurl";
	
	} else {
	
		echo "You're old enough to be called a [censored].";
	}

?>

<br>

<?php

	for ($i = 0; $i < $age; $i = $i + 1) {
	echo ($i+1).'Palju ';
	}
	echo "õnne!"
?>

<br>

<?php
echo date("j.m.Y G:i:s")
?>
