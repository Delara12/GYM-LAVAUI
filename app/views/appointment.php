<?php include APP_DIR . 'views/templates/nav.php'; ?> <!-- Navigation bar is absolutely at the top -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include APP_DIR . 'views/templates/header.php'; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-8 main-content">
                <div class="container">
                    <h2 class="mt-4">Book an Appointment</h2>
                    <p>Fill in the form below to schedule an appointment.</p>
                    
                    <form action="/appointment/save" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                        </div>

                        <div class="mb-3">
                            <label for="appointmentDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required>
                        </div>

                        <div class="mb-3">
                            <label for="appointmentTime" class="form-label">Time</label>
                            <input type="time" class="form-control" id="appointmentTime" name="appointmentTime" required>
                        </div>

                        <div class="mb-3">
                            <label for="notes" class="form-label">Additional Notes</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Optional notes for the appointment"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Book Appointment</button>
                    </form>
                </div>
            </div>

            <!-- Appointment Table Section -->
            <div class="col-md-4">
                <div class="container">
                    <h2 class="mt-4">Appointments</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($appointments)) : ?>
                                <?php foreach ($appointments as $appointment) : ?>
                                    <tr>
                                        <td><?= $appointment['name']; ?></td>
                                        <td><?= $appointment['appointment_date']; ?></td>
                                        <td><?= $appointment['appointment_time']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="3">No appointments found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            color: black;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            padding-top: 20px;
        }

        .main-content {
            padding-top: 20px;
        }

        h2, p {
            color: black;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-label {
            font-weight: bold;
        }

        .table {
            margin-top: 20px;
        }
    </style>
</body>
</html>
