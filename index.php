


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dash Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            background-color: #e5e5e5;
        }

        :root {
            --header-height: 3rem;
            --nav-width: 68px;
            --first-color: #5543ca;
            --first-color-light: #fff;
            --white-color: #fff;
            --body-font: "Open Sans", sans-serif;
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
        <span style="font-weight: 900;" class="text-primary">User Dash Board</span>
        <span style="font-weight: 900;" class="text-primary">LOGO</span>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-user text-danger' style="font-size: 25px;"></i><span
                        class="nav_logo-name">PAN CARD</span>
                </a>
                <div class="nav_list">
                    <a href="index.php" class="nav_link active"> <i class='bx bxs-dashboard'></i>
                        <span class="nav_name">Dashboard</span> </a>

                    <a href="user/new_pan.php" class="nav_link">
                        <span class="material-symbols-outlined">
                            add_card
                        </span>
                        New Pan Card
                    </a>
                    <a href="user/update_pan.php" class="nav_link"> <span class="material-symbols-outlined">
                            credit_card_gear
                        </span> Update Pan Card </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Status</span>
                    </a> <a href="user/contactus.php" class="nav_link"> <i class='bx bxs-contact' style="font-size: 20px;"></i><span class="nav_name">User
                            Detials</span> </a>

                </div>
            </div>
        </nav>
    </div>


    <div class="container-fluid" style="margin-top: 100px;">






        <div class="row justify-content-center mb-5">
            <div class="col-md-4 mb-4 mb-sm-0 d-flex">
                <div class="card shadow d-flex flex-column justify-content-between">
                    <img class="card-img-top" src="image/newpan.png" alt="Card image" style="width: 100%; height: auto;">
                    <div class="card-body text-center">
                        <h4 class="card-title">NEW PAN</h4>
                        <p class="card-text">The PAN card is vital for identification, taxes, financial transactions,
                            accessing government benefits, and conducting business.</p>
                        <a href="./user/new_pan.php" class="btn btn-primary mb-1 mt-1 btns">New Pan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-sm-0 d-flex">
                <div class="card shadow d-flex flex-column justify-content-between">
                    <img class="card-img-top" src="image/updatepan.png" alt="Card image"
                        style="width: 100%; height: auto;">
                    <div class="card-body text-center">
                        <h4 class="card-title">UPDATE PAN</h4>
                        <p class="card-text">You update your PAN card for personal changes, fixing errors, keeping it
                            valid, meeting rules, or adding security features.</p>
                        <a href="./user/update_pan.php" class="btn btn-primary mb-1 mt-1 btns">Update Pan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-sm-0 d-flex">
                <div class="card shadow d-flex flex-column justify-content-between">
                    <img class="card-img-top" src="image/statuspan1.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">STATUS CHECK</h4>
                        <p class="card-text">You update your PAN card for personal changes, fixing errors, keeping it
                            valid, meeting rules, or adding security features.</p>
                        <a href="./user/statussearch.php" class="btn btn-primary mb-1 mt-1 btns">Your Application
                            Status</a>
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