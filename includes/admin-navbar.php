<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">HSTools - Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= ($tab == 0)? 'active' : '' ?>">
          <a class="nav-link" href="/app/users/admins.php">Admin Users</a>
        </li>
        <li class="nav-item <?= ($tab == 1)? 'active' : '' ?>">
          <a class="nav-link" href="/app/organizations/index.php">Organizations</a>
        </li>
        <li class="nav-item <?= ($tab == 2)? 'active' : '' ?>">
          <a class="nav-link" href="/app/checklist-templates/index.php">Checklist Templates</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item <?= ($tab == 3)? 'active' : '' ?>">
          <a class="nav-link" href="/apps/users/user.php"><i class="fas fa-user avatar-sm"></i> You</a>
        </li>
        <li class="nav-item <?= ($tab == 4)? 'active' : '' ?>">
          <a class="nav-link" href="/">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
