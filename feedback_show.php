<!DOCTYPE html>
<html>
<head>
    <title>Teacher Column Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-size: cover;
            background-image: url("back2.jpg");
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
    <h1>Feedback Reviews </h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Feedback</th>

          
        </tr>
        <?php
            $con = mysqli_connect("localhost", "root", "", "finalproj");
            $sql = "SELECT * FROM `feedbackdb`";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                extract($row);
                echo "
                <tr>
                    <td>$f_id</td>
                    <td>$f_name</td> 
                    <td>$f_email</td> 
                    <td>$f_feedback</td> 
                   
                </tr>";
            }
        ?>
    </table>
</body>
</html>
