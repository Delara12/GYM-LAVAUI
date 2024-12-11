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
            background-color: #432E54;
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
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        body {
            padding-top: 70px;
        }
        header {
            background-color: #EB5B00;
            color: white;
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
                            <a class="nav-link" href="tableinstructordash">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#members">
                                <i class="fas fa-users"></i> Members
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="class">
                                <i class="fas fa-dumbbell"></i> Classes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="instructor">
                                <i class="fas fa-chalkboard-teacher"></i> Instructors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#payments">
                                <i class="fas fa-credit-card"></i> Payments
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <div class="main-content">
                <!-- Form Container -->
                <div class="form-container">
            <h2>Register New Member</h2>
            <p class="text-center">Fill out the form below to register a new member.</p>

            <form action="/member/save" method="POST">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="John Doe" required>
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="e.g., 30" required>
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@example.com" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="e.g., 09166241756" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="e.g., 123 Fitness St, City, Country" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Register Member</button>
                
                <a class="btn btn-secondary" href="<?= site_url('member_table'); ?>">View Members</a>
                        
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
