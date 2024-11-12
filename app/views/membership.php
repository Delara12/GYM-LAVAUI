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

                <!-- Main content -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3 pt-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <h2 class="text-center mb-4">Membership Plans</h2>

                                <div class="row">
                                    <!-- Basic Plan -->
                                    <div class="col-md-4">
                                        <div class="card mb-4">
                                            <div class="card-header bg-primary text-white text-center">Basic</div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">250.00/month</h5>
                                                <p class="card-text">Access to basic gym equipment and facilities.</p>
                                                <div class="d-flex justify-content-center">
                                                    <a href="#" class="btn btn-primary">Sign Up</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Standard Plan -->
                                    <div class="col-md-4">
                                        <div class="card mb-4">
                                            <div class="card-header bg-success text-white text-center">Standard</div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">3000.00/month</h5>
                                                <p class="card-text">Includes gym access, group classes, and 24/7 access.</p>
                                                <div class="d-flex justify-content-center">
                                                    <a href="#" class="btn btn-success">Sign Up</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Premium Plan -->
                                    <div class="col-md-4">
                                        <div class="card mb-4">
                                            <div class="card-header bg-warning text-white text-center">Premium</div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">5000.00/month</h5>
                                                <p class="card-text">All-access pass including personal training sessions and spa services.</p>
                                                <div class="d-flex justify-content-center">
                                                    <a href="#" class="btn btn-warning">Sign Up</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>

        /* Main content styling */
        main {
    margin-left: 250px; /* Ensure this matches the sidebar width */
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
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
            border-radius: 8px;
            color: black;
        }
        .card-header {
            font-size: 1.25rem;
        }
    </style>
</body>
</html>
