<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>PHP + MySQL CRUD Demo</h1>
    <p>Create, read, update, and delete records below</p>



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

    <table class="table">
        <tbody>
            <?php include 'read.php'; ?>
        </tbody>
    </table>


</div>
</body>
</html>

