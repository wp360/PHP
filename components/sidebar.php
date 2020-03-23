<section id="sidebar">
  <ul class="left-ul">
    <li>
      <a href="#">
        <span class="profile-img-span">
          <img src="assets/img/profile.png" alt="profile image" class="profile-img">
        </span>
      </a>
    </li>
    <li>
      <a href="index.php">
        <?php echo ucfirst($_SESSION['user_name']); ?>
        <!-- 首页 -->
        <span class="cool-hover"></span>
      </a>
    </li>
    <li>
      <a href="change_name.php">
        修改用户名
        <span class="cool-hover"></span>
      </a>
    </li>
    <li>
      <a href="change_password.php">
        修改密码
        <span class="cool-hover"></span>
      </a>
    </li>
    <li>
      <a href="#">
        好友
        <span class="cool-hover"></span>
      </a>
    </li>
    <li>
      <a href="logout.php">
        退出
        <span class="cool-hover"></span>
      </a>
    </li>
  </ul>
</section>