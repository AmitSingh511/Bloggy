<?php
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
$conn=mysqli_connect("localhost","root","","blog_db");
if(!$conn)
{
    die("database connection failed".mysqli_connect_error());
}
else
{
    echo "yo yo";
}
?>