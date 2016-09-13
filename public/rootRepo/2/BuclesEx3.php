<?php 
	echo "<form action= " . $_SERVER['PHP_SELF']. " method='POST'>";
	echo "Numero:  <input type='text' name='num' /><br />";
	echo "<input type='submit' name='submit' value='Submit me!' />";
	echo "</form>";

	if (isset($_POST['num'])) {

		$numMax = $_POST['num'];
		$numeros = array();
		for ($i=0; $i < $numMax+1; $i++) { 
			for ($j=0; $j < $numMax+1;$j++) {
				 if (($i*$j)==$numMax) {
				 	$numeros[] = $i;
				 }
			}
		}
		echo "els numeros son: ";
		for ($i=0; $i < count($numeros); $i++) { 
			echo $numeros[$i] . ", "; 
		}

	}

?>
