<?php
include '../server.php';
$querys = new Database();

$fetched_update_pan = $db->select_last_inserted_update_pan_row();
$num_of_update_pan = mysqli_num_rows($fetched_update_pan);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pan Apply Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;400i;700;900&display=swap"
        rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            background-color: #f8faf5;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 3px #C8D0D8;
            text-align: center;
        }



        h1 {
            color: #88B04B;
            font-weight: 900;
            font-size: 24px;
            margin-bottom: 10px;
        }

        h2 {
            color: #404F5E;
            font-size: 20px;
            margin: 10px 0;
        }

        p {
            color: #404F5E;
            font-size: 16px;
            margin: 0;
        }

        .btn-round {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            margin: auto;
        }

        .success-checkmark {
            width: 80px;
            height: 115px;
            margin: 0 auto;

            .check-icon {
                width: 80px;
                height: 80px;
                position: relative;
                border-radius: 50%;
                box-sizing: content-box;
                border: 4px solid #4CAF50;

                &::before {
                    top: 3px;
                    left: -2px;
                    width: 30px;
                    transform-origin: 100% 50%;
                    border-radius: 100px 0 0 100px;
                }

                &::after {
                    top: 0;
                    left: 30px;
                    width: 60px;
                    transform-origin: 0 50%;
                    border-radius: 0 100px 100px 0;
                    animation: rotate-circle 4.25s ease-in;
                }

                &::before,
                &::after {
                    content: '';
                    height: 100px;
                    position: absolute;
                    background: #FFFFFF;
                    transform: rotate(-45deg);
                }

                .icon-line {
                    height: 5px;
                    background-color: #4CAF50;
                    display: block;
                    border-radius: 2px;
                    position: absolute;
                    z-index: 10;

                    &.line-tip {
                        top: 46px;
                        left: 14px;
                        width: 25px;
                        transform: rotate(45deg);
                        animation: icon-line-tip 0.75s;
                    }

                    &.line-long {
                        top: 38px;
                        right: 8px;
                        width: 47px;
                        transform: rotate(-45deg);
                        animation: icon-line-long 0.75s;
                    }
                }

                .icon-circle {
                    top: -4px;
                    left: -4px;
                    z-index: 10;
                    width: 80px;
                    height: 80px;
                    border-radius: 50%;
                    position: absolute;
                    box-sizing: content-box;
                    border: 4px solid rgba(76, 175, 80, .5);
                }

                .icon-fix {
                    top: 8px;
                    width: 5px;
                    left: 26px;
                    z-index: 1;
                    height: 85px;
                    position: absolute;
                    transform: rotate(-45deg);
                    background-color: #FFFFFF;
                }
            }
        }

        @keyframes rotate-circle {
            0% {
                transform: rotate(-45deg);
            }

            5% {
                transform: rotate(-45deg);
            }

            12% {
                transform: rotate(-405deg);
            }

            100% {
                transform: rotate(-405deg);
            }
        }

        @keyframes icon-line-tip {
            0% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px;
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px;
            }

            100% {
                width: 25px;
                left: 14px;
                top: 45px;
            }
        }

        @keyframes icon-line-long {
            0% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            84% {
                width: 55px;
                right: 0px;
                top: 35px;
            }

            100% {
                width: 47px;
                right: 8px;
                top: 38px;
            }
        }

        /* ==================== */
    </style>
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card shadow-lg">
                <div class="success-checkmark">
                    <div class="check-icon">
                        <span class="icon-line line-tip"></span>
                        <span class="icon-line line-long"></span>
                        <div class="icon-circle"></div>
                        <div class="icon-fix"></div>
                    </div>
                </div>
                <h1>Application Sent Successfully</h1>
                <span>(Update Pan)</span>
                <p>Receipt number</p>
                <?php while ($update_pan_row = $fetched_update_pan->fetch_assoc()) { ?>
                    <h2 class="text-primary" style="font-weight: 800;"><?php echo $update_pan_row['update_pan_receipt_number']; ?></h2>
                <?php } ?>
                <p>Receipt number sent to your mobile number</p>
                <div class="text-center my-4">
                    <a href="../index.php" style="text-decoration: none;"><button
                            class="btn border border-5 btn-outline-warning btn-round">OK</button></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("button").click(function () {
            $(".check-icon").hide();
            setTimeout(function () {
                $(".check-icon").show();
            }, 10);
        });
    </script>
</body>

</html>