<?php
session_start();

if (!isset($_SESSION['admin_reg_id'])) {
    header('Location: adminlogin.php');
    exit();
}




include '../server.php';
$db = new Database();
$fetched_new_pan = $db->select_new_pan_data();

$ad_pro = $_SESSION['admin_reg_id'];
$admin_profile = $db->feth_admin_pro($ad_pro);
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dash Board</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet"> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"> -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap5.min.css" rel="stylesheet">
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
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <span style="font-weight: 1000;">ID:<span style="font-weight: 600;"
                class="ms-2"><?php echo $admin_profile['admin_reg_id']; ?></span> </span>
        <span style="font-weight: 1000;">Admin:<span style="font-weight: 600;"
                class="ms-2"><?php echo $admin_profile['admin_reg_name']; ?></span> </span>
        <div class="header_img"> <img src="../<?php echo $admin_profile['admin_reg_profile']; ?>" alt="Profile Photo"
                class="img-fluid rounded-5 my-2 "> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bxs-color'></i> <span class="nav_logo-name">PAN CARD</span>
                </a>
                <div class="nav_list">
                    <a href="index.php" class="nav_link "> <i class='bx bxs-dashboard'></i>
                        <span class="nav_name">Dashboard</span> </a>
                    <a href="rec_new_pan.php" class="nav_link active"> <i class='bx bx-id-card'></i> <span
                            class="nav_name">New Pan</span> </a>
                    <a href="rec_update_pan.php" class="nav_link"><i class='bx bxs-card'></i>
                        <span class="nav_name">Update Pan</span> </a>
                    <!-- <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Bookmark</span></a> -->
                    <a href="enquiries_details.php" class="nav_link"><i class='bx bx-comment-dots'
                            style="font-size: 20px;"></i> <span class="nav_name">Enquiries</span> </a>
                    <a href="admin.php" class="nav_link"> <i style="font-size: 28px;" class='bx bx-user-check '></i>
                        <span class="nav_name">ADMIN</span> </a>
                </div>
            </div> <a href="adminlogout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>

    <div class="container-fluid" style="margin-top: 100px;">

        <section>
            <div class="card" style="border-radius: 0%;">
                <div class="card-header p-3" style="background-color: gainsboro;">
                    <span style="font-weight: 900;">New Pan Card Applications</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Recept NO:</th>
                                    <th>Name</th>
                                    <th>Aadhar Number</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Application Status</th>
                                    <th>Submit date</th>
                                    <th>View Details</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                if ($fetched_new_pan && $fetched_new_pan->num_rows > 0) {
                                    while ($new_pan_row = $fetched_new_pan->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $new_pan_row['new_pan_id']; ?></td>
                                            <td><?php echo $new_pan_row['new_pan_receipt_number']; ?></td>
                                            <td><?php echo $new_pan_row['new_call_name']; ?></td>
                                            <td><?php echo $new_pan_row['new_aadhaar_number']; ?></td>
                                            <td><?php echo $new_pan_row['new_mobile_number']; ?></td>
                                            <td><?php echo $new_pan_row['new_email']; ?></td>

                                            <td>
                                                <span class="text-success"
                                                    style="font-weight: 900;"><?php echo $new_pan_row['new_status']; ?></span>
                                                <form action="../forms_datas.php" method="post">
                                                    <input type="hidden" name="new_pan_status_update_id"
                                                        value="<?php echo $new_pan_row['new_pan_id']; ?>">
                                                    <select class="bg-secondary bg-opacity-25 rounded-2" name="status_update">
                                                        <option value="Application Received.">Application recived</option>
                                                        <option value="Processing">Processing</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                    <br />
                                                    <input type="submit" name="status_new_pan_submit"
                                                        class="mt-1 btn btn-outline-success btn-sm rounded-0">
                                                </form>
                                            </td>

                                            <td><?php echo $new_pan_row['new_pan_created_at']; ?></td>
                                            <td>
                                                <form action="view_all_new.php" method="post">
                                                    <input type="hidden" name="admin_new_pan_id"
                                                        value="<?php echo $new_pan_row['new_pan_id']; ?>">
                                                    <input type="submit" value="View All" name="admin_new_pan_id_submit"
                                                        class="btn btn-outline-warning rounded-0 btn-sm">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="../forms_datas.php" method="post">
                                                    <input type="hidden" name="delete_new_pan_id"
                                                        value="<?php echo $new_pan_row['new_pan_id']; ?>">
                                                    <input type="submit" value="Delete" name="delete_new_pan"
                                                        class="btn btn-danger rounded-0 btn-sm">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php }
                                } else {
                                    echo "<tr><td colspan='7'>No records found</td></tr>";
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>


    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "dom": '<"d-flex justify-content-between align-items-center mb-3"Bf><"clear">lirtp',
                "paging": true,
                "autoWidth": true,
                "columnDefs": [{
                    "orderable": false,
                    "targets": 6
                }],
                "buttons": [
                    {
                        extend: 'colvis',
                        className: 'btn btn-outline-secondary rounded-0 btn-sm'
                    },
                ]
            });
        });
    </script>




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