<?php
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
        <?php
        include APP_DIR . 'views/templates/nav.php';
        ?>  

        <div class="container-fluid">
            <div class="row">
                <!-- Main Content 
                <main class="col-md-9 col-lg-9 px-md-4 mt-3 pt-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Dashboard</div>
                                    <div class="card-body">
                                        You are logged in!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>-->

                <!-- Side Navigation on the Right -->
                <aside class="col-md-3 col-lg-3">
                    <nav id="sidebar" class="bg-dark sidebar">
                        <div class="position-sticky">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="/home">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/membership">Membership Plans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Instructors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/workout">Workout Programs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/settings">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Reports</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        #sidebar {
            height: 100vh;
            background-color: #343a40;  /* Dark background color */
            padding-top: 20px;
            position: fixed;
            top: 70px;  /* Adjust based on header height */
            left: 0;  /* Position on the right */
            width: 250px;  /* Sidebar width */
        }

        #sidebar .nav-link {
            color: #A9D08E;  /* Light green text color */
            font-weight: bold;
            background-color: #343a40;  /* Match sidebar background */
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

        /* Offset main content to make space for sidebar */
        main {
            margin-left: 260px;  /* Adjust based on sidebar width */
        }
    </style>
</body>
</html>
