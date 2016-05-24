<!DOCTYPE html>
<html>
<body>
<?php
xml=simplexml_load_file("opdracht.xml") or die("Error: Cannot create object");
echo $xml->naam . "<br>";
<!-- echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body; -->
?> 

</body>
</html>