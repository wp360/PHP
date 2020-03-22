<?php
  class base_class extends db {
    private $Query;

    public function Normal_Query($query, $param = null) {
      if(is_null($param)) {
        $this->Query = $this->con->prepare($query);
        return $this->Query->execute();
      } else {
        $this->Query = $this->con->prepare($query);
        return $this->Query->execute($param);
      }
    }

    public function Count_Rows() {
      return $this->Query->rowCount();
    }

    public function fetch_all() {
      return $this->Query->fetchAll(PDO::FETCH_OBJ);
    }

    // 安全，防止xss攻击
    public function security($data) {
      return trim(strip_tags($data));
    }

    // session
    public function Create_Session($session_name, $session_value) {
      $_SESSION[$session_name] = $session_value;
      // $_SESSION["success"] = "你的账户创建成功！";
    }

    public function Single_Result() {
      return $this->Query->fetch(PDO::FETCH_OBJ);
    }
  }
?>