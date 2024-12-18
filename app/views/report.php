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



        /* Adjust body padding for fixed header */
        body {
            padding-top: 70px;
        }

        /* Sidebar styling */
        .sidebar {
            height: 100vh;
            background-color: rgb(0, 0, 0);
            padding-top: 50px;
            position: fixed;
            top: 70px;
            bottom: 0;
            width: 250px;
            font-size: 1.2rem;
        }

        .sidebar .nav-link {
            font-size: 1.25rem;
            padding: 15px 20px;
            color: white;
        }

        /* Main content styling */
        .main-content {
            padding: 20px;
            margin-left: 250px;
        }

        /* Card styling */
        .card {
            margin-bottom: 20px;
        }

        /* Chart container styling */
        .chart-container {
            position: relative;
            height: 200px;
            width: 100%;
        }

        .sidebar .nav-link.active {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }

        /* Hide instructor table */
        #instructor-table {
            display: none;
        }
        body {
            background: linear-gradient(to bottom, #d4f1d4, #9acb8c, #ffffff);
            min-height: 100vh;
            padding-top: 20px;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
        }
        h2 {
            font-size: 25px;
            margin-bottom: 40px;
        }
        .charts {
            display:inline-flex;
            justify-content: space-around; /* Distribute space between charts */
            flex-wrap: wrap; /* Allow wrapping for smaller screens */
        }
        .chart-container {
            width: 30%; /* Set each chart's width to 30% */
            margin-bottom: 50px;
        }
        canvas {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <!-- Header with Logo -->
    <header>
        <img src="/public/img/logo.jpg" alt="Gym Lava Logo">
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
    
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <h1>DEMM Payment Reports</h1>

        <!-- Flex container to hold all three charts -->
        <div class="charts">
            <!-- Basic Plan Pie Chart -->
            <div class="chart-container">
                <h2>Basic Plan Members</h2>
                <canvas id="basicPieChart"></canvas>
            </div>

            <!-- Standard Plan Pie Chart -->
            <div class="chart-container">
                <h2>Standard Plan Members</h2>
                <canvas id="standardPieChart"></canvas>
            </div>

            <!-- Premium Plan Pie Chart -->
            <div class="chart-container">
                <h2>Premium Plan Members</h2>
                <canvas id="premiumPieChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        // Function to calculate percentages
        function calculatePercentages(counts) {
            const total = Object.values(counts).reduce((acc, count) => acc + count, 0);
            const percentages = {};
            for (let status in counts) {
                percentages[status] = ((counts[status] / total) * 100).toFixed(2);
            }
            return percentages;
        }

        // Basic Plan data
        const basicData = JSON.parse(localStorage.getItem('basic')) || [];
        const basicStatusCount = basicData.reduce((acc, member) => {
            acc[member.status] = (acc[member.status] || 0) + 1;
            return acc;
        }, {});
        const basicPercentages = calculatePercentages(basicStatusCount);

        const basicCtx = document.getElementById('basicPieChart').getContext('2d');
        new Chart(basicCtx, {
            type: 'pie',
            data: {
                labels: Object.keys(basicStatusCount),
                datasets: [{
                    data: Object.values(basicStatusCount),
                    backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe'],
                }]
            },
            options: {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const label = tooltipItem.label || '';
                                const value = tooltipItem.raw || 0;
                                const percentage = basicPercentages[label] || 0;
                                return `${label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });

        // Standard Plan data
        const standardData = JSON.parse(localStorage.getItem('standard')) || [];
        const standardStatusCount = standardData.reduce((acc, member) => {
            acc[member.status] = (acc[member.status] || 0) + 1;
            return acc;
        }, {});
        const standardPercentages = calculatePercentages(standardStatusCount);

        const standardCtx = document.getElementById('standardPieChart').getContext('2d');
        new Chart(standardCtx, {
            type: 'pie',
            data: {
                labels: Object.keys(standardStatusCount),
                datasets: [{
                    data: Object.values(standardStatusCount),
                    backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe'],
                }]
            },
            options: {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const label = tooltipItem.label || '';
                                const value = tooltipItem.raw || 0;
                                const percentage = standardPercentages[label] || 0;
                                return `${label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });

        // Premium Plan data
        const premiumData = JSON.parse(localStorage.getItem('premium')) || [];
        const premiumStatusCount = premiumData.reduce((acc, member) => {
            acc[member.status] = (acc[member.status] || 0) + 1;
            return acc;
        }, {});
        const premiumPercentages = calculatePercentages(premiumStatusCount);

        const premiumCtx = document.getElementById('premiumPieChart').getContext('2d');
        new Chart(premiumCtx, {
            type: 'pie',
            data: {
                labels: Object.keys(premiumStatusCount),
                datasets: [{
                    data: Object.values(premiumStatusCount),
                    backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe'],
                }]
            },
            options: {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const label = tooltipItem.label || '';
                                const value = tooltipItem.raw || 0;
                                const percentage = premiumPercentages[label] || 0;
                                return `${label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
