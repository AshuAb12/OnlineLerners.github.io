<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
            <li><a href="course.php">Courses</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            
        </ul>
    </nav>
   

    <main>
        <div class="container">
            <h2>Contact Information</h2>
            <p>Email: ashwinbondre1392@gmail.com</p>
            <p>Phone: +917385044689</p>
            <p>Address: 1211 Main Street narangi nagar, yavatmal, Maharastra,India</p>
        </div>
    </main>
    <main>
        <div class="container">
            <h2>For Business Information</h2>
            <p>Email: ashubondre123@gmail.com</p>
            <p>Phone: +9184322622837</p>
            <p>Address: 223 Main Street Gandhi Chouk, Nagpur, Maharastra , India </p>
        </div>
    </main>

   

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Online Course System. All rights reserved.</p>
        <a href="feedback.php"><button class="feedback-btn">Give Feedback</button></a>    </footer>
</body>
</html>
