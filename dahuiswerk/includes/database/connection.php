<?php
 $connect_error = 'Downtime';
 mysql_connect('localhost','root','') or die ($connect_error);
 mysql_select_db('dahuiswerk') or die($connect_error);
?>