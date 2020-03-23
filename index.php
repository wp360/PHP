<?php include "init.php" ?>
<!-- 判断是否登录 -->
<?php if (!isset($_SESSION['user_id'])) : ?>
  <?php header("location:login.php"); ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>首页</title>
  <?php include 'components/css.php'; ?>
</head>

<body>
  <!-- 成功提醒！ -->
  <?php if(isset($_SESSION['password_updated'])): ?>
    <div class="flash success-flash">
      <span class="remove">&times;</span>
      <div class="flash-heading">
        <h3><span class="checked">&#10004;</span>提示</h3>
      </div>
      <div class="flash-body">
        <p><?php echo $_SESSION['password_updated'] ?></p>
      </div>
    </div>
  <?php endif; ?>
  <?php unset($_SESSION['password_updated']); ?>
  <!-- 失败提醒 -->
  <!-- <div class="flash error-flash">
    <span class="remove">&times;</span>
    <div class="flash-heading">
      <h3><span class="checked">&#x2715;</span>警告</h3>
    </div>
    <div class="flash-body">
      <p>请先登录</p>
    </div>
  </div> -->
  <?php include 'components/nav.php'; ?>
  <div class="chat-container">
    <?php include 'components/sidebar.php'; ?>
    <section id="right-area">
      <?php include 'components/messages.php'; ?>
      <?php include 'components/chat_form.php'; ?>
      <?php include 'components/emoji.php'; ?>
    </section>
  </div>
  <?php include 'components/js.php'; ?>
</body>

</html>