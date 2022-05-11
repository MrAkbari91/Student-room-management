<?php
$conn=realpath('../database/dormitory.accdb');
$con = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$conn; Uid=; Pwd=;");
?>