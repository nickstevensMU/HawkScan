<!DOCTYPE html>
<html>
<?php include_once 'layouts/header.php'; ?>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button">
        <div class="container"><img id="logo" src="assets/img/turtleicon.png"><a class="navbar-brand" href="home" style="color: var(--bs-success);">HawkScan</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="upload">Upload</a></li>
                    <li class="nav-item"><a class="nav-link" href="account">Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                </ul><span class="navbar-text actions"> <a class="login" href="login">Log In</a><a class="btn btn-light action-button" role="button" href="signup" style="background: var(--bs-success);margin-right: -20px;">Sign Up</a></span>
            </div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="background: url('assets/img/backgroundDrone.jpg')no-repeat center center;background-size: cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">Welcome to our project, check out how it works below!</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center bg-light features-icons">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="far fa-image m-auto text-primary" data-bss-hover-animate="pulse" style="color: var(--bs-success) !important;"></i></div>
                        <h3>Stitching</h3>
                        <p class="lead mb-0">Combining all drone images into one stitched image.&nbsp;</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="fas fa-bullseye m-auto text-primary" data-bss-hover-animate="pulse" style="color: var(--bs-success) !important;"></i></div>
                        <h3>Recognition</h3>
                        <p class="lead mb-0">Scanning the stitched image for objects.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="fas fa-check-circle m-auto text-primary" data-bss-hover-animate="pulse" style="color: var(--bs-success) !important;"></i></div>
                        <h3>Object Management</h3>
                        <p class="lead mb-0">Ability to edit selected objects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include_once 'layouts/footer.php'; ?>
</html>