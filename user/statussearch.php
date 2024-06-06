<?php
include '../server.php';
$login_error_message = '';
if (isset($_POST['user_statuss'])) {
    $status_search_recept = $_POST['status_search_recept'];
    $querys = new Database();
    $sel_user_status_new = $querys->search_user_status_new($status_search_recept);
    $sel_user_status_update = $querys->search_user_status_update($status_search_recept);

    if (!$sel_user_status_new && !$sel_user_status_update) {
        $login_error_message = 'Incorrect mobile number';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Application Status Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300..700&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            background-color: #e5e5e5;
            font-family: "Bree Serif", serif;
        }

        :root {
            --header-height: 3rem;
            --nav-width: 68px;
            --first-color: #5543ca;
            --first-color-light: #fff;
            --white-color: #fff;
            /* --body-font: "Open Sans", sans-serif; */
            --normal-font-size: 13px;
            --z-fixed: 100
        }

        *,
        ::before,
        ::after {
            box-sizing: border-box
        }

        body {
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s
        }

        a {
            text-decoration: none
        }

        .header {
            width: 100%;
            height: var(--header-height);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: var(--white-color);
            z-index: var(--z-fixed);
            transition: .5s
        }

        .header_toggle {
            color: var(--first-color);
            font-size: 1.5rem;
            cursor: pointer
        }

        .header_img {
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden
        }

        .header_img img {
            width: 40px;
        }

        .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--first-color);
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed)
        }

        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden
        }

        .nav_logo,
        .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem
        }

        .nav_logo {
            margin-bottom: 2rem
        }

        .nav_logo-icon {
            font-size: 1.25rem;
            color: var(--white-color)
        }

        .nav_logo-name {
            color: var(--white-color);
            font-weight: 700
        }

        .nav_link {
            position: relative;
            color: var(--first-color-light);
            margin-bottom: 1.5rem;
            transition: .3s
        }

        .nav_link:hover {
            color: var(--white-color)
        }

        .nav_icon {
            font-size: 1.25rem
        }

        .show {
            left: 0
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 1rem)
        }

        .active {
            color: var(--white-color)
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }

        .height-100 {
            height: 100vh
        }

        @media screen and (min-width: 768px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem)
            }

            .header {
                height: calc(var(--header-height) + 1rem);
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
            }

            .header_img {
                width: 70px;
                height: 70px
            }

            .header_img img {
                width: 75px;
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0
            }

            .show {
                width: calc(var(--nav-width) + 156px)
            }

            .body-pd {
                padding-left: calc(var(--nav-width) + 188px)
            }
        }

        .bx.bx-id-card,
        .bx.bxs-card,
        .bx.bxs-dashboard,
        .bx.bxs-color {
            font-size: 24px;
        }
    </style>
</head>

<body id="body-pd">
    <header class="header shadow" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <span style="font-weight: 900;" class="text-primary">Status Search</span>
        <span style="font-weight: 900;" class="text-primary">LOGO</span>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-user text-danger' style="font-size: 25px;"></i><span
                        class="nav_logo-name">PAN CARD</span>
                </a>
                <div class="nav_list">
                    <a href="../index.php" class="nav_link"> <i class='bx bxs-dashboard'></i>
                        <span class="nav_name">Dashboard</span> </a>

                    <a href="new_pan.php" class="nav_link">
                        <span class="material-symbols-outlined">
                            add_card
                        </span>
                        New Pan Card
                    </a>
                    <a href="update_pan.php" class="nav_link"> <span class="material-symbols-outlined">
                            credit_card_gear
                        </span> Update Pan Card </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Status</span>
                    </a> <a href="contactus.php" class="nav_link">  <i class='bx bxs-contact' style="font-size: 20px;"></i><span class="nav_name">User
                            Detials</span> </a>
                </div>
            </div>
        </nav>
    </div>


    <div class="container-fluid" style="margin-top: 100px;">




        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow d-flex flex-column justify-content-between">
                    <div class="card-header text-center">
                        <h5 class="my-4 text-warning" style="font-weight: 900;">Find Your Application Status</h5>
                    </div>
                    <div class="card-body text-center ">
                        <form class=" d-flex justify-content-center" action="" method="post"
                            enctype="multipart/form-data">
                            <input class="form-control me-2 rounded-0 w-50"
                                type="text" maxlength="8"
                                name="status_search_recept" 
                                type="text" placeholder="Enter Recept number" required>
                            <input type="submit" class="btn btn-primary rounded-0" value="Submit" name="user_statuss">
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
                                    ?>" alt="Profile Photo" class="img-fluid rounded-1 my-2" style="width: 100px; height: 100px;">


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>




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