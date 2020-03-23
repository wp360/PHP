<?php include "init.php" ?>
<?php
$obj = new base_class;
if(isset($_POST['change_password'])) {
  $current_password = $obj->security($_POST['current_password']);
  $new_password = $obj->security($_POST['new_password']);
  $retype_password = $obj->security($_POST['retype_new_password']);

  $current_status = $new_status = $retype_status = 1;
  if (empty($current_password)) {
    $current_password_error = "请填写原始密码";
    $current_status = "";
  }

  if (empty($new_password)) {
    $new_password_error = "新密码不能为空";
    $new_status = "";
  } else if(strlen($new_password) < 5) {
    $new_password_error = "新密码至少6个字符";
    $new_status = "";
  }

  if (empty($retype_password)) {
    $retype_password_error = "请重复填写新密码以确认";
    $retype_status = "";
  } else if($new_password != $retype_password) {
    $retype_password_error = "新密码两次输入不一致";
    $retype_status = "";
  }

  if(!empty($current_status) && !empty($new_status) && !empty($retype_status)) {
    // echo "密码修改更新成功！";
    $user_id = $_SESSION['user_id'];
    if($obj->Normal_Query("SELECT password FROM users WHERE id = ?", [$user_id])) {
      $row = $obj->Single_Result();
      $db_password = $row->password;

      if(password_verify($current_password, $db_password)) {
        if($obj->Normal_Query("UPDATE users SET password = ? WHERE id = ?", [password_hash($new_password, PASSWORD_DEFAULT), $user_id])) {
          // echo "密码更新成功！";
          $obj->Create_Session("password_updated", "你的密码已经成功更新！");
          header("location: index.php");
        }
      } else {
        $current_password_error = "请输入正确的密码";
        $current_status = "";
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
  <title>修改密码</title>
  <?php include 'components/css.php'; ?>
</head>

<body>
  <?php include 'components/nav.php'; ?>
  <div class="chat-container">
    <?php include 'components/sidebar.php'; ?>
    <section id="right-area">
      <?php include 'components/change_password_form.php'; ?>
    </section>
  </div>
  <?php include 'components/js.php'; ?>
</body>

</html>