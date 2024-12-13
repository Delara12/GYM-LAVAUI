<?php
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
        <?php
        include APP_DIR . 'views/templates/nav.php'; // Header and navigation
        ?>
            <?php
            include APP_DIR . 'views/templates/sidenav.php'; // Sidebar navigation
            ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <br>
            <br>
            <h1 class="mt-4">Gym Schedule</h1>
            
            <form id="scheduleForm" class="mb-4">
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <select class="form-control" id="exerciseType" required>
                        <option value="">Select Exercise Type</option>
                        <option value="Yoga">Yoga</option>
                        <option value="Muscle">Muscle</option>
                        <option value="Cardio">Cardio</option>
                        <option value="Crossfit">Crossfit</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-control" id="day" required>
                        <option value="">Select Day</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-control" id="time" required>
                        <option value="">Select Time</option>
                        <option value="6:00am - 8:00am">6:00am - 8:00am</option>
                        <option value="10:00am - 12:00pm">10:00am - 12:00pm</option>
                        <option value="5:00pm - 7:00pm">5:00pm - 7:00pm</option>
                        <option value="7:00pm - 9:00pm">7:00pm - 9:00pm</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Schedule Exercise</button>
            </form>

            <div class="container">
                <h2>Class Timetable</h2>
                <table class="table table-bordered">
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
                    <tbody id="timetableBody">
                        <!-- Timetable rows will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scheduleForm = document.getElementById('scheduleForm');
            const timetableBody = document.getElementById('timetableBody');
            let exercises = [];

            const days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            const times = ['6:00am - 8:00am', '10:00am - 12:00pm', '5:00pm - 7:00pm', '7:00pm - 9:00pm'];

            function initializeTimetable() {
                timetableBody.innerHTML = '';
                times.forEach(time => {
                    const row = document.createElement('tr');
                    row.innerHTML = `<th>${time}</th>${days.map(() => '<td></td>').join('')}`;
                    timetableBody.appendChild(row);
                });
            }

            function updateTimetable() {
                initializeTimetable();
                exercises.forEach((exercise, index) => {
                    const rowIndex = times.indexOf(exercise.time);
                    const colIndex = days.indexOf(exercise.day) + 1;
                    if (rowIndex !== -1 && colIndex !== -1) {
                        const cell = timetableBody.rows[rowIndex].cells[colIndex];
                        cell.innerHTML = `
                            <div class="class-cell">
                                <h5>${exercise.type}</h5>
                                <p>${exercise.name}</p>
                                <div class="menu-dots">...</div>
                                <div class="action-buttons">
                                    <button class="btn btn-sm btn-warning" onclick="editExercise(${index})">Edit</button>
                                    <button class="btn btn-sm btn-danger" onclick="deleteExercise(${index})">Delete</button>
                                </div>
                            </div>
                        `;
                        const menuDots = cell.querySelector('.menu-dots');
                        const actionButtons = cell.querySelector('.action-buttons');
                        menuDots.addEventListener('click', function() {
                            actionButtons.style.display = actionButtons.style.display === 'none' ? 'block' : 'none';
                        });
                    }
                });
            }

            scheduleForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const name = document.getElementById('name').value;
                const type = document.getElementById('exerciseType').value;
                const day = document.getElementById('day').value;
                const time = document.getElementById('time').value;

                exercises.push({ name, type, day, time });
                updateTimetable();
                scheduleForm.reset();
            });

            window.editExercise = function(index) {
                const exercise = exercises[index];
                document.getElementById('name').value = exercise.name;
                document.getElementById('exerciseType').value = exercise.type;
                document.getElementById('day').value = exercise.day;
                document.getElementById('time').value = exercise.time;

                exercises.splice(index, 1);
                updateTimetable();

                scheduleForm.onsubmit = function(e) {
                    e.preventDefault();
                    const name = document.getElementById('name').value;
                    const type = document.getElementById('exerciseType').value;
                    const day = document.getElementById('day').value;
                    const time = document.getElementById('time').value;

                    exercises.push({ name, type, day, time });
                    updateTimetable();
                    scheduleForm.reset();
                    scheduleForm.onsubmit = null;
                };
            };

            window.deleteExercise = function(index) {
                if (confirm('Are you sure you want to delete this exercise?')) {
                    exercises.splice(index, 1);
                    updateTimetable();
                }
            };

            initializeTimetable();
        });
    </script>
     <style>
         .main-container {
            display: flex;
            margin-top: 56px; 
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
        .class-cell {
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            padding: 5px;
            position: relative;
        }
        .class-cell h5 {
            margin: 0 0 5px 0;
            font-size: 1em;
        }
        .class-cell p {
            margin: 0;
            font-size: 0.8em;
        }
        .action-buttons {
            position: absolute;
            top: 5px;
            right: 5px;
            display: none;
        }
        .action-buttons button {
            padding: 2px 5px;
            font-size: 0.8em;
            margin-left: 5px;
        }
        .menu-dots {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            #sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</body>
</html>