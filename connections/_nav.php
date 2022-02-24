<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" >MY BANK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/atm/Index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/atm/openAccount.php">Open Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">User Portal</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Admin Portal
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/atm/signup.php">SignUp</a></li>
                        <li><a class="dropdown-item" href="/atm/login.php">LogIn</a></li>
                        <li><a class="dropdown-item" href="/atm/signout.php">SignOut</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>