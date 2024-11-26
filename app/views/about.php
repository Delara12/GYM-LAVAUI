<?php
include APP_DIR . 'views/templates/header.php'; // Include the header
?>
<body>
    <div id="app">
        <!-- Include the navigation bar here -->
        <?php 
        include APP_DIR . 'views/templates/nav.php'; // Assuming nav.php contains the header and main navigation
        ?>

        <!-- The rest of your content for the about page goes here -->
        <div class="container">
            <section class="about-content">
                <h2>Welcome to DEMM Fitness Gym</h2>
                <p>At <strong>DEMM Fitness Gym</strong>, we are committed to helping you achieve your fitness goals in a supportive and motivating environment. Whether you're looking to build strength, lose weight, or increase endurance, our modern facilities, expert trainers, and state-of-the-art equipment will help you get there faster!</p>

                <p>Join us to experience a fitness journey that is personalized for you. Our gym offers a variety of classes, expert coaching, and a community that's here to help you every step of the way!</p>

                <div class="icon-section">
                    <div class="icon-item">
                        <i class="fas fa-dumbbell"></i>
                        <p>State-of-the-art Equipment</p>
                    </div>
                    <div class="icon-item">
                        <i class="fas fa-running"></i>
                        <p>Group Classes for All Levels</p>
                    </div>
                    <div class="icon-item">
                        <i class="fas fa-heartbeat"></i>
                        <p>Personalized Training Plans</p>
                    </div>
                    <div class="icon-item">
                        <i class="fas fa-users"></i>
                        <p>Community Support</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Include Font Awesome and a simple script for interactivity -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        // Simple interaction for icons to scale up when hovered
        const iconItems = document.querySelectorAll('.icon-item');

        iconItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.querySelector('i').style.transform = 'scale(1.2)';
            });
            item.addEventListener('mouseleave', () => {
                item.querySelector('i').style.transform = 'scale(1)';
            });
        });
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #a5d6a7, #ffffff); /* Light Green, Green, White Gradient Background */
            color: #000000; /* Black text */
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #388e3c; /* Dark Green Header */
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            padding: 40px 20px;
        }

        h2 {
            font-size: 48px; /* Increased heading font size */
            color: #2e7d32; /* Dark Green text */
            text-align: center;
            margin-bottom: 20px;
        }

        .about-content {
            text-align: center;
        }

        .about-content p {
            font-size: 22px; /* Increased paragraph font size */
            color: #333333; /* Darker text for readability */
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 20px;
        }

        .icon-section {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .icon-item {
            flex: 1;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            margin: 20px;
        }

        .icon-item i {
            font-size: 100px; /* Increased icon size */
            color: #388e3c;
            margin-bottom: 20px;
        }

        .icon-item p {
            font-size: 25px; /* Increased font size for text */
            color: #388e3c;
            font-weight: bold;
        }
    </style>
</body>
</html>
