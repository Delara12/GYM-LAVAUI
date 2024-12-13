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

                <!-- Main content for User Settings Page -->
                <div class="col-md-9 ms-sm-auto col-lg-10 main-content">
                    <br>
                    <br>
                    <div class="container">
                        <h2 class="mt-4">Gym User Settings</h2>
                        <p>Customize your gym experience by adjusting your personal preferences and notification settings.</p>
                        
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="preferredWorkoutTime" class="form-label">Preferred Workout Time</label>
                                <select class="form-select" id="preferredWorkoutTime" name="preferredWorkoutTime" required>
                                    <option value="">Choose...</option>
                                    <option value="early_morning">Early Morning (5AM - 8AM)</option>
                                    <option value="morning">Morning (8AM - 11AM)</option>
                                    <option value="afternoon">Afternoon (11AM - 3PM)</option>
                                    <option value="evening">Evening (3PM - 7PM)</option>
                                    <option value="night">Night (7PM - Close)</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="fitnessGoal" class="form-label">Primary Fitness Goal</label>
                                <select class="form-select" id="fitnessGoal" name="fitnessGoal" required>
                                    <option value="">Choose...</option>
                                    <option value="weight_loss">Weight Loss</option>
                                    <option value="muscle_gain">Muscle Gain</option>
                                    <option value="endurance">Endurance</option>
                                    <option value="flexibility">Flexibility</option>
                                    <option value="general_fitness">General Fitness</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="preferredClasses" class="form-label">Preferred Classes</label>
                                <select class="form-select" id="preferredClasses" name="preferredClasses[]" multiple required>
                                    <option value="yoga">Yoga</option>
                                    <option value="spinning">Spinning</option>
                                    <option value="zumba">Zumba</option>
                                    <option value="pilates">Pilates</option>
                                    <option value="hiit">HIIT</option>
                                    <option value="strength_training">Strength Training</option>
                                </select>
                                <small class="form-text text-muted">Hold Ctrl (Windows) or Command (Mac) to select multiple options.</small>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="personalTrainer" name="personalTrainer">
                                <label class="form-check-label" for="personalTrainer">Interested in Personal Training</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Notification Preferences</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="notifyClassReminders" name="notifications[]" value="class_reminders">
                                    <label class="form-check-label" for="notifyClassReminders">Class Reminders</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="notifySpecialOffers" name="notifications[]" value="special_offers">
                                    <label class="form-check-label" for="notifySpecialOffers">Special Offers</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="notifyMembershipRenewal" name="notifications[]" value="membership_renewal">
                                    <label class="form-check-label" for="notifyMembershipRenewal">Membership Renewal</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="privacySettings" class="form-label">Privacy Settings</label>
                                <select class="form-select" id="privacySettings" name="privacySettings" required>
                                    <option value="">Choose...</option>
                                    <option value="public">Public Profile</option>
                                    <option value="friends">Friends Only</option>
                                    <option value="private">Private</option>
                                </select>
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

        /* Form styling */
        .form-control, .form-select {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid #9acb8c;
        }

        .form-control:focus, .form-select:focus {
            background-color: #ffffff;
            border-color: #6c9e52;
            box-shadow: 0 0 0 0.2rem rgba(108, 158, 82, 0.25);
        }

        /* Button styling */
        .btn-primary {
            background-color: #6c9e52;
            border-color: #6c9e52;
        }

        .btn-primary:hover {
            background-color: #5a8344;
            border-color: #5a8344;
        }
    </style>
</body>
</html>