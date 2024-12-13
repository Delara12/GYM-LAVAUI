<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- head contents -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Dashboard - Instructors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Header and sidebar styles remain the same */
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
        
        /* Updated main content styles */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #f8f9fe;
        }

        /* New card grid styles */
        .instructor-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
            padding: 20px;
        }

        .instructor-card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s;
            position: relative;
        }

        .instructor-card:hover {
            transform: translateY(-5px);
        }

        .add-new-card {
            border: 2px dashed #e0e0fe;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            background: transparent;
        }

        .add-new-card:hover {
            border-color: #9381ff;
            background: #f8f7ff;
        }

        .profile-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 16px;
            object-fit: cover;
        }

        .add-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #f0f0ff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
        }

        .instructor-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .instructor-role {
            color: #666;
            margin-bottom: 24px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 24px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 600;
            color: #9381ff;
        }

        .stat-label {
            font-size: 0.875rem;
            color: #666;
        }

        .view-profile-btn {
            background: #f0f0ff;
            color: #9381ff;
            border: none;
            padding: 8px 24px;
            border-radius: 20px;
            font-weight: 500;
            transition: all 0.2s;
        }

        .view-profile-btn:hover {
            background: #9381ff;
            color: white;
        }

        .action-menu {
            position: absolute;
            top: 16px;
            right: 16px;
        }
    </style>
</head>
<body>
    <!-- Header and sidebar remain the same -->
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
                            <a class="nav-link" href="#members">
                                <i class="fas fa-users"></i> Members
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#classes">
                                <i class="fas fa-dumbbell"></i> Classes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="instructor">
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

    <!-- Updated main content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
        <div class="container-fluid">
            <h2 class="mb-4">Instructors</h2>
            
            <div class="instructor-grid">
                <!-- Add New Card -->
                <a href="<?= site_url('instructor') ?>" class="instructor-card add-new-card">
                    <div class="add-icon">
                        <i class="fas fa-plus" style="color: #9381ff; font-size: 24px;"></i>
                    </div>
                    <span class="instructor-name">ADD NEW</span>
                </a>

                <!-- Instructor Cards -->
                <?php foreach ($instructors as $instructor): ?>
                <div class="instructor-card">
                    <div class="action-menu dropdown">
                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="<?= site_url('instructor/update/' . $instructor['id']) ?>">
                                    <i class="fas fa-edit me-2"></i> Update
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-danger" href="<?= site_url('instructor/delete/' . $instructor['id']) ?>"
                                   onclick="return confirm('Are you sure you want to delete this instructor?')">
                                    <i class="fas fa-trash me-2"></i> Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <img src="<?= base_url('/uploads/instructors/' . $instructor['instructor_image']) ?>" 
                     alt="<?= htmlspecialchars($instructor['instructor_name']) ?>" class="profile-image">
                <h3 class="instructor-name"><?= htmlspecialchars($instructor['instructor_name']) ?></h3>
                <p class="instructor-role"><?= htmlspecialchars($instructor['instructor_specialty']) ?></p>
                <button class="view-profile-btn w-100" 
                        data-bs-toggle="modal" 
                        data-bs-target="#viewProfileModal" 
                        data-id="<?= $instructor['id'] ?>"
                        onclick="loadInstructorData(this)">
                    View Profile
                </button>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="viewProfileModal" tabindex="-1" aria-labelledby="viewProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewProfileModalLabel">Instructor Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img id="profileImage" src="" alt="Instructor Image" class="profile-image mb-3">
                        <h3 id="instructorName" class="instructor-name"></h3>
                        <p id="instructorSpecialty" class="instructor-role"></p>
                    </div>
                    <hr>
                    <p><strong>Additional Info:</strong></p>
                    <ul>
                        <li><strong>Name:</strong> <span id="instructorAge">0</span></li>
                        <li><strong>Phone Number:</strong> <span id="instructorPhone">0</span></li>
                        <li><strong>Email:</strong> <span id="instructorEmail">0</span></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript -->
    <script>
        function loadInstructorData(button) {
            const instructorId = button.getAttribute('data-id');
            
            // Fetch instructor data (replace this with an AJAX call to fetch real data if necessary)
            const instructors = <?= json_encode($instructors); ?>;
            const instructor = instructors.find(i => i.id == instructorId);

            if (instructor) {
                // Populate modal
                document.getElementById('profileImage').src = "<?= base_url('/uploads/instructors/') ?>" + instructor.instructor_image;
                document.getElementById('instructorName').textContent = instructor.instructor_name;
                document.getElementById('instructorSpecialty').textContent = instructor.instructor_specialty;
                document.getElementById('instructorPhone').textContent = instructor.instructor_phone;
                document.getElementById('instructorEmail').textContent = instructor.instructor_email;
                document.getElementById('instructorAge').textContent = instructor.instructor_age; 
            }
        }
    </script>
</body>
</html>
