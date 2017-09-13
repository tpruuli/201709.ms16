<?php

/*
$server = "localhost";
$user = "root";
$pass = "";
$DB_Name= "user";
*/

    
$db = array("server" => "localhost", "user" =>"root", "pass" => "", "DB_Name" =>"ms16");



$conn = new mysqli($db['server'], $db['user'], $db['pass'], $db['DB_Name']);

if ($conn -> connect_error) {
    die("No connection. Have a nice life!");
}

$sql = "SELECT * FROM ms16.user";
$result = $db -> query($sql);

if ($result ->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        echo " id: ".row["ID"]. " Nimi".row["name"]." Perekonna nimi".row["lastname"]." ID-kood".row["id_code"];
    }
    
    $conn -> close();
    
?>