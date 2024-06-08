<?php
// session_start();
// if (!isset($_SESSION['user_reg_id'])) {
//     header('Location: user/logreg.php');
//     exit();
// }
// include 'server.php';
// $querys = new Database();
// $user_pro = $_SESSION['user_reg_id'];
// $user_profile = $querys->feth_user_pro($user_pro);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
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
            font-family: "Bree Serif", serif;
            background-color: #e5e5e5;
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

        .card {
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
            border: none;
        }

        .form-control {

            border-radius: 2px;
        }

        .form-floating {
            margin-bottom: 1.5rem;
        }


        textarea.form-control {
            height: 100px !important;
        }
    </style>
</head>

<body id="body-pd">
    <header class="header shadow" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <span style="font-weight: 900;" class="text-primary">Contact US</span>
        <span style="font-weight: 900;" class="text-primary">LOGO</span>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-user text-danger' style="font-size: 25px;"></i><span
                        class="nav_logo-name">PAN CARD</span>
                </a>
                <div class="nav_list">
                    <a href="../index.php" class="nav_link "> <i class='bx bxs-dashboard'></i>
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
                    </a> <a href="" class="nav_link active"> <i class='bx bxs-contact' style="font-size: 20px;"></i>
                        <span class="nav_name">User
                            Detials</span> </a>

                </div>
            </div>
        </nav>
    </div>


    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row justify-content-center my-5">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-center">
                        <span class="fs-2 fw-bold text-light">Contact US</span>
                    </div>
                    <div class="card-body">
                        <form action="../forms_datas.php" method="post" enctype="multipart/form-data">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="enquiry_name" placeholder="Enter Name"
                                    name="enquiry_name" oninput="validateInput('enquiry_name')" required>
                                <label for="enquiry_name" class="text-secondary">Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="enquiry_email" placeholder="Enter Email"
                                    name="enquiry_email" required>
                                <label for="enquiry_email" class="text-secondary">Email</label>
                            </div>
                            <div class="form-floating">
                                <input type="tel" class="form-control"
                                    oninput="this.value = this.value.replace(/[^6789\d]/g, '');" maxlength="10"
                                    id="enquiry_mobile" placeholder="Enter Mobile" pattern="[6789]\d{9}"
                                    title="Please enter a 10-digit number starting with 6, 7, 8, or 9"
                                    name="enquiry_mobile" required>
                                <label for="enquiry_mobile" class="text-secondary">Mobile</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="enquiry_description" name="enquiry_description"
                                    placeholder="Enter your Description" required></textarea>
                                <label for="enquiry_description" class="text-secondary">Message</label>
                            </div>
                            <button type="submit" class="btn btn-primary my-3 px-5 fw-bold mx-auto d-flex"
                                name="enquiry_data_submit">Submit</button>
                        </form>
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

            function validateInput(inputId) {
                const inputField = document.getElementById(inputId);
                const input = inputField.value;
                const regex = /^[a-zA-Z\s]*$/;
                if (!regex.test(input)) {
                    inputField.value = input.replace(/[^a-zA-Z\s]/g, '');
                }
            }
        </script>
</body>

</html>