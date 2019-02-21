<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">POLICE</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="suspects.php">Suspects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li>
                    <div class="dropdown">
                        <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
                            <?php
                            echo $_SESSION['user']['names'];
                            ?>
                        </button>
                        <div class="dropdown-menu">
                            <a class="nav-link text-danger" href="logout.php">Logout</a>
                        </div>
                    </div>
            </li>
        </ul>

    </div>
</nav>