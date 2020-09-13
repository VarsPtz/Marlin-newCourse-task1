<?php
  //var_dump($_POST);
  $text = $_POST['text'];
  $pdo = new PDO("mysql:host=localhost;dbname=marlin-newcourse-1", "root", "");
  $sql = "INSERT INTO my_table (text) VALUES (:text)";
  $statement = $pdo->prepare($sql);
  $statement->execute(['text' => $text]);

  header("Location: /task_9.php");
?>