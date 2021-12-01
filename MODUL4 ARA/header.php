<?php
        
        session_start();
 
        if (isset($_SESSION['username'])) {?>
            <div class="alert alert-success" role="alert">
                Logged in!
            </div>
        <?php } ?>

<header class="d-flex flex-wrap justify-content-center py-2 sticky-top"
        style="background-color:#94a8eb; padding-left: 16%; padding-right:16%">
        <a href="./"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none fs-5 fw-bold "> EAD
            Travel </a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="register.php" class="nav-link text-dark">Register</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link text-dark">Login</a>
            </li>
        </ul>
    </header>