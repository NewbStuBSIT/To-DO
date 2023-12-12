<?php
require_once 'libs/function.php';

$id = $_GET['id'];

$sql = "DELETE FROM task WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header("Location:dashboard.php");
}

?>