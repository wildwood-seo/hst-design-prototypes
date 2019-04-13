<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/app/organizations/dashboard.php">Sunnyville Head Start</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item <?= ($tab == 3)? 'active' : '' ?>">
          <a class="nav-link" href="/apps/users/user.php"><i class="fas fa-user avatar-sm"></i> You</a>
        </li>
        <li class="nav-item <?= ($tab == 4)? 'active' : '' ?>">
          <a class="nav-link" href="/">Help</a>
        </li>
        <li class="nav-item <?= ($tab == 5)? 'active' : '' ?>">
          <a class="nav-link" href="/">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
