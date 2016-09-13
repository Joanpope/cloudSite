<?php 
$num = 1;
for ($i=9,$j =1; $i <=($i*2)-1 ; $i--,$j+=2) { 
	for ($k=0; $k < $i; $k++) { 
		echo "&nbsp;&nbsp;";
	}

	for ($q=$j; $q!=0; $q--) { 

		if($q > $num) {
			echo $num;
		} else {
			echo $q;
		}
		$num++;

	}
	$num = 1;

	echo "<br>";
}
for ($i=1,$j=18; $i >=($i/2) ; $i++,$j-=2) { 
	
	for ($k=0; $k < $i; $k++) { 
		echo "&nbsp;&nbsp;";
	}

	for ($q=($j-1); $q >= 0; $q--) { 

		if($q >= $num) {
			echo $num;
		} elseif ($q==0) {
			break;
		} else {
			echo $q;
		}
		$num++;

	}
	$num = 1;

	echo "<br>";
}

?>
