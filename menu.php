<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Quiz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact US</a>
                </li>


                <?php
                if (isset($_SESSION['USNM'])) {
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="profile.php">Profile</a>';
                    echo '</li>';
                    echo '<a href="logout.php?logout" class="nav-link">Logout</a>';
                } else {
                    echo '<a href="login.php?login" class="nav-link">Sign In/Sign up</a>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>