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
            <h1 class="mt-4">Set Appointment</h1>
            
            <form id="scheduleForm" class="mb-4">
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="insname" placeholder="Your Instructor" required>
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
                <h2>Schedule</h2>
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
    let exercises = JSON.parse(localStorage.getItem('exercises')) || [];

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
                        <p>Instructor - ${exercise.insname}</p>
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

    function saveExercises() {
        localStorage.setItem('exercises', JSON.stringify(exercises));
    }

    scheduleForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const insname = document.getElementById('insname').value;
        const type = document.getElementById('exerciseType').value;
        const day = document.getElementById('day').value;
        const time = document.getElementById('time').value;

        exercises.push({ name, insname, type, day, time });
        saveExercises();
        updateTimetable();
        scheduleForm.reset();
    });

    window.editExercise = function(index) {
        const exercise = exercises[index];
        document.getElementById('name').value = exercise.name;
        document.getElementById('insname').value = exercise.insname;
        document.getElementById('exerciseType').value = exercise.type;
        document.getElementById('day').value = exercise.day;
        document.getElementById('time').value = exercise.time;

        exercises.splice(index, 1);
        saveExercises();
        updateTimetable();

        scheduleForm.onsubmit = function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const insname = document.getElementById('insname').value;
            const type = document.getElementById('exerciseType').value;
            const day = document.getElementById('day').value;
            const time = document.getElementById('time').value;

            exercises.push({ name, insname, type, day, time });
            saveExercises();
            updateTimetable();
            scheduleForm.reset();
            scheduleForm.onsubmit = null;
        };
    };

    window.deleteExercise = function(index) {
        if (confirm('Are you sure you want to delete this exercise?')) {
            exercises.splice(index, 1);
            saveExercises();
            updateTimetable();
        }
    };

    updateTimetable();
});
    </script>
    <style>
    body {
        background-color: #f4f7fc;
        font-family: 'Poppins', sans-serif;
        color: #333;
    }

    .main-container {
        display: flex;
        margin-top: 56px;
        background-color: #f4f7fc;
    }

    /* Sidebar styling */
    #sidebar {
        flex-shrink: 0;
        height: 100vh;
        background-color: #2e7d32; /* Green sidebar background */
        color: #A9D08E; /* Light green text color */
        width: 250px;
        position: fixed;
        top: 70px;
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

    /* Main Content Styling */
    .main-content {
        margin-left: 250px;
        padding: 20px;
    }

    h1 {
        color: #2e7d32;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 8px;
        padding: 15px;
        font-size: 1rem;
        margin-bottom: 15px;
        background-color: #f0f5f1;
    }

    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }

    button[type="submit"] {
        background-color: #3498db;
        border: none;
        padding: 12px 30px;
        font-size: 1rem;
        border-radius: 5px;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #2980b9;
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    .table th, .table td {
    color: black; /* Set text color to black */
}

    table th, table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
        background-color: #fff;
        color: black;
    }
    .table th {
    color: black;
}

    table th {
        background-color: #2e7d32;
        color: white;
        font-weight: bold;
    }

    table td {
        font-size: 1rem;
        color: #333;
        position: relative;
    }

    .class-cell {
    background-color: #3498db;
    color: #fff;
    border-radius: 5px;
    padding: 5px;
    position: relative;
}

    .class-cell:hover {
        background-color: #2980b9;
    }

    .class-cell h5 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: bold;
    }

    .class-cell p {
        margin: 3px 0;
        font-size: 0.85rem;
    }

    .action-buttons {
        position: absolute;
        top: 5px;
        right: 5px;
        display: none;
    }

    .action-buttons button {
        padding: 5px 10px;
        font-size: 0.8rem;
        margin-left: 5px;
        border-radius: 5px;
        background-color: #ff9800;
        color: white;
        transition: background-color 0.3s ease;
    }

    .action-buttons button:hover {
        background-color: #e65100;
    }

    .menu-dots {
        position: absolute;
        top: 5px;
        right: 5px;
        cursor: pointer;
        font-size: 1.2rem;
    }

    .menu-dots:hover {
        color: #ff9800;
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
        #sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .main-content {
            margin-left: 0;
        }
        table th, table td {
            font-size: 0.9rem;
            padding: 10px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 15px;
        }
    }
</style>

</body>
</html>

