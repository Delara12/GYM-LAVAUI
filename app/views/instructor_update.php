<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Dashboard - Update Instructor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        .form-container {
            background: linear-gradient(145deg, #1a1a1a, #2a2a2a);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            color: #fff;
            width: 98%;
        }
        .form-container h2 {
            color: #00bcd4;
            font-size: 2.5rem;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 10px;
            color: #fff;
            padding: 15px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 15px rgba(0, 188, 212, 0.5);
        }
        .form-label {
            color: #00bcd4;
            font-size: 1.1rem;
            margin-bottom: 10px;
            display: block;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        .btn {
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background-color: #00bcd4;
            border: none;
        }
        .btn-primary:hover {
            background-color: #008ba3;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 188, 212, 0.4);
        }
        .btn-secondary {
            background-color: #ff4081;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #e6005c;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 64, 129, 0.4);
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .form-container {
            animation: fadeInUp 0.6s ease-out;
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

            <!-- Main Content -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-4 main-content">
                <div class="form-container">
                    <h2>Update Instructor</h2>
                    <form action="<?= site_url('instructor/update/' . $instructor['id']) ?>" method="POST">
                        <div class="mb-3">
                            <label for="instructorName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="instructorName" name="instructorName" 
                                value="<?= $instructor['instructor_name'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="instructorAge" class="form-label">Age</label>
                            <input type="age" class="form-control" id="instructorAge" name="instructorAge" 
                                value="<?= $instructor['instructor_age'] ?>" required>
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
                        <div class="btn-container">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="<?= site_url('instructor_table') ?>" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>