<div class="form-area">
  <?php if (isset($_SESSION['account_success'])) : ?>
    <div class="alert alert-success">
      <?php echo $_SESSION['account_success']; ?>
    </div>
  <?php endif; ?>
  <?php unset($_SESSION['account_success']); ?>
  <form action="" method="POST">
    <div class="group">
      <h2 class="form-heading">用户登录</h2>
    </div>
    <div class="group">
      <input type="email" name="email" class="control" placeholder="输入邮箱" value="<?php if(isset($email)): echo $email; endif; ?>">
      <div class="email-error error">
        <?php if (isset($email_error)) : ?>
          <?php echo $email_error; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="group">
      <input type="password" name="password" class="control" placeholder="输入密码" value="<?php if(isset($password)): echo $password; endif; ?>">
      <div class="password-error error">
        <?php if (isset($password_error)) : ?>
          <?php echo $password_error; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="group">
      <input type="submit" name="login" class="btn account-btn" value="登录">
    </div>
    <div class="group">
      <a href="signup.php" class="link">注册新用户</a>
    </div>
  </form>
</div>