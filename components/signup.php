<div class="form-area">
  <form action="" method="POST">
    <div class="group">
      <h2 class="form-heading">生成新的账户</h2>
    </div>
    <div class="group">
      <input type="text" name="full_name" class="control" placeholder="输入用户名">
    </div>
    <div class="group">
      <input type="email" name="email" class="control" placeholder="输入邮箱">
    </div>
    <div class="group">
      <input type="password" name="password" class="control" placeholder="输入密码">
    </div>
    <div class="group">
      <label for="file" id="file-label">
        <i class="fas fa-cloud-upload-alt upload-icon"></i>选择图片
      </label>
      <input type="file" name="img" id="file" class="file">
    </div>
    <div class="group">
      <input type="submit" name="signup" class="btn account-btn" value="创建账户">
    </div>
    <div class="group">
      <a href="login.php" class="link">已经有账户了？</a>
    </div>
  </form>
</div>