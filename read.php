<?php
    include '../db.php';
    $sql = "select * from csv01";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        if ($row['id'] == $_GET['id']) {
            echo '<form class="form-inline m-2" action="update.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="Ranking" value="'.$row['Ranking'].'"></td>';
            echo '<td><input type="text" class="form-control" name="Album" value="'.$row['Album'].'"></td>';
            echo '<td><input type="text" class="form-control" name="Artist" value="'.$row['Artist'].'"></td>';
            echo '<td><input type="number" class="form-control" name="Year" value="'.$row['Year'].'"></td>';
            echo '<td><input type="text" class="form-control" name="Genre" value="'.$row['Genre'].'"></td>';
            echo '<td><input type="number" class="form-control" name="Points" value="'.$row['Points'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Update</button></td>';
            echo '<input type="hidden" name="Ranking" value="'.$row['Ranking'].'">';
            echo '</form>';
        } else {
    #        echo "<td>" . $row['Ranking'] . "</td>";
            echo "<td>" . $row['Album'] . "</td>";
            echo "<td>" . $row['Artist'] . "</td>";
            echo "<td>" . $row['Year'] . "</td>";
            echo "<td>" . $row['Genre'] . "</td>";
            echo "<td>" . $row['Points'] . "</td>";
            echo '<td><a class="btn btn-primary" href="index.php?Ranking=' . $row['Ranking'] . '" role="button">Update</a></td>';
        }
 #       echo '<td><a class="btn btn-primary" href="index.php?Ranking=' . $row['Ranking'] . '" role="button">Update</a></td>';
        echo '<td><a class="btn btn-danger" href="delete.php?Ranking=' . $row['Ranking'] . '" role="button">Delete</a></td>';
        echo "</tr>";
    }
    $conn->close();
?>
