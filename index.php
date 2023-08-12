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

     <main>
     <div class="top-container">
            <img src="https://img.freepik.com/free-vector/digital-online-education-concept-blank-space-laptop_255625-422.jpg?w=2000" alt="Top Container Image">
            
        </div>
      
        <!-- Three Containers -->

        <div class="container">
            <h3>"An Investment in Knowledge pays the Best Interest."</h3>
            <p>Legendary leader Benjamin Franklin in his book 'The Way to Wealth' said, “An investment in knowledge pays the best interest”.It suggests that acquiring knowledge is a valuable investment that yields the best returns.</p>
        </div>

        <div class="container">
            <h3>“Live as if you were to die tomorrow. Learn as if you were to live forever.”</h3>
            <p>"Our Legendary Freedom Fighter Mahatma Gandhi Said That it can the ones life.Don't be afraid to live life and try something new, let life be the reason you are living.  "</p>
        </div>

        <div class="container">
            <h3> “Develop a passion for learning. If you do, you will never cease to grow.”</h3>
            <p>The simple definition of learning is to gain or acquire a skill or knowledge in something. When you have a passion to learn something, a passion to acquire a skill or understanding, you will continuously grow and excel.</p>
        </div>
        <!-- End of Three Containers -->
    </main>
    <main> <section>
            <h2>Welcome to our Online Course System</h2>
            <p>Enroll in various online courses and enhance your skills.</p>
            <a href="login.php" class="btn">Login</a>
            <a href="registers.php" class="btn">Register</a>
            <br>
        </section></main>
        <footer>
        <p>&copy; <?php echo date("Y"); ?> Online Course System. All rights reserved.</p>
        <a href="feedback.php"><button class="feedback-btn">Give Feedback</button></a>
    </footer>
</body>
</html>