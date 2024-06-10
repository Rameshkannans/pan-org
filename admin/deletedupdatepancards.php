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

$fetched_deleted_update_pan = $db->select_deleted_update_pan_data();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted update Pan Card Datas</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet"> -->


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
        body {
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
                    <a href="index.php" class="nav_link "> <i class='bx bxs-dashboard'></i>
                        <span class="nav_name">Dashboard</span> </a>
                    <a href="rec_new_pan.php" class="nav_link"> <i class='bx bx-id-card'></i> <span class="nav_name">New
                            Pan</span> </a>
                    <a href="rec_update_pan.php" class="nav_link"> <i class='bx bxs-card'></i>
                        <span class="nav_name">Update Pan</span> </a>
                    <!-- <a href="#" class="nav_link active"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Deleted</span></a> -->
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
        <span class="d-flex justify-content-end"><a href="index.php" class="btn btn-danger btn-sm rounded-0"><i class='bx bx-arrow-back'></i>
                BACK</a></span>
        <section>
            <div class="card" style="border-radius: 0%;">
                <div class="card-head p-3" style="background-color: gainsboro;">
                    <span style="font-weight: 900;">Deleted Update Pan Card Applications</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Old ID</th>
                                    <th>Recept NO:</th>
                                    <th>Name</th>
                                    <th>Aadhar</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Old Pan DOC</th>
                                    <th>Aadhar DOC</th>
                                    <th>Profile</th>
                                    <th>Sign</th>
                                    <th>F.name</th>
                                    <th>M.name</th>
                                    <th>L.name</th>
                                    <th>N.proof</th>
                                    <th>F.name</th>
                                    <th>F.proof</th>
                                    <th>DOB</th>
                                    <th>D.proof</th>
                                    <th>Old Reg.Date</th>
                                    <th>Reg.Date</th>
                                    <th>Restore</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <?php if ($fetched_deleted_update_pan && $fetched_deleted_update_pan->num_rows > 0) {
                                        while ($del_update_pan_row = $fetched_deleted_update_pan->fetch_assoc()) {
                                            ?>
                                            <th scope="row"><?php echo $del_update_pan_row['deted_update_pan_id']; ?></th>
                                            <th><?php echo $del_update_pan_row['deleted_update_new_pan_id']; ?></th>
                                            <th><?php echo $del_update_pan_row['deleted_update_recept_num']; ?></th>
                                            <td><?php echo $del_update_pan_row['deted_update_call_name']; ?></td>
                                            <td><?php echo $del_update_pan_row['deted_update_aadhaar_number']; ?></td>
                                            <td><?php echo $del_update_pan_row['deted_update_mobile_number']; ?></td>
                                            <td><?php echo $del_update_pan_row['deted_update_email']; ?></td>
                                            <td><a class="btn btn-outline-success rounded-0 btn-sm"
                                                    href="../<?php echo $del_update_pan_row['deted_update_oldpan_doc']; ?>"
                                                    target="_blank">Download Old Pan</a></td>
                                            <td><a class="btn btn-outline-success rounded-0 btn-sm"
                                                    href="../<?php echo $del_update_pan_row['deted_update_aadhaar_doc']; ?>"
                                                    target="_blank">Download Aadhaar</a></td>
                                            <td><img src="../<?php echo $del_update_pan_row['deted_update_profile_picture']; ?>"
                                                    alt="Profile Photo" class="img-fluid rounded-1 my-2 "
                                                    style="width: 100px; height: 60px;"></td>
                                            <td><img src="../<?php echo $del_update_pan_row['deted_update_signature']; ?>"
                                                    alt="Profile Photo" class="img-fluid rounded-1 my-2 "
                                                    style="width: 100px; height: 60px;"></td>
                                            <td><?php echo $del_update_pan_row['deted_update_first_name']; ?></td>
                                            <td><?php echo $del_update_pan_row['deted_update_middle_name']; ?></td>
                                            <td><?php echo $del_update_pan_row['deted_update_lastname']; ?></td>
                                            <td><a class="btn btn-outline-success rounded-0 btn-sm"
                                                    href="../<?php echo $del_update_pan_row['deted_update_name_proof']; ?>"
                                                    target="_blank">Download N.proof</a></td>
                                            <td><?php echo $del_update_pan_row['deted_update_father_name']; ?></td>
                                            <td><a class="btn btn-outline-success rounded-0 btn-sm"
                                                    href="../<?php echo $del_update_pan_row['deted_update_fathername_proof']; ?>"
                                                    target="_blank">Download F.proof</a></td>
                                            <td><?php echo $del_update_pan_row['deted_update_dob']; ?></td>
                                            <td><a class="btn btn-outline-success rounded-0 btn-sm"
                                                    href="../<?php echo $del_update_pan_row['deted_update_dob_proof']; ?>"
                                                    target="_blank">Download D.proof</a></td>
                                            <td><?php echo $del_update_pan_row['deted_update_pan_created_at']; ?></td>
                                            <td><?php echo $del_update_pan_row['deleted_update_pan_created_at']; ?></td>
                                            <td>
                                                <form action="../forms_datas.php" method="post">
                                                    <input type="hidden" name="restore_delete_update_pan_id_per"
                                                        value="<?php echo $del_update_pan_row['deted_update_pan_id']; ?>">
                                                    <input type="submit" value="Restore" name="restore_delete_update_pan_per"
                                                        class="btn btn-success rounded-0 btn-sm">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="../forms_datas.php" method="post">
                                                    <input type="hidden" name="delete_update_pan_id_per"
                                                        value="<?php echo $del_update_pan_row['deted_update_pan_id']; ?>">
                                                    <input type="submit" value="Delete Permanently" name="delete_update_pan_per"
                                                        class="btn btn-danger rounded-0 btn-sm">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php }
                                    } else {
                                        echo "<tr><td colspan='9'>No records found</td></tr>";
                                    } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>


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
                        "targets": 5
                    }],
                    "buttons": [
                        {
                            extend: 'colvis',
                            className: 'btn btn-outline-secondary rounded-0 btn-sm'
                        }
                    ]
                });
            });
        </script>

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