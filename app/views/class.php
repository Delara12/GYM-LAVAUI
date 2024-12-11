<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Header styling */
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

        body {
            padding-top: 70px;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Sidebar styling */
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

        /* Main content styling */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Class timetable styling */
        .container {
            max-width: 100%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h1, h2 {
            text-align: center;
            color: #2c3e50;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 1.8em;
            margin-top: 0;
            color: #3498db;
        }

        .nav-pills {
            display: flex;
            justify-content: center;
            list-style-type: none;
            padding: 0;
            margin: 30px 0;
        }

        .nav-pills li {
            margin: 0 10px;
        }

        .nav-pills a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .nav-pills a:hover, .nav-pills a.active {
            background-color: #3498db;
            color: #fff;
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

        thead {
            background-color: #2c3e50;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .class-cell {
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            padding: 5px;
        }

        .class-cell h5 {
            margin: 0 0 5px 0;
            font-size: 1em;
        }

        .class-cell p {
            margin: 0;
            font-size: 0.8em;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .main-content {
                margin-left: 0;
            }
            .container {
                padding: 15px;
            }
            table {
                font-size: 0.8em;
            }
            th, td {
                padding: 8px;
            }
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
                            <a class="nav-link active" href="tableinstructordash">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="member">
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

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <div class="container">
                    <h1>Class Timetable</h1>
                    <h2>Working Hours and Class Time</h2>
                    
                    <ul class="nav-pills">
                        <li><a href="#" class="active" data-target="class-all">All Classes</a></li>
                        <li><a href="#" data-target="class-cardio">Cardio</a></li>
                        <li><a href="#" data-target="class-crossfit">Crossfit</a></li>
                        <li><a href="#" data-target="class-powerlifting">Powerlifting</a></li>
                    </ul>

                    <div id="class-all" class="tab-content">
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
                            <tbody>
                                <tr>
                                    <th>6:00am - 8:00am</th>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Cardio</h5>
                                            <p>John Doe</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Crossfit</h5>
                                            <p>Adam Phillips</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Power Lifting</h5>
                                            <p>James Allen</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Cardio</h5>
                                            <p>John Doe</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>10:00am - 12:00pm</th>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Power Lifting</h5>
                                            <p>James Allen</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Cardio</h5>
                                            <p>John Doe</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Crossfit</h5>
                                            <p>Adam Phillips</p>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>5:00pm - 7:00pm</th>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Crossfit</h5>
                                            <p>Adam Phillips</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Power Lifting</h5>
                                            <p>James Allen</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Cardio</h5>
                                            <p>John Doe</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Crossfit</h5>
                                            <p>Adam Phillips</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>7:00pm - 9:00pm</th>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Cardio</h5>
                                            <p>John Doe</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Crossfit</h5>
                                            <p>Adam Phillips</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="class-cell">
                                            <h5>Power Lifting</h5>
                                            <p>James Allen</p>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.nav-pills a');
            tabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    // Here you would typically show/hide the corresponding tab content
                    // For this example, we're only showing the 'All Classes' tab
                });
            });
        });
    </script>
</body>
</html>