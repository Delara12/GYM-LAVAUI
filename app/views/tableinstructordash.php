<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="<?=base_url();?>public/img" rel="stylesheet">
    <style>
        /* Header styling */
        header {
            background-color: rgb(101, 255, 162);

            color: white;
            padding: 10px 20px;
            position: fixed; /* Fixes the header at the top */
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Ensures the header stays above other content */
            display: flex;
            align-items: center;
        }

        header img {
            height: 50px; /* Set logo size */
            border-radius: 10px; /* Add border-radius to create rounded corners */
            margin-right: 20px; /* Add some space from the right edge */
        }

        header h1 {
            flex-grow: 1; /* This makes the title take up the remaining space */
            text-align: center; /* Center align the title */
        }

        /* Adjust body padding to make space for the fixed header */
        body {
            padding-top: 70px; /* Add top padding to account for header height */
        }

        /* Sidebar styling */
        .sidebar {
            height: 100vh;
            background-color:rgb(0, 0, 0);
            padding-top: 50px;
            position: fixed;
            top: 70px; /* Adjusted to avoid being covered by the fixed header */
            bottom: 0;
            width: 250px; /* Set width of the sidebar */
            font-size: 1.2rem; /* Increase font size for better readability */
        }

        .sidebar .nav-link {
            font-size: 1.25rem; /* Increased font size */
            padding: 15px 20px; /* Added padding for better spacing */
        }

        /* Main content styling */
        .main-content {
            padding: 20px;
            margin-left: 250px; /* Adjust for sidebar */
        }

        /* Card styling */
        .card {
            margin-bottom: 20px;
        }

        /* Chart container styling */
        .chart-container {
            position: relative;
            height: 200px; /* Reduced height to match the card size */
            width: 100%; /* Width stays the same */
        }

        .sidebar .nav-link.active {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }

        /* Hide the instructor table */
        #instructor-table {
            display: none;  /* Hides the table */
        }
        .table {
            position: relative;
            height: 100px; /* Reduced height to match the card size */
            width: 45%; /* Width stays the same */
        }
    </style>
</head>
<body>
    <!-- Header with Logo -->
    <header>
        <img src="/public/img/logo.jpg" alt="Gym Lava Logo"> <!-- Logo aligned to the left -->
        <h1>GYM LAVA Dashboard</h1> <!-- Title centered -->
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
                            <a class="nav-link" href="#payments">
                                <i class="fas fa-credit-card"></i> Payments
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                
                
                <!-- Statistics Cards -->
                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Members</h5>
                                <p class="card-text display-4"><?php echo isset($total_members) ? $total_members : '0'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Active Classes</h5>
                                <p class="card-text display-4"><?php echo isset($active_classes) ? $active_classes : '0'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Instructors</h5>
                                <p class="card-text display-4" id="instructor-count"><?php echo isset($instructor_count) ? $instructor_count : '0'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Monthly Revenue</h5>
                                <p class="card-text display-4">$<?php echo isset($monthly_revenue) ? number_format($monthly_revenue, 2) : '0.00'; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chart: Instructors by Specialty -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h3>Instructor Specialties Chart</h3>
                        <div class="chart-container">
                            <canvas id="specialtyChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Instructor Table (Hidden) -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="instructor-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Specialty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($instructors) && is_array($instructors) && count($instructors) > 0): ?>
                                <?php foreach ($instructors as $instructor): ?>
                                    <tr>
                                        <td><?php echo isset($instructor['instructor_name']) ? $instructor['instructor_name'] : 'N/A'; ?></td>
                                        <td><?php echo isset($instructor['instructor_specialty']) ? $instructor['instructor_specialty'] : 'N/A'; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="2">No instructors found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript to count the number of rows in the instructor table
        window.onload = function() {
            var table = document.getElementById("instructor-table");
            var rowCount = table.rows.length - 1; // Subtract 1 for the header row

            // Update the instructor count in both places
            document.getElementById("instructor-count").textContent = rowCount;

            // Prepare data for the instructor chart based on specialty
            var instructorData = <?php echo json_encode($instructors); ?>;
            
            // Count instructors by specialty
            var specialtyCounts = {};
            instructorData.forEach(function(instructor) {
                var specialty = instructor.instructor_specialty || 'Unknown';
                specialtyCounts[specialty] = (specialtyCounts[specialty] || 0) + 1;
            });

            // Get the specialty labels and count values
            var specialties = Object.keys(specialtyCounts);
            var counts = Object.values(specialtyCounts);

            // Set up the chart
            var ctx = document.getElementById('specialtyChart').getContext('2d');
            var specialtyChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: specialties,
                    datasets: [{
                        label: 'Instructor Count by Specialty',
                        data: counts,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    </script>
</body>
</html>
