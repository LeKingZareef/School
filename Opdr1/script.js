function sum() {
	var get1, get2, antw;
	get1 = parseInt(document.getElementById("getal1").value, 10);
	get2 = parseInt(document.getElementById("getal2").value, 10);
	antw = get1+get2;
	document.getElementById("show").innerHTML = antw;
}