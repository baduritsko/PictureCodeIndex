function changeArray(tableau, action)
{
	for(let i = 0; i < tableau.length; i++)
	{
		tableau[i] = action(tableau[i]);
	}
}

const tableau = [1, 2, 5, 9, 12, 15];
function run() {
	//changeArray(tableau, y => y *3);
	changeArray(tableau, (x) => {
		if(x % 2 === 0) return x;
		else return x * 3;
	});


	document.getElementById("log-result").innerText = tableau;
}
