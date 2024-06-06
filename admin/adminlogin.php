<?php
include '../server.php';
session_start();
$login_error_message = '';
if (isset($_POST['admin_log_submit'])) {
    $admin_log_uname = $_POST['admin_log_uname'];
    $admin_log_pass = $_POST['admin_log_pass'];
    $querys = new Database();
    $admin_reg_id = $querys->select_admin_reg_id($admin_log_uname, $admin_log_pass);
    if ($admin_reg_id) {
        $_SESSION['admin_reg_id'] = $admin_reg_id;
        header('Location: index.php');
        exit();
    } else {
        $login_error_message = 'Incorrect email or password';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_reg_log</title>
    <link rel="stylesheet" href="adminlogs.css">
   
</head>

<body>
    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup"><span>or</span>Admin Login</h2>
            <?php if (!empty($login_error_message)): ?>
                <div class="" style="color: red;">
                    <?php echo $login_error_message; ?>
                </div>
            <?php endif; ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-holder">
                    <input type="email" name="admin_log_uname" class="input" placeholder="User Name" required />
                    <input type="password" name="admin_log_pass" class="input" placeholder="Password" required />
                </div>
                <input type="submit" class="submit-btn" name="admin_log_submit" value="Login">
            </form>
        </div>
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login"><span>or</span>Register</h2>
                <form action="../forms_datas.php" method="post" enctype="multipart/form-data">
                    <div class="form-holder">
                        <input type="text" name="admin_reg_name" class="input" placeholder="Name" required />
                        <input type="email" name="admin_reg_email" class="input" placeholder="Email" required />
                        <input type="tel" maxlength="10" name="admin_reg_mobile" class="input" placeholder="Mobile Number" required />
                        <input type="password " name="admin_reg_pass" class="input" placeholder="Password" required />
                        <input type="password" name="admin_reg_cpass" class="input" placeholder="Confirim Password"
                            required />
                        <input type="file" name="admin_reg_profile" class="input" placeholder="Mobile Number"
                            accept="image/*" required />
                    </div>
                    <input type="submit" class="submit-btn" name="admin_reg_submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    <script>
        console.clear();

        const loginBtn = document.getElementById('login');
        const signupBtn = document.getElementById('signup');

        loginBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode.parentNode;
            Array.from(e.target.parentNode.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    signupBtn.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });

        signupBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode;
            Array.from(e.target.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    loginBtn.parentNode.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });
    </script>
</body>

</html>