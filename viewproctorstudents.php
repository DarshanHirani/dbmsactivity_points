<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "activnew";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password, $database);
echo "Connected successfully<br>";
?>

<?php
include('sessionteacher.php');

$roww=mysqli_fetch_assoc($fetchlogin);
 $tid=$roww['tid'];
 //$query="select * from proctortable where tid='$tid';";
$query = "select X.namec from proctortable W, activcheckt X where W.tid='$tid' AND X.usn=W.usn;";
$queryResult = $conn->query($query);
echo "<table>";
while ($queryRow = $queryResult->fetch_row()) {
    echo "<tr>";
    for($i = 0; $i < $queryResult->field_count; $i++){
        echo "<td>$queryRow[$i]</td>";
    }
    echo "</tr>";
}
echo "</table>";
$conn->close();
?>