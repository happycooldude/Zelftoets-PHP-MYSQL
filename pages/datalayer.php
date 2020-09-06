<?php
function createDatabase(){
  $servername = "localhost";
  $username = "root";
  $password = "mysql";
  $dbname = "zelftoets";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
    echo "Connected successfully";
  }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
}

function readDate(){
    $dbConn = createDatabase();
    $stmt = $dbConn->prepare("SELECT * FROM dates");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $dbConn = null;
    return $result;  
}

function readDates($id){
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("SELECT * FROM dates WHERE id=:id");
  $stmt->bindParam(":id", $id);
  $stmt->execute();
  $result = $stmt->fetch();
  $dbConn = null;
  return $result;
}

function addDate($newdate)
{
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("INSERT INTO `dates`(`name`, `date`) VALUES ('$newdate[name]','$newdate[date]')");
  $stmt->execute();
  $dbConn = null;
}

function removeDate($id)
{
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("DELETE FROM dates WHERE id='$id'");
  $stmt->execute();
  $dbConn = null;
}

function updateDate($updatedate,$id){
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("UPDATE `dates` SET `name`='$updatedate[name]',`date`='$updatedate[date]' WHERE id=$id");
  $stmt->execute();
  $dbConn=null;
}
