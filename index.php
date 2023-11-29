<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="styles.css">
<?php
session_start(); 
$users = [
    ['username' => 'user1', 'password' => 'password1'],
    ['username' => 'user2', 'password' => 'password2'],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        }
    }

    $error = "Invalid username or password";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Log In</button>
    </form>

    <?php
    if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    ?>
</body>
</html>
<head>
    <meta charset="UTF-8">
    <title>Simple Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to the virtual study room</h1>
    </header>

    <nav>
        <ul>
        <li><a href="#">My Profile</a></li>
            <li><a href="#">My Study Goals</a></li>
            <li><a href="#">Virtual Study Room</a></li>
            <li><a href="#">My Schedule</a></li>
            li><a href="#">My Chats</a></li>
            <li><a href="#">Find Friends</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>About Us</h2>
            <p>Our virtual study room, is a digital environment designed to facilitate remote and collaborative learning. It provides a platform for students and learners to come together virtually, access resources, study materials, and work on assignments or projects collectively. rt services, such as online tutoring, academic advising, and technical assistance.
                
            
            </p>
        </section>

        <section>
            <h2>My Courses</h2>
            <ul>
            <ul>
                <li><a href="#">DGL 123 - Introduction to PHP</a></li>
                <li><a href="#">DGL 105 - Introduction to Digital Graphics</a></li>
                <li><a href="#">MAT 111 - Basic Principles of Algebra</a></li>
            </ul>
        </section>
        <section>
            <h2>Find Friends</h2>
            <p>Looking for study partners or friends with similar interests? Use our "Find Friends" feature to connect with fellow students and expand your network. You can search for users based on their subjects, interests, or study goals. Collaborate and make your virtual study experience even more rewarding.</p>
            <a href="#" class="cta-button">Find Friends</a>
        </section>
    </main>

    <footer>
        <div class="cta">
            <h3>Ready to boost your studies?</h3>
            <p>Join our virtual study room today and unlock a world of knowledge!</p>
            <a href="#" class="cta-button">Get Started</a>
        </div>
    
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Virtual Study Room. All rights reserved. <?php echo date("Y-m-d H:i:s"); ?></p>
    </footer>
</body>

</html>