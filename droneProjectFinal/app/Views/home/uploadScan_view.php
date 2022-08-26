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
    <section>
        <div class="m-5">
            <div id="backdrop" class="backdrop backdrop-transition backdrop-dark">
                <div class="text-center w-100" style="position: absolute;top: 50%;">
                    <div class="bg-light border rounded border-success shadow-lg m-auto" style="width: 150px;height: 150px;"><i class="fa fa-upload d-block p-4" style="font-size: 50px;"></i><span>Drop file to attach</span></div>
                </div>
            </div>
            <div class="bg-light border rounded border-light pt-1 jumbotron py-5 px-4">
                <div class="alert alert-success invisible mt-5" role="alert"><span id="notify"></span></div>
                <h1>File Upload (Scan Only)<br></h1>
                <p>This upload takes .jpg,.png,.tiff, and .tif files only. Please only attempt to upload your stitched image in this file type.</p>
                <br>
                <div id="list"></div>
                    <?= form_open_multipart("/projects/createScan") ?>
                        <div>
                        <label for="projectName">Project Name</label>
                        <input type="text" name="projectName" id="projectName" value="">
                        <br>
                        <label for="projectDesc">Description</label>
                        <input type="text" name="projectDesc" id="projectDesc" value="">
                        <br>
                        <br>
                        <input type="file" name="userfile" size=50 accept=.jpg,.png,.tiff,.tif />
                        <br>
                        
                        <button>Submit</button>
                        </div>
                    </form>
            </div>
        </div>
    </section>
</body>
<?php include_once 'layouts/footer.php'; ?>
</html>