<?php

$mysqli = new mysqli("localhost", "root", "", "brass");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>