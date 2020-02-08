<?php

class Result{

    public function AddResult($data){
        $department = $data['department'];
        $roll = $data['roll'];
        $session = $data['session'];
        $one = $data['1st'];
        $two = $data['2nd'];
        $three = $data['3rd'];
        $four = $data['4th'];
        $five = $data['5th'];
        $six = $data['6th'];
        $seven = $data['7th'];
        $eight = $data['8th'];
        $final_cgpa = $data['final_cgpa'];

        $Db = new Database();
        $insert = "INSERT INTO result(department,session,roll,1st,2nd,3rd,4th,5th,6th,7th,8th,final_cgpa) VALUES ('$department','$session','$roll','$one','$two','$three','$four','$five','$six','$seven','$eight','$final_cgpa' )";
        $result = $Db->ResultQuery($insert);
        if ($result) {
            return "<h6 class='text-success text-center m-0'>Result added success!</h6>";
        }
        else{
            return false;
        }
    }

    public function UpdateResult($updateData){
        $Db = new Database();

        $id = $updateData['student_id'];
        $department = $updateData['department'];
        $session = $updateData['session'];
        $roll = $updateData['roll'];
        $one = $updateData['1st'];
        $two = $updateData['2nd'];
        $three = $updateData['3rd'];
        $four = $updateData['4th'];
        $five = $updateData['5th'];
        $six = $updateData['6th'];
        $seven = $updateData['7th'];
        $eight = $updateData['8th'];
        $final_cgpa = $updateData['final_cgpa'];

        $updateResult = "UPDATE result SET department='$department',session='$session',roll='$roll',1st='$one',2nd='$two',3rd='$three',4th='$four',5th='$five',6th='$six',7th='$seven',8th='$eight',final_cgpa='$final_cgpa' WHERE id=$id ";
        $result = $Db->ResultQuery($updateResult);
        if ($result) {
            return "<h6 class='text-success text-center m-0'>Result Update success!</h6>";
        }
        else{
            return "<h6 class='text-danger text-center m-0'>Result Updateded failed!</h6>";
        }
    }

    public function DeleteResult($deleteId){
        $Db = new Database();
        $delete = "DELETE FROM result WHERE id=$deleteId ";
        $result_delete = $Db->ResultQuery($delete);
        return $result_delete;
    }

}
