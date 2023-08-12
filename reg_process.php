<?php
 extract($_POST);

 if (isset($name) && !empty($name) && isset($email) && !empty($email) && isset($phone) && !empty($phone) && isset($course) && !empty($course) && isset($dob) && !empty($dob) && isset($gender) && !empty($gender) && isset($address) && !empty($address))
 {

    $con = mysqli_connect("localhost","root","","finalproj");
    $sql ="INSERT INTO `application`(`applicant_name`, `applicant_email`, `applicant_phone`, `applicant_course`, `applicant_date`, `applicant_gender`, `applicant_address`)
    VALUES ('$name','$email','$phone','$course','$dob','$gender','$address')";
    
    if (mysqli_query($con, $sql))
    {
        exit(header("Location: ./registers.php?msg=Application Successfully!"));
    }
    else
    {
        $error = mysqli_error($con);
        echo "$error";
    }
}
else
{
    exit(header("Location: ./registers.php?msg=Error: Please fill all the required fields."));
}
?>
