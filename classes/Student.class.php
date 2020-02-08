<?php

class Student{

    public function AddStudent($addInfo){
        $fname = $addInfo['fname'];
        $lname = $addInfo['lname'];
        $st_id = $addInfo['Id'];
        $roll = $addInfo['roll'];
        $reg = $addInfo['reg'];
        $department = $addInfo['department'];
        $semister = $addInfo['semister'];
        $session = $addInfo['session'];
        $phone = $addInfo['phone'];
        $email = $addInfo['email'];
        $dob = $addInfo['dob'];
        $blood = $addInfo['blood'];
        $home = $addInfo['home'];

        $Db = new Database();
        $checkRoll = "SELECT * FROM students WHERE roll='$roll'  ";
        $result = $Db->ResultQuery($checkRoll);
        $countRoll = $result->num_rows;
        if ($result==true) {
            if ($countRoll==1) {
                return "<h6 class='text-danger text-center'><strong>Roll No already used!</strong></h6>";
            }
        }
        if (strlen($fname) < 3 ) {
            return "<h6 class='text-danger text-center'><strong>Short username!</strong></h6>";
        }
        elseif(!preg_match('/^[a-zA-Z0-9 ]*$/',$fname)){
            return "<h6 class='text-danger text-center'><strong>Invalid username!</strong></h6>";
        }
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return "<h6 class='text-danger text-center'><strong>Invalid email!</strong></h6>";
        }
        else{
            $Db = new Database();
            $insert = "INSERT INTO students(fname,lname,st_id,roll,reg,department,semister,session,phone,email,dob,blood,home) VALUES ('$fname','$lname','$st_id','$roll','$reg','$department','$semister','$session','$phone','$email','$dob','$blood','$home') ";
            $result = $Db->ResultQuery($insert);
            if ($result) {
                return "<h6 class='text-success text-center'><strong>Student added successfull!</strong></h6>";
            }
        }


    }

    public function EditStudent($data){
        $id = $data['editId'];
        $fname = $data['fname'];
        $lname = $data['lname'];
        $st_id = $data['Id'];
        $roll = $data['roll'];
        $reg = $data['reg'];
        $department = $data['department'];
        $semister = $data['semister'];
        $session = $data['session'];
        $phone = $data['phone'];
        $email = $data['email'];
        $dob = $data['dob'];
        $blood = $data['blood'];
        $home = $data['home'];

        if (strlen($fname) < 3) {
            return "<h6 class='text-center'><strong class='text-danger'>Short student name!</strong></h6> ";
        }

        $Db = new Database();
        $update = "UPDATE students SET fname='$fname',lname='$lname',st_id='$st_id',roll='$roll',reg='$reg',department='$department',semister='$semister',session='$session',phone='$phone',email='$email',dob='$dob',blood='$blood',home='$home' WHERE id=$id ";
        $result = $Db->ResultQuery($update);
        
        if ($result == true) {
            return "<h6 class='text-center m-0'><strong class='text-success '>Update success!</strong></h6> ";
        }
        else{
            return false;
        }
    }
// Delete student
    public function DeleteStudent($deleteId){
        $DB = new Database();
        $deleteStudent = "DELETE FROM students WHERE id = $deleteId";
        $result = $DB->ResultQuery($deleteStudent);
        return $result;
    }

}

