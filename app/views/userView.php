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
        <div class="main-container">
            <!-- Include the sidebar navigation -->
            <?php
            include APP_DIR . 'views/templates/sidenav.php'; // Sidebar navigation
            ?>

            <!-- Main content area -->
            <main class="content">
                <div class="container-fluid">
                    <h1>Gym Dashboard - Instructor Information</h1>
                    
                    <div class="chart-container card p-3 m-3">
                        <h2>Instructor List</h2>
                        <div class="table-responsive">
                            <table id="instructorTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Specialization</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Instructor rows will be dynamically inserted here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            const instructors = JSON.parse(localStorage.getItem('instructors')) || [];

            const table = $('#instructorTable').DataTable({
                data: instructors,
                columns: [
                    { data: 'name' },
                    { data: 'specialization' },
                    { 
                        data: 'isAvailable',
                        render: function(data, type, row) {
                            return data ? 'Available' : 'Not Available';
                        }
                    }
                ],
                responsive: true,
                pageLength: 10,
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
            });

            // Refresh the table when the data changes
            window.addEventListener('storage', function(e) {
                if (e.key === 'instructors') {
                    const updatedInstructors = JSON.parse(e.newValue) || [];
                    table.clear().rows.add(updatedInstructors).draw();
                }
            });
        });
    </script>

    <style>
       #sidebar {
            position: fixed;
            top: 70px; /* Adjusted to avoid overlap with navbar */
            left: 0;
            width: 250px;
            height: 100%; /* Full height */
            background-color: #343a40;  /* Dark background */
            color: #A9D08E; /* Text color */
            padding-top: 10px;
            z-index: 1000; /* Ensure it stays above other content */
            overflow-y: auto; /* Allow scroll if sidebar content overflows */
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
        .content {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;
            color: #343a40;
            margin-left: 250px; /* Match sidebar width */
        }
        .chart-container {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2E7D32;
            margin-bottom: 20px;
        }
        .table-responsive {
            overflow-x: auto;
        }
        /* DataTables custom styling */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background: #2E7D32 !important;
            color: white !important;
            border-color: #2E7D32;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: #A9D08E !important;
            color: #2E7D32 !important;
        }
        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
            }
            #sidebar {
                flex: 0 0 auto;
                width: 100%;
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</body>
</html>