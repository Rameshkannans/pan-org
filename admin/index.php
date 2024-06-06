<?php
session_start();
if (!isset($_SESSION['admin_reg_id'])) {
    header('Location: adminlogin.php');
    exit();
}
include '../server.php';
$querys = new Database();
$ad_pro = $_SESSION['admin_reg_id'];
$admin_profile = $querys->feth_admin_pro($ad_pro);
$fetch_all_admin_reg = $querys->fadmin_register();

$fetched_new_pan = $querys->select_new_pan_data();
$num_of_new_pan = mysqli_num_rows($fetched_new_pan);

$fetched_update_pan = $db->select_update_pan_data();
$num_of_update_pan = mysqli_num_rows($fetched_update_pan);

$fetched_deleted_new_pan = $querys->select_deleted_new_pan_data();
$num_of_deleted_new_pan = mysqli_num_rows($fetched_deleted_new_pan);

$fetched_deleted_update_pan = $db->select_deleted_update_pan_data();
$num_of_deleted_update_pan = mysqli_num_rows($fetched_deleted_update_pan);

$fetched_enquiries = $db->select_enquiry_data();
$num_of_fetched_enquiries = mysqli_num_rows($fetched_enquiries);


if ($fetched_new_pan && $fetched_new_pan->num_rows > 0) {
    $completedCountnewpan = 0;
    while ($new_pan_row = $fetched_new_pan->fetch_assoc()) {
        if ($new_pan_row['new_status'] == 'Completed') {
            $completedCountnewpan++;
        }
    }
}

if ($fetched_update_pan && $fetched_update_pan->num_rows > 0) {
    $completedCountupdatepan = 0;
    while ($update_pan_row = $fetched_update_pan->fetch_assoc()) {
        if ($update_pan_row['update_status'] == 'Completed') {
            $completedCountupdatepan++;
        }
    }
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
        body{
            font-family: "Bree Serif", serif;
        }
    </style>
    <style>
        .switch {
            --inactive-bg: #cfd8dc;
            --active-bg: #00e676;
            --size: 2rem;
            appearance: none;
            width: calc(var(--size) * 2.2);
            height: var(--size);
            display: inline-block;
            border-radius: calc(var(--size) / 2);
            cursor: pointer;
            background-color: var(--inactive-bg);
            background-image: radial-gradient(circle calc(var(--size) / 2.1),
                    #fff 100%,
                    #0000 0),
                radial-gradient(circle calc(var(--size) / 1.5), #0003 0%, #0000 100%);
            background-repeat: no-repeat;
            background-position: calc(var(--size) / -1.75) 0;
            transition: background 0.2s ease-out;
        }

        .switch:checked {
            background-color: var(--active-bg);
            background-position: calc(var(--size) / 1.75) 0;
        }

        .co {
            color: orange;
        }

        .co:hover {
            color: aqua;
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
                    <a href="index.php" class="nav_link active"> <i class='bx bxs-dashboard'></i>
                        <span class="nav_name">Dashboard</span> </a>
                    <a href="rec_new_pan.php" class="nav_link"> <i class='bx bx-id-card'></i> <span class="nav_name">New
                            Pan</span> </a>
                    <a href="rec_update_pan.php" class="nav_link"> <i class='bx bxs-card'></i>
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
        <div class="row justify-content-center my-5">
            <div class="col-md-4 col-sm-12 p-4 bg-secondary bg-opacity-25">
                <div class="card  shadow-lg">
                    <div class="card-header text-center p-3">
                        <span style="font-weight: 900;">New PAN Card Applications</span>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <i class='bx bxs-card text-warning' style="font-size: 50px;"></i>
                            </div>
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <span style="font-size: 30px;"><?php echo $num_of_new_pan; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 p-4 bg-secondary bg-opacity-25">
                <div class="card">
                    <div class="card-header text-center p-3">
                        <span style="font-weight: 900;">Update PAn Card Applications</span>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <i class='bx bxs-card text-warning' style="font-size: 50px;"></i>
                            </div>
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <span style="font-size: 30px;"><?php echo $num_of_update_pan; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 p-4 bg-secondary bg-opacity-25">
                <div class="card">
                    <div class="card-header text-center p-3">
                        <span style="font-weight: 900;">Enquiries</span>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <i class='bx bxs-card text-warning' style="font-size: 50px;"></i>
                            </div>
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <span style="font-size: 30px;"><?php echo $num_of_fetched_enquiries; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-centermy-5 my-5">
            <div class="col-md-4 col-sm-12 p-4 bg-secondary bg-opacity-25">
                <div class="card">
                    <div class="card-header text-center p-3">
                        <span style="font-weight: 900;">Deleted New Pan Applications</span>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <a href="deletednewpancards.php"><i class='bx bxs-card co'
                                        style="font-size: 50px;"></i></a>
                            </div>
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <span style="font-size: 30px;"><?php echo $num_of_deleted_new_pan; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 p-4 bg-secondary bg-opacity-25 ">
                <div class="card">
                    <div class="card-header text-center p-3">
                        <span style="font-weight: 900;">Deleted Updated Pan Applications</span>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <a href="deletedupdatepancards.php"><i class='bx bxs-card co'
                                        style="font-size: 50px;"></i></a>
                            </div>
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <span style="font-size: 30px;"><?php echo $num_of_deleted_update_pan; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 p-4 bg-secondary bg-opacity-25 ">
                <div class="card">
                    <div class="card-header text-center p-3">
                        <span style="font-weight: 900;">completed New Pan Card Applications</span>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-4 p-1 text-center">
                                <i class='bx bxs-card text-warning' style="font-size: 50px;"></i>
                            </div>
                            <div class="col-md-4 p-1 text-center">
                                <span style="font-size: 30px;">
                                    <?php
                                    if (isset($completedCountnewpan)) {
                                        echo $completedCountnewpan;
                                    }
                                    else{
                                        echo "0";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-centermy-5">
            <div class="col-md-4 col-sm-12 p-4 bg-secondary bg-opacity-25">
                <div class="card">
                    <div class="card-header text-center p-3">
                        <span style="font-weight: 900;">completed updated Pan Card Applications</span>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <i class='bx bxs-card text-warning' style="font-size: 50px;"></i>
                            </div>
                            <div class="col-md-4 p-2 justify-content-center d-flex align-items-center">
                                <span style="font-size: 30px;">
                                    <?php
                                    if (isset($completedCountupdatepan)) {
                                        echo $completedCountupdatepan;
                                    }
                                    else{
                                        echo "0";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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