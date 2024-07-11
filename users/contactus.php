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
    <title> Contact Us</title>
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
        <a href="statussearch.php"><i class="fa fa-search me-2" style="font-size: 28px;" aria-hidden="true"></i><span>Check Status
        </span></a>
        <a class="active" href=""><i class="fa fa-phone-square me-2" style="font-size: 28px;"
                aria-hidden="true"></i><span>Contact US </span></a>
    </div>

    <div class="content">
        <div class="container-fluid">
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
                                    <input type="email" class="form-control" id="enquiry_email"
                                        placeholder="Enter Email" name="enquiry_email" required>
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