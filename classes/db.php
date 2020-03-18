<?php
// 连接数据库
class db
{
  private $host = "localhost";
  private $dbname = "message";
  private $username = "root";
  private $password = "root";
  protected $con;

  public function __construct()
  {
    try {
      // new PDO("mysql:host=localhost;dbname=messager","root","");
      $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
      echo "数据库连接成功！";
    } catch (Exception $e) {
      echo "Datebase Connection Problem: " . $e->getMessage();
    }
  }
}
