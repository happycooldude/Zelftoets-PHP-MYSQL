<?
include('pages/datalayer.php');
$data = readDate();

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
        <h1>View all date's here</h1>
        <a href="pages/create.php">Add date</a>
        <a href="pages/delete.php">Remove date</a>
        <a href="pages/update.php">Update date</a>
    </div>

    <?foreach($data as $data)
    var_dump($data);
    require('pages/datalayer.php')
    ?>

    <?
    include('pages/footer.php')
    ?>
</body>

</html>