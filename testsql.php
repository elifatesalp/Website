<!DOCTYPE html>
<html>
<body>
    
<?php

$sunucu = "localhost";
$user = 'root';
$password = ''; 
$database = 'arama'; 
$port = NULL; 

$mysqli = new mysqli('127.0.0.1', $sunucu, $user, $password, $database, $port);

if ($mysqli->connect_error) 
{

    die('Bağlantı Başarısız (' . $mysqli->connect_errno . ') '

            . $mysqli->connect_error);
}

echo '<p>Bağlantı Başarılı '. $mysqli->host_info.'</p>';

$mysqli->close();
?>
</body>
   </html>   

