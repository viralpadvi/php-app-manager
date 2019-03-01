<?php
$connect = mysqli_connect("localhost", "root", "", "appdev");

if(isset($_POST["name"], $_POST["link"], $_POST["token"]))
{
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $link = mysqli_real_escape_string($connect, $_POST["link"]);
 $token = mysqli_real_escape_string($connect, $_POST["token"]);
 $query = "INSERT INTO tbl_api_fetch_url(name,link, token) VALUES('$name','$link', '$token')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}


if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE tbl_api_fetch_url SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}

if(isset($_POST["dlt_id"]))
{
 $query = "DELETE FROM tbl_api_fetch_url WHERE id = '".$_POST["dlt_id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}

?>