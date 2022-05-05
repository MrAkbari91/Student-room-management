<?php
$conn = $_SERVER["DOCUMENT_ROOT"] . "\project\database\dormitory.accdb";
if (!file_exists($conn)) {
    die("Could not find database file.");
 }
$con = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$conn; Uid=; Pwd=;");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>