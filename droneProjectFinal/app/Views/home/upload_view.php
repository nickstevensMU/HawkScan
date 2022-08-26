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
                    <li class="nav-item"><a class="nav-link active" href="upload">Upload</a></li>
                    <li class="nav-item"><a class="nav-link" href="account">Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                </ul><span class="navbar-text actions"> <a class="login" href="login">Log In</a><a class="btn btn-light action-button" role="button" href="signup" style="background: var(--bs-success);margin-right: -20px;">Sign Up</a></span>
            </div>
        </div>
    </nav>
    <section class="text-center bg-light features-icons">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="Push-20"></div>
                </div>
            </div>
        </div>
        <div class="Push-20"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><a class="btn btn-primary" role="button" href="uploadfull" style="background: var(--bs-success);">Full Cycle(Stitching and Detection)</a></div>
                <div class="col-md-6"><a class="btn btn-primary" role="button" href="uploadscan" style="background: var(--bs-success);">Scan Stitched Image Only</a></div>
            </div>
            <div class="col">
                <div class="Push-20"></div>
                <div class="Push-20"></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>The full cycle upload will take a zip file as input. This zip file will then be sent to through the stitching process. After the stitching is complete, the detection process will start. Finally, after your project has been completely processed you will have access to our analysis page. Here you will find the stitched image as it is shown after the detection. Below will be a table with all objects within the image.</p>
                </div>
                <div class="col-md-6">
                    <p>This option&nbsp; will take a stitched image as input. The stitched image that has been uploaded will then go through our detection process. After your project has been completely processed you will have access to our analysis page. Here you will find the stitched image as it is shown after the detection. Below will be a table with all objects within the image.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>