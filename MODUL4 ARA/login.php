<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODUL4 ARA</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color:#fbefd5">
    <header class="d-flex flex-wrap justify-content-center py-2 mb-4"
        style="background-color:#94a8eb; padding-left: 16%; padding-right:16%">
        <a href="/"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none fs-5 fw-bold "> EAD
            Travel </a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="register.php" class="nav-link text-dark">Register</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link disabled text-secondary">Login</a>
            </li>
        </ul>
    </header>

    <main>
        <div class="container d-flex py-3 justify-content-center">
            <div class="row mb-5 " style="width:42%">
                <div class="col">
                    <div class="card px-5 py-3">

                        <h4 class="my-2 fw-normal card-title text-center">Login</h4>
                        <hr>

                        <form class="needs-validation" novalidate>
                            <div class="row g-3">

                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter E-mail Address" required>
                                    <div class="invalid-feedback"> Please enter a valid email. </div>
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">Kata Sandi</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter Your Password" value="" required>
                                </div>

                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                                <center>
                                    <button class="btn btn-primary" style="width:140px" type="submit">Daftar</button>
                                    <p></p>
                                    <p>You don't have an account? <a href="register.php">Register</a></p>
                                </center>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted text-center fixed-bottom pt-3 pb-1" style="background-color:#94a8eb">
        <p>&copy;2021 Copyright <a href="#">Ara_1202190269</a></p>
    </footer>


</body>

</html>