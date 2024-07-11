<?php
include '../server.php';
$login_error_message = '';
if (isset($_POST['user_statuss'])) {
    $status_search_recept = $_POST['status_search_recept'];
    $querys = new Database();
    $sel_user_status_new = $querys->search_user_status_new($status_search_recept);
    $sel_user_status_update = $querys->search_user_status_update($status_search_recept);

    if (!$sel_user_status_new && !$sel_user_status_update) {
        $login_error_message = 'Incorrect Recept number';
    }
}
?>


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
    <link rel="stylesheet" href="../newStyles.css">
    <title>Check Application Status</title>
    <style>
        body {
            font-family: "Bree Serif", serif;
        }

        .bx.bx-id-card,
        .bx.bxs-card,
        .bx.bxs-dashboard,
        .bx.bxs-color {
            font-size: 24px;
        }

        .watermark {
            background-image: url('../image/wa.png');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <a href="../index.php"><i class="fa fa-home me-2" style="font-size: 30px;" aria-hidden="true"></i> <span>Home</span> </a>
        <a href="new_pan.php"><i class="fa fa-id-card me-2" style="font-size: 25px;" aria-hidden="true"></i><span>New Pan</span></a>
        <a href="update_pan.php"><i class="fa fa-address-card-o me-2" style="font-size: 25px;"
                aria-hidden="true"></i><span>Correction Pan</span></a>
        <a class="active" href=""><i class="fa fa-search me-2" style="font-size: 28px;" aria-hidden="true"></i><span> Check Status
        </span></a>
        <a href="contactus.php"><i class="fa fa-phone-square me-2" style="font-size: 28px;"
                aria-hidden="true"></i><span>Contact US</span></a>
    </div>

    <div class="content">
        <div class="container-fluid mt-5">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow d-flex flex-column justify-content-between">
                        <div class="card-header text-center">
                            <h5 class="my-4 text-warning" style="font-weight: 900;">Find Your Application Status</h5>
                        </div>
                        <div class="card-body text-center ">
                            <form class=" d-flex justify-content-center" action="" method="post"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 p-2">
                                        <input class="form-control  rounded-0 " type="text" maxlength="8"
                                            name="status_search_recept" type="text" placeholder="Enter Recept" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12 p-2">
                                        <input type="submit" class="btn btn-primary rounded-0" value="Submit"
                                            name="user_statuss">
                                    </div>
                                </div>
                            </form>


                            <?php if (!empty($login_error_message)): ?>
                                <div class="alert alert-danger my-4" role="alert">
                                    <?php echo $login_error_message; ?>
                                </div>
                            <?php endif; ?>
                            <hr>


                            <?php if (isset($sel_user_status_new['new_pan_id']) || isset($sel_user_status_update['update_pan_id'])) { ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 text-start p-5">
                                        <p><span class="fw-bold">Recept number : </span>
                                            <?php
                                            if (isset($sel_user_status_new['new_pan_receipt_number']) || isset($sel_user_status_update['update_pan_receipt_number'])) {
                                                echo isset($sel_user_status_new['new_pan_receipt_number']) ? $sel_user_status_new['new_pan_receipt_number'] : $sel_user_status_update['update_pan_receipt_number'];
                                            }
                                            ?>
                                        </p>
                                        <p><span class="fw-bold">Name : </span>
                                            <?php
                                            if (isset($sel_user_status_new['new_call_name']) || isset($sel_user_status_update['update_call_name'])) {
                                                echo isset($sel_user_status_new['new_call_name']) ? $sel_user_status_new['new_call_name'] : $sel_user_status_update['update_call_name'];
                                            }
                                            ?>
                                        </p>
                                        <p><span class="fw-bold">Mobile Number : </span>
                                            <?php
                                            if (isset($sel_user_status_new['new_mobile_number']) || isset($sel_user_status_update['update_mobile_number'])) {
                                                echo isset($sel_user_status_new['new_mobile_number']) ? $sel_user_status_new['new_mobile_number'] : $sel_user_status_update['update_mobile_number'];
                                            }
                                            ?>
                                        </p>
                                        <p><span class="fw-bold">Application Type : </span>
                                            <?php
                                            if (isset($sel_user_status_new['new_category']) || isset($sel_user_status_update['update_category'])) {
                                                echo isset($sel_user_status_new['new_category']) ? $sel_user_status_new['new_category'] : $sel_user_status_update['update_category'];
                                            }
                                            ?>
                                        </p>
                                        <h5><span class="fw-bold text-success">Status : </span>
                                            <?php
                                            if (isset($sel_user_status_new['new_status']) || isset($sel_user_status_update['update_status'])) {
                                                echo isset($sel_user_status_new['new_status']) ? $sel_user_status_new['new_status'] : $sel_user_status_update['update_status'];
                                            }
                                            ?>
                                        </h5>

                                    </div>
                                    <div class="col-md-6 col-sm-12 p-5">
                                        <img src="<?php
                                        echo (isset($sel_user_status_new['new_profile_picture']) || isset($sel_user_status_update['update_profile_picture']))
                                            ? '../' . (isset($sel_user_status_new['new_profile_picture']) ? $sel_user_status_new['new_profile_picture'] : $sel_user_status_update['update_profile_picture'])
                                            : '';
                                        ?>" alt="Profile Photo" class="img-fluid rounded-1 my-2"
                                            style="width: 100px; height: 100px;">


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        nav.classList.toggle('show')
                        toggle.classList.toggle('bx-x')
                        bodypd.classList.toggle('body-pd')
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }
            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')
            const linkColor = document.querySelectorAll('.nav_link')
            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

        });
    </script>
</body>

</html>