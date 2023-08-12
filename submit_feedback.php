<?php
 extract($_POST);

 if (isset($fname) && !empty($fname) && isset($femail) && !empty($femail) && isset($ffeedback) && !empty($ffeedback))
 {

    $con = mysqli_connect("localhost","root","","finalproj");
    $sql ="INSERT INTO `feedbackdb`( `f_name`, `f_email`, `f_feedback`) 
    VALUES('$fname','$femail','$ffeedback')";
    
    if (mysqli_query($con, $sql))
    {
        exit(header("Location: ./feedback.php?msg=Feedback Taken Successfully!"));
    }
    else
    {
        $error = mysqli_error($con);
        echo "$error";
    }
}
else
{
    exit(header("Location: ./feedback.php?msg=Error: Please fill all the required fields."));
}
?>
