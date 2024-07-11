<?php

class Database
{
    public $localhost = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "pancard";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->localhost, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function createNewpan($new_pan_card)
    {
        if ($this->conn->query($new_pan_card) === TRUE) {
            // echo "New Pan Table created successfully";
        } else {
            echo "Error creating table: " . $this->conn->error;
        }
    }
    public function createUpdatepan($update_pan_card)
    {

        if ($this->conn->query($update_pan_card) === TRUE) {
            // echo "Update Pan Table created successfully";
        } else {
            echo "Error creating table: " . $this->conn->error;
        }
    }

    public function createAdminRegister($admin_register)
    {

        if ($this->conn->query($admin_register) === TRUE) {
            // echo "Update Pan Table created successfully";
        } else {
            echo "Error creating table: " . $this->conn->error;
        }
    }

    // public function createUserRegister($user_register)
    // {

    //     if ($this->conn->query($user_register) === TRUE) {
    //         // echo "Update Pan Table created successfully";
    //     } else {
    //         echo "Error creating table: " . $this->conn->error;
    //     }
    // }


    public function createEnquiryRegister($enquiry_reg)
    {

        if ($this->conn->query($enquiry_reg) === TRUE) {
            // echo "Update Pan Table created successfully";
        } else {
            echo "Error creating table: " . $this->conn->error;
        }
    }


    public function createNewpanDeleted($deleted_new_pan_card)
    {

        if ($this->conn->query($deleted_new_pan_card) === TRUE) {
            // echo "Update Pan Table created successfully";
        } else {
            echo "Error creating table: " . $this->conn->error;
        }
    }

    public function createUpdatepanDeleted($deleted_update_pan_card)
    {

        if ($this->conn->query($deleted_update_pan_card) === TRUE) {
            // echo "Update Pan Table created successfully";
        } else {
            echo "Error creating table: " . $this->conn->error;
        }
    }

    // ====================================================================================================================================================

    public function insert_new_pan_db($new_call_name, $new_call_father_name, $new_aadharNumber, $new_mobileNumber, $new_email, $new_pan_dob, $new_choose_fm, $new_fm_profile_folder, $new_fm_new_signature_folder, $new_gender, $new_fatherName, $new_fm_aadhaar_doc_folder, $new_aadhaar_doc_folder, $new_profile_folder, $new_signature_folder, $new_pan_recept_num, $fm_new_pan_aadhar_front_folder, $fm_new_pan_aadhar_back_folder, $new_pan_aadhar_front_folder, $new_pan_aadhar_back_folder)
    {
        $newPanCard = "INSERT INTO new_pan (new_call_name,new_call_pan_father,new_aadhaar_number,new_mobile_number,new_email,new_pan_dob,new_parent,new_fm_profile_picture,new_fm_signature_picture,new_gender,new_pan_father,new_fm_aadhaar_doc,new_aadhaar_doc,new_profile_picture,new_signature,new_pan_receipt_number,fm_new_pan_aadhar_front, fm_new_pan_aadhar_back, new_pan_aadhar_front, new_pan_aadhar_back) 
                      VALUES ('" . $new_call_name . "','" . $new_call_father_name . "','" . $new_aadharNumber . "', '" . $new_mobileNumber . "','" . $new_email . "','" . $new_pan_dob . "','" . $new_choose_fm . "','" . $new_fm_profile_folder . "','" . $new_fm_new_signature_folder . "', '" . $new_gender . "', '" . $new_fatherName . "','" . $new_fm_aadhaar_doc_folder . "', '" . $new_aadhaar_doc_folder . "', '" . $new_profile_folder . "','" . $new_signature_folder . "','" . $new_pan_recept_num . "'             ,'" . $fm_new_pan_aadhar_front_folder . "','" . $fm_new_pan_aadhar_back_folder . "','" . $new_pan_aadhar_front_folder . "','" . $new_pan_aadhar_back_folder . "')";
        $newPanCardSuccess = $this->conn->query($newPanCard);
        if ($newPanCardSuccess) {
            if (!headers_sent()) {
                header("Location: users/new_pan_success.php");
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $newPanCard . "<br>" . $this->conn->error;
        }
    }

    public function insert_update_pan_db(
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
    ) {
        $updatePanCard = "INSERT INTO update_pan (update_oldpan_doc,update_oldpan_number,update_call_name,update_aadhaar_number,update_mobile_number,update_email,update_aadhaar_doc,update_profile_picture,
        update_signature,update_first_name,update_middle_name,update_lastname, update_name_proof,update_father_name,update_fathername_proof,
        update_dob,update_dob_proof,update_pan_receipt_number, update_pan_aadhar_front, update_pan_aadhar_back) 
                      VALUES ('" . $update_oldpan_doc_folder . "','" . $update_old_pan_num . "','" . $update_call_name . "', '" . $update_aadharNumber . "', '" . $update_mobileNumber . "','" . $update_email . "', '" . $update_aadhaar_doc_folder . "', '" . $update_profile_folder . "', '" . $update_signature_folder . "','" . $update_firstName . "'
                      ,'" . $update_middleName . "','" . $update_lastName . "','" . $update_nameproof_doc_folder . "','" . $update_fatherName . "','" . $update_fathernameproof_doc_folder . "'
                      ,'" . $update_dob . "','" . $update_dobproof_doc_folder . "','" . $randomNumberupdate . "'      ,'" . $update_pan_aadhar_front_folder . "'
                      ,'" . $update_pan_aadhar_back_folder . "')";
        $updatePanCardSuccess = $this->conn->query($updatePanCard);
        if ($updatePanCardSuccess) {
            if (!headers_sent()) {
                header('Location: users/update_pan_success.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $updatePanCard . "<br>" . $this->conn->error;
        }
    }

    public function select_new_pan_data()
    {
        $select_new_pan_datas = "SELECT * FROM new_pan";
        $sel_new_pan = $this->conn->query($select_new_pan_datas);
        return $sel_new_pan;
    }

    public function select_update_pan_data()
    {
        $select_update_pan_datas = "SELECT * FROM update_pan";
        $sel_update_pan = $this->conn->query($select_update_pan_datas);
        return $sel_update_pan;
    }


    public function select_new_pan_data_id($admin_new_pan_id)
    {
        $select_new_pan_datas_id = "SELECT * FROM new_pan WHERE new_pan_id = $admin_new_pan_id";
        $sel_new_pan_id = $this->conn->query($select_new_pan_datas_id);
        if ($sel_new_pan_id && $sel_new_pan_id->num_rows == 1) {
            return $sel_new_pan_id->fetch_assoc();
        } else {
            return false;
        }
    }


    public function select_update_pan_data_id($admin_update_pan_id)
    {
        $select_update_pan_datas_id = "SELECT * FROM update_pan WHERE update_pan_id = $admin_update_pan_id";
        $sel_update_pan_id = $this->conn->query($select_update_pan_datas_id);
        if ($sel_update_pan_id && $sel_update_pan_id->num_rows == 1) {
            return $sel_update_pan_id->fetch_assoc();
        } else {
            return false;
        }
    }


    public function insert_admin_reg($admin_reg_profile_folder, $admin_reg_name, $admin_reg_email, $admin_reg_mobile, $admin_reg_pass, $admin_reg_cpass)
    {
        $adminReg = "INSERT INTO admin_register (admin_reg_profile, admin_reg_name, admin_reg_email, admin_reg_mobile_number, admin_reg_password, admin_reg_confirm_password) 
                      VALUES ('$admin_reg_profile_folder', '$admin_reg_name', '$admin_reg_email', '$admin_reg_mobile', '$admin_reg_pass', '$admin_reg_cpass')";
        $adminRegSuccess = $this->conn->query($adminReg);
        if ($adminRegSuccess) {
            if (!headers_sent()) {
                header('Location: admin/adminlogin.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $adminReg . "<br>" . $this->conn->error;
        }
    }


    public function select_admin_reg_id($admin_log_uname, $admin_log_pass)
    {
        $select_admin_reg_data = "SELECT * FROM admin_register WHERE admin_reg_email='$admin_log_uname' AND admin_reg_password='$admin_log_pass'";
        $sel_admin_reg_data = $this->conn->query($select_admin_reg_data);
        $num_of_rows = mysqli_num_rows($sel_admin_reg_data);
        if ($num_of_rows == 1) {
            $fetch_rows = $sel_admin_reg_data->fetch_assoc();
            return $fetch_rows['admin_reg_id'];
        } else {
            return false;
        }
    }


    public function feth_admin_pro($ad_pro)
    {
        $select_admin_id = "SELECT * FROM admin_register WHERE admin_reg_id = $ad_pro";
        $sel_admin_id = $this->conn->query($select_admin_id);
        if ($sel_admin_id && $sel_admin_id->num_rows == 1) {
            return $sel_admin_id->fetch_assoc();
        } else {
            return false;
        }
    }


    public function fadmin_register()
    {
        $select_admin_reg = "SELECT * FROM admin_register";
        $sel_admin_reg = $this->conn->query($select_admin_reg);
        if ($sel_admin_reg) {
            return $sel_admin_reg;
        } else {
            return false;
        }
    }

    // public function insert_user_reg($user_reg_name, $user_reg_email, $user_reg_mobile)
    // {
    //     $userReg = "INSERT INTO user_register (user_reg_name, user_reg_email, user_reg_mobile) 
    //                   VALUES ('$user_reg_name', '$user_reg_email', '$user_reg_mobile')";
    //     $userRegSuccess = $this->conn->query($userReg);
    //     if ($userRegSuccess) {
    //         if (!headers_sent()) {
    //             header('Location: user/logreg.php');
    //             exit();
    //         } else {
    //             echo "Error: Headers already sent";
    //         }
    //     } else {
    //         echo "Error: " . $userReg . "<br>" . $this->conn->error;
    //     }
    // }


    public function sel_enquiry_all_data()
    {
        $select_enquiry_reg = "SELECT * FROM enquiry_register";
        $sel_enquiry_reg = $this->conn->query($select_enquiry_reg);
        return $sel_enquiry_reg;
    }

    public function search_user_status_new($status_search_recept)
    {
        $select_user_status_new = "SELECT * FROM new_pan WHERE new_pan_receipt_number = '$status_search_recept'";
        $sel_user_status_new = $this->conn->query($select_user_status_new);
        if ($sel_user_status_new && $sel_user_status_new->num_rows == 1) {
            return $sel_user_status_new->fetch_assoc();
        } else {
            return false;
        }
    }

    public function search_user_status_update($status_search_recept)
    {
        $select_user_status_update = "SELECT * FROM update_pan WHERE update_pan_receipt_number = '$status_search_recept'";
        $sel_user_status_update = $this->conn->query($select_user_status_update);
        if ($sel_user_status_update && $sel_user_status_update->num_rows == 1) {
            return $sel_user_status_update->fetch_assoc();
        } else {
            return false;
        }
    }


    public function insert_enquiry($enquiry_name, $enquiry_email, $enquiry_mobile, $enquiry_description)
    {
        $enquiryReg = "INSERT INTO enquiry_register (enquiry_reg_name, enquiry_reg_email, enquiry_reg_mobile, enquiry_reg_description) 
        VALUES ('$enquiry_name', '$enquiry_email', '$enquiry_mobile', '$enquiry_description')";
        $enquiryRegSuccess = $this->conn->query($enquiryReg);
        if ($enquiryRegSuccess) {
            if (!headers_sent()) {
                header('Location: users/contact_form_success.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $enquiryReg . "<br>" . $this->conn->error;
        }
    }

    public function check_data_exist_nmobile($new_mobileNumber)
    {
        $sql = "SELECT * FROM new_pan WHERE new_mobile_number = '$new_mobileNumber'";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function check_data_exist_naadhaar($new_aadharNumber)
    {
        $sql = "SELECT * FROM new_pan WHERE new_aadhaar_number = '$new_aadharNumber'";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function check_data_exist_umobile($update_mobileNumber)
    {
        $sql = "SELECT * FROM update_pan WHERE update_mobile_number = '$update_mobileNumber'";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function check_data_exist_uaadhaar($update_aadharNumber)
    {
        $sql = "SELECT * FROM update_pan WHERE update_aadhaar_number = '$update_aadharNumber'";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function moveDataToDeletedNewPan($delete_new_pan_id)
    {
        $sql = "INSERT INTO deleted_new_pan (deleted_new_call_pan_father,deleted_new_fm_aadhar_doc, deleted_new_created_at, deleted_old_new_pan_id,deleted_new_call_name, deleted_new_aadhaar_number, deleted_new_mobile_number, deleted_new_email,deleted_new_pan_dob,deleted_new_parent,deleted_new_fm_profile_picture,deleted_new_fm_signature_picture,deleted_new_gender, deleted_new_pan_father, deleted_new_aadhaar_doc, deleted_new_profile_picture, deleted_new_signature,deleted_new_recept_num, deleted_fm_new_pan_aadhar_front, deleted_fm_new_pan_aadhar_back, deleted_new_pan_aadhar_front, deleted_new_pan_aadhar_back)
            SELECT  new_call_pan_father,new_fm_aadhaar_doc,new_pan_created_at,new_pan_id,new_call_name, new_aadhaar_number, new_mobile_number, new_email, new_pan_dob,new_parent,new_fm_profile_picture,new_fm_signature_picture ,new_gender, new_pan_father, new_aadhaar_doc, new_profile_picture, new_signature,new_pan_receipt_number, fm_new_pan_aadhar_front, fm_new_pan_aadhar_back, new_pan_aadhar_front, new_pan_aadhar_back
            FROM new_pan WHERE new_pan_id= '$delete_new_pan_id'";
        $result = $this->conn->query($sql);
    }
    public function deleteDataFromNewPan($delete_new_pan_id)
    {
        $sql = "DELETE FROM new_pan WHERE new_pan_id ='$delete_new_pan_id'";
        $result = $this->conn->query($sql);
        if ($result) {
            if (!headers_sent()) {
                header('Location: admin/rec_new_pan.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }



    public function moveDataToDeletedUpdatePan($delete_update_pan_id)
    {
        $sql = "INSERT INTO deted_update_pan (deted_oldpan_number,deleted_update_new_pan_id,deted_update_oldpan_doc,deted_update_call_name,deted_update_aadhaar_number,deted_update_mobile_number,deted_update_email,deted_update_aadhaar_doc,deted_update_profile_picture,deted_update_signature,deted_update_first_name,deted_update_middle_name,deted_update_lastname,deted_update_name_proof,deted_update_father_name,deted_update_fathername_proof,deted_update_dob,deted_update_dob_proof,deted_update_pan_created_at,deleted_update_recept_num, deleted_update_pan_aadhar_front, deleted_update_pan_aadhar_back )
            SELECT update_oldpan_number	,update_pan_id ,update_oldpan_doc,update_call_name,update_aadhaar_number,update_mobile_number,update_email,update_aadhaar_doc,update_profile_picture,update_signature,update_first_name,update_middle_name,update_lastname,update_name_proof,update_father_name,update_fathername_proof,update_dob,update_dob_proof,update_pan_created_at,update_pan_receipt_number, update_pan_aadhar_front, update_pan_aadhar_back
            FROM update_pan WHERE update_pan_id= '$delete_update_pan_id'";
        $result = $this->conn->query($sql);
    }

    public function deleteDataFromUpdatePan($delete_update_pan_id)
    {
        $sql = "DELETE FROM update_pan WHERE update_pan_id ='$delete_update_pan_id'";
        $result = $this->conn->query($sql);
        if ($result) {
            if (!headers_sent()) {
                header('Location: admin/rec_update_pan.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }


    public function select_deleted_new_pan_data()
    {
        $select_deleted_update_pan_datas = "SELECT * FROM deleted_new_pan";
        $sel_del_update_pan = $this->conn->query($select_deleted_update_pan_datas);
        return $sel_del_update_pan;
    }

    public function select_deleted_update_pan_data()
    {
        $select_deleted_update_pan_datas = "SELECT * FROM deted_update_pan";
        $sel_del_update_pan = $this->conn->query($select_deleted_update_pan_datas);
        return $sel_del_update_pan;
    }

    public function select_enquiry_data()
    {
        $select_enquiry_datas = "SELECT * FROM enquiry_register";
        $sel_enquiry_datas = $this->conn->query($select_enquiry_datas);
        return $sel_enquiry_datas;
    }

    public function newPanStatusUpdate($new_pan_status_update_id, $status_update)
    {
        $sql = "UPDATE new_pan SET new_status='$status_update' WHERE new_pan_id ='$new_pan_status_update_id'";
        $result = $this->conn->query($sql);
        if ($result) {
            if (!headers_sent()) {
                header('Location: admin/rec_new_pan.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function updatePanStatusUpdate($update_pan_status_update_id, $status_update)
    {
        $sql = "UPDATE update_pan SET update_status='$status_update' WHERE update_pan_id  ='$update_pan_status_update_id'";
        $result = $this->conn->query($sql);
        if ($result) {
            if (!headers_sent()) {
                header('Location: admin/rec_update_pan.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }


    public function deleteDataFromNewPanPer($delete_new_pan_id_per)
    {
        $sql = "DELETE FROM deleted_new_pan WHERE deleted_new_pan_id ='$delete_new_pan_id_per'";
        $result = $this->conn->query($sql);
        if ($result) {
            if (!headers_sent()) {
                header('Location: admin/deletednewpancards.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }


    public function deleteDataFromUpdatePanPer($delete_update_pan_id_per)
    {
        $sql = "DELETE FROM deted_update_pan WHERE deted_update_pan_id ='$delete_update_pan_id_per'";
        $result = $this->conn->query($sql);
        if ($result) {
            if (!headers_sent()) {
                header('Location: admin/deletedupdatepancards.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }



    public function moveDataToNewPan($restore_delete_new_pan_id_per)
    {
        $sql = "INSERT INTO new_pan (
            new_call_pan_father,new_fm_aadhaar_doc,new_call_name, new_aadhaar_number, new_mobile_number, new_email, new_pan_dob, 
            new_parent, new_fm_profile_picture, new_fm_signature_picture, new_gender, 
            new_pan_father, new_aadhaar_doc, new_profile_picture, new_signature, new_pan_receipt_number, fm_new_pan_aadhar_front,
            fm_new_pan_aadhar_back, new_pan_aadhar_front, new_pan_aadhar_back
        )
        SELECT
        deleted_new_call_pan_father,deleted_new_fm_aadhar_doc, deleted_new_call_name, deleted_new_aadhaar_number, deleted_new_mobile_number, deleted_new_email, 
            deleted_new_pan_dob, deleted_new_parent, deleted_new_fm_profile_picture, deleted_new_fm_signature_picture, 
            deleted_new_gender, deleted_new_pan_father, deleted_new_aadhaar_doc, deleted_new_profile_picture, 
            deleted_new_signature, deleted_new_recept_num, deleted_fm_new_pan_aadhar_front, deleted_fm_new_pan_aadhar_back,
            deleted_new_pan_aadhar_front, deleted_new_pan_aadhar_back
        FROM deleted_new_pan WHERE deleted_new_pan_id = '$restore_delete_new_pan_id_per'";

        $result = $this->conn->query($sql);

        if (!$result) {
            echo "Error: " . $this->conn->error;
        }
    }

    public function deleteDataFromDeletedNewPan($restore_delete_new_pan_id_per)
    {
        $sql = "DELETE FROM deleted_new_pan WHERE deleted_new_pan_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $restore_delete_new_pan_id_per);
        $result = $stmt->execute();

        if ($result) {
            if (!headers_sent()) {
                header('Location: admin/deletednewpancards.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $stmt->error;
        }
    }






    public function moveDataToUpdatePan($restore_delete_update_pan_id_per)
    {
        $sql = "INSERT INTO update_pan (
           update_oldpan_number,update_oldpan_doc,update_call_name,update_aadhaar_number,update_mobile_number,update_email,update_aadhaar_doc,update_profile_picture,
           update_signature,update_first_name,update_middle_name,update_lastname,update_name_proof,update_father_name,update_fathername_proof,
           update_dob,update_dob_proof,update_pan_receipt_number, update_pan_aadhar_front, update_pan_aadhar_back
        )
        SELECT
        deted_oldpan_number, deted_update_oldpan_doc,deted_update_call_name,deted_update_aadhaar_number,deted_update_mobile_number,deted_update_email,
        deted_update_aadhaar_doc,deted_update_profile_picture,deted_update_signature,deted_update_first_name,deted_update_middle_name,
        deted_update_lastname,deted_update_name_proof,deted_update_father_name,deted_update_fathername_proof,deted_update_dob,
        deted_update_dob_proof,deleted_update_recept_num, deleted_update_pan_aadhar_front, deleted_update_pan_aadhar_back
        FROM deted_update_pan WHERE deted_update_pan_id ='$restore_delete_update_pan_id_per'";

        $result = $this->conn->query($sql);

        if (!$result) {
            echo "Error: " . $this->conn->error;
        }
    }

    public function deleteDataFromDeletedUpdatePan($restore_delete_update_pan_id_per)
    {
        $sql = "DELETE FROM deted_update_pan WHERE deted_update_pan_id  = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $restore_delete_update_pan_id_per);
        $result = $stmt->execute();

        if ($result) {
            if (!headers_sent()) {
                header('Location: admin/deletedupdatepancards.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $stmt->error;
        }
    }



    public function deleteDataFromenquiery($delete_enquirey_id)
    {
        $sql = "DELETE FROM enquiry_register WHERE enquiry_reg_id ='$delete_enquirey_id'";
        $result = $this->conn->query($sql);
        if ($result) {
            if (!headers_sent()) {
                header('Location: admin/enquiries_details.php');
                exit();
            } else {
                echo "Error: Headers already sent";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function select_last_inserted_new_pan_row()
    {
        $query = "SELECT * FROM new_pan ORDER BY new_pan_id  DESC LIMIT 1";
        return $this->conn->query($query);
    }

    public function select_last_inserted_update_pan_row()
    {
        $query = "SELECT * FROM update_pan ORDER BY update_pan_id  DESC LIMIT 1";
        return $this->conn->query($query);
    }


}
$db = new Database();










$new_pan_card = "CREATE TABLE IF NOT EXISTS new_pan (
    new_pan_id INT AUTO_INCREMENT PRIMARY KEY,
    new_call_name VARCHAR(60) NOT NULL,
    new_call_pan_father VARCHAR(60) NOT NULL,
    new_aadhaar_number VARCHAR(20) NOT NULL,
    new_mobile_number VARCHAR(15) NOT NULL,
    new_email VARCHAR(50) NOT NULL,
    new_pan_dob DATE NOT NULL,
    new_parent VARCHAR(10),
    new_fm_profile_picture VARCHAR(255),
    new_fm_signature_picture VARCHAR(255),
    new_fm_aadhaar_doc VARCHAR(255),    
    new_gender VARCHAR(10) NOT NULL,
    new_pan_father VARCHAR(50),
    new_aadhaar_doc VARCHAR(255),
    new_profile_picture VARCHAR(255),
    new_signature VARCHAR(255),
    new_category VARCHAR(50) DEFAULT 'New pan card application',
    new_status VARCHAR(50) DEFAULT 'Application Received.',
    new_pan_receipt_number VARCHAR(10),
    fm_new_pan_aadhar_front VARCHAR(255),
    fm_new_pan_aadhar_back VARCHAR(255),
    new_pan_aadhar_front VARCHAR(255),
    new_pan_aadhar_back VARCHAR(255),
    new_pan_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    new_pan_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$db->createNewpan($new_pan_card);


$update_pan_card = "CREATE TABLE IF NOT EXISTS update_pan (
    update_pan_id INT AUTO_INCREMENT PRIMARY KEY,
    update_oldpan_doc VARCHAR(255),
    update_oldpan_number VARCHAR(10),
    update_call_name VARCHAR(60) NOT NULL,
    update_aadhaar_number VARCHAR(20) NOT NULL,
    update_mobile_number VARCHAR(15) NOT NULL,
    update_email VARCHAR(50) NOT NULL,
    update_aadhaar_doc VARCHAR(255),
    update_profile_picture VARCHAR(255),
    update_signature VARCHAR(255),
    update_first_name VARCHAR(50),
    update_middle_name VARCHAR(50),
    update_lastname VARCHAR(50),
    update_name_proof VARCHAR(255),
    update_father_name VARCHAR(50),
    update_fathername_proof VARCHAR(255),
    update_dob DATE NOT NULL,
    update_dob_proof VARCHAR(255),
    update_category VARCHAR(50) DEFAULT 'Pan card update application', 
    update_status VARCHAR(50) DEFAULT 'Application Received.',
    update_pan_receipt_number VARCHAR(10),
    update_pan_aadhar_front VARCHAR(255),
    update_pan_aadhar_back VARCHAR(255),
    update_pan_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_pan_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$db->createUpdatepan($update_pan_card);

$admin_register = "CREATE TABLE IF NOT EXISTS admin_register (
    admin_reg_id INT AUTO_INCREMENT PRIMARY KEY,
    admin_reg_profile VARCHAR(255),
    admin_reg_name VARCHAR(50) NOT NULL,
    admin_reg_email VARCHAR(50) NOT NULL,
    admin_reg_mobile_number VARCHAR(15) NOT NULL,
    admin_reg_password VARCHAR(255) NOT NULL,
    admin_reg_confirm_password VARCHAR(255) NOT NULL,
    admin_reg_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    admin_reg_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$db->createAdminRegister($admin_register);


$enquiry_reg = "CREATE TABLE IF NOT EXISTS enquiry_register (
    enquiry_reg_id INT AUTO_INCREMENT PRIMARY KEY,
    enquiry_reg_name VARCHAR(50),
    enquiry_reg_email VARCHAR(50) NOT NULL,
    enquiry_reg_mobile VARCHAR(15) NOT NULL,
    enquiry_reg_description VARCHAR(500) NOT NULL,
    enquiry_reg_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    enquiry_reg_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$db->createEnquiryRegister($enquiry_reg);




$deleted_new_pan_card = "CREATE TABLE IF NOT EXISTS deleted_new_pan (
    deleted_new_pan_id INT AUTO_INCREMENT PRIMARY KEY,
    deleted_old_new_pan_id INT,
    deleted_new_call_name VARCHAR(60) NOT NULL,
    deleted_new_call_pan_father VARCHAR(60) NOT NULL,
    deleted_new_aadhaar_number VARCHAR(20) NOT NULL,
    deleted_new_mobile_number VARCHAR(15) NOT NULL,
    deleted_new_email VARCHAR(50) NOT NULL,
    deleted_new_pan_dob DATE NOT NULL,
    deleted_new_parent VARCHAR(10),
    deleted_new_fm_profile_picture VARCHAR(255),
    deleted_new_fm_signature_picture VARCHAR(255),
    deleted_new_fm_aadhar_doc VARCHAR(255),
    deleted_new_gender VARCHAR(10) NOT NULL,
    deleted_new_pan_father VARCHAR(50),
    deleted_new_aadhaar_doc VARCHAR(255),
    deleted_new_profile_picture VARCHAR(255),
    deleted_new_signature VARCHAR(255),
    deleted_new_created_at VARCHAR(255),
    deleted_new_recept_num VARCHAR(10),
    deleted_fm_new_pan_aadhar_front VARCHAR(255),
    deleted_fm_new_pan_aadhar_back VARCHAR(255),
    deleted_new_pan_aadhar_front VARCHAR(255),
    deleted_new_pan_aadhar_back VARCHAR(255),
    deleted_new_pan_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_new_pan_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$db->createNewpanDeleted($deleted_new_pan_card);


$deleted_update_pan_card = "CREATE TABLE IF NOT EXISTS deted_update_pan (
    deted_update_pan_id INT AUTO_INCREMENT PRIMARY KEY,
    deleted_update_new_pan_id INT,
    deted_update_oldpan_doc VARCHAR(255),
    deted_oldpan_number VARCHAR(10),
    deted_update_call_name VARCHAR(60) NOT NULL,
    deted_update_aadhaar_number VARCHAR(20) NOT NULL,
    deted_update_mobile_number VARCHAR(15) NOT NULL,
    deted_update_email VARCHAR(50) NOT NULL,
    deted_update_aadhaar_doc VARCHAR(255),
    deted_update_profile_picture VARCHAR(255),
    deted_update_signature VARCHAR(255),
    deted_update_first_name VARCHAR(50),
    deted_update_middle_name VARCHAR(50),
    deted_update_lastname VARCHAR(50),
    deted_update_name_proof VARCHAR(255),
    deted_update_father_name VARCHAR(50),
    deted_update_fathername_proof VARCHAR(255),
    deted_update_dob DATE NOT NULL,
    deted_update_dob_proof VARCHAR(255),
    deted_update_pan_created_at VARCHAR(55),
    deleted_update_recept_num VARCHAR(10),
    deleted_update_pan_aadhar_front VARCHAR(255),
    deleted_update_pan_aadhar_back VARCHAR(255),
    deleted_update_pan_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_update_pan_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$db->createUpdatepanDeleted($deleted_update_pan_card);

?>