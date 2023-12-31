
        
        <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
       
        
    </head>
    
    <body>
        <div class="login-container">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
    
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
    
                <button type="submit">Log In</button>
            </form>
        </div>
    </body>
<head>
    <meta charset="UTF-8">
    <title>Virtual Study Room</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

    
<body>
    <header>
        <h1>Welcome to the virtual study room</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">My Profile</a></li>
            <li><a href="login.php">Login</a></li>x
            <li><a href="#">My Study Goals</a></li>
            <li><a href="#">Virtual Study Room</a></li>
            <li><a href="#">My Schedule</a></li>
            <li><a href="#">My Chats</a></li>
            <li><a href="#">Find Friends</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="donate.php">Donate</a></li>
        </ul>
    </nav>

    <main>
        <section class="background-section">
            <div class="center-content">
                <h2>About Us</h2>
                <img src="images\chris-montgomery-smgTvepind4-unsplash (1).jpg" alt="About Us Image">
                <p>Our virtual study room is a digital environment designed to facilitate remote and collaborative learning. It provides a platform for students and learners to come together virtually, access resources, study materials, and work on assignments or projects collectively. We also offer support services, such as online tutoring, academic advising, and technical assistance.</p>
            </div>
        </section>

        <section class="background-section">
            <div class="center-content">
                <h2>My Courses</h2>
                <img src="images\priscilla-du-preez-XkKCui44iM0-unsplash (1).jpg" alt="About Us Image">
                <ul>
                    <li><a href="#">DGL 123 - Introduction to PHP</a></li>
                    <li><a href="#">DGL 105 - Introduction to Digital Graphics</a></li>
                    <li><a href="#">MAT 111 - Basic Principles of Algebra</a></li>
                </ul>
            </div>
        </section>

        <section class="background-section">
            <div class="center-content">
                <h2>Find Friends</h2>
                <img src="images\john-schnobrich-2FPjlAyMQTA-unsplash (1) (1).jpg" alt="About Us Image">
                <p>Looking for study partners or friends with similar interests? Use our "Find Friends" feature to connect with fellow students and expand your network. You can search for users based on their subjects, interests, or study goals. Collaborate and make your virtual study experience even more rewarding.</p>
                <a href="#" class="cta-button">Find Friends</a>
            </div>
        </section>
    </main>

    <footer class="background-section">
        <div class="center-content">
            <div class="cta">
                <h3>Ready to boost your studies?</h3>
                <img src="images\javier-trueba-iQPr1XkF5F0-unsplash (1).jpg" alt="About Us Image">
                <p>Join our virtual study room today and unlock a world of knowledge!</p>
                <a href="#" class="cta-button">Get Started</a>
            </div>
            <p>&copy; 2023 Virtual Study Room</p>
        </div>
        </footer>
    </body>
</html>
