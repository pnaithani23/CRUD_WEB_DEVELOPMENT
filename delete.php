<?php
    include '../db.php';
    $Ranking = $_GET['Ranking'];
    $sql = "delete from csv01 where Ranking=$Ranking";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>
