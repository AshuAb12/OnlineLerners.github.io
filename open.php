<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function openfun1() {
            window.open("reg_show.php");
        }

        function openfun2() {
            window.open("feedback_show.php");
        }
        function openfun3(){
            window.open("index.php");
        }
    </script>

    <style>
        body {
            background-image: url('back.jpg');
            background-size: cover;
        }

        button {
            margin: 50px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 50px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 60%;
            display: block;
            padding: 20px;
        }

        .registration-form button:hover {
            background-color: #0056b3;
        }

        main {
            padding: 2rem;
            text-align: center;
        }

        .btn {
            display: inline-block;
            margin: 0.5rem;
            padding:  1rem;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 3px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .container {
            margin: 16px;
            padding: 8px;
            background-color: #a6adb5c9;
            border-radius: 5px;
            flex: 1;
            /* Grow to occupy available space evenly */
            max-width: 500px;
            /* Limit the maximum width of each container */
        }

        /* main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            margin-top: 30px;
        } */

        .container {
            flex: 0 0 calc(33.33% - 40px);
            margin: 15px;
            background-color: #a6adb5c9;
            border-radius: 10px;
            padding: 3px;
            text-align: center;
            opacity: 0.7;
        }

        .container img {
            width: 100%;
            border-radius: 10px;
        }

        /* Additional styles for content in the containers */
        .container h3 {
            margin-bottom: 8px;
        }

        .container p {
            font-size: 16px;
        }

        main {
            padding: 2rem;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <button onclick="openfun1()">View applications for Course</button>
        </div>
        <div class="container">
            <button onclick="openfun2()">View Feedbacks</button>
        </div>
    </main>
<main>
    <div class="container">
            <button onclick="openfun3()">Home </button>
        </div>
        
        
        </main>

</body>

</html>
