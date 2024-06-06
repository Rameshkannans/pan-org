<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="adminregister.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300..700&display=swap"
        rel="stylesheet">
        <style>
        body{
            font-family: "Bree Serif", serif;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="login-box">
            <div class="d-flex justify-content-center my-4 align-item-center">
                <img src="male.png" class="img a rounded-5" alt="">
            </div>
            <form action="../forms_datas.php" method="post"  enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-sm-12 c1">
                        <div class="user-box">
                            <input type="text" name="admin_reg_name" required="">
                            <label>Name</label>
                        </div>
                        <div class="user-box">
                            <input type="email" name="admin_reg_email" required="">
                            <label>Email</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="admin_reg_mobile" required="">
                            <label>Mobile No</label>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 c1">
                        <div class="user-box">
                            <input type="password" name="admin_reg_pass" required="">
                            <label>Password</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="admin_reg_cpass" required="">
                            <label>Confirm Password</label>
                        </div>
                        <span class="text-light">Profille picture</span>
                        <input type="file" class="form-control bg-transparent" name="admin_reg_profile"
                            accept="image/*">
                    </div>

                </div>
                <div class="text-center">
                    <button class="a btn" name="admin_reg_submit" style="border: none;" href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Register
                    </button>
                </div>
            </form>
            <hr />
            <div class="text-center">
                <a href="adminlogin.php" class="btn btn-outline-dark ">Go to login</a>
            </div>

        </div>
    </div>

</body>

</html>