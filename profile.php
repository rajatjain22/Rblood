<nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <a href="adminHome.php" style="text-decoration:none;color: black;">
            <span class="dashboard">Home</span>
          </a>
      </div>
      <div class="profile-details">
          <img src="images/profile.png" alt="">
        <span class="admin_name"><?php echo $_SESSION['username'] ?></span>
           <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><?php echo $_SESSION['username'] ?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>