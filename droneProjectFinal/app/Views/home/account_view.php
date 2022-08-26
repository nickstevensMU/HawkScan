<!DOCTYPE html>
<html>
<?php include_once 'layouts/header.php'; ?>

<body>
<nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button">
        <div class="container"><img id="logo" src="assets/img/turtleicon.png"><a class="navbar-brand" href="home" style="color: var(--bs-success);">HawkScan</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="upload">Upload</a></li>
                    <li class="nav-item"><a class="nav-link active" href="account">Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                </ul><span class="navbar-text actions"> <a class="login" href="login">Log In</a><a class="btn btn-light action-button" role="button" href="signup" style="background: var(--bs-success);margin-right: -20px;">Sign Up</a></span>
            </div>
        </div>
    </nav>
    <section class="text-center bg-light features-icons">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Account Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Name: <?= $user['fname'] ?> <?= $user['lname'] ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Email: <?= $user['email'] ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Affiliation: <?= $user['school'] ?> </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-primary" type="button" style="background: var(--bs-success);" onclick="window.location.href='logout';" >Log Out</button></td></td>
                                    <td></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include_once 'layouts/footer.php'; ?>
</html>