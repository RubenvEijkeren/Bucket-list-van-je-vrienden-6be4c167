<<?php 
	echo "Hoeveel vrienden zal ik vragen om hun droom?\n";
	$aantal = rtrim(fgets(STDIN));
	if (!(is_numeric($aantal))){
		echo "Dat is geen nummer\n";
		exit;
	}
	$i = 0;
	$arr = array();
	$pos = 0;
	while ($i  < $aantal){
		echo "Wat is jouw naam?\n";
		$naam = rtrim(fgets(STDIN));
		echo "Wat is jouw droom?\n";
		$droom = rtrim(fgets(STDIN));
		array_push($arr, $naam, $droom);
		$i++;
	}
	for($i = 0; $i < count($arr); ++$i){
	echo $arr[$pos] . " heeft dit als droom: " . $arr[$pos+1] . "\n";
	$pos = $pos + 2;
	$i++;
	}
?>