<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Fitness Program</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f8ff; /* Light blue background for a fresh feel */
            font-family: 'Arial', sans-serif;
        }
        h1 {
            font-family: 'Georgia', serif;
            font-size: 3rem;
            color: #2c3e50;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        p {
            font-size: 1.2rem;
            color: #34495e;
            line-height: 1.6;
            text-align: center;
        }
        .container {
            margin-top: 30px;
            padding: 15px;
        }
        .back-button {
            margin-top: 20px;
            text-align: center;
        }
        .back-button button {
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .back-button button:hover {
            background-color: #c0392b;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            font-size: 1.5rem;
            padding: 20px;
            border-radius: 15px 15px 0 0;
        }
        .card-body {
            padding: 20px;
            background-color: #ecf0f1;
            border-radius: 0 0 15px 15px;
        }
        .card ul {
            list-style-type: none;
            padding-left: 0;
        }
        .card ul li {
            margin-bottom: 10px;
            font-size: 1.1rem;
            color: #2c3e50;
            position: relative;
            padding-left: 25px;
        }
        .card ul li:before {
            content: "\2022";
            color: #3498db; /* Blue bullet points */
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: 0;
        }
        .btn-primary {
            background-color: #3498db;
            border-color: #2980b9;
            padding: 12px 20px;
            border-radius: 25px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #2980b9;
        }
        /* Mobile responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            .container {
                margin-top: 10px;
            }
            .card-header {
                font-size: 1.2rem;
            }
            .back-button button {
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Beginner Fitness Program</h1>
        <p class="text-center">A gentle fitness program with low-impact exercises, designed for beginners. Work out 3 days a week to start building strength and flexibility.</p>
        
        <div class="text-left back-button">
            <button class="btn btn-primary" onclick="goBack()">Back</button>
        </div>

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
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
