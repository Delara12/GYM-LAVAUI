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
               
                <div class="col-md-9 main-content">
                    <div class="container">
                        <h2 class="mt-4">Instructor Information</h2>
                        <p>Update your instructor's details here so that students can easily contact or book their classes.</p>
                        
                        <form action="/instructor/save" method="POST">

                            <div class="mb-3">
                                <label for="instructorName" class="form-label">Instructor Name</label>
                                <input type="text" class="form-control" id="instructorName" name="instructorName" placeholder="e.g., John Doe" required>
                            </div>

                            <div class="mb-3">
                                <label for="instructorEmail" class="form-label">Instructor Email</label>
                                <input type="email" class="form-control" id="instructorEmail" name="instructorEmail" placeholder="e.g., john.doe@example.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="instructorPhone" class="form-label">Instructor Phone Number</label>
                                <input type="tel" class="form-control" id="instructorPhone" name="instructorPhone" placeholder="e.g., +1 234 567 890" required>
                            </div>

                            <div class="mb-3">
                                <label for="instructorSpecialty" class="form-label">Specialty</label>
                                <input type="text" class="form-control" id="instructorSpecialty" name="instructorSpecialty" placeholder="e.g., Yoga, Pilates, Strength Training" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Instructor Information</button>
                            <br>
                            <br>
                            
                            <a class="btn btn-primary mb-4" role="button" href="<?= site_url('instructor_table'); ?>">View Instructor</a>
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
        .main-content {
            margin-left: 250px; 
            padding-top: 20px;    
        }
        main {
            background-image: url('/images/instructor_info.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding-top: 20px;
            color: white;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.8); 
            color: black;
        }
    </style>
</body>
</html>
