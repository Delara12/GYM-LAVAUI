<?php
// Include the header template
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
        <!-- Include the top navigation bar (nav.php) -->
        <?php
        include APP_DIR . 'views/templates/nav.php'; // Include nav.php here (top navbar)
        ?>  

        <div class="container-fluid">
            <div class="row">

                <!-- Include the sidebar navigation (sidenav.php) -->
                <?php
                include APP_DIR . 'views/templates/sidenav.php'; // Include sidenav.php here (sidebar)
                ?>  

                <!-- Main content area -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3 pt-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <h2 class="text-center mb-4">Workout Programs</h2>

                                <div class="row">
                                    <!-- Beginner Program -->
                                    <div class="col-md-4">
                                        <div class="card mb-4">
                                            <div class="card-header bg-primary text-white text-center">Beginner</div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">3 Days/Week</h5>
                                                <p class="card-text">A gentle introduction to fitness with low-impact exercises for beginners.</p>
                                                <div class="d-flex justify-content-center">
                                                    <a href="#" class="btn btn-primary">View Program</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Intermediate Program -->
                                    <div class="col-md-4">
                                        <div class="card mb-4">
                                            <div class="card-header bg-success text-white text-center">Intermediate</div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">5 Days/Week</h5>
                                                <p class="card-text">A balanced program focusing on strength and cardio for intermediate users.</p>
                                                <div class="d-flex justify-content-center">
                                                    <a href="#" class="btn btn-success">View Program</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Advanced Program -->
                                    <div class="col-md-4">
                                        <div class="card mb-4">
                                            <div class="card-header bg-warning text-white text-center">Advanced</div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">7 Days/Week</h5>
                                                <p class="card-text">An intensive program designed for experienced users to reach peak fitness levels.</p>
                                                <div class="d-flex justify-content-center">
                                                    <a href="#" class="btn btn-warning">View Program</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        /* Sidebar styling */
        #sidebar {
            position: fixed;
            top: 56px; /* Adjusted to avoid overlap with navbar */
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
            color: #A9D08E; /* Light green text color */
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
        main {
            margin-left: 250px; /* Adjusted for sidebar width */
            background: linear-gradient(to bottom, #d4f1d4, #9acb8c, #ffffff); /* Green gradient background */
            padding-top: 20px;
            min-height: 100vh;
            color: black;
            overflow-y: auto;
        }

        /* Card styling */
        .card {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
            border-radius: 8px;
            color: black;
        }

        .card-header {
            font-size: 1.25rem;
        }

        .card-title {
            color: black;
        }

        .card-text {
            color: black;
        }

        /* Button styling */
        .btn-primary, .btn-success, .btn-warning {
            color: white;
        }
    </style>
</body>
</html>
