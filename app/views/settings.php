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

                <!-- Main content for Settings Page -->
                <div class="col-md-9 ms-sm-auto col-lg-10 main-content">
                    <div class="container">
                        <h2 class="mt-4">Gym Fitness Settings</h2>
                        <p>Manage all your gym settings here, including membership options, workout programs, instructor schedules, and more.</p>
                        
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="membershipFees" class="form-label">Membership Fees</label>
                                <input type="number" class="form-control" id="membershipFees" name="membershipFees">
                            </div>

                            <div class="mb-3">
                                <label for="openingHours" class="form-label">Opening Hours</label>
                                <input type="text" class="form-control" id="openingHours" name="openingHours" placeholder="e.g., 6:00 AM - 10:00 PM">
                            </div>

                            <div class="mb-3">
                                <label for="instructorSchedules" class="form-label">Instructor Schedules</label>
                                <textarea class="form-control" id="instructorSchedules" name="instructorSchedules" rows="3" placeholder="List of instructor schedules"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </form>
                    </div>
                </div>
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
        .main-content {
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
        .btn-primary {
            color: white;
        }
    </style>
</body>
</html>
