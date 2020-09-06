<?
include("datalayer.php");
$data = readDates($id);
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    removeDate($id);
}
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zelftoets php/mysql</title>
</head>

<body>
<div>
        <h1>Back to home</h1>
        <a href="../index.php">Back</a>
    </div>

<h1>Remove date here</h1>
    <div>
        <a href="delete.php?delete=<?= $data["id"]?>" onclick="return confirm('Are you sure you want to delte this date?')">Delete</a>
    </div>
</body>
</html>