<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'activnew');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//include("config.php")

//The name of the table we want to alter.
$tableName = 'testtable';

//The name of the column that we want to create.
$columnName = mysqli_real_escape_string($link,$_POST['evename']);
$teacherid = mysqli_real_escape_string($link,$_POST['teaid']);

$check=mysqli_num_rows(mysqli_query($link,"SELECT * from proctortable where tid='$teacherid'"));
if($check>0){

//Our SQL query that will alter the table and add the new column.
$sql = "ALTER TABLE  `$tableName` ADD  `$columnName` int DEFAULT 0 AFTER Team_Hasiru_Cleanathon";

//Execute the query.
$link->query($sql);
echo "FIELD ADDED SUCCESFULLY";

}
else{
    echo "YOU ARE NOT A PROCTOR YOU DONT HAVE SUCH PRIVILEDGE";
}


        // $added= mysql_query("ALTER TABLE testtabel1 ADD email VARCHAR(50) NOT NULL");

        // if($added !== FALSE)
        // {
        // echo("The column has been added.");
        // }else{
        // echo("The column has not been added.");
        // }

?>

