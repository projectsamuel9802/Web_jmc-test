<?php
require('../../vendor/fpdf/fpdf.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jmctest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
