<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate Fitness Program</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f9f9;
        }
        .container {
            margin-top: 20px;
        }
        .back-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Intermediate Fitness Program</h1>

        <p class="text-center">A balanced program focusing on stretching and cardio, designed for intermediate users. Work out 5 days a week.</p>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
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

        <div class="card mb-4">
            <div class="card-header bg-success text-white">
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

        <div class="card mb-4">
            <div class="card-header bg-warning text-dark">
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

        <div class="card mb-4">
            <div class="card-header bg-danger text-white">
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

        <div class="card mb-4">
            <div class="card-header bg-info text-white">
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

        <div class="text-center back-button">
            <button class="btn btn-secondary" onclick="goBack()">Back</button>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
