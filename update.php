<?php
    include '../db.php';
  #  $Id = $_POST["Id"];
    $Ranking = $_POST["Ranking"];
    $Album = $_POST["Album"];
    $Artist = $_POST["Artist"];
    $Year = $_POST["Year"];
    $Genre = $_POST["Genre"];
    $Points = $_POST["Points"];
    $sql = "UPDATE csv01 SET  Album='$Album', Artist='$Artist', Year='$Year', Genre='$Genre', Points='$Points' where Ranking =$Ranking";
    $result = $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>

