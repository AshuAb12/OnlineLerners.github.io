<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Course System</title>
    <link rel="stylesheet" href="styles.css">   
</head>
<body>
    <header>
        <h1>Online Course System</h1>
    </header>

    <nav><form class="search-form">
            <input  type="text" name="search" style="width: 25%;background-color: white;border:white; border-radius:2px" placeholder=" Search A Query ...">
            <button type="submit">Search</button>
        </form>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="corse.php">Courses</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            
        </ul>
    </nav>
    
        <form style="max-width: 800px;margin-top:40px;margin-bottom:40px;margin-left:15%;padding: 20px;border: 1px solid #ccc;border-radius: 5px;background-color: #ada0cb8c;" action=" ./reg_process.php"method="post">
            <h3 style="text-align: center;">Application Form</h3>
            <?php
                        extract($_GET);
                        if(isset($msg) && !empty($msg)){
                        echo"$msg";
                        }
                    ?>
            <div style= "display: grid;grid-template-columns: repeat(2, 1fr);grid-gap: 2px;">
                <div style="margin-bottom: 20px;padding: 10px;">
               
                    <input  type="text" id="name" name="name" placeholder="Full Name" style="height: 20px;width: 100%;padding: 8px;border: 1px solid #ccc;border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 20px;padding: 10px;">
                    <input type="email" id="email" name="email" placeholder="Email" style="height: 20px;width: 100%;padding: 8px;border: 1px solid #ccc;border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 20px;padding: 10px;">
                    <input type="tel" id="phone" name="phone" placeholder="Phone" style="height: 20px;width: 100%;padding: 8px;border: 1px solid #ccc;border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 20px;padding: 10px;">
                    <input type="text" id="course" name="course" placeholder="Course" style="height: 20px;width: 100%;padding: 8px;border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
               
                <div style="margin-bottom: 20px;padding: 10px;">
                    <input type="date" id="dob" name="dob" placeholder="Date of Birth" style="height: 20px;width: 100%;padding: 8px;border: 1px solid #ccc;border-radius: 3px;" required>
            </div>
                <div style="margin-bottom: 20px;padding: 10px;">
                    <select id="gender" name="gender" style="height: 35px;width: 100%;padding: 8px;border: 1px solid #ccc;border-radius: 3px;" required>
                        <option value="" disabled selected>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option> 
                    </select>
                </div>
                <div style="margin-bottom: 20px; padding: 10px;">
                    <textarea id="address" name="address" rows="4" placeholder="Address" style="height: 20px;width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 3px;"required></textarea>
                </div>
               
            </div>
            <div style="text-align: center;">
                    <button type="submit">Submit Application</button>
                </div>
        </form>
    

    <footer>
        <p>&copy; 2023 Online Course System. All rights reserved.</p>
        <a href="feedback.php"><button class="feedback-btn">Give Feedback</button></a>
    </footer>
</body>
</html>