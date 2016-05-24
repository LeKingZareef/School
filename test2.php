<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("opdracht.xml") or die("Error: Cannot create object");
echo "<p> klas : " . $xml->book[0]->klas . "<br>";
echo "naam : " . $xml->book[0]->naam . "<br>";
echo "schrijver : " . $xml->book[0]->schrijver . "</p>";

echo "<p> klas : " . $xml->book[1]->klas . "<br>";
echo "naam : " . $xml->book[1]->naam . "<br>";
echo "schrijver : " . $xml->book[1]->schrijver . "</p>";
?>


</body>
</html>