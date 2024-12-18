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
                <main class="main-content col">
                    <div class="container py-4">
                        <br>
                        <br>
                        <h1 class="text-center mb-4">Settings</h1>

                        <div class="row g-4">
                            <!-- Section 1: Class Preferences -->
                            <div class="col-lg-6">
                                <div class="card shadow-sm h-100">
                                    <div class="card-header bg-success text-white">
                                        <h5 class="card-title mb-0">Class Preferences</h5>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="class-preferences" class="form-label">Preferred Classes</label>
                                                <select class="form-select" id="class-preferences" multiple>
                                                    <option>Yoga</option>
                                                    <option>Strength Training</option>
                                                    <option>Cardio</option>
                                                    <option>Zumba</option>
                                                    <option>Pilates</option>
                                                </select>
                                                <small class="text-muted">Hold Ctrl (Cmd on Mac) to select multiple options.</small>
                                            </div>
                                            <button type="submit" class="btn btn-success">Save Preferences</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 2: Facility Access -->
                            <div class="col-lg-6">
                                <div class="card shadow-sm h-100">
                                    <div class="card-header bg-primary text-white">
                                        <h5 class="card-title mb-0">Facility Access</h5>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="sauna-access" checked>
                                                <label class="form-check-label" for="sauna-access">Sauna</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pool-access">
                                                <label class="form-check-label" for="pool-access">Swimming Pool</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="premium-access" checked>
                                                <label class="form-check-label" for="premium-access">Premium Facilities</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Update Access</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 3: Theme Customization -->
                            <div class="col-lg-6">
                                <div class="card shadow-sm h-100">
                                    <div class="card-header bg-warning text-dark">
                                        <h5 class="card-title mb-0">Theme Customization</h5>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="theme-selection" class="form-label">Choose Theme</label>
                                                <select class="form-select" id="theme-selection">
                                                    <option>Light</option>
                                                    <option>Dark</option>
                                                    <option>Custom</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-warning">Apply Theme</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 4: Language Preferences -->
                            <div class="col-lg-6">
                                <div class="card shadow-sm h-100">
                                    <div class="card-header bg-secondary text-white">
                                        <h5 class="card-title mb-0">Language Preferences</h5>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="language-selection" class="form-label">Select Language</label>
                                                <select class="form-select" id="language-selection">
                                                    <option>English</option>
                                                    <option>Spanish</option>
                                                    <option>French</option>
                                                    <option>German</option>
                                                    <option>Chinese</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-secondary">Save Language</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 5: Support Options -->
                            <div class="col-lg-12">
                                <div class="card shadow-sm h-100">
                                    <div class="card-header bg-info text-white">
                                        <h5 class="card-title mb-0">Support</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Need help? Visit our <a href="#">FAQ</a> page or <a href="#">contact support</a>.</p>
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
    </style>
</body>
</html>
