<?php
$pdo = new PDO("mysql:dbname=todoApi;host=localhost;", "root", "0000");
$pdo->query("set names utf8;");

$stmt = $pdo->prepare("select * from todos");

$stmt->execute();

// 1件取得はfetch()
// $todos = $stmt->fetch();
$todos = $stmt->fetchAll();

foreach($todos as $key => $value){
  echo $key . ":" . $value["title"] . "<br />";
}

unset($pdo);