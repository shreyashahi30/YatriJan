<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YatriJan: Transforming your railway journey</title>
    <link rel="stylesheet" href="CSS Styling.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">YatriJan</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Ticket Scanning</a></li>
                <li><a href="CoPassanger.html">Co Passengers</a></li>
                <li><a href="#">Food and Beverages</a></li>
                <li><a href="Cleanliness.html">Cleanliness</a></li>
                <li>
                <?php
                session_start(); // Start the session

                // Check if user is logged in
                if (isset($_SESSION['username'])) {
                    // User is logged in, show personalized content or profile
                    echo "Welcome, " . $_SESSION['username'] . "!"; // Example: Display username
                    echo " | <a href='logout.php'>Logout</a>"; // Add logout link
                } else {
                    // User is not logged in, show login/signup link
                    echo "<a href='Login_Signup.html'>Login/Signup</a>";
                }
                ?>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>Welcome To YatriJan</h1>
            <a href="features.html" class="button">Get Started</a>
            <a href="features.html" class="button">Learn More</a>
        </section>
        <div class="features-container">
            <div class="feature-card">
                <svg class="features-icon" <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                <h3>Ticket Scanning</h3>
                <p>Scan your ticket for easy and quick access to your train journey.</p>
            </div>
            <div class="feature-card">
                <svg class="features-icon" <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                <h3>User Login</h3>
                <p>Enables different users to login</p>
            </div>
            <div class="feature-card">
                <svg class="features-icon" <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                <h3>Co-Passengers Details</h3>
                <p>View and manage details of your co-passengers for a hassle-free journey.</p>
            </div>
            <div class="feature-card">
                <svg class="features-icon" <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                <h3>Food and Beverages</h3>
                <p>Order delicious meals and beverages during your train journey.</p>
            </div>
            <div class="feature-card">
                <svg class="features-icon" <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                <h3>Cleanliness</h3>
                <p>Report cleanliness issues and help maintain a clean environment on trains.</p>
            </div>
            <div class="feature-card">
                <svg class="features-icon" <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                <h3>Lost Alerts</h3>
                <p>Enables you to find and track your Luggage</p>
            </div>
            <div class="feature-card">
                <svg class="features-icon" <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                <h3>Mischivious or Fraudental </h3>
                <p>Allows user to complain</p>
            </div>
        </div>
    </main>
    <footer>
        <p class="marquee">Welcome to YatriJan - Transforming your railway journey!</p>
        <ul>
            <li>Download our brochure: <a href="documents/brochure.pdf">YatriJan Brochure (PDF)</a></li>
            <li>Visit IRCTC website: <a href="https://www.irctc.co.in">Indian Railway Catering and Tourism Corporation</a></li>
            <li>Get in touch: <a href="contact.html">Contact YatriJan</a></li>
        </ul>
    </footer>
    <script>
        function loadLoginOrSignup() {
            window.location.href = 'Login_Signup.html'; // Redirect to Login_Signup.html
        }
    </script>
</body>

</html>
