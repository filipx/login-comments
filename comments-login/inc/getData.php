<?php
// uzimam sve podatke iz tabele comments i pravim JSON
include "connection.php";

$sql = "SELECT * FROM comments ORDER BY id DESC";
$result = mysqli_query($db,$sql);
$arr = [];
while ($row = mysqli_fetch_assoc($result)){
  $arr[] = ["name"=>$row["name"], "comment"=>$row["comment"], "date"=>$row["date"]];
}
echo json_encode($arr);
 ?>
