<?php
include 'server.php';
// new pan card datas

if (isset($_POST['new_pan_submit'])) {

    $new_call_name = $_POST['new_call_name'];
    $new_call_father_name = $_POST['new_call_father_name'];

    $new_aadharNumber = $_POST['new_aadharNumber'];
    $new_mobileNumber = $_POST['new_mobileNumber'];
    $new_email = $_POST['new_email'];
    if (empty($new_email)) {
        $new_email = "admin@gmail.com";
    }

    $new_pan_dob = $_POST['new_pan_dob'];
    $new_choose_fm = $_POST['new_choose_fm'];

    if (!empty($_POST['fm_new_profile_Pictures'])) {
        $imageData = $_POST['fm_new_profile_Pictures'];
        $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));
        $filename = 'captured_image_' . uniqid() . '.jpg';
        $new_fm_profile_folder = "newpanimage/" . $filename;
        file_put_contents($new_fm_profile_folder, $decodedImageData);
    } else {
        $new_fm_profile_name = $_FILES['fm_new_profile_Picture']['name'] . substr(md5(uniqid() . random_int(0, 25)), 0, 6);
        $new_fm_profile_path = $_FILES['fm_new_profile_Picture']['tmp_name'];
        $new_fm_profile_folder = "newpanimage/" . $new_fm_profile_name;
        move_uploaded_file($new_fm_profile_path, $new_fm_profile_folder);
    }

    if (!empty($_POST['fm_new_signature_Images'])) {
        $signData = $_POST['fm_new_signature_Images'];
        $decodedImageDatas = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $signData));
        $filenames = 'captured_sign_' . uniqid() . '.jpg';
        $new_fm_new_signature_folder = "newpanimage/" . $filenames;
        file_put_contents($new_fm_new_signature_folder, $decodedImageDatas);
    } else {
        // $original_file_name = $_FILES['fm_new_signature_Image']['name'];
        // $file_extension = pathinfo($original_file_name, PATHINFO_EXTENSION);
        // $unique_string = $_FILES['fm_new_signature_Image']. substr(md5(uniqid() . random_int(0, 25)), 0, 6);
        // $new_fm_signature_name = $unique_string . '.' . $file_extension;
        $new_fm_signature_name = $_FILES['fm_new_signature_Image']['name'];
        $new_fm_signature_path = $_FILES['fm_new_signature_Image']['tmp_name'];
        $new_fm_new_signature_folder = "newpanimage/" . $new_fm_signature_name;
        move_uploaded_file($new_fm_signature_path, $new_fm_new_signature_folder);
    }

    $new_gender = $_POST['gender'];
    $new_fatherName = $_POST['new_fatherName'];

    $new_fm_aadhaar_doc_name = $_FILES['new_fm_AadhaarUpload']['name'];
    $new_fm_aadhaar_doc_path = $_FILES['new_fm_AadhaarUpload']['tmp_name'];
    $new_fm_aadhaar_doc_folder = "newpandocx/" . $new_fm_aadhaar_doc_name;
    move_uploaded_file($new_fm_aadhaar_doc_path, $new_fm_aadhaar_doc_folder);

    $new_aadhaar_doc_name = $_FILES['new_AadhaarUpload']['name'];
    $new_aadhaar_doc_path = $_FILES['new_AadhaarUpload']['tmp_name'];
    $new_aadhaar_doc_folder = "newpandocx/" . $new_aadhaar_doc_name;
    move_uploaded_file($new_aadhaar_doc_path, $new_aadhaar_doc_folder);


    if (!empty($_POST['new_profile_Pictures'])) {
        $imageData = $_POST['new_profile_Pictures'];
        $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));
        $filename = 'captured_image_' . uniqid() . '.jpg';
        $new_profile_folder = "newpanimage/" . $filename;
        file_put_contents($new_profile_folder, $decodedImageData);
    } else {
        $new_profile_name = $_FILES['new_profile_Picture']['name'];
        $new_profile_path = $_FILES['new_profile_Picture']['tmp_name'];
        $new_profile_folder = "newpanimage/" . $new_profile_name;
        move_uploaded_file($new_profile_path, $new_profile_folder);
    }

    if (!empty($_POST['new_signature_Images'])) {
        $signData = $_POST['new_signature_Images'];
        $decodedImageDatas = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $signData));
        $filenames = 'captured_sign_' . uniqid() . '.jpg';
        $new_signature_folder = "newpanimage/" . $filenames;
        file_put_contents($new_signature_folder, $decodedImageDatas);
    } else {
        $new_signature_name = $_FILES['new_signature_Image']['name'];
        $new_signature_path = $_FILES['new_signature_Image']['tmp_name'];
        $new_signature_folder = "newpanimage/" . $new_signature_name;
        move_uploaded_file($new_signature_path, $new_signature_folder);
    }

    if (isset($_POST['new_pan_recept_num'])) {
        $randomNumber = NgenerateRandomNumber();
    }

    $fm_new_pan_aadhar_front = $_FILES['fm_new_pan_aadhar_front']['name'];
    $fm_new_pan_aadhar_front_path = $_FILES['fm_new_pan_aadhar_front']['tmp_name'];
    $fm_new_pan_aadhar_front_folder = "newpanparentaadhar/" . $fm_new_pan_aadhar_front;
    move_uploaded_file($fm_new_pan_aadhar_front_path, $fm_new_pan_aadhar_front_folder);

    $fm_new_pan_aadhar_back = $_FILES['fm_new_pan_aadhar_back']['name'];
    $fm_new_pan_aadhar_back_path = $_FILES['fm_new_pan_aadhar_back']['tmp_name'];
    $fm_new_pan_aadhar_back_folder = "newpanparentaadhar/" . $fm_new_pan_aadhar_back;
    move_uploaded_file($fm_new_pan_aadhar_back_path, $fm_new_pan_aadhar_back_folder);

    $new_pan_aadhar_front = $_FILES['new_pan_aadhar_front']['name'];
    $new_pan_aadhar_front_path = $_FILES['new_pan_aadhar_front']['tmp_name'];
    $new_pan_aadhar_front_folder = "newpanaadhar/" . $new_pan_aadhar_front;
    move_uploaded_file($new_pan_aadhar_front_path, $new_pan_aadhar_front_folder);

    $new_pan_aadhar_back = $_FILES['new_pan_aadhar_back']['name'];
    $new_pan_aadhar_back_path = $_FILES['new_pan_aadhar_back']['tmp_name'];
    $new_pan_aadhar_back_folder = "newpanaadhar/" . $new_pan_aadhar_back;
    move_uploaded_file($new_pan_aadhar_back_path, $new_pan_aadhar_back_folder);

    $querys = new Database();
    $querys->insert_new_pan_db($new_call_name, $new_call_father_name, $new_aadharNumber, $new_mobileNumber, $new_email, $new_pan_dob, $new_choose_fm, $new_fm_profile_folder, $new_fm_new_signature_folder, $new_gender, $new_fatherName, $new_fm_aadhaar_doc_folder, $new_aadhaar_doc_folder, $new_profile_folder, $new_signature_folder, $randomNumber, $fm_new_pan_aadhar_front_folder, $fm_new_pan_aadhar_back_folder, $new_pan_aadhar_front_folder, $new_pan_aadhar_back_folder);

}




// update pan card datas
if (isset($_POST['update_pan_submit'])) {

    $update_oldpan_doc_name = $_FILES['update_old_pan_doc']['name'];
    $update_oldpan_doc_path = $_FILES['update_old_pan_doc']['tmp_name'];
    $update_oldpan_doc_folder = "updatepandocx/" . $update_oldpan_doc_name;
    move_uploaded_file($update_oldpan_doc_path, $update_oldpan_doc_folder);

    $update_old_pan_num = $_POST['update_old_pan_num'];

    $update_call_name = $_POST['update_call_name'];
    $update_aadharNumber = $_POST['update_aadharNumber'];
    $update_mobileNumber = $_POST['update_mobileNumber'];
    $update_email = $_POST['update_email'];
    if (empty($update_email)) {
        $update_email = "admin@gmail.com";
    }

    $update_aadhaar_doc_name = $_FILES['update_aadhaar_doc']['name'];
    $update_aadhaar_doc_path = $_FILES['update_aadhaar_doc']['tmp_name'];
    $update_aadhaar_doc_folder = "updatepandocx/" . $update_aadhaar_doc_name;
    move_uploaded_file($update_aadhaar_doc_path, $update_aadhaar_doc_folder);

    if (!empty($_POST['update_profile_Pictures'])) {
        $imageData = $_POST['update_profile_Pictures'];
        $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));
        $filename = 'captured_image_' . uniqid() . '.jpg';
        $update_profile_folder = "updatepanimage/" . $filename;
        file_put_contents($update_profile_folder, $decodedImageData);
    } else {
        $update_profile_name = $_FILES['update_profile_Picture']['name'];
        $update_profile_path = $_FILES['update_profile_Picture']['tmp_name'];
        $update_profile_folder = "updatepanimage/" . $update_profile_name;
        move_uploaded_file($update_profile_path, $update_profile_folder);
    }

    if (!empty($_POST['update_signature_Images'])) {
        $signData = $_POST['update_signature_Images'];
        $decodedImageDatas = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $signData));
        $filenames = 'captured_sign_' . uniqid() . '.jpg';
        $update_signature_folder = "updatepanimage/" . $filenames;
        file_put_contents($update_signature_folder, $decodedImageDatas);
    } else {
        $update_signature_name = $_FILES['update_signature_Image']['name'];
        $update_signature_path = $_FILES['update_signature_Image']['tmp_name'];
        $update_signature_folder = "updatepanimage/" . $update_signature_name;
        move_uploaded_file($update_signature_path, $update_signature_folder);
    }

    $update_firstName = $_POST['update_firstName'];
    $update_middleName = $_POST['update_middleName'];
    $update_lastName = $_POST['update_lastName'];

    $update_nameproof_doc_name = $_FILES['update_name_doc']['name'];
    $update_nameproof_doc_path = $_FILES['update_name_doc']['tmp_name'];
    $update_nameproof_doc_folder = "updatepandocx/" . $update_nameproof_doc_name;
    move_uploaded_file($update_nameproof_doc_path, $update_nameproof_doc_folder);

    $update_fatherName = $_POST['update_fatherName'];

    $update_fathernameproof_doc_name = $_FILES['update_father_name_doc']['name'];
    $update_fathernameproof_doc_path = $_FILES['update_father_name_doc']['tmp_name'];
    $update_fathernameproof_doc_folder = "updatepandocx/" . $update_fathernameproof_doc_name;
    move_uploaded_file($update_fathernameproof_doc_path, $update_fathernameproof_doc_folder);

    $update_dob = $_POST['update_dob'];

    $update_dobproof_doc_name = $_FILES['update_dob_doc']['name'];
    $update_dobproof_doc_path = $_FILES['update_dob_doc']['tmp_name'];
    $update_dobproof_doc_folder = "updatepandocx/" . $update_dobproof_doc_name;
    move_uploaded_file($update_dobproof_doc_path, $update_dobproof_doc_folder);
    if (isset($_POST['update_pan_recept_num'])) {
        $randomNumberupdate = UgenerateRandomNumber();
    }


    $update_pan_aadhar_front = $_FILES['update_pan_aadhar_front']['name'];
    $update_pan_aadhar_front_path = $_FILES['update_pan_aadhar_front']['tmp_name'];
    $update_pan_aadhar_front_folder = "updatepanaadhar/" . $update_pan_aadhar_front;
    move_uploaded_file($update_pan_aadhar_front_path, $update_pan_aadhar_front_folder);

    $update_pan_aadhar_back = $_FILES['update_pan_aadhar_back']['name'];
    $update_pan_aadhar_back_path = $_FILES['update_pan_aadhar_back']['tmp_name'];
    $update_pan_aadhar_back_folder = "updatepanaadhar/" . $update_pan_aadhar_back;
    move_uploaded_file($update_pan_aadhar_back_path, $update_pan_aadhar_back_folder);


    $querys = new Database();
    $querys->insert_update_pan_db(
        $update_oldpan_doc_folder,
        $update_old_pan_num,
        $update_call_name,
        $update_aadharNumber,
        $update_mobileNumber,
        $update_email,
        $update_aadhaar_doc_folder,
        $update_profile_folder,
        $update_signature_folder,
        $update_firstName,
        $update_middleName,
        $update_lastName,
        $update_nameproof_doc_folder,
        $update_fatherName,
        $update_fathernameproof_doc_folder,
        $update_dob,
        $update_dobproof_doc_folder,
        $randomNumberupdate,
        $update_pan_aadhar_front_folder,
        $update_pan_aadhar_back_folder
    );
}


function NgenerateRandomNumber()
{
    $alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $alphaNumeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $firstTwoAlpha = 'N' . $alpha[random_int(0, 25)];
    $nextFour = '';
    for ($i = 0; $i < 4; $i++) {
        $nextFour .= $alphaNumeric[random_int(0, 35)];
    }
    $lastTwoAlpha = $alpha[random_int(0, 25)] . $alpha[random_int(0, 25)];
    return $firstTwoAlpha . $nextFour . $lastTwoAlpha;
}

function UgenerateRandomNumber()
{
    $alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $alphaNumeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $firstTwoAlpha = 'C' . $alpha[random_int(0, 25)];
    $nextFour = '';
    for ($i = 0; $i < 4; $i++) {
        $nextFour .= $alphaNumeric[random_int(0, 35)];
    }
    $lastTwoAlpha = $alpha[random_int(0, 25)] . $alpha[random_int(0, 25)];
    return $firstTwoAlpha . $nextFour . $lastTwoAlpha;
}



if (isset($_POST['admin_new_pan_id_submit'])) {
    $admin_new_pan_id = $_POST['admin_new_pan_id'];
    $querys = new Database();
    $querys->select_new_pan_data_id($admin_new_pan_id);
}

// Admin Register
if (isset($_POST['admin_reg_submit'])) {
    $admin_reg_name = $_POST['admin_reg_name'];
    $admin_reg_email = $_POST['admin_reg_email'];
    $admin_reg_mobile = $_POST['admin_reg_mobile'];
    $admin_reg_pass = $_POST['admin_reg_pass'];
    $admin_reg_cpass = $_POST['admin_reg_cpass'];

    $admin_reg_profile_name = $_FILES['admin_reg_profile']['name'];
    $admin_reg_profile_path = $_FILES['admin_reg_profile']['tmp_name'];
    $admin_reg_profile_folder = "admin/adminprofile/" . $admin_reg_profile_name;
    move_uploaded_file($admin_reg_profile_path, $admin_reg_profile_folder);


    $querys = new Database();
    $querys->insert_admin_reg($admin_reg_profile_folder, $admin_reg_name, $admin_reg_email, $admin_reg_mobile, $admin_reg_pass, $admin_reg_cpass);
}

// UserRegister
// if (isset($_POST['user_reg_submit'])) {
//     $user_reg_name = $_POST['user_reg_name'];
//     $user_reg_email = $_POST['user_reg_email'];
//     $user_reg_mobile = $_POST['user_reg_mobile'];
//     $querys = new Database();
//     $querys->insert_user_reg($user_reg_name, $user_reg_email, $user_reg_mobile);
// }

if (isset($_POST['enquiry_data_submit'])) {
    $enquiry_name = $_POST['enquiry_name'];
    $enquiry_email = $_POST['enquiry_email'];
    $enquiry_mobile = $_POST['enquiry_mobile'];
    $enquiry_description = $_POST['enquiry_description'];
    $querys = new Database();
    $querys->insert_enquiry($enquiry_name, $enquiry_email, $enquiry_mobile, $enquiry_description);
}


if (isset($_POST['new_mobileNumber'])) {
    $new_mobileNumber = $_POST['new_mobileNumber'];
    $querys = new Database();
    $result = $querys->check_data_exist_nmobile($new_mobileNumber);

    if ($result) {
        echo '<span style="color:red;">Mobile Data exists!</span>';
    } else {
        // echo '<span style="color:green;">Mobile Data is available.</span>';
    }
}

if (isset($_POST['new_aadharNumber'])) {
    $new_aadharNumber = $_POST['new_aadharNumber'];
    $querys = new Database();
    $result = $querys->check_data_exist_naadhaar($new_aadharNumber);

    if ($result) {
        echo '<span style="color:red;">Aadhaar Data exists!</span>';
    } else {
        // echo '<span style="color:green;">Aadhaar Data is available.</span>';
    }
}

if (isset($_POST['update_mobileNumber'])) {
    $update_mobileNumber = $_POST['update_mobileNumber'];
    $querys = new Database();
    $result = $querys->check_data_exist_umobile($update_mobileNumber);

    if ($result) {
        echo '<span style="color:red;">Mobile Data exists!</span>';
    } else {
        // echo '<span style="color:green;">Mobile Data is available.</span>';
    }
}


if (isset($_POST['update_aadharNumber'])) {
    $update_aadharNumber = $_POST['update_aadharNumber'];
    $querys = new Database();
    $result = $querys->check_data_exist_uaadhaar($update_aadharNumber);

    if ($result) {
        echo '<span style="color:red;">Aadhaar Data exists!</span>';
    } else {
        // echo '<span style="color:green;">Aadhaar Data is available.</span>';
    }
}


if (isset($_POST['delete_new_pan'])) {
    $delete_new_pan_id = $_POST['delete_new_pan_id'];
    $querys = new Database();
    $querys->moveDataToDeletedNewPan($delete_new_pan_id);
    $querys->deleteDataFromNewPan($delete_new_pan_id);
}

if (isset($_POST['delete_update_pan'])) {
    $delete_update_pan_id = $_POST['delete_update_pan_id'];
    $querys = new Database();
    $querys->moveDataToDeletedUpdatePan($delete_update_pan_id);
    $querys->deleteDataFromUpdatePan($delete_update_pan_id);
}

if (isset($_POST['status_new_pan_submit'])) {
    $new_pan_status_update_id = $_POST['new_pan_status_update_id'];
    $status_update = $_POST['status_update'];
    $querys = new Database();
    $querys->newPanStatusUpdate($new_pan_status_update_id, $status_update);
}
if (isset($_POST['status_update_pan_submit'])) {
    $update_pan_status_update_id = $_POST['update_pan_status_update_id'];
    $status_update = $_POST['status_update'];
    $querys = new Database();
    $querys->updatePanStatusUpdate($update_pan_status_update_id, $status_update);
}



if (isset($_POST['delete_new_pan_per'])) {
    $delete_new_pan_id_per = $_POST['delete_new_pan_id_per'];
    $querys = new Database();
    // $querys->moveDataToDeletedNewPan();
    $querys->deleteDataFromNewPanPer($delete_new_pan_id_per);
}


if (isset($_POST['delete_update_pan_per'])) {
    $delete_update_pan_id_per = $_POST['delete_update_pan_id_per'];
    $querys = new Database();
    // $querys->moveDataToDeletedUpdatePan();
    $querys->deleteDataFromUpdatePanPer($delete_update_pan_id_per);
}







if (isset($_POST['restore_delete_new_pan'])) {
    $restore_delete_new_pan_id_per = $_POST['restore_delete_new_pan_id_per'];
    $querys = new Database();
    $querys->moveDataToNewPan($restore_delete_new_pan_id_per);
    $querys->deleteDataFromDeletedNewPan($restore_delete_new_pan_id_per);
}



if (isset($_POST['restore_delete_update_pan_per'])) {
    $restore_delete_update_pan_id_per = $_POST['restore_delete_update_pan_id_per'];
    $querys = new Database();
    $querys->moveDataToUpdatePan($restore_delete_update_pan_id_per);
    $querys->deleteDataFromDeletedUpdatePan($restore_delete_update_pan_id_per);
}



if (isset($_POST['delete_enquirey'])) {
    $delete_enquirey_id = $_POST['delete_enquirey_id'];
    $querys = new Database();
    $querys->deleteDataFromenquiery($delete_enquirey_id);
}




$sourceFolders = [
    'D:/software/xampp/htdocs/card/newpanaadhar/',
    'D:/software/xampp/htdocs/card/newpandocx/',
    'D:/software/xampp/htdocs/card/newpanimage/',
    'D:/software/xampp/htdocs/card/newpanparentaadhar'
];

$defaultDownloadFolder = getenv('USERPROFILE') . '/Downloads/';
$destinationFolder = $defaultDownloadFolder . 'New Pan Card/';

if (isset($_POST['download'])) {
    $recept = $_POST['recept'];
    $name = $_POST['name'];
    $filenames = explode(',', $_POST['filenames']);
    $filesFound = [];
    $uniqueFolderName = $destinationFolder . $name . ' ' . $recept . '/';

    if (!file_exists($uniqueFolderName)) {
        mkdir($uniqueFolderName, 0777, true);
    }

    foreach ($filenames as $filename) {
        $filename = trim($filename);
        $fileFound = false;
        foreach ($sourceFolders as $sourceFolder) {
            if (file_exists($sourceFolder . $filename)) {
                $fileFound = true;
                $destinationFilePath = $uniqueFolderName . $filename;
                copy($sourceFolder . $filename, $destinationFilePath);
                $filesFound[] = $filename;
                break;
            }
        }

        if (!$fileFound) {
            echo "File not found: " . $filename . "<br>";
        }
    }

    header('Location: admin/rec_new_pan.php');
    exit();
}
// if (!empty($filesFound)) {
//     echo "Files downloaded successfully to " . $uniqueFolderName . "<br>";
//     echo "Downloaded files: " . implode(", ", $filesFound);
// } else {
//     echo "No files were downloaded.";
// }    
// }





$sourceFoldersUpdate = [
    'D:/software/xampp/htdocs/card/updatepanaadhar/',
    'D:/software/xampp/htdocs/card/updatepandocx/',
    'D:/software/xampp/htdocs/card/updatepanimage/'
];
$defaultDownloadFolderU = getenv('USERPROFILE') . '/Downloads/';
$destinationFolderUpdate = $defaultDownloadFolderU . 'Update Pan Card/';
if (isset($_POST['downloadUpdate'])) {
    $recept = $_POST['recept'];
    $name = $_POST['name'];
    $filenames = explode(',', $_POST['filenames']);
    $filesFound = [];
    $uniqueFolderName = $destinationFolderUpdate . $name . ' ' . $recept . '/';
    if (!file_exists($uniqueFolderName)) {
        mkdir($uniqueFolderName, 0777, true);
    }
    foreach ($filenames as $filename) {
        $filename = trim($filename);
        $fileFound = false;
        foreach ($sourceFoldersUpdate as $sourceFolder) {
            if (file_exists($sourceFolder . $filename)) {
                $fileFound = true;
                $destinationFilePath = $uniqueFolderName . $filename;
                copy($sourceFolder . $filename, $destinationFilePath);
                $filesFound[] = $filename;
                break;
            }
            header('Location: admin/rec_update_pan.php');
        }
        if (!$fileFound) {
            echo "File not found: " . $filename . "<br>";
        }
    }
    // if (!empty($filesFound)) {
    //     echo "Files downloaded successfully to " . $uniqueFolderName . "<br>";
    //     echo "Downloaded files: " . implode(", ", $filesFound);
    // } else {
    //     echo "No files were downloaded.";
    // }    
}


?>