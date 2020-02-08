<?php

class Admin{

// Admin login
    public function AdminLogin($data){
        $Db = new Database();
        $username = $data['admin_username'];
        $password = $data['admin_pwd'];
        $encPwd = sha1($password);

        $login = "SELECT * FROM admin WHERE username = '$username' AND pwd='$encPwd' ";
        $result = $Db->ResultQuery($login);
        $userData = $result->fetch_array();
        $countData = $result->num_rows;

        if ($result==true) {
            if ($countData==1) {
                $setCookie = Cookie::SetCookie($userData['name']);
                return $setCookie;
            }
            else{
                return false;
            }
        }
    }

// Admin change information 

    public function AdminInfo($adminData){
        $Db = new Database();

        $admin_username = $_REQUEST['admin_username'];
        $username = $_REQUEST['admin_name'];
        $bio = $_REQUEST['admin_bio'];
        $photoName = $_FILES['admin_photo']['name'];
        $photo_tmp = $_FILES['admin_photo']['tmp_name'];
        $photo_loc = "admin-img/";
        
        $uniqueId = uniqid($photoName).'.jpg';
        move_uploaded_file($photo_tmp,$photo_loc.$uniqueId);

        $update = "UPDATE admin SET username='$admin_username', name='$username',bio='$bio',dp='$uniqueId' WHERE id=1 ";
        $result = $Db->ResultQuery($update);
        
        if ($result) {
            return "<h6 class='text-success text-center m-0'>Update success!</h6>";
        }
        else{
            return "<h6 class='text-danger text-center m-0'>Updateded failed!</h6>";
        }
    }

// Admin change password

    public function AdminPassword($adminPassword){
        $Db = new Database();

        $old_pwd = $_REQUEST['admin_pwd'];
        $new_pwd = $_REQUEST['new_pwd'];
        $con_pwd = $_REQUEST['con_pwd'];
        $enc_old_Pwd = sha1($old_pwd);
        $enc_new_Pwd = sha1($new_pwd);

        $checkPwd = "SELECT * FROM admin WHERE pwd='$enc_old_Pwd' ";
        $result_pwd = $Db->ResultQuery($checkPwd);
        $count_pwd = $result_pwd->num_rows;

        if($count_pwd!=1){
            return "<h6 class='text-danger text-center m-0'>Old password incorrect!</h6>";
        }
        elseif (strlen($new_pwd) <=5) {
            return "<h6 class='text-danger text-center m-0'>Password should be 6 characters!</h6>";
        }
        elseif($new_pwd != $con_pwd){
            return "<h6 class='text-danger text-center m-0'>Both password not matched!</h6>";
        }
        else{
            $updatePwd = "UPDATE admin SET pwd='$enc_new_Pwd' WHERE id=1 ";
            $runUpdate = $Db->ResultQuery($updatePwd);
            if ($runUpdate==true) {
                return "<h6 class='text-success text-center m-0'>Password changed!</h6>";
            }
        }
    }
    

}
