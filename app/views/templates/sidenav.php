<div class="col-md-4">
    <div class="card mb-2">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <!-- Sidebar -->
                    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                        <div class="position-sticky">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/membership">Membership Plans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/instructor">Instructors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/workout">Workout Programs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/settings">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="instructor_table">Reports</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Sidebar styling */
        #sidebar {
            height: 100vh;
            background-color: #343a40; /* Dark background color */
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;  /* Sidebar width */
            padding-top: 20px;
            z-index: 1000; /* Ensure sidebar stays above other content */
        }

        #sidebar .nav-link {
            color: #A9D08E; /* Light green text color */
            font-weight: bold;
            background-color: #343a40; /* Match sidebar background */
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

        /* Content area styling */
        .content {
            margin-left: 250px; /* Align content with sidebar width */
            padding: 20px;
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        /* Chart container styling */
        .chart-container {
            width: calc(33% - 40px);
            min-width: 300px;
            max-width: 500px;
        }

        /* Remove card background color */
        .card {
            background-color: transparent; /* Remove white background */
            border: none;
        }

        /* Dashboard title */
        h1 {
            color: #343a40;
        }

        /* Ensure content is not overlapped by the sidebar */
        main {
            margin-left: 250px; /* Align with sidebar width */
            padding-top: 20px;
            background-color: #f8f9fa;
        }

    </style>
</div>
