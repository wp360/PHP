<?php
  include "init.php";
  // $db = new db;
  $obj = new base_class;
  if(isset($_POST['signup'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $img_name = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    // 图片
    $img_path = "assets/img/";
    $extensions = ['jpg', 'jpeg', 'png'];
    $img_ext = explode(".", $img_name);
    $img_extension = end($img_ext);
    // printf($img_ext);
    // echo $img_ext[1];
    $name_status = $email_status = $password_status = $photo_status = 1;
    if(empty($full_name)) {
      $name_error = "用户名不能为空!";
      $name_status = "";
    }

    if(empty($email)) {
      $email_error = "邮箱不能为空!";
      $email_status = "";
    } else {
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "输入邮箱格式不正确！";
        $email_status = "";
      } else {
        if($obj->Normal_Query("SELECT email FROM users WHERE email = ?", array($email))) {
          if($obj->Count_Rows() == 0) {
            // 邮箱输入正确
          } else {
            $email_error = "邮箱已经存在！";
            $email_status = "";
          }
        }
      }
    }

    // 判断密码
    if(empty($password)) {
      $password_error = "密码不能为空!";
      $password_status = "";
    } else if(strlen($password) < 5) {
      $password_error = "密码太简单，不能小于5个字符!";
      $password_status = "";
    } else {
      // 密码输入正确
    }

    // 判断上传头像图片
    if(empty($img_name)) {
      $image_error = "请上传头像图片!";
      $photo_status = "";
    } else if(!in_array($img_extension, $extensions)) {
      $image_error = "上传图片格式不正确！";
      $photo_status = "";
    } else {
      // 图片上传正确
    }

    if(!empty($name_status) && !empty($email_status) && !empty($password_status) && !empty($photo_status)) {
      // echo "提交";
      move_uploaded_file($img_tmp, "$img_path/$img_name");
      $status = 0;
      if($obj->Normal_Query("INSERT INTO users(name, email, password, image, status) VALUES (?,?,?,?,?)",
      [$full_name, $email, password_hash($password, PASSWORD_DEFAULT), $img_name, $status])) {
        echo "提交成功！";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>注册</title>
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
      <?php include 'components/signup_form.php'; ?>
    </div>
  </div>
  <?php include 'components/js.php'; ?>
  <script src="assets/js/file_label.js"></script>
</body>

</html>