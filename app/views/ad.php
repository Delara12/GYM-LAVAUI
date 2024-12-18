<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Gym Fitness Program</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f4f7;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 40px;
        }
        h1 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .back-button {
            margin-top: 20px;
        }
        .card-header {
            font-size: 1.25rem;
            font-weight: bold;
            text-transform: uppercase;
        }
        .card-body ul {
            list-style: none;
            padding-left: 0;
        }
        .card-body li {
            margin-bottom: 10px;
            font-size: 1.1rem;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
        .card-header.bg-info {
            background-color: #17a2b8;
        }
        .card-header.bg-danger {
            background-color: #dc3545;
        }
        .card-header.bg-purple {
            background-color: #6f42c1;
        }
        .card-header.bg-dark {
            background-color: #343a40;
        }
        .card-body li span {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Advanced Gym Fitness Program</h1>

        <p class="text-center text-muted">Push your limits with this intense 7-day workout regimen designed for seasoned fitness enthusiasts aiming for peak performance and strength.</p>
        <br>
        
        <div class="text-left back-button">
            <button class="btn btn-secondary" onclick="goBack()">Back</button>
        </div>
        <br>

        <!-- Day 1 -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Day 1: Lower Body Strength and Endurance
            </div>
            <div class="card-body">
                <ul>
                    <li><span>Warm-up:</span> 5-minute Jump rope</li>
                    <li><span>Strength:</span> 4 sets of 12 reps Barbell Squats</li>
                    <li><span>Leg Strength:</span> 3 sets of 10 reps Bulgarian Split Squats (each leg)</li>
                    <li><span>Endurance:</span> 4 sets of 15 reps Deadlifts</li>
                    <li><span>Power:</span> 3 sets of 20 reps Walking Lunges (each leg)</li>
                    <li><span>Cool down:</span> 5 minutes of leg and hip stretches</li>
                </ul>
            </div>
        </div>

        <!-- Day 2 -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                Day 2: Upper Body Push and Pull
            </div>
            <div class="card-body">
                <ul>
                    <li><span>Warm-up:</span> Arm circles & shoulder rotations</li>
                    <li><span>Push Strength:</span> 4 sets of 8 reps Bench Press</li>
                    <li><span>Press Strength:</span> 3 sets of 10 reps Overhead Press</li>
                    <li><span>Pull Strength:</span> 4 sets of 10 reps Bent-Over Rows</li>
                    <li><span>Pull-ups:</span> 3 sets of 12 reps (assisted if needed)</li>
                    <li><span>Cool down:</span> 5 minutes of upper body stretches</li>
                </ul>
            </div>
        </div>

        <!-- Day 3 -->
        <div class="card mb-4">
            <div class="card-header bg-warning text-dark">
                Day 3: Core and Conditioning
            </div>
            <div class="card-body">
                <ul>
                    <li><span>Warm-up:</span> High knees & butt kicks</li>
                    <li><span>Strength:</span> 4 sets of 15 reps Plank to Push-Ups</li>
                    <li><span>Core Strength:</span> 3 sets of 30 seconds Russian Twists</li>
                    <li><span>Leg Power:</span> 3 sets of 15 reps Leg Raises</li>
                    <li><span>Endurance:</span> 3 sets of 30-second Hollow Body Holds</li>
                    <li><span>Cool down:</span> Deep breathing and relaxation</li>
                </ul>
            </div>
        </div>

        <!-- Day 4 -->
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                Day 4: Cardio and Full Body Mobility
            </div>
            <div class="card-body">
                <ul>
                    <li><span>Warm-up:</span> Jumping jacks</li>
                    <li><span>HIIT:</span> 30 minutes High-Intensity Interval Training</li>
                    <li><span>Strength:</span> 3 sets of 12 reps Kettlebell Swings</li>
                    <li><span>Conditioning:</span> 5 sets of 15 reps Burpees</li>
                    <li><span>Cool down:</span> Full body mobility stretches (hip openers, chest stretches)</li>
                </ul>
            </div>
        </div>

        <!-- Day 5 -->
        <div class="card mb-4">
            <div class="card-header bg-danger text-white">
                Day 5: Lower Body Power and Agility
            </div>
            <div class="card-body">
                <ul>
                    <li><span>Warm-up:</span> Dynamic leg swings & lunges</li>
                    <li><span>Power Moves:</span> 4 sets of 8 reps Power Cleans</li>
                    <li><span>Agility:</span> 3 sets of 10 reps Box Jumps</li>
                    <li><span>Strength:</span> 4 sets of 12 reps Deadlifts</li>
                    <li><span>Endurance:</span> 3 sets of 15 reps Step-Ups with Weights</li>
                    <li><span>Cool down:</span> Stretching focusing on hamstrings and quads</li>
                </ul>
            </div>
        </div>

        <!-- Day 6 -->
        <div class="card mb-4">
            <div class="card-header bg-purple text-white">
                Day 6: Full Body Strength and Conditioning
            </div>
            <div class="card-body">
                <ul>
                    <li><span>Warm-up:</span> Light jog or treadmill walk</li>
                    <li><span>Strength:</span> 3 sets of 10 reps Deadlifts</li>
                    <li><span>Endurance:</span> 3 sets of 12 reps Push-Ups</li>
                    <li><span>Power:</span> 4 sets of 15 reps Kettlebell Swings</li>
                    <li><span>Pull Strength:</span> 3 sets of 10 reps Pull-Ups</li>
                    <li><span>Cool down:</span> Full body stretching and foam rolling</li>
                </ul>
            </div>
        </div>

        <!-- Day 7 -->
        <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                Day 7: Active Recovery and Flexibility
            </div>
            <div class="card-body">
                <ul>
                    <li><span>Warm-up:</span> Gentle walking or cycling</li>
                    <li><span>Recovery:</span> 45 minutes of Yoga or Pilates</li>
                    <li><span>Stretch:</span> Deep full-body stretches</li>
                    <li><span>Relaxation:</span> Breath work and relaxation for stress relief</li>
                    <li><span>Cool down:</span> Light stretching and foam rolling</li>
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
