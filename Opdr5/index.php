<!DOCTYPE html>
<html>
<title>Web Page Design</title>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<select id="item1" onchange="location = this.options[this.selectedIndex].value;">
  <option value="http://www.google.com" id="1">Volvo</option>
  <option value="http://www.Yahoo.com"> Yahoo.com </option>
  <option value="http://www.bing.com"> Bing.com </option>
</select>
<p id="show"> </p>

<script src="script.js"></script>
</body>
</html>