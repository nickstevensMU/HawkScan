<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HawkScan</title>
    <meta name="description" content="This is a tool used to determine how many objects are in a given image.">
    <link rel="stylesheet" href="/droneProject/public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="/droneProject/public/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/droneProject/public/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/droneProject/public/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/droneProject/public/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="/droneProject/public/assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="/droneProject/public/assets/css/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.css">
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="/droneProject/public/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="/droneProject/public/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="/droneProject/public/assets/css/Search-Input-Responsive-with-Icon.css">

</head>

<body>
<nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button">
        <div class="container"><img id="logo" src="/droneProject/public/assets/img/turtleicon.png"><a class="navbar-brand" href="home" style="color: var(--bs-success);">HawkScan</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="/droneProject/public/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/droneProject/public/projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="/droneProject/public/upload">Upload</a></li>
                    <li class="nav-item"><a class="nav-link" href="/droneProject/public/account">Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="/droneProject/public/contact">Contact</a></li>
                </ul><span class="navbar-text actions"> <a class="login" href="/droneProject/public/login">Log In</a><a class="btn btn-light action-button" role="button" href="signup" style="background: var(--bs-success);margin-right: -20px;">Sign Up</a></span>
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
                <h1><?= $project['projectName'] ?><br></h1>
                <table border = '1'>
                <tr><td>Project Description: </td><td> <?= $project['projectDesc'] ?> </td></tr>
                <tr><td>Date: </td><td> <?= $project['dateCreated'] ?> </td></tr>
                <tr><td>Project Type: </td><td> <?= $project['projectType'] ?> </td></tr>
                <tr><td>Total Objects: </td><td> <?= $scan[0]['totalObjects'] ?> </td></tr>
                <tr><td>Completion Time: </td><td> <?= $scan[0]['compTime'] ?> minutes </td></tr>
                </table>
                <h3>Stitched Image</h3><br>
                <img src=<?= $imgPath ?> width ='1200'>
                <br><br>
                <h3>Scanned Image</h3><br>
                <img src=<?= $scanPath ?> width ='1200'>
                <br><br>
                <table border='1'>
                <th>Object Number</th><th>x-coordinate</th><th>y-coordinate</th>
                <?php foreach ($objects as $object) : ?>
                <tr border='1'>
                <td> <?= $object['objNum'] ?> </td>
                <td> <?= $object['xCord'] ?> </td>
                <td> <?= $object['xCord'] ?> </td>
                </tr>
                <?php endforeach ?>
                </table>
            </div>
        </div>
    </section>
</body>
<footer class="bg-light footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <ul class="list-inline mb-2"></ul>
                    <p class="text-muted small mb-4 mb-lg-0">© Monmouth University SE Dept. 2022. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-center text-lg-end my-auto h-100">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="https://www.facebook.com/MonmouthUniversity"><i class="fa fa-facebook fa-2x fa-fw" style="color: var(--bs-success) !important;"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/monmouthu"><i class="fa fa-twitter fa-2x fa-fw" style="color: var(--bs-success) !important;"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/monmouthuniversity/"><i class="fa fa-instagram fa-2x fa-fw" style="color: var(--bs-success) !important;"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
 </footer>
    <script src="/droneProject/public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/droneProject/public/assets/js/bs-init.js"></script>
    <script src="/droneProject/public/assets/js/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.js"></script>


</html>