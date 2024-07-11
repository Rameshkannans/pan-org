<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="newStyles.css">
    <title>Home</title>
    <style>
         body {
            font-family: "Bree Serif", serif;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <a class="active" href=""><i class="fa fa-home me-1" style="font-size: 30px;" aria-hidden="true"></i> <span>Home</span></a>
        <a href="./users/new_pan.php"><i class="fa fa-id-card me-2" style="font-size: 25px;" aria-hidden="true"></i><span>New Pan</span></a>
        <a href="./users/update_pan.php"><i class="fa fa-address-card-o me-2" style="font-size: 25px;" aria-hidden="true"></i><span>Correction Pan</span></a>
        <a href="./users/statussearch.php"><i class="fa fa-search me-2" style="font-size: 28px;" aria-hidden="true"></i><span>Check Status</span></a>
        <a href="./users/contactus.php"><i class="fa fa-phone-square me-2" style="font-size: 28px;" aria-hidden="true"></i><span>Contact US</span></a>
    </div>

    <div class="content">
        <div class="container-fluid my-5">
            <div class="row justify-content-center mb-5">
                <div class="col-md-4 mb-4 mb-sm-0 d-flex">
                    <div class="card shadow d-flex flex-column justify-content-between">
                        <img class="card-img-top" src="image/newpan.png" alt="Card image"
                            style="width: 100%; height: auto;">
                        <div class="card-body text-center">
                            <h4 class="card-title text-primary">NEW PAN</h4>
                            <p class="card-text">The PAN card is vital for identification, taxes, financial
                                transactions,
                                accessing government benefits, and conducting business.</p>
                            <div class="d-grid">
                                <a href="./users/new_pan.php" class="btn btn-outline-primary rounded-0 border-3 mb-1 mt-1">Apply
                                    New
                                    Pan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-sm-0 d-flex">
                    <div class="card shadow d-flex flex-column justify-content-between">
                        <img class="card-img-top" src="image/updatepan.png" alt="Card image"
                            style="width: 100%; height: auto;">
                        <div class="card-body text-center">
                            <h4 class="card-title text-success">UPDATE PAN</h4>
                            <p class="card-text">You update your PAN card for personal changes, fixing errors, keeping
                                it
                                valid, meeting rules, or adding security features.</p>
                            <div class="d-grid">
                                <a href="./users/update_pan.php"
                                    class="btn btn-outline-success border-3 rounded-0 mb-1 mt-1">Apply
                                    Update Pan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-sm-0 d-flex">
                    <div class="card shadow d-flex flex-column justify-content-between">
                        <img class="card-img-top" src="image/statuspan1.png" alt="Card image">
                        <div class="card-body text-center">
                            <h4 class="card-title text-warning">STATUS CHECK</h4>
                            <p class="card-text">You update your PAN card for personal changes, fixing errors, keeping
                                it
                                valid, meeting rules, or adding security features.</p>
                            <div class="d-grid">
                                <a href="./users/statussearch.php"
                                    class="btn btn-outline-warning border-3 rounded-0 mb-1 mt-1">Your
                                    Application
                                    Status</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>