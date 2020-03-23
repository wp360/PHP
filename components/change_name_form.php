<div class="form-section">
  <form method="POST" action="">
    <div class="group">
      <h2 class="form-heading">修改用户名</h2>
    </div>
    <div class="form-grid">
      <div class="group">
        <input type="text" name="user_name" class="control" placeholder="设置新用户名" value="<?php echo $_SESSION['user_name'] ?>">
      </div>
      <div class="group">
        <input type="submit" name="change_name" class="btn account-btn" value="保存设置">
      </div>
    </div>
  </form>
</div>