<?php 
include APP_DIR . 'views/templates/header.php'; 
include APP_DIR . 'views/templates/nav.php'; // Include the navigation bar
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Instructor</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #DFF6DD; /* Light green background */
        }

        .container {
            background-color: #E8F5E9; /* Very light green */
            padding: 30px;
            border-radius: 10px;
            border: 2px solid gray; /* Gray border */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2E7D32; /* Dark green */
            margin-bottom: 30px;
            text-align: center;
        }

        .btn-primary {
            background-color: #007BFF; /* Blue */
            border-color: #007BFF;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue */
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h2>Update Instructor</h2>
        <form action="<?= site_url('instructor/update/' . $instructor['id']) ?>" method="POST">
            <div class="mb-3">
                <label for="instructorName" class="form-label">Name</label>
                <input type="text" class="form-control" id="instructorName" name="instructorName" 
                    value="<?= $instructor['instructor_name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="instructorEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="instructorEmail" name="instructorEmail" 
                    value="<?= $instructor['instructor_email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="instructorPhone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="instructorPhone" name="instructorPhone" 
                    value="<?= $instructor['instructor_phone'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="instructorSpecialty" class="form-label">Specialty</label>
                <input type="text" class="form-control" id="instructorSpecialty" name="instructorSpecialty" 
                    value="<?= $instructor['instructor_specialty'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= site_url('instructor_table') ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
