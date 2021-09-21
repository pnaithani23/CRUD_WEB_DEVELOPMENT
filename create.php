<?php
    include '../db.php';
   # $Id = $_POST["Id"];
    $Ranking = $_POST["Ranking"];
    $Album = $_POST["Album"];
    $Artist = $_POST["Artist"];
    $Year = $_POST["Year"];
    $Genre = $_POST["Genre"];
    $Points = $_POST["Points"];
    $sql = "insert into csv01 (Ranking, Album, Artist, Year, Genre, Points) values ('$Ranking', '$Album', '$Artist', '$Year', '$Genre', '$Points')";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>
