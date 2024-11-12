<?php
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
        <?php
        include APP_DIR . 'views/templates/sidenav.php';
        ?>  
        <div class="container-fluid">
            <div class="row">
                <!-- Main content for Settings Page -->
                <div class="col-md-9 main-content"> <!-- Adjusted class for main content -->
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

    <!-- Include Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        /* Ensure sidebar's space doesn't overlap the content */
        .main-content {
            margin-left: 250px;  /* Make sure this is the same as the sidebar's width */
            padding-top: 20px;    /* Adjust top padding */
        }

        /* Main content styling */
        main {
            background-image: url('/images/gym.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding-top: 20px;
            color: white;
        }

        /* Card styling */
        .card {
            background-color: rgba(255, 255, 255, 0.8); 
            color: black;
        }
    </style>
</body>
</html>
