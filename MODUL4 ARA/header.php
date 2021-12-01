<?php
        include "koneksi.php";
        if(!isset($_SESSION)) 
        { 
        session_start(); 
     } 
 
        if (isset($_SESSION['username'])) {
            $e = $_SESSION['username'];
            $sql = "SELECT nama FROM users WHERE email ='$e'";
            $result = mysqli_query($koneksi,$sql);

            $nama = mysqli_fetch_assoc($result);
        ?>


<header class="d-flex flex-wrap justify-content-center py-2 sticky-top"
    style="background-color:#94a8eb; padding-left: 16%; padding-right:16%">
    <a href="./" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none fs-5 fw-bold ">
        EAD Travel </a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a href="bookings.php" class="nav-link text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <?php echo $nama['nama']; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>
    </ul>
</header>

<?php }


else{?>
<header class="d-flex flex-wrap justify-content-center py-2 sticky-top"
    style="background-color:#94a8eb; padding-left: 16%; padding-right:16%">
    <a href="./" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none fs-5 fw-bold ">
        EAD Travel </a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a href="register.php" class="nav-link text-dark">Register</a>
        </li>
        <li class="nav-item">
            <a href="login.php" class="nav-link text-dark">Login</a>
        </li>
    </ul>
</header>
<?php
} 
?>


