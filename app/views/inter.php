<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate Fitness Program</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .container {
            margin-top: 40px;
        }
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #343a40;
        }
        p {
            font-size: 1.2rem;
            color: #6c757d;
        }
        .back-button {
            margin-top: 20px;
            text-align: center;
        }
        .btn-back {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-back:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background-color: #ffffff;
        }
        .card-header {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
            border-radius: 15px 15px 0 0;
            padding: 15px;
        }
        .card-body {
            font-size: 1.1rem;
            padding: 20px;
        }
        .card-header.bg-primary {
            background-color: #007bff;
        }
        .card-header.bg-success {
            background-color: #28a745;
        }
        .card-header.bg-warning {
            background-color: #ffc107;
        }
        .card-header.bg-danger {
            background-color: #dc3545;
        }
        .card-header.bg-info {
            background-color: #17a2b8;
        }
        .card-body ul {
            list-style-type: none;
            padding-left: 0;
        }
        .card-body ul li {
            margin-bottom: 12px;
        }
        .card-body ul li::before {
            content: "\2022";
            color: #007bff;
            font-size: 1.2rem;
            margin-right: 10px;
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            .card-body {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Intermediate Fitness Program</h1>
        <p class="text-center">A balanced program focusing on stretching and cardio, designed for intermediate users. Work out 5 days a week.</p>

        <div class="back-button">
            <button class="btn btn-back" onclick="goBack()">Back</button>
        </div>

        <!-- Day 1 Card -->
        <div class="card">
            <div class="card-header bg-primary">
                Day 1: Cardio and Stretching
            </div>
            <div class="card-body">
                <ul>
                    <li>5-minute warm-up: Light jogging or brisk walking</li>
                    <li>15 minutes of steady-state cardio (cycling, treadmill, or outdoor run)</li>
                    <li>5 reps of standing forward folds</li>
                    <li>3 rounds of cat-cow stretches (10 reps each)</li>
                    <li>Cool down: 5 minutes of deep breathing</li>
                </ul>
            </div>
        </div>

        <!-- Day 2 Card -->
        <div class="card">
            <div class="card-header bg-success">
                Day 2: Core Stability and Flexibility
            </div>
            <div class="card-body">
                <ul>
                    <li>5-minute warm-up: Marching in place with high knees</li>
                    <li>3 sets of 12 plank shoulder taps</li>
                    <li>15 reps of seated hamstring stretches (each leg)</li>
                    <li>5 minutes of yoga poses: Cobra and Downward Dog</li>
                    <li>Cool down: Child's Pose for relaxation</li>
                </ul>
            </div>
        </div>

        <!-- Day 3 Card -->
        <div class="card">
            <div class="card-header bg-warning">
                Day 3: Cardio Intervals
            </div>
            <div class="card-body">
                <ul>
                    <li>5-minute warm-up: Jumping jacks or side steps</li>
                    <li>20 minutes of interval cardio (1 minute fast, 2 minutes slow, repeat)</li>
                    <li>10 reps of standing quad stretches (each leg)</li>
                    <li>3 rounds of butterfly stretches (hold for 20 seconds each)</li>
                    <li>Cool down: 5 minutes of light jogging or walking</li>
                </ul>
            </div>
        </div>

        <!-- Day 4 Card -->
        <div class="card">
            <div class="card-header bg-danger">
                Day 4: Full-Body Stretch
            </div>
            <div class="card-body">
                <ul>
                    <li>5-minute warm-up: Gentle walk</li>
                    <li>10 reps of standing side stretches (each side)</li>
                    <li>10 reps of seated forward bends</li>
                    <li>5 minutes of yoga poses: Warrior 1 and Triangle Pose</li>
                    <li>Cool down: Savasana (lying flat, deep breathing)</li>
                </ul>
            </div>
        </div>

        <!-- Day 5 Card -->
        <div class="card">
            <div class="card-header bg-info">
                Day 5: Active Recovery
            </div>
            <div class="card-body">
                <ul>
                    <li>5-minute warm-up: Gentle arm and leg swings</li>
                    <li>15-minute light cardio (walking or cycling)</li>
                    <li>5 minutes of dynamic stretches: Hip circles, arm circles</li>
                    <li>Cool down: 5 minutes of deep breathing and seated stretching</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
