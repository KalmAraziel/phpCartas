<?php
include ("conex.php");
$link=conectarse();

$user = $_POST["user"];
$pass = $_POST["pass"];

$query = "select * from usuarios";
$result = mysqli_query ($query,$link);
$existe=0;

echo "<table>";
while($row = mysql_fetch_array($result))
{
    echo "<tr><td>".$row['usuario']."<td>".$row['clave']."<td>".$row['origen']."<td>".$row['nivel']."<td>";
}
echo "</td></tr></table>";


?>
