<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1><center>Chart Countdown of the 100 Greatest Albums Ever</center></h1>
    <p><center>Below you will find a short list of the top albums by decade and a chart of the entire top 100 list.</center></p>



    <form class="form-inline m-2" action="create.php" method="POST">
        <label for="Ranking">Ranking:</label>
        <input type="number" class="form-control m-2" id="Ranking" name="Ranking">
        <label for="Album">Album:</label>
        <input type="text" class="form-control m-2" id="Album" name="Album">
        <label for="Artist">Artist:</label>
        <input type="text" class="form-control m-2" id="Artist" name="Artist">
        <label for="Year">Year:</label>
        <input type="number" class="form-control m-2" id="Year" name="Year">
        <label for="Genre">Genre:</label>
        <input type="text" class="form-control m-2" id="Genre" name="Genre">
        <label for="Points">Points:</label>
        <input type="number" class="form-control m-2" id="Points" name="Points">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

    <table>
        <td><b>&emsp;Ranking&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td><td><b>Album&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td><td><b>Artist&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td><td><b>Year&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td><td><b>Genre&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td><td><b>Points</td>
    </table>


    <table class="table">
        <tbody>
            <?php include 'read.php'; ?>
        </tbody>
    </table>


</div>
</body>
</html>

