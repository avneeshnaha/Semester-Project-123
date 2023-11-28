<?php include'partials\header.php'; ?>

<body>
    <header>
        <h1>Welcome to Your Dashboard, <?php echo $_SESSION['username']; ?></h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">My Profile</a></li>
            <li><a href="#">My Study Goals</a></li>
            <li><a href="#">Virtual Study Room</a></li>
            <li><a href="#">My Schedule</a></li>
            <li><a href="#">My Chats</a></li>
            <li><a href="#">Find Friends</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>About Us</h2>
            <p>Our virtual study room is a digital environment designed to facilitate remote and collaborative learning. It provides a platform for students and learners to come together virtually, access resources, study materials, and work on assignments or projects collectively. We also offer support services, such as online tutoring, academic advising, and technical assistance.</p>
        </section>

        <section>
            <h2>My Courses</h2>
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
    </footer>
</body>
</html>
