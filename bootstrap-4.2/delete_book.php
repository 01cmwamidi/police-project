<?php
include 'db.php';
if ( isset($_GET["id"]))
{
    //extract($_GET);
    $id = $_GET["id"];
    $sql="delete from books where id=$id";
    //$conn= mysqli_connect("localhost","root","","php");
    mysqli_query($conn,$sql);
}
header("location:book.php");