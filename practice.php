<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=ijdb',
'idjbuser', ’mypassword’);
$output = 'Database connection established.';
}
catch (PDOException $e) {
$output = 'Unable to connect to the database server.';
}
 ?>
