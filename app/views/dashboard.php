<?php
// Include the header template
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
        <!-- Include the navigation bar -->
        <?php
        include APP_DIR . 'views/templates/nav.php'; // Header and navigation
        ?>

        <!-- Main layout container -->
        <div class="main-container d-flex">
            <!-- Include the sidebar navigation -->
            <?php
            include APP_DIR . 'views/templates/sidenav.php'; // Sidebar navigation
            ?>

            <!-- Main content area -->
            <main class="content">
                <h1 class="mt-4">Gym Dashboard</h1>
                <div class="dashboard-content d-flex flex-wrap">
                    <!-- Visualization Section -->
                    <div class="chart-container card p-3 m-3">
                        <h2>Monthly Membership Growth</h2>
                        <canvas id="membershipChart"></canvas>
                    </div>
                    
                    <div class="chart-container card p-3 m-3">
                        <h2>Gym Equipment Usage</h2>
                        <canvas id="equipmentChart"></canvas>
                    </div>
                    
                    <div class="chart-container card p-3 m-3">
                        <h2>Daily Check-ins</h2>
                        <canvas id="checkinsChart"></canvas>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Membership Growth Chart
        const membershipCtx = document.getElementById('membershipChart').getContext('2d');
        const membershipChart = new Chart(membershipCtx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Members',
                    data: [30, 45, 60, 80, 100, 150],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            }
        });

        // Gym Equipment Usage Chart
        const equipmentCtx = document.getElementById('equipmentChart').getContext('2d');
        const equipmentChart = new Chart(equipmentCtx, {
            type: 'bar',
            data: {
                labels: ['Treadmill', 'Bike', 'Dumbbells', 'Bench Press', 'Rowing Machine'],
                datasets: [{
                    label: 'Usage Count',
                    data: [50, 30, 40, 20, 25],
                    backgroundColor: 'rgba(153, 102, 255, 0.6)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }]
            }
        });

        // Daily Check-ins Chart
        const checkinsCtx = document.getElementById('checkinsChart').getContext('2d');
        const checkinsChart = new Chart(checkinsCtx, {
            type: 'pie',
            data: {
                labels: ['Morning', 'Afternoon', 'Evening'],
                datasets: [{
                    data: [40, 35, 25],
                    backgroundColor: ['rgba(255, 99, 132, 0.6)', 'rgba(54, 162, 235, 0.6)', 'rgba(255, 206, 86, 0.6)']
                }]
            }
        });
    </script>

    <style>
        /* Align the main container */
        .main-container {
            display: flex;
            margin-top: 56px; /* Add margin to avoid overlapping nav */
            background-color: #DFF6DD; /* Light green background for the whole page */
        }

        /* Sidebar styling */
        #sidebar {
            flex-shrink: 0;
            height: 100vh;
            background-color: #2E7D32; /* Green sidebar background */
            color: #A9D08E; /* Light green text color */
            width: 250px;
            position: fixed;
            top: 56px; /* Adjust to match height of nav.php */
            left: 0;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        #sidebar .nav-link {
            color: #A9D08E; /* Light green text color */
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            margin: 5px 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        #sidebar .nav-link.active {
            color: yellow;
            background-color: #555;
        }

        #sidebar .nav-link:hover {
            color: white;
            background-color: #555;
        }

        /* Content area styling */
        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            background-color: #ffffff; /* White background for content */
            color: #343a40; /* Dark text color */
        }

        /* Chart container styling */
        .chart-container {
            width: calc(33% - 40px);
            min-width: 300px;
            max-width: 500px;
            margin-bottom: 20px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Dashboard title */
        h1 {
            color: #2E7D32; /* Dark green for the main title */
        }

        /* Visualization section */
        .dashboard-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        /* Custom styling for charts and their titles */
        .chart-container h2 {
            color: #2E7D32; /* Green color for chart titles */
        }

        /* Responsive design for small screens */
        @media (max-width: 768px) {
            .chart-container {
                width: 100%;
            }

            #sidebar {
                width: 200px;
            }
        }
    </style>
</body>
</html>
