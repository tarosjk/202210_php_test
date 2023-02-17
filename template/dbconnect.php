<?php
try {
  $dsn = 'mysql:host=localhost;dbname=interplan_pizza;charset=utf8';
  $user = 'pizza';
  $pass = 'RHm!xjCAlmnVi9Rz';
  $option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];

  $db = new PDO($dsn,$user,$pass,$option);

} catch(PDOException $e) {
  echo 'データベース接続時にエラーがありました';
  var_dump($e);
}