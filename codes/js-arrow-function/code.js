
function run() {
	const sum = (x, y) => x + y;
	/*const sum = (x, y) => {
		if(x > y) return x + y;
		else return 0;
	};*/



	document.getElementById("log-result").innerText = sum(18, 90);
}
