<?php
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
         <?php
        include APP_DIR . 'views/templates/sidenav.php';
        ?>  
        
        <div class="container-fluid">
            <div class="row">
                
                <!-- Main content for About Page -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3 pt-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">About Us</div>
                                    <div class="card-body">
                                        <h4>Welcome to Our Platform</h4>
                                        <p>Our platform is dedicated to providing top-notch services to help you manage and organize your tasks efficiently. Whether you're a professional or an individual, our tools are designed to cater to your specific needs.</p>
                                        
                                        <h5>Our Mission</h5>
                                        <p>We aim to simplify your workflow and enhance productivity by delivering innovative and user-friendly solutions. Our mission is to empower individuals and organizations by providing tools that drive success and growth.</p>
                                        
                                        <h5>Our Team</h5>
                                        <p>Our team is composed of dedicated professionals who are passionate about technology and innovation. We work tirelessly to develop solutions that meet the highest standards of quality and functionality.</p>

                                        <h5>Contact Us</h5>
                                        <p>If you have any questions or feedback, feel free to reach out to us through our contact page. We value your input and are always here to assist you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        main {
    margin-left: 250px; 
    background-image: url('/images/gym.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    padding-top: 20px;
    color: white;
}

        
        .card {
            background-color: rgba(255, 255, 255, 0.8);
            color: black;
        }
    </style>
</body>
</html>
