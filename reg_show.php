<!DOCTYPE html>
<html>
<head>
    <title>Teacher Column Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-image: url("back3.jpg");
            background-size: cover;
            
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        input[type="button"] {
            padding: 6px 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="button"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Teacher Column Form</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Course</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Address</th>
          
        </tr>
        <?php
            $con = mysqli_connect("localhost", "root", "", "finalproj");
            $sql = "SELECT * FROM `application`";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                extract($row);
                echo "
                <tr>
                    <td>$applicant_id</td>
                    <td>$applicant_name</td> 
                    <td>$applicant_phone</td>  
                    <td>$applicant_email</td> 
                    <td>$applicant_course</td> 
                    <td>$applicant_date</td> 
                    <td>$applicant_gender</td>
                    <td>$applicant_address</td> 
                   
                </tr>";
            }
        ?>
    </table>
</body>
</html>
