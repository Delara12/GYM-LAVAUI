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
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }
        .container {
            max-width: 100%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color:rgb(0, 0, 0);
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #2e7d32;
            color: white;
        }
        .class-cell {
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            padding: 5px;
        }
        .class-cell h5 {
            margin: 0;
            font-size: 1rem;
        }
        .class-cell p {
            margin: 3px 0;
            font-size: 0.8rem;
        }
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

        /* Adjust body padding to make space for the fixed header */
        body {
            padding-top: 70px;
        }

        /* Sidebar styling */
        .sidebar {
            height: 100vh;
            background-color: rgb(0, 0, 0);
            padding-top: 20px;
            position: fixed;
            top: 70px;
            bottom: 0;
            left: 0;
            width: 250px;
            font-size: 1.2rem;
            overflow-y: auto;
        }

        .sidebar .nav-link {
            font-size: 1.25rem;
            padding: 15px 20px; 
            color: white;
        }

        /* Main content styling */
        .main-content {
            margin-left: 250px;
            padding: 20px;
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

        /* Hide the instructor table */
        #instructor-table {
            display: none;
        }
        .table {
            position: relative;
            height: 100px;
            width: 100%;
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
                            <br>
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <div class="container">
                    <h1>User Schedule</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody id="scheduleTableBody">
                            <!-- Table content will be dynamically inserted here -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script>
        function updateScheduleTable() {
            const scheduleTableBody = document.getElementById('scheduleTableBody');
            const exercises = JSON.parse(localStorage.getItem('exercises')) || [];
            const days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            const times = ['6:00am - 8:00am', '10:00am - 12:00pm', '5:00pm - 7:00pm', '7:00pm - 9:00pm'];

            scheduleTableBody.innerHTML = '';
            times.forEach(time => {
                const row = document.createElement('tr');
                row.innerHTML = `<th>${time}</th>${days.map(() => '<td></td>').join('')}`;
                scheduleTableBody.appendChild(row);
            });

            exercises.forEach(exercise => {
                const rowIndex = times.indexOf(exercise.time);
                const colIndex = days.indexOf(exercise.day) + 1;
                if (rowIndex !== -1 && colIndex !== -1) {
                    const cell = scheduleTableBody.rows[rowIndex].cells[colIndex];
                    cell.innerHTML = `
                        <div class="class-cell">
                            <h5>${exercise.type}</h5>
                            <p>${exercise.name}</p>
                            <p>Instructor - ${exercise.insname}</p>
                        </div>
                    `;
                }
            });
        }

        // Initial update
        updateScheduleTable();

        // Listen for changes in localStorage
        window.addEventListener('storage', function(e) {
            if (e.key === 'exercises') {
                updateScheduleTable();
            }
        });
    </script>
</body>
</html>

