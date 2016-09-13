<?php 

for ($i=9,$j =1; $i <=($i*2)-1 ; $i--,$j+=2) { 
	for ($k=0; $k < $i; $k++) { 
		echo "&nbsp;&nbsp;";
		$num = 1;
	}

	for ($q=$j; $q!=0; $q--) { 

		if($q > $num) {
			echo $num;
		} else {
			echo $q;
		}
		$num++;

	}

	echo "<br>";
}

?>
