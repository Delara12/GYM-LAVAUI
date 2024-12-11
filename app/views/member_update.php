<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Dashboard - Update Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            padding-top: 70px;
            background-color: #f4f4f4;
        }
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
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .form-container {
            background: linear-gradient(145deg, #1a1a1a, #2a2a2a);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            color: #fff;
            width: 98%;
        }
        .form-container h2 {
            color: #00bcd4;
            font-size: 2.5rem;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .form-control {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            color: #333;
            padding: 15px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            background-color: white;
            border-color: #00bcd4;
            box-shadow: 0 0 15px rgba(0, 188, 212, 0.5);
        }
        .form-label {
            color: #00bcd4;
            font-size: 1.1rem;
            margin-bottom: 10px;
            display: block;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        .btn-primary {
            background-color: #00bcd4;
            border: none;
        }
        .btn-primary:hover {
            background-color: #008ba3;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 188, 212, 0.4);
        }
        .btn-secondary {
            background-color: #ff4081;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #e6005c;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 64, 129, 0.4);
        }
    </style>
</head>
<body>
    <header>
        <img src="/public/img/logo.jpg" alt="Gym Lava Logo">
        <h1>GYM LAVA Dashboard</h1>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#tableinstructordash">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#member">
                            <i class="fas fa-users"></i> Members
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#class">
                            <i class="fas fa-dumbbell"></i> Classes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#instructor">
                            <i class="fas fa-chalkboard-teacher"></i> Instructors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#payments">
                            <i class="fas fa-credit-card"></i> Payments
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="col-md-9 ms-sm-auto col-lg-10 px-4 main-content">
                <div class="form-container">
                    <h2>Update Member</h2>
                    <form action="<?= site_url('member/update/' . $member['id']) ?>" method="POST">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $member['fullname'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" class="form-control" id="age" name="age" value="<?= $member['age'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender" value="<?= $member['gender'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $member['email'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $member['phone'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?= $member['address'] ?>" required>
                        </div>
                        <div class="btn-container">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="<?= site_url('member_table') ?>" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
