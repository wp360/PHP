<?php
  // $db = new PDO("mysql:host=localhost;dbname=message", "root", "root");
  // if($db) {
  //   echo "数据库连接成功！";
  // } else {
  //   echo "数据库连接失败！";
  // }

  // 1. 连接数据库
  try{
    $db = new PDO("mysql:host=localhost;dbname=message", "root", "root");
    echo "数据库连接成功！";
  } catch(PDOException $e) {
    echo $e->getMessage();
  }

  // 2. 添加数据
  $name = "jack";
  $email = "bob@qq.com updated";
  $password = "mypassword updated";
  // 序号
  $id = 2;

  // $Query = $db->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");

  // prepare — 准备要执行的SQL语句并返回一个 PDOStatement 对象
  // $Query = $db->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");
  // $Query->execute(array($name, $email, $password));

  // 更新
  // $Query = $db->prepare("UPDATE users SET name = ? WHERE id = ?");
  // $Query->execute(array($name, $id));

  // 删除
  // $Query = $db->prepare("DELETE FROM users WHERE id = ?");
  // $Query->execute(array($id));

  // if($Query) {
  //   // echo "Data is inserted";
  //   // echo "Data is updated";
  //   echo "<br>数据删除成功！";
  // } else {
  //   echo "sorry";
  // }

    // 查询数据
  $Query = $db->prepare("SELECT * FROM users");
  $Query->execute();

  if($Query->rowCount() > 0) {
    // FETCH_OBJ  FETCH_ASSOC
    $rows = $Query->fetchAll(PDO::FETCH_NUM);
    echo "<pre>";
    print_r($rows);
  } else {
    echo "未有任何数据";
  }
?>