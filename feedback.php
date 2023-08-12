<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Head content ... -->
    <title>feedback</title>
  <link rel="stylesheet" href="feedback.css">
</head>
<body>
    <!-- ... Navigation bar ... -->

    <header>
        <h1>Feedback Form</h1>
    </header>

    <nav><form class="search-form">
            <input  type="text" name="search" style="width: 25%;background-color: white;border:white; border-radius:2px" placeholder=" Search A Query ...">
            <button type="submit">Search</button>
        </form>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="course.php">Courses</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contactl.php">Contact</a></li>
            
        </ul>
    </nav>


    <main>
        <div class="container">
            <h2>Provide Your Feedback</h2>
            <?php
                        extract($_GET);
                        if(isset($msg) && !empty($msg)){
                        echo"$msg";
                        }
                    ?>
            <form class="feedback-form" action="submit_feedback.php" method="POST">
                <div class="form-group">
                    <input type="text" id="name" name="fname" placeholder="Enter your name..." required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="femail" placeholder="Enter your email..." required>
                </div>
                <div class="form-group">
                    <textarea id="feedback" name="ffeedback" rows="4" placeholder="Enter your feedback..." required></textarea>
                </div>
                <button type="submit">Submit Feedback</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Online Course System. All rights reserved.</p>
    </footer>
</body>
</html>
