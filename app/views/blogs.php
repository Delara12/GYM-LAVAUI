<?php
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
        <!-- Navigation -->
        <?php
        include APP_DIR . 'views/templates/nav.php';
        ?>
        
        <div class="container-fluid bg-light">
            <div class="row">
                <!-- Main Content Section -->
                <div class="col-lg-8 col-md-10 col-12 mx-auto pt-5">
                    <div class="text-center">
                        <br>
                        <h1 class="display-3 text-primary font-weight-bold">Welcome to Our Gym Blog!</h1>
                        <p class="lead text-muted mb-4">Your ultimate fitness guide, with tips, motivation, and workouts to inspire you!</p>
                    </div>

                    <!-- Blog Card 1 -->
                    <div class="card blog-card mb-4 rounded-lg shadow-lg">
                        <div class="card-header bg-info text-white text-center py-3">
                            <h3 class="m-0"><i class="fas fa-dumbbell"></i> 5 Essential Gym Tips for Beginners</h3>
                        </div>
                        <div class="card-body">
                            <p class="lead">Starting at the gym can be overwhelming. Here’s a simple guide to help you get started:</p>
                            <ul class="list-unstyled">
                                <li><strong>Start Slow:</strong> Focus on mastering form and technique before increasing weight.</li>
                                <li><strong>Stay Consistent:</strong> Consistency is more important than intensity when starting out.</li>
                                <li><strong>Hydrate:</strong> Water helps with muscle recovery and energy levels.</li>
                                <li><strong>Rest:</strong> Your muscles grow when you rest, so take recovery seriously.</li>
                                <li><strong>Fuel Up:</strong> Proper nutrition is key to maintaining your energy levels and muscle growth.</li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-block btn-lg mt-3">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="card blog-card mb-4 rounded-lg shadow-lg">
                        <div class="card-header bg-warning text-dark text-center py-3">
                            <h3 class="m-0"><i class="fas fa-heartbeat"></i> The Benefits of Cardio</h3>
                        </div>
                        <div class="card-body">
                            <p class="lead">Cardio isn’t just about burning fat! Here’s how it benefits your health:</p>
                            <ul class="list-unstyled">
                                <li><strong>Heart Health:</strong> Strengthens your cardiovascular system.</li>
                                <li><strong>Stress Relief:</strong> Cardio releases endorphins, which improve your mood.</li>
                                <li><strong>Weight Management:</strong> Aids in calorie burn and metabolism boost.</li>
                                <li><strong>Better Sleep:</strong> Regular cardio helps with a good night’s rest.</li>
                                <li><strong>Increased Energy:</strong> You’ll feel more energized throughout the day.</li>
                            </ul>
                            <a href="#" class="btn btn-warning btn-block btn-lg mt-3">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="card blog-card mb-4 rounded-lg shadow-lg">
                        <div class="card-header bg-success text-white text-center py-3">
                            <h3 class="m-0"><i class="fas fa-users"></i> Partner Workouts: Double the Fun</h3>
                        </div>
                        <div class="card-body">
                            <p class="lead">Partner workouts are more than just fun—they can help you achieve better results:</p>
                            <ul class="list-unstyled">
                                <li><strong>Motivation:</strong> A partner can push you to perform better.</li>
                                <li><strong>Accountability:</strong> You’re less likely to skip workouts with someone else relying on you.</li>
                                <li><strong>Support:</strong> You can spot each other during heavy lifts and prevent injuries.</li>
                                <li><strong>Variety:</strong> Partners can introduce new exercises to spice up your routine.</li>
                                <li><strong>Fun:</strong> The social aspect makes working out a lot more enjoyable.</li>
                            </ul>
                            <a href="#" class="btn btn-success btn-block btn-lg mt-3">Start Working Out Together <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 4 -->
                    <div class="card blog-card mb-4 rounded-lg shadow-lg">
                        <div class="card-header bg-danger text-white text-center py-3">
                            <h3 class="m-0"><i class="fas fa-bone"></i> Preventing Workout Injuries</h3>
                        </div>
                        <div class="card-body">
                            <p class="lead">Safety first! Learn how to avoid common injuries at the gym:</p>
                            <ul class="list-unstyled">
                                <li><strong>Warm Up:</strong> Increase blood flow and flexibility with a proper warm-up.</li>
                                <li><strong>Form Over Weight:</strong> Never sacrifice form for lifting heavier weights.</li>
                                <li><strong>Stretching:</strong> Stretch after every workout to prevent tight muscles.</li>
                                <li><strong>Listen to Your Body:</strong> If something hurts, stop immediately.</li>
                                <li><strong>Use the Right Equipment:</strong> Always use appropriate gear for your workouts.</li>
                            </ul>
                            <a href="#" class="btn btn-danger btn-block btn-lg mt-3">Stay Safe, Train Smart <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Section -->
                <div class="col-lg-4 col-md-4 col-12 sidebar bg-white py-5 mt-5 mt-md-0">
                    <div class="sticky-top">
                        <br>
                        <br>
                        <h4 class="text-center text-primary">Latest Updates</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-muted">How to Build Your Dream Workout Routine</a></li>
                            <li><a href="#" class="text-muted">Top 10 Protein Foods for Muscle Gain</a></li>
                            <li><a href="#" class="text-muted">Why Rest Days Are Essential to Your Success</a></li>
                            <li><a href="#" class="text-muted">Best Supplements for Recovery After Workout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3">
            <p>Copyright © 2024 | Gym Blog | All Rights Reserved</p>
        </footer>
    </div>

    <!-- Include Bootstrap and JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Poppins', sans-serif;
        color: #333;
    }

    .container-fluid {
        padding-top: 20px;
    }

    .blog-card {
        border: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        text-transform: uppercase;
        font-weight: 600;
    }

    .btn-block {
        font-size: 1.2rem;
        padding: 12px;
        text-align: center;
        text-transform: uppercase;
    }

    .lead {
        font-size: 1.1rem;
        color: #555;
    }

    ul li {
        margin-bottom: 12px;
    }

    footer {
        background-color: #343a40;
    }

    .sidebar {
        position: sticky;
        top: 20px; /* Keeps the sidebar 20px from the top */
        z-index: 10; /* Ensures the sidebar is always above other content */
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background-color: white;
    }

    .sidebar h4 {
        font-weight: 600;
        margin-bottom: 20px;
    }

    .sidebar ul {
        padding-left: 20px;
    }

    .sidebar ul li {
        margin-bottom: 15px;
    }

    .sidebar ul li a {
        font-size: 1rem;
        color: #6c757d;
    }

    .sidebar ul li a:hover {
        color: #17a2b8;
    }

    footer {
        background-color: #343a40;
    }

</style>

</body>
