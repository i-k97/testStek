<?php

function getPrimes() {
	$arPrimes = array();
	for($number = 0; $number <= 100; $number++) {
		if(isPrime($number)) $arPrimes[] = $number;
	}
	showArray($arPrimes);
}

function isPrime($number) {
	if(isset($number) && $number > 1) {
		for($divider = 2; $divider <= (int)sqrt($number); $divider++) {
			if ($number % $divider == 0) return false;
		}
		return true;
	}
	return false;
}

function showArray($array) {
	if(isset($array) && !empty($array)) {
		$countArray = count($array);
		foreach ($array as $key => $item) {
			echo $item;
			if ($key < $countArray - 1) {
				echo ", ";
			} 
		}
	} 
	return null;	
}

function maxElement($array) {
	if(isset($array) && !empty($array)) {
		return max($array);
	} 
	return null;
}	

function changeStr($string) {
	if(isset($string)) {
		$string = strtolower($string);
		$string = str_replace(' ', '%20', $string);
		return $string;
	} 
	return null;
}

echo '<pre>';
print_r(getPrimes());
echo '</pre>'
?>