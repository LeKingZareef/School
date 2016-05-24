function myFunction() {
    var x = Math.floor((Math.random() * 10) + 0);
    document.getElementById("show").innerHTML = x;
}
	var clicks = 0;
 function clickME() {
        clicks ++;
        	//document.getElementById("knop").disabled  = true;
        	document.getElementById("clicks").innerHTML = clicks;
 }