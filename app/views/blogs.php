<?php
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
        <!-- Include the navigation bar here -->
        <?php
        include APP_DIR . 'views/templates/nav.php'; // Assuming nav.php contains the header and main navigation
        ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 main-content">
                    <div class="container">
                        <h2 class="mt-4">Welcome to Our Gym Blog!</h2>
                        <p>Fitness is a journey, not a destination! Explore our blog for the latest tips, workout guides, and inspiration to help you reach your fitness goals.</p>
                        
                        <div class="card mb-4">
                            <div class="card-header bg-success text-white">
                                <h4><i class="fas fa-dumbbell"></i> 5 Essential Gym Tips for Beginners</h4>
                            </div>
                            <div class="card-body">
                                <p>Starting your fitness journey can be overwhelming. Don't worry! Here are 5 essential gym tips to make your workout routine effective and enjoyable:</p>
                                <ul>
                                    <li><strong>Start Slow:</strong> Begin with basic exercises to build your foundation. Focus on form before pushing your limits.</li>
                                    <li><strong>Stay Consistent:</strong> Consistency is key. Set achievable goals and stick to your schedule.</li>
                                    <li><strong>Hydrate:</strong> Drink plenty of water throughout your workout. Proper hydration improves performance and recovery.</li>
                                    <li><strong>Rest & Recover:</strong> Give your muscles time to recover. Rest days are just as important as workout days.</li>
                                    <li><strong>Fuel Your Body:</strong> A balanced diet rich in protein, carbs, and healthy fats will power your workouts and recovery.</li>
                                </ul>
                                <p>Stay motivated and remember: progress takes time! Keep pushing forward and celebrate every small victory along the way.</p>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-warning text-dark">
                                <h4><i class="fas fa-heartbeat"></i> The Benefits of Cardio: More Than Just a Fat Burner</h4>
                            </div>
                            <div class="card-body">
                                <p>Cardio exercises aren't just for weight loss. They offer a wide range of health benefits that can improve your overall well-being:</p>
                                <ul>
                                    <li><strong>Boosts Heart Health:</strong> Regular cardio strengthens your heart and improves circulation.</li>
                                    <li><strong>Improves Mood:</strong> Cardio workouts release endorphins, the "feel-good" hormones, reducing stress and anxiety.</li>
                                    <li><strong>Increases Stamina:</strong> With consistent cardio, your endurance levels will improve, making you more active throughout the day.</li>
                                    <li><strong>Supports Weight Management:</strong> Cardio helps burn calories, making it an excellent tool for maintaining a healthy weight.</li>
                                    <li><strong>Better Sleep:</strong> Engaging in regular cardio can help regulate your sleep patterns and improve sleep quality.</li>
                                </ul>
                                <p>Cardio is an essential part of any fitness routine, whether you're aiming to shed some pounds or just improve your overall health!</p>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h4><i class="fas fa-users"></i> Why Working Out With a Partner Can Boost Your Results</h4>
                            </div>
                            <div class="card-body">
                                <p>Training with a workout buddy can take your fitness journey to the next level. Here are a few reasons why:</p>
                                <ul>
                                    <li><strong>Motivation:</strong> A workout partner keeps you motivated, helping you push through tough sessions.</li>
                                    <li><strong>Accountability:</strong> Having a partner means you're less likely to skip a workout, knowing they'll be there waiting for you.</li>
                                    <li><strong>Healthy Competition:</strong> Friendly competition can challenge both of you to do your best and reach new personal records.</li>
                                    <li><strong>Fun Factor:</strong> Working out with a partner adds an element of fun, making the gym experience more enjoyable.</li>
                                    <li><strong>Variety:</strong> A workout partner can introduce you to new exercises or routines that you might not have tried alone.</li>
                                </ul>
                                <p>So, grab a buddy and turn your gym sessions into a fun, challenging, and rewarding experience!</p>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-danger text-white">
                                <h4><i class="fas fa-bone"></i> How to Prevent Common Workout Injuries</h4>
                            </div>
                            <div class="card-body">
                                <p>Injuries are an unfortunate part of fitness, but with the right precautions, you can reduce your risk:</p>
                                <ul>
                                    <li><strong>Warm Up:</strong> A proper warm-up increases blood flow to your muscles, preparing your body for intense activity.</li>
                                    <li><strong>Focus on Form:</strong> Always prioritize proper form over lifting heavier weights. Bad form can lead to unnecessary strain and injury.</li>
                                    <li><strong>Don't Skip Stretching:</strong> Stretching before and after your workout helps maintain flexibility and prevent muscle tightness.</li>
                                    <li><strong>Listen to Your Body:</strong> If something hurts, stop. Pushing through pain is a surefire way to cause an injury.</li>
                                    <li><strong>Use the Right Equipment:</strong> Ensure that your shoes, weights, and other equipment are suited to your workout style.</li>
                                </ul>
                                <p>By following these steps, you can enjoy your workouts while staying safe and injury-free!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        body {
            background-color: #E8F5E9; /* Light green background */
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

        .card-header {
            font-size: 1.25rem;
            padding: 15px;
            text-align: center;
        }

        .card-body {
            padding: 20px;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .btn-primary {
            background-color: #28a745;
            border: none;
        }

        .btn-primary:hover {
            background-color: #218838;
        }
    </style>
</body>
</html>
