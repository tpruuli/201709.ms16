<?php

/*
$server = "localhost";
$user = "root";
$pass = "";
$DB_Name= "user";
*/
include "conf.php";

$db = array("server" => "localhost", "user" =>"root", "pass" => "qwerty", "DB_Name" =>"ms16");    
$db1 = array("server" => "trc.dev", "user" =>"root", "pass" => "qwerty", "DB_Name" =>"ms16");



$conn = new mysqli($db['server'], $db['user'], $db['pass'], $db['DB_Name']);
$conn1 = new mysqli($db1['server'], $db['user'], $db['pass'], $db['DB_Name']);


if ($conn -> connect_error || $conn1 -> connect_error) {
    die("No connection. Have a nice life!");
}

$sql = "SELECT * FROM ms16.user";
$result = $conn -> query($sql);
$result1 = $conn1 -> query($sql);

echo'<table>';
echo "<th>ID</th><th>NIMI</th><th>Perekonna nimi</th><th>ID kood</th>";

if ($result ->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        echo "<tr>";
        echo 
            "<td> id: ".$row["id"]."</td>". 
            "<td> Nimi: ".$row["name"]."</td>".
            "<td> Perekonna nimi: ".$row["lastname"]."</td>".
            "<td> ID-kood: ".$row["id_code"]."</td>".
            '<br>';
        echo "</tr>";
    }}

if ($result1 ->num_rows > 0) {
    while ($row = $result1->fetch_assoc()){
        echo "<tr>";
        echo 
            "<td> id: ".$row["id"]."</td>". 
            "<td> Nimi: ".$row["name"]."</td>".
            "<td> Perekonna nimi: ".$row["lastname"]."</td>".
            "<td> ID-kood: ".$row["id_code"]."</td>".
            '<br>';
        echo "</tr>";
    }}   


echo "</table>";
    $conn -> close();
    $conn1 -> close();


?>