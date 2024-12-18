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

        <?php
        include APP_DIR . 'views/templates/sidenav.php'; // Sidebar navigation
        ?>

    <style>
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
            top: 70px; /* Adjust to match height of nav.php */
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
            margin-top: 10vh;
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
            position: inherit;
        }

        /* Table Container */
        .table-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
            animation: fadeIn 1s ease;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        th {
            background-color: #2980b9;
            color: black;
        }

        tr:hover {
            background-color: #ecf0f1;
        }

        td.status-pending {
            color: #f39c12;
            font-weight: bold;
        }

        td.status-active {
            color: #27ae60;
            font-weight: bold;
        }

        td.status-inactive {
            color: #e74c3c;
            font-weight: bold;
        }

        /* Fade-In Animation */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: #2980b9;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #sidebar {
                width: 200px;
            }

            .content {
                margin-left: 200px;
            }

            table, .table-container {
                font-size: 14px;
            }
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <br>
                <br>
                <div class="table-container">
                    <h2 class="h2">Membership Status Records</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Plan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="membersTableBody">
                            <!-- Dynamic rows will be added here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        const plans = ['basic', 'standard', 'premium'];
        const tableBody = document.getElementById('membersTableBody');

        // Load members from localStorage
        plans.forEach(plan => {
            const members = JSON.parse(localStorage.getItem(plan)) || [];
            members.forEach(member => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${member.fullName}</td>
                    <td>${member.email}</td>
                    <td>${member.phone}</td>
                    <td>${plan.charAt(0).toUpperCase() + plan.slice(1)}</td>
                    <td class="${member.status ? 'status-' + member.status.toLowerCase() : 'status-pending'}">
                        ${member.status ? member.status.charAt(0).toUpperCase() + member.status.slice(1) : 'Pending'}
                    </td>
                `;
                tableBody.appendChild(row);
            });
        });

        // Display a message if no data is available
        if (tableBody.children.length === 0) {
            const noDataRow = document.createElement('tr');
            noDataRow.innerHTML = `
                <td colspan="5" class="no-data-message">No membership records found.</td>
            `;
            tableBody.appendChild(noDataRow);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
