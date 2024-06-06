<?php
include '../server.php';
session_start();
if (!isset($_SESSION['admin_reg_id'])) {
    header('Location: adminlogin.php');
    exit();
}
if (isset($_POST['admin_update_pan_id_submit'])) {
    $admin_update_pan_id = $_POST['admin_update_pan_id'];
    $db = new Database();
    $fetched_update_pan_id = $db->select_update_pan_data_id($admin_update_pan_id);

    $ad_pro = $_SESSION['admin_reg_id'];
    $admin_profile = $db->feth_admin_pro($ad_pro);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dash Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300..700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Bree Serif", serif;
        }

        table {
            border-collapse: collapse;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            #content,
            #content * {
                visibility: visible;
            }

            #content {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
        }
    </style>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <span style="font-weight: 1000;">ID:<span style="font-weight: 600;"
                class="ms-2"><?php echo $admin_profile['admin_reg_id']; ?></span> </span>
        <span style="font-weight: 1000;">Name:<span style="font-weight: 600;"
                class="ms-2"><?php echo $admin_profile['admin_reg_name']; ?></span> </span>
        <div class="header_img"> <img src="../<?php echo $admin_profile['admin_reg_profile']; ?>" alt="Profile Photo"
                class="img-fluid rounded-5 my-2 "> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bxs-color'></i><span class="nav_logo-name">PAN CARD</span>
                </a>
                <div class="nav_list">
                    <a href="index.php" class="nav_link"> <i class='bx bxs-dashboard'></i>
                        <span class="nav_name">Dashboard</span> </a>
                    <a href="rec_new_pan.php" class="nav_link"> <i class='bx bx-id-card'></i> <span class="nav_name">New
                            Pan</span> </a>
                    <a href="rec_update_pan.php" class="nav_link active"><i class='bx bxs-card'></i>
                        <span class="nav_name">Update Pan</span> </a>
                    <!-- <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Bookmark</span></a> -->
                    <a href="enquiries_details.php" class="nav_link"> <i class='bx bx-comment-dots'
                            style="font-size: 20px;"></i><span class="nav_name">Enquiries</span> </a>
                    <a href="admin.php" class="nav_link"> <i style="font-size: 28px;" class='bx bx-user-check '></i>
                        <span class="nav_name">ADMIN</span> </a>
                </div>
            </div> <a href="adminlogout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>

    <div class="container-fluid" style="margin-top: 100px;">
        <span class=""><a href="rec_update_pan.php" class="btn btn-danger btn-sm rounded-0"><i
                    class='bx bx-arrow-back'></i>
                BACK</a></span>
        <div class="card" style="border-radius: 0%;">
            <div class="card-header p-4" style="background-color: bisque;">
                <span style="font-weight: 900;">Candidate Details (Update Pan card) </span>
            </div>
            <div class="card-body p-3 " style="background-color: gainsboro;">
                <div class="row">
                    <div class="col-md-12 col-sm-12 p-2 bgs bg-opacity-50">
                        <div class="row p-2">
                            <div class="d-flex">
                                <h5 class="me-2 text-info" style="font-weight: 900; ">Recept Number
                                    :</h5>
                                <h5 style="letter-spacing: 2px;">
                                    <?php echo $fetched_update_pan_id['update_pan_receipt_number']; ?>
                                </h5>
                            </div>
                            <!-- <div class="d-flex justify-content-end">
                                <h5 class="me-2 text-info" style="font-weight: 900; ">OLD PAN CARD
                                    NUMBER :</h5>
                                <h5 style="letter-spacing: 2px;">
                                    <?php echo $fetched_update_pan_id['update_oldpan_number']; ?>
                                </h5>
                            </div> -->
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <img src="../<?php echo $fetched_update_pan_id['update_profile_picture']; ?>"
                                    alt="Profile Photo" class="img-fluid rounded-1 my-2 "
                                    style="width: 100px; height: 100px;">
                                <a class="btn btn-outline-warning bg-sm mx-2 my-2"
                                    href="../<?php echo $fetched_update_pan_id['update_profile_picture']; ?>"
                                    download><i class='bx bx-download'></i></a>
                                <a class="btn btn-outline-success bg-sm"
                                    href="../<?php echo $fetched_update_pan_id['update_profile_picture']; ?>"
                                    target="_blank"><i class='bx bxs-image-alt'></i></a>
                            </div>
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">ID:</span><span><?php echo $fetched_update_pan_id['update_pan_id']; ?></span>
                            </div>
                            <div class="col-md-3 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Name:</span><span><?php echo $fetched_update_pan_id['update_call_name']; ?></span>
                            </div>
                            <div class="col-md-3 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Email:</span><span><?php echo $fetched_update_pan_id['update_email']; ?></span>
                            </div>
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Mobile:</span><span><?php echo $fetched_update_pan_id['update_mobile_number']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 col-sm-12 p-2 bgs bg-opacity-50">
                        <div class="row p-2">
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <img src="../<?php echo $fetched_update_pan_id['update_signature']; ?>"
                                    alt="Profile Photo" class="img-fluid my-2 rounded-2"
                                    style="width: 100px; height: 100px;">
                                <a class="btn btn-outline-warning mx-2 my-2"
                                    href="../<?php echo $fetched_update_pan_id['update_signature']; ?>" download><i
                                        class='bx bx-download'></i></a>
                                <a class="btn btn-outline-success"
                                    href="../<?php echo $fetched_update_pan_id['update_signature']; ?>"
                                    target="_blank"><i class='bx bxs-image-alt'></i></a>
                            </div>
                            <div class="col-md-5 d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                    href="../<?php echo $fetched_update_pan_id['update_oldpan_doc']; ?>"
                                    target="_blank">
                                    Old PAN <i class='bx bx-download'></i></a>
                            </div>
                            <!-- <div class="col-md-3 p-5 d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                    href="../<?php echo $fetched_update_pan_id['update_aadhaar_doc']; ?>"
                                    target="_blank">
                                    Aadhaar <i class='bx bx-download'></i></a>
                            </div> -->
                            <div class="col-md-5 shadow d-flex align-items-center justify-content-center">
                                <div class="row justify-content-center">
                                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                            href="../<?php echo $fetched_update_pan_id['update_name_proof']; ?>"
                                            target="_blank">
                                            Name Proof <i class='bx bx-download'></i></a>
                                    </div>
                                    <div class="col-md-7 p-4 ">
                                        <div class="row">
                                            <div class="col-md-12 ps-5 my-1">
                                                <span style="font-weight: 900;">F.
                                                    Name:
                                                </span><span><?php echo $fetched_update_pan_id['update_first_name']; ?></span>
                                            </div>
                                            <div class="col-md-12 ps-5 my-1">
                                                <span style="font-weight: 900;">M.
                                                    Name:
                                                </span><span><?php echo $fetched_update_pan_id['update_middle_name']; ?></span>
                                            </div>
                                            <div class="col-md-12 ps-5 my-1">
                                                <span style="font-weight: 900;">L.
                                                    Name:
                                                </span><span><?php echo $fetched_update_pan_id['update_lastname']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-12 col-sm-12 p-2 bgs bg-opacity-50">
                        <div class="row p-2">
                            <div class="col-md-6 p-2 d-flex align-items-center justify-content-center">
                                <h6 class="me-2 text-secondary" style="font-weight: 900;">OLD PAN CARD
                                    NUMBER :</h6>
                                <h6 style="letter-spacing: 2px;">
                                    <?php echo $fetched_update_pan_id['update_oldpan_number']; ?>
                                </h6>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="">
                                    <span class="mx-5" style="font-weight:700">Candidate Aadhar (front): </span>
                                    <img src="../<?php echo $fetched_update_pan_id['update_pan_aadhar_front']; ?>"
                                        alt="Profile Photo" class="img-fluid rounded-1 my-2 "
                                        style="width: 100px; height: 100px;">
                                    <a class="btn btn-outline-warning bg-sm mx-2 my-2"
                                        href="../<?php echo $fetched_update_pan_id['update_pan_aadhar_front']; ?>"
                                        download><i class='bx bx-download'></i></a>
                                    <a class="btn btn-outline-success bg-sm"
                                        href="../<?php echo $fetched_update_pan_id['update_pan_aadhar_front']; ?>"
                                        target="_blank"><i class='bx bxs-image-alt'></i></a>
                                </div>
                                <div>
                                    <span class="mx-5" style="font-weight:700">Candidate Aadhar (back): </span>
                                    <img src="../<?php echo $fetched_update_pan_id['update_pan_aadhar_back']; ?>"
                                        alt="Profile Photo" class="img-fluid rounded-1 my-2 "
                                        style="width: 100px; height: 100px;">
                                    <a class="btn btn-outline-warning bg-sm mx-2 my-2"
                                        href="../<?php echo $fetched_update_pan_id['update_pan_aadhar_back']; ?>"
                                        download><i class='bx bx-download'></i></a>
                                    <a class="btn btn-outline-success bg-sm"
                                        href="../<?php echo $fetched_update_pan_id['update_pan_aadhar_back']; ?>"
                                        target="_blank"><i class='bx bxs-image-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12 bgs p-2 bg-opacity-50">
                        <div class="row p-2 shadow">
                            <div class="col-md-3 p-5 d-flex align-items-center justify-content-center">
                                <span style="font-weight: 900;" class="me-2">
                                    Aadhaar NO.:
                                </span><span><?php echo $fetched_update_pan_id['update_aadhaar_number']; ?></span>
                            </div>
                            <div class="col-md-6 p-5 d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                    href="../<?php echo $fetched_update_pan_id['update_fathername_proof']; ?>"
                                    target="_blank">
                                    Father Name Proof <i class='bx bx-download'></i></a>
                            </div>
                            <div class="col-md-3 p-5 d-flex align-items-center justify-content-center">
                                <span style="font-weight: 900;" class="me-2">
                                    Father Name:
                                </span><span><?php echo $fetched_update_pan_id['update_father_name']; ?></span>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12 bgs p-2 bg-opacity-50">
                        <div class="row p-2 shadow">
                            <div class="col-md-6 p-5 d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                    href="../<?php echo $fetched_update_pan_id['update_dob_proof']; ?>" target="_blank">
                                    DOB Proof <i class='bx bx-download'></i></a>
                            </div>
                            <div class="col-md-6 p-5 d-flex align-items-center justify-content-center">
                                <span style="font-weight: 900;" class="me-2">
                                    DOB:
                                </span><span><?php echo $fetched_update_pan_id['update_dob']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                <!-- <div class="row">
                    <div class="col-md-12 col-sm-12 p-5 bg-opacity-50 text-center bgs">
                        <button class="btn btn-danger">Download Candidate Details (PDF)</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>






    <div class="my-5">
        <button class="btn btn-danger p-2" id="printButton">Print Details</button>
    </div>

    <div class="container" id="content" style="display: none;">
        <table class="table table-warning table-hover">
            <thead>
                <tr>
                    <th>profile</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="../<?php echo $fetched_update_pan_id['update_profile_picture']; ?>"
                            alt="Profile Photo" class="img-fluid rounded-1 my-2 " style="width: 100px; height: 100px;">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>








    <script>


        document.getElementById('printButton').addEventListener('click', function () {
            document.getElementById('content').style.display = 'block';
            window.print();
            document.getElementById('content').style.display = 'none';
        });



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