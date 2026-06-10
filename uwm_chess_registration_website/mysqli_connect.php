<?php
$dbc = mysqli_connect('localhost', 'your_username', 'your_password', 'your_database');

if (!$dbc) {
    die('Database connection failed: ' . mysqli_connect_error());
}
?>