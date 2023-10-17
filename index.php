<!DOCTYPE html>
<html>
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