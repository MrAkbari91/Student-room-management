<?php
$conn=realpath('../database/dormitory.accdb');
$conn = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$conn; Uid=; Pwd=;");
?>