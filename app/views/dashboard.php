<?php
// Include the header template
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
        <!-- Include the navigation bar -->
        <?php
        include APP_DIR . 'views/templates/nav.php'; // Header and navigation
        ?>

        <!-- Main layout container -->
            <!-- Include the sidebar navigation -->
            <?php
            include APP_DIR . 'views/templates/sidenav.php'; // Sidebar navigation
            ?>

            <!-- Main content area -->
            <div class="container-fluid" style="visibility: hidden;" id="main-content">
            <div class="row justify-content-center">
                
                <!-- Welcome Section -->
                <section class="col-md-12 col-lg-10 px-md-4 mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="welcome-message text-center">
                                <br>
                                <h1>Welcome to DEMM FITNESS GYM</h1>
                                <p class="lead">Your journey to a healthier, stronger, and more energized you starts here!</p>
                                <p>Explore our exclusive membership plans, personalized workout programs, and expert-led training sessions designed for all fitness levels.</p>
                                <a href="/membership" class="btn btn-primary btn-lg">Join Now</a>
                            </div>
                        </div>
                    </div>

                    <!-- Features Section -->
                    <div class="row mt-5 justify-content-center">
                        <div class="col-md-4 text-center">
                            <div class="feature-box">
                                <i class="fas fa-dumbbell fa-3x mb-3"></i>
                                <h3>Strength Training</h3>
                                <p>Build muscle and improve strength with our top-of-the-line equipment and expert guidance.</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="feature-box">
                                <i class="fas fa-running fa-3x mb-3"></i>
                                <h3>Cardio Workouts</h3>
                                <p>Boost your endurance with our cardio sessions, from running to cycling and everything in between.</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="feature-box">
                                <i class="fas fa-yoga fa-3x mb-3"></i>
                                <h3>Yoga & Flexibility</h3>
                                <p>Enhance flexibility, balance, and relaxation with our yoga classes designed for all levels.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Section -->
                    <div class="row mt-5 justify-content-center">
                        <div class="col-md-12 text-center">
                            <h2>What Our Members Say</h2>
                            <p class="testimonial-quote">"DEMM Fitness Gym has transformed my fitness journey. The trainers are so supportive, and the environment is incredibly motivating!" - John Doe</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- External JS and FontAwesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome Icons -->

    <!-- JavaScript to Show Content After Loading -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("main-content").style.visibility = "visible";
        });
    </script>

    <style>
        /* General Styles */
        #sidebar {
            position: fixed;
            top: 70px; /* Adjusted to avoid overlap with navbar */
            left: 0;
            width: 250px;
            height: 100%; /* Full height */
            background-color: #343a40;  /* Dark background */
            color: #A9D08E; /* Text color */
            padding-top: 10px;
            z-index: 1000; /* Ensure it stays above other content */
            overflow-y: auto; /* Allow scroll if sidebar content overflows */
        }

        #sidebar .nav-link {
            color:rgb(255, 255, 255); /* Light green text color */
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            margin: 5px 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        #sidebar .nav-link.active {
            color: yellow;
            background-color: #555;
        }

        #sidebar .nav-link:hover {
            color: white;
            background-color: #555;
        }

        /* Main content styling */
        .main-content {
            margin-left: 1px; 
            margin-right: 150px;
            background: linear-gradient(to bottom, #d4f1d4, #9acb8c, #ffffff); /* Green gradient background */
            padding-top: 20px;
            min-height: 100vh;
            color: black;
            overflow-y: auto;
        }
        body{
            background: linear-gradient(to bottom, #d4f1d4, #9acb8c, #ffffff);
        }

        /* Card styling */
        .card {
            border: none;
            border-radius: 10px;
        }

        .card-header {
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #F1F1F1;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            padding: 0 15px;
        }

        /* Welcome Section */
        .welcome-message {
            background-color: #4CAF50;
            color: white;
            padding: 50px 15px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .welcome-message h1 {
            font-size: 3rem;
        }

        .welcome-message .lead {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        /* Blue Button Styles */
        .btn-primary {
            background-color: #007BFF; /* Bootstrap primary blue */
            border-color: #007BFF;
            padding: 12px 30px;
            font-size: 1.2rem;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue for hover */
        }

        /* Features Section */
        .feature-box {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .feature-box i {
            color: #4CAF50;
        }

        .feature-box h3 {
            font-size: 1.5rem;
            margin-top: 20px;
            color: #333;
        }

        .feature-box p {
            color: #666;
        }

        /* Testimonial Section */
        .testimonial-quote {
            font-style: italic;
            font-size: 1.2rem;
            color: #4CAF50;
        }
    </style>
</body>
</html>