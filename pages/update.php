<?
include('datalayer.php');
$data = readDates($id);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET["update"];
    $updatedate = $_POST;
    updateDate($updatedate,$id);
    echo ('<script>alert("date updated")</script>');
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
        <h1>Set new date here</h1>
        <a href="../index.php">Back</a>
    </div>

<h1>Set new date here</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                name <input type="text" name="name"><br><br>
                date <input type="text" name="date"><br><br>
                <input id="knop" type="submit" value="send" />
            </form>
</body>
</html>