<div class="change_password form-section">
  <form method="POST" action="">
    <div class="group">
      <h2 class="form-heading">修改密码</h2>
    </div>
    <div class="form-grid">
      <div class="group">
        <input type="password" name="current_password" class="control" placeholder="旧密码" value="<?php if($current_password): echo $current_password; endif;?>">
        <div class="password-error error">
          <?php if(isset($current_password_error)): ?>
            <?php echo $current_password_error; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="group">
        <input type="password" name="new_password" class="control" placeholder="设置新密码" value="<?php if($new_password): echo $new_password; endif;?>">
        <div class="password-error error">
          <?php if(isset($new_password_error)): ?>
            <?php echo $new_password_error; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="group">
        <input type="password" name="retype_new_password" class="control" placeholder="重复输入新密码" value="<?php if($retype_password): echo $retype_password; endif;?>">
        <div class="password-error error">
          <?php if(isset($retype_password_error)): ?>
            <?php echo $retype_password_error; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="group">
        <input type="submit" name="change_password" class="btn account-btn" value="保存设置">
      </div>
    </div>
  </form>
</div>