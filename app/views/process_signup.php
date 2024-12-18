<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Payment</title>
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

        header h1 {
            flex-grow: 1;
            text-align: center;
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
            margin-left: 250px; /* Ensure content doesn't overlap sidebar */
            margin-top: 20px;   /* Add margin-top to give space for the fixed header */
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
            background:  #ffffff;
            min-height: 100vh;
        }

        .table-container {
            margin-bottom: 30px;
        }

        .table {
            table-layout: fixed; /* Fixed column widths */
            word-wrap: break-word; /* Wrap text within cells */
        }

        th, td {
            text-align: center;
            vertical-align: middle;
            padding: 10px;
            overflow-wrap: break-word;
            line-height: 1.5;
        }

        th {
            font-weight: bold;
        }
        h2{
            font-size: 25px;
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <!-- Header with Logo -->
    <header>
        <img src="/public/img/logo.jpg" alt="Gym Lava Logo">
        <h1>Membership Payment</h1>
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
            <div class="col-md-9 main-content">
                

                <div class="row">
                    <!-- Basic Plan -->
                    <div class="col-md-4 table-container">
                        <h2 class="text-center">Basic Plan Members</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="basicTable"></tbody>
                        </table>
                    </div>

                    <!-- Standard Plan -->
                    <div class="col-md-4 table-container">
                        <h2 class="text-center">Standard Plan Members</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="standardTable"></tbody>
                        </table>
                    </div>

                    <!-- Premium Plan -->
                    <div class="col-md-4 table-container">
                        <h2 class="text-center">Premium Plan Members</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="premiumTable"></tbody>
                        </table>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <script>
        function populateTable(planType, tableId) {
            const members = JSON.parse(localStorage.getItem(planType)) || [];
            const tableBody = document.getElementById(tableId);

            tableBody.innerHTML = '';

            members.forEach((member, index) => {
                const row = tableBody.insertRow();
                row.insertCell(0).textContent = member.fullName;
                row.insertCell(1).textContent = member.email;
                row.insertCell(2).textContent = member.phone;

                // Status dropdown
                const statusCell = row.insertCell(3);
                const statusSelect = document.createElement('select');
                statusSelect.className = 'form-select form-select-sm';
                statusSelect.innerHTML = `
                    <option value="pending" ${member.status === 'pending' ? 'selected' : ''}>Pending</option>
                    <option value="accepted" ${member.status === 'accepted' ? 'selected' : ''}>Accepted</option>
                    <option value="canceled" ${member.status === 'canceled' ? 'selected' : ''}>Canceled</option>
                `;
                statusSelect.addEventListener('change', () => {
                    member.status = statusSelect.value;
                    members[index] = member;
                    localStorage.setItem(planType, JSON.stringify(members));
                });
                statusCell.appendChild(statusSelect);
            });
        }

        // Populate tables for each membership plan
        populateTable('basic', 'basicTable');
        populateTable('standard', 'standardTable');
        populateTable('premium', 'premiumTable');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
