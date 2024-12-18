<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Instructor Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 270px; /* Ensure content is not covered by the sidebar */
            margin-top: 20px;
        }
        h1 {
            color: rgb(0, 0, 0);
            margin-bottom: 20px;
        }
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
            height: 50px;
            border-radius: 10px;
            margin-right: 20px;
        }

        header h1 {
            flex-grow: 1;
            text-align: center;
        }

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
            color: white;
        }

        .sidebar .nav-link.active {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
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

       
    </style>
</head>
<body>
<header>
    <img src="/public/img/logo.jpg" alt="Gym Lava Logo">
    <h1>GYM LAVA Dashboard</h1>
</header>

<div class="sidebar">
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

<div class="container">
  <br>
  <br>
    
    <div class="form-container">
        <h2>Add New Instructor</h2>
        <form id="addInstructorForm">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="specialization" class="form-label">Specialization</label>
                <input type="text" class="form-control" id="specialization" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="isAvailable">
                <label class="form-check-label" for="isAvailable">Available</label>
            </div>
            <button type="submit" class="btn btn-primary">Add Instructor</button>
        </form>
    </div>

    <h2>Instructor List</h2>
    <table id="instructorTable" class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Specialization</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="instructorTableBody">
            <!-- Instructor rows will be dynamically inserted here -->
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const addInstructorForm = document.getElementById('addInstructorForm');
        const instructorTableBody = document.getElementById('instructorTableBody');
        let instructors = JSON.parse(localStorage.getItem('instructors')) || [];

        function updateInstructorTable() {
            instructorTableBody.innerHTML = '';
            instructors.forEach((instructor, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${instructor.name}</td>
                    <td>${instructor.specialization}</td>
                    <td>${instructor.isAvailable ? 'Available' : 'Not Available'}</td>
                    <td>
                        <button class="btn btn-sm ${instructor.isAvailable ? 'btn-danger' : 'btn-success'}" 
                                onclick="toggleAvailability(${index})">
                            ${instructor.isAvailable ? 'Set Unavailable' : 'Set Available'}
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="deleteInstructor(${index})">Delete</button>
                    </td>
                `;
                instructorTableBody.appendChild(row);
            });
            localStorage.setItem('instructors', JSON.stringify(instructors));
            $('#instructorTable').DataTable();
        }

        addInstructorForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const specialization = document.getElementById('specialization').value;
            const isAvailable = document.getElementById('isAvailable').checked;

            instructors.push({ name, specialization, isAvailable });
            updateInstructorTable();
            addInstructorForm.reset();
        });

        window.toggleAvailability = function(index) {
            instructors[index].isAvailable = !instructors[index].isAvailable;
            updateInstructorTable();
        };

        window.deleteInstructor = function(index) {
            if (confirm('Are you sure you want to delete this instructor?')) {
                instructors.splice(index, 1);
                updateInstructorTable();
            }
        };

        updateInstructorTable();
    });
</script>
</body>
</html>
