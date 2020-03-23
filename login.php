<?php
include "init.php";
$obj = new base_class;
if(isset($_POST['login'])) {
  $email = $obj->security($_POST['email']);
  $password = $obj->security($_POST['password']);
  $email_status = $password_status = 1;
  if(empty($email)) {
    $email_error = "邮箱不能为空！";
    $email_status = "";
  }

  if(empty($password)) {
    $password_error = "密码不能为空！";
    $password_status = "";
  }

  // 登录判断
  if(!empty($email_status) && !empty($password_status)) {
    if($obj->Normal_Query("SELECT * FROM users WHERE email = ?", [$email])) {
      if($obj->Count_Rows() == 0) {
        $email_error = "请输入正确的邮箱";
      } else{
        $row = $obj->Single_Result();
        $db_email = $row->email;
        $db_password = $row->password;
        $user_id = $row->id;
        $user_name = $row->name;
        $user_image = $row->image;
        // 判断密码输入是否正确
        if(password_verify($password, $db_password)) {
          $obj->Create_Session("user_name", $user_name);
          $obj->Create_Session("user_id", $user_id);
          $obj->Create_Session("user_image", $user_image);
          header("location:index.php");
        } else {
          $password_error = "密码错误，请输入正确密码！";
        }
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>登录</title>
  <?php include 'components/css.php'; ?>
</head>

<body>
  <div class="signup-container">
    <div class="account-left">
      <div class="account-text">
        <h1>畅快聊天，沟通你我</h1>
        <p>说明简介，相关内容文字（省略...）</p>
      </div>
    </div>
    <div class="account-right">
      <?php include 'components/login_form.php'; ?>
    </div>
  </div>
  <?php include 'components/js.php'; ?>
</body>

</html>