<?php

class User{

// Add user
    public function AddUser($addData){
        $department = $addData['department'];
        $roll = $addData['roll'];
        $password = $addData['password'];
        $con_password = $addData['con_password'];

        $Db = new Database();
        $getRoll = "SELECT * FROM users WHERE roll=$roll ";
        $result_roll = $Db->ResultQuery($getRoll);
        $countRoll = $result_roll->num_rows;
        if ($result_roll==true) {
            if ($countRoll == 1) {
                return "<h6 class='text-center text-danger'>Roll No already exists!</h6>";
            }
        }
        if (strlen($password) <=5) {
            return "<h6 class='text-center text-danger'>Password should be 6 characters!</h6>";
        }
        elseif($password!=$con_password){
            return "<h6 class='text-center text-danger'>Both password not matched!</h6>";
        }
        else{
            $Db = new Database();
            $encPwd = sha1($password);
            $insert = "INSERT INTO users(department,roll,pwd) VALUES ('$department','$roll','$encPwd') ";
            $result = $Db->ResultQuery($insert);
            if ($result) {
                return "<h6 class='text-center text-success'>User added success!</h6>";
            }
            else{
                return "<h6 class='text-center text-danger'>User added failed!</h6>";
            }
        }

    }

// User update
    public function UpdateUser($updateData){
        $id = $updateData['update_id'];
        $department = $updateData['department'];
        $roll = $updateData['roll'];
        $password = $updateData['password'];
        $con_password = $updateData['con_password'];

        if (strlen($password) <=5) {
            return "<h6 class='text-center text-danger'>Password should be 6 characters!</h6>";
        }
        elseif ($password!=$con_password) {
            return "<h6 class='text-center text-danger'>Both password not matched!</h6>";
        }
        else{
            $Db = new Database();
            $encPwd = sha1($password);

            $update = "UPDATE users SET department='$department',roll='$roll',pwd='$encPwd' WHERE id='$id' ";
            $result = $Db->ResultQuery($update);
            if ($result == true) {
                return "<h6 class='text-center text-success'>User update success!</h6>";
            }
            else{
                return "<h6 class='text-center text-danger'>User update failed!</h6>";
            }
        }

    }
// Delete user
    public function DeleteUser($id){
        $Db = new Database();
        $delete = "DELETE FROM users WHERE id=$id ";
        $result = $Db->ResultQuery($delete);
        return $result;
    }

// User login

    public function UserLogin($userLoginData){
        $Db = new Database();

        $roll = $userLoginData['roll'];
        $password = $userLoginData['password'];
        $encPwd = sha1($password);

        $checkInfo = "SELECT * FROM users WHERE roll='$roll' AND pwd='$encPwd' ";
        $result = $Db->ResultQuery($checkInfo);
        $count_rows = $result->num_rows;
        if ($result==true) {
            if ($count_rows==1) {
                return true;
            }
            else{
                return false;
            }
        }

    }

}
