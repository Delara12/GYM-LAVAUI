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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        
       
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

      
        .card {
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 8px;
            color: black;
        }
        .card-header {
            font-size: 1.25rem;
        }
    </style>
</body>
</html>
