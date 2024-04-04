<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YatriJan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header >
  <nav>
    <ul>
      <li><a href="ticket_scanning.html">Ticket Scanning</a></li>
      <li><a href="co_passanger.html">Co Passengers</a></li>
      <li><a href="food_and_beverages.html">Food and Beverages</a></li>
      <li><a href="Cleanliness.html">Cleanliness</a></li>
      <li><a href="lost_and_found.html">Lost And Found</a></li> 
      <li><a href="mischeivious.html">Mischeivious Report</a></li> 
      <li><a href="TrainTracking.html">Train Tracking</a></li> 
    </ul><div>
      <?php
      session_start(); 
  
      if (isset($_SESSION['username'])) {
          echo "<button class='lbutton'><a href='logout.php'>Logout</a></button>";
          echo "<span class='welcome'> Welcome, " . $_SESSION['username'] . "</span>";
      } else {
          echo "<button class='lbutton'><a href='Login_Signup.html'>Login / Signup</a></button>";
      }
      ?>
      </div>
  </nav>
  <p class="marquee">Welcome to YatriJan - Transforming your railway journey!</p>
</header>
<section style="position: relative;">
  <img src="train_image2.jpg" alt="Train" class="image image6">
  <span class="block-letters">Welcome to YatriJan</span>
</section>
<main style="background-color:whitesmoke">
  <section>
  <div class="button-container">
    <button class="satisfied-users-button">
      <div class="button-content">
        <img src="image.png" alt="Satisfied Users" height="50px" class="satisfied-users-image">
        <span class="satisfied-users-text">Users  21k+</span>
      </div>
    </button>  
    <button class="reviews-button">
		<div class="button-content">
		  <img src="https://martech.org//wp-content//uploads//2016//04//ss-rating-review-stars.jpg" alt="Reviews" class="satisfied-users-image">
		  <span class="satisfied-users-text">Reviews 51K+</span>
		</div>
	  </button>
	  <button class="reports-button">
		<div class="button-content">
		  <img src="picture 14.jpg" alt="Reports Issued" class="satisfied-users-image">
		  <span class="satisfied-users-text">Reports Issued 21k+</span>
		</div>
	  </button>
  </div>
</section>
  <section>
  <div class="container">
  <div class="features-container">
    <div class="feature-card">
        <h4>Features</h4>
        <svg class="features-icon" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
        <h3>Home</h3>
        <p>Explore the latest updates and information about your journey.</p>
      </div>
    <div class="feature-card">
      <h4>Features</h4>
      <svg class="features-icon" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
      <h3>Ticket Scanning</h3>
      <p>Scan your ticket for easy and quick access to your train journey.</p>
    </div>
    <div class="feature-card">
      <h4>Features</h4>
      <svg class="features-icon" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
      <h3>Co Passengers</h3>
      <p>View and manage details of your co-passengers for a hassle-free journey.</p>
    </div>
    <div class="feature-card">
      <h4>Features</h4>
      <svg class="features-icon" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
      <h3>Food and Beverages</h3>
      <p>Explore and order from a wide range of food and beverages available.</p>
    </div>
    <div class="feature-card">
      <h4>Features</h4>
      <svg class="features-icon" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-h</title><path d="M448,341.37V170.61A32,32,0,0,0,432.11,143l-152-88.46a47.94,47.94,0,0,0-48.24,0L79.89,143A32,32,0,0,0,64,170.61V341.37A32,32,0,0,0,79.89,369l152,88.46a48,48,0,0,0,48.24,0l152-88.46A32,32,0,0,0,448,341.37Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="69 153.99 256 263.99 443 153.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="463.99" x2="256" y2="263.99" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
      <h3>Cleanliness</h3>
      <p>Report and track cleanliness issues for a pleasant journey experience.</p>
    </div>
  </div>
  <div class="feature-card-button">
    <button onclick="prevCard()">&#8249;</button>
    <button onclick="nextCard()">&#8250;</button>
  </div>
</div>
</section>
</main>
<section style="background-color:rgba(144, 239, 254, 0.456) ;">
<h1>About Us</h1>
<h3>MaKe Your journey memorable!!!</h3>
<p>Welcome to YatriJan: the dynamic online program designed to revolutionize railway administration for the Indian Railway Catering and Tourism Corporation (IRCTC). 
At YatriJan, we're on a mission to redefine the passenger experience through innovation and technology. 
Our platform offers a range of advanced features, including seamless co-passenger management, enhanced parental controls, and upgraded food and beverage services. With real-time cleanliness feedback and efficient ticket scanning, we ensure a hassle-free journey every time. 
Join us as we embark on a journey to transform railway travel into a seamless, intuitive, and technologically advanced adventure. 
Experience the future of rail travel with YatriJan!</p>
</section>
<section style="background-color: rgba(255, 146, 164, 0.364);">
<h1>Picture Gallery</h1>
<div class="images-container">
  <img src="train_image1.jpg" alt="Image 1" class="image image1">
  <img src="Train.jpg" alt="Image 2" class="image">
  <img src="train_image3.jpg" alt="Image 3" class="image image3">
  <img src="train_image4.jpg" alt="Image 4" class="image">
  <img src="train_image5.jpg" alt="Image 5" class="image">
</div>
</section>
<section style="background-color: rgba(235, 55, 214, 0.626);">
<div class="contact-container">
  <div class="contact">
    <img src="https://cdn.iconscout.com/icon/free/png-256/free-email-2026367-1713640.png" alt="Email" width="50px">
    <h3>Email</h3>
    <h3>Contact@abcmakers.com</h3>
  </div>
  <div class="contact">
    <img src="https://static.vecteezy.com/system/resources/thumbnails/011/338/343/small/phone-black-icon-with-call-sign-free-png.png" alt="Phone" width="50px">
    <h3>Call Us</h3>
    <h3>+9197245609877</h3>
  </div>
  <div class="contact">
    <img src="https://www.freeiconspng.com/thumbs/location-icon-png/location-icon-24.png" alt="Location" width="50px">
    <h3>Head Office</h3>
    <h3>Sector 3 HSR Layout Banglore</h3>
  </div>
</div>
<section style="background-color: whitesmoke;">
<footer>
  <div class="footer-social">
    <h3>Follow Us</h3>
    <a href="https://www.facebook.com/example">
      <img src="data:image/png;base64,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" alt="Facebook" class="social-icon">
      Facebook
    </a>    
    <a href="https://twitter.com/example">
      <img src="https://i.pinimg.com/736x/18/9a/1f/189a1fdfbe358e78b748df25013bd02a.jpg" alt="twitter" class="social-icon">
      Twitter
    </a>
    <a href="https://www.instagram.com/example">
      <img src="data:image/png;base64,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" alt="Instagram" class="social-icon">
      Instagram
    </a>
  </div>
  <p>&copy; 2024 YatriJan. All Rights Reserved.</p>
</footer>
</section>
  <script>
    let currentIndex = 0;
    const cards = document.querySelectorAll('.feature-card');

    function showCard(index) {
      cards.forEach((card, i) => {
        if (i === index) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }

    function nextCard() {
      currentIndex = (currentIndex + 1) % cards.length;
      showCard(currentIndex);
    }

    function prevCard() {
      currentIndex = (currentIndex - 1 + cards.length) % cards.length;
      showCard(currentIndex);
    }

    showCard(currentIndex);
  </script>
</body>
</html>
