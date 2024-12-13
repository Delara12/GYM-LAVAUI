<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Fitness Program</title>
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
        <h1 class="text-center">Beginner Fitness Program</h1>

        <p class="text-center">A gentle fitness program with low-impact exercises, designed for beginners. Work out 3 days a week.</p>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Day 1: Full-Body Stretch and Strength
            </div>
            <div class="card-body">
                <ul>
                    <li>5-minute warm-up: March in place</li>
                    <li>10 reps of bodyweight squats</li>
                    <li>10-second plank hold (increase gradually)</li>
                    <li>15 reps of seated leg lifts</li>
                    <li>Cool down: 5 minutes of gentle stretching</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                Day 2: Core and Balance
            </div>
            <div class="card-body">
                <ul>
                    <li>5-minute warm-up: Side steps with arm swings</li>
                    <li>10 reps of standing knee lifts (each leg)</li>
                    <li>10 reps of seated torso twists</li>
                    <li>10-second balance hold on one leg (each side)</li>
                    <li>Cool down: 5 minutes of yoga poses like Child's Pose</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-warning text-dark">
                Day 3: Cardio and Flexibility
            </div>
            <div class="card-body">
                <ul>
                    <li>5-minute warm-up: Gentle walk in place</li>
                    <li>5 minutes of low-impact marching or step-tapping</li>
                    <li>10 reps of chair-supported side leg raises</li>
                    <li>5 reps of gentle forward folds</li>
                    <li>Cool down: 5 minutes of deep breathing and relaxation</li>
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
