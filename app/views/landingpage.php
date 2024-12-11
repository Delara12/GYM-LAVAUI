<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DEMM FITNESS </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url();?>public/css/style.min.css" rel="stylesheet">
    <link href="<?=base_url();?>public/img/favicon.ico" rel="icon">
    <link href="<?=base_url();?>public/img" rel="stylesheet">
    <link href="<?=base_url();?>public/lib//flaticon/font/flaticon.css" rel="stylesheet">
</head>
<style>
    body {
        background: linear-gradient(135deg, #e0f7fa, #a5d6a7, #ffffff);
        background-attachment: fixed;
        background-size: 100% 200%;
    }
    .carousel-caption h3,
    .carousel-caption h2,
    .carousel-caption a {
        color: yellow !important;
    }
    .btn-outline-light {
        color: yellow !important;
        border-color: yellow !important;
    }
    .btn-outline-light:hover {
        background-color: transparent !important;
        color: #000 !important;
    }
</style>

<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">DEMM FITNESS GYM</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
               
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/public/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Best Gym In Town</h2>
                        <li class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5"><a class="" href="auth/register">Join Us Now</a></li>
                    </div>
                </div>
               
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Gym Class Start -->
   
    <!-- Gym Class End -->


   

    <!-- Features Start -->
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-training display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Progression</h2>
                        <p>Track your progress and achieve your goals with every step
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-primary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-weightlifting display-3 text-secondary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Workout</h2>
                        <p>Effective workouts designed to maximize your results
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-treadmill display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Nutrition</h2>
                        <p>Fuel your body with expert-backed nutrition guidance
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- GYM Feature Start -->
   
    <!-- GYM Feature End -->


    <!-- Subscribe Start -->
    
    <!-- Subscribe End -->


    <!-- Class Timetable Start -->
    <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Class Timetable</h4>
            <h4 class="display-4 font-weight-bold">Working Hours and Class Time</h4>
        </div>
        <div class="tab-class">
            <ul class="nav nav-pills justify-content-center mb-4">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#class-all">All Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-cardio">Cardio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-crossfit">Crossfit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-powerlifting">Powerlifting</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="class-all" class="container tab-pane p-0 active">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-cardio" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>John Deo</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td> 
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-crossfit" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Adam Phillips</td>
                                    <td></td> 
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Adam Phillips</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Power Lifting</h5>James Alien</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-powerlifting" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td> 
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Power Lifting</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Power Lifting</h5>James Alien</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
    
    <!-- BMI Calculation End -->


    <!-- Team Start -->
    <div class="container pt-5 team">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Our Trainers</h4>
            <h4 class="display-4 font-weight-bold">Meet Our Expert Trainers</h4>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="/public/img/team-1.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Trainer Name</h4>
                        <p class="card-text">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="/public/img/team-2.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Trainer Name</h4>
                        <p class="card-text">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="/public/img/team-3.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Trainer Name</h4>
                        <p class="card-text">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="/public/img/team-4.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Trainer Name</h4>
                        <p class="card-text">Trainer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid position-relative testimonial my-5">
        <div class="container">
            <div class="row px-3 align-items-center">
                <div class="col-md-6 bg-secondary">
                    <div class="d-flex align-items-center px-3" style="min-height: 450px;">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="/public/img/testimonial-1.jpg" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary">Client Name</h4>
                                            <p class="m-0">Profession</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    Welcome, Geralyn! Your fitness journey starts here with our expert guidance and support.
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="/public/img/testimonial-2.jpg" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary">Client Name</h4>
                                            <p class="m-0">Profession</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    Thank you, Geralyn, for choosing us to support your fitness goals!
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="/public/img/testimonial-3.jpg" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary">Client Name</h4>
                                            <p class="m-0">Profession</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    Hello, Geralyn! Lets achieve greatness together.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pl-md-3 d-none d-md-block">
                        <h4 class="text-primary">Testimonial</h4>
                        <h4 class="display-4 mb-4 text-white font-weight-bold">What Our Clients Say?</h4>
                        <p class="m-0 text-white">The trainers and programs here are top-notch. I’ve never felt more supported in my fitness journey!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <section class="blog" id="blog">
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Our Blog</h4>
            <h4 class="display-4 font-weight-bold">Latest Article From Blog</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="/public/img/blog-1.jpg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Maximize Your Gains: Top Strategies for Effective Muscle Building</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p> Learn the most effective methods for muscle building, including optimal workout plans, nutrition tips, 
                    and recovery strategies to take your fitness to the next level.</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="/public/img/blog-2.jpg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">The Importance of Recovery in Your Workout Routine</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Discover why recovery is just as important as your workout, including the best techniques for muscle repair and growth to ensure you’re maximizing your training efforts.</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    </section>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Masipit, Calapan City</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+09217487860</p>
                <p><i class="fa fa-envelope mr-2"></i>demmfitnessgym@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Features</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Features</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Opening Hours</h4>
                <h5 class="text-white">Monday - Friday</h5>
                <p>8.00 AM - 8.00 PM</p>
                <h5 class="text-white">Saturday - Sunday</h5>
                <p>2.00 PM - 8.00 PM</p>
            </div>
        </div>
        <div class="container border-top border-dark pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">DEMM FITNESS GYM</a>. All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">DEMM</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>