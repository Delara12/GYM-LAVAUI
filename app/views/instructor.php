<?php 
include APP_DIR . 'views/templates/header.php'; 
include APP_DIR . 'views/templates/nav.php'; // Include the navigation bar
?>
<body>
    <div id="app">
        <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh; margin-top: 50px; margin-bottom: 50px;">
            <div class="container mt-4 p-4 rounded shadow" style="background-color: #E8F5E9; border: 2px solid gray; width: 60%; margin-top: 20px; margin-bottom: 20px;">
                <h2 class="mb-4" style="color: #2E7D32; font-size: 2rem; text-align: center;">Instructor Information</h2>
                <p style="color: #388E3C; font-size: 1.25rem; text-align: center;">
                    Update your instructor's details here so that students can easily contact or book their classes.
                </p>
                
                <form action="/instructor/save" method="POST">

                    <div class="mb-3">
                        <label for="instructorName" class="form-label" style="font-size: 1.1rem;">Instructor Name</label>
                        <input type="text" class="form-control" id="instructorName" name="instructorName" placeholder="e.g., John Doe" required>
                    </div>

                    <div class="mb-3">
                        <label for="instructorEmail" class="form-label" style="font-size: 1.1rem;">Instructor Email</label>
                        <input type="email" class="form-control" id="instructorEmail" name="instructorEmail" placeholder="e.g., john.doe@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="instructorPhone" class="form-label" style="font-size: 1.1rem;">Instructor Phone Number</label>
                        <input type="tel" class="form-control" id="instructorPhone" name="instructorPhone" placeholder="e.g., +1 234 567 890" required>
                    </div>

                    <div class="mb-3">
                        <label for="instructorSpecialty" class="form-label" style="font-size: 1.1rem;">Specialty</label>
                        <input type="text" class="form-control" id="instructorSpecialty" name="instructorSpecialty" placeholder="e.g., Yoga, Pilates, Strength Training" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Instructor Information</button>
                    <br><br>
                    
                    <a class="btn btn-primary mb-4" role="button" href="<?= site_url('instructor_table'); ?>">View Instructor</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        body {
            background-color: #DFF6DD;
        }
        .container {
            background-color: #E8F5E9;
            border: 2px solid gray;
        }
        h2, p {
            color: #2E7D32;
        }
        .form-label {
            color: #2E7D32;
        }
        button.btn-primary, a.btn-primary {
            background-color: #0D6EFD;
            border-color: #0D6EFD;
        }
        button.btn-primary:hover, a.btn-primary:hover {
            background-color: #0A58CA;
        }
    </style>
</body>
</html>
