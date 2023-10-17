<!DOCTYPE html>
<html>
<?php
session_start(); // Start the session

// Define a simple array of user data (in a real application, this would come from a database)
$users = [
    ['username' => 'user1', 'password' => 'password1'],
    ['username' => 'user2', 'password' => 'password2'],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Loop through the user array and check for a matching user
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php"); // Redirect to the dashboard after successful login
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
        <h1>Welcome to My Simple Website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis ultrices dolor.</p>
        </section>

        <section>
            <h2>Our Services</h2>
            <ul>
                <li>Web Design</li>
                <li>Graphic Design</li>
                <li>Digital Marketing</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Simple Website. All rights reserved. <?php echo date("Y-m-d H:i:s"); ?></p>
    </footer>
</body>
</html>