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
            <li><a href="course.php">Courses</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            
        </ul>
    </nav>

    <h2 style="margin-left: 30px;margin-top : 30px; color:antiquewhite">>> Course </h2>
    <main>
    <div class="container">
    <a href="registers.php"><img src="html.jpg" alt="Container"></a>
</div>

        <div class="container">
            <a href="registers.php"><img src="css.jpg" alt="Top Container Image"> </a>
        </div>

        <div class="container">
        <a href="registers.php"><img src="javascript.jpg" alt="Top Container Image"></a>
        </div>
        <!-- End of Three Containers -->
    </main>
    <main>
    <div class="container">
    <a href="registers.php"><img src="Ai.jpeg" alt="Container"></a>
</div>

        <div class="container">
            <a href="registers.php"><img src="java.jpeg" alt="Top Container Image"> </a>
        </div>

        <div class="container">
        <a href="registers.php"><img src="adjjava.jpeg" alt="Top Container Image"></a>
        </div>
        <!-- End of Three Containers -->
    </main>
    <main> <section>
            <h2>Welcome to our Online Course System</h2>
            <p>Enroll in various online courses and enhance your skills.</p>
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
            <br>
        </section></main>
    <footer>
        
        <p>&copy; <?php echo date("Y"); ?> Online Course System. All rights reserved.</p>
        <a href="feedback.php"><button class="feedback-btn">Give Feedback</button></a>
    </footer>
    
</body>
</html>