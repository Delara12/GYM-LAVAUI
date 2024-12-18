<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- head contents -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Dashboard - Add Instructor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Existing styles */
        .sidebar {
            height: 100vh;
            background-color:rgb(0, 0, 0);
            padding-top: 50px;
            position: fixed;
            top: 70px;
            bottom: 0;
            width: 250px;
            font-size: 1.2rem;
        }
        .sidebar .nav-link.active {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        .sidebar .nav-link {
            font-size: 1.25rem;
            padding: 15px 20px;
            color: white;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        body {
            padding-top: 70px;
        }
        header {
            background-color:rgb(101, 255, 162);
            color: black;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
        }
        header img {
            height: 50px;
            border-radius: 10px;
            margin-right: 20px;
        }
        header h1 {
            flex-grow: 1;
            text-align: center;
        }

        /* New styles for the futuristic form */
        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        .form-container {
            background-color: var(--surface-color);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 83%;
        }

        h2 {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-label {
            color: var(--text-color);
            font-size: 1rem;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 5px;
            color: var(--text-color);
            padding: 12px 15px;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 0 2px var(--primary-color);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 12px 25px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0097a7;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: var(--secondary-color);
            border: none;
            padding: 12px 25px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #f50057;
            transform: translateY(-2px);
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-container {
            animation: fadeIn 0.5s ease-out;
        }
        :root {
            --primary-color: #00bcd4;
            --secondary-color: #ff4081;
            --background-color: #121212;
            --surface-color: #1e1e1e;
            --text-color: #00bcd4;
        }
    </style>
</head>
<body>
    <!-- Header with Logo -->
    <header>
        <img src="/public/img/logo.jpg" alt="Gym Lava Logo">
        <h1>GYM LAVA Dashboard</h1>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                            <a class="nav-link active" href="#dashboard">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="member">
                                <i class="fas fa-users"></i> Members
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="UserSched">
                                <i class="fas fa-chalkboard-teacher"></i> User Schedule
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="instructor">
                                <i class="fas fa-chalkboard-teacher"></i> Instructors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manageinstructor">
                                <i class="fas fa-chalkboard-teacher"></i> Manage Instructor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="process_signup">
                                <i class="fas fa-chalkboard-teacher"></i> Members Payment
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="report">
                                <i class="fas fa-credit-card"></i> Reports
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <div class="main-content">
                <!-- Form Container -->
                <div class="form-container">
                    <h2>Add New Instructor</h2>

                    <!-- Form -->
                    <form action="<?= site_url('instructor/save') ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="instructorName" class="form-label">Instructor Name</label>
                            <input type="text" class="form-control" id="instructorName" name="instructorName" placeholder="e.g., Vhybenica" required>
                        </div>

                        <div class="mb-3">
                            <label for="instructorAge" class="form-label">Instructor Age</label>
                            <input type="age" class="form-control" id="instructorAge" name="instructorAge" placeholder="e.g., 21" required>
                        </div>

                        <div class="mb-3">
                            <label for="instructorEmail" class="form-label">Instructor Email</label>
                            <input type="email" class="form-control" id="instructorEmail" name="instructorEmail" placeholder="e.g., vhybenica@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="instructorPhone" class="form-label">Instructor Phone Number</label>
                            <input type="tel" class="form-control" id="instructorPhone" name="instructorPhone" placeholder="e.g., 09166241756" required>
                        </div>

                        <div class="mb-3">
                            <label for="instructorSpecialty" class="form-label">Specialty</label>
                            <input type="text" class="form-control" id="instructorSpecialty" name="instructorSpecialty" placeholder="e.g., Yoga, Pilates, Strength Training" required>
                        </div>

                        <div class="mb-3">
                            <label for="instructorImage" class="form-label">Instructor Image</label>
                            <input type="file" class="form-control" id="instructorImage" name="instructorImage" accept="image/*">
                        </div>

                        <div class="btn-container">
                            <button type="submit" class="btn btn-primary">Save Instructor</button>
                            <a class="btn btn-secondary" href="<?= site_url('instructor_table'); ?>">View Instructors</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
