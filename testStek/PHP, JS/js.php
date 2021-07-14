<script>
function getPrimes() {
	for(let number = 0; number <= 100; number++) {
		if(isPrime(number)) console.log(number);
	}
	return true;
}

function isPrime(number) {
	if(number > 1) {
		for(let divider = 2; divider <= Math.sqrt(number); divider++) {
			if(number % divider == 0) return false
		}
		return true;
	}
	return false;
}

function maxElement(array) {
	return Math.max(...array);
}

function changeStr(string) {
	string = string.replace(/\s/g,"%20");
	string = string.toLowerCase();
	return string;
}
</script>