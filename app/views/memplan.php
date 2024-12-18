<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Membership Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #d4f1d4, #9acb8c, #ffffff);
            min-height: 100vh;
            padding-top: 20px;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
        }
        .btn-primary, .btn-success, .btn-warning {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Membership Plans</h2>

                <div class="row mb-4">
                    <!-- Basic Plan -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white text-center">Basic</div>
                            <div class="card-body">
                                <h5 class="card-title text-center">250.00/month</h5>
                                <p class="card-text">Access to basic gym equipment and facilities.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Standard Plan -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header bg-success text-white text-center">Standard</div>
                            <div class="card-body">
                                <h5 class="card-title text-center">3000.00/month</h5>
                                <p class="card-text">Includes gym access, group classes, and 24/7 access.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Premium Plan -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header bg-warning text-white text-center">Premium</div>
                            <div class="card-body">
                                <h5 class="card-title text-center">5000.00/month</h5>
                                <p class="card-text">All-access pass including personal training sessions and spa services.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Sign Up for Membership</h3>
                        <form id="signupForm">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="membershipPlan" class="form-label">Select Membership Plan</label>
                                <select class="form-select" id="membershipPlan" name="membershipPlan" required>
                                    <option value="">Choose a plan</option>
                                    <option value="basic">Basic - 250.00/month</option>
                                    <option value="standard">Standard - 3000.00/month</option>
                                    <option value="premium">Premium - 5000.00/month</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <a href="/membership" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const membershipPlan = document.getElementById('membershipPlan').value;
            
            const member = { fullName, email, phone };
            
            let members = JSON.parse(localStorage.getItem(membershipPlan)) || [];
            members.push(member);
            localStorage.setItem(membershipPlan, JSON.stringify(members));
            
            alert('Sign up successful!');
            window.location.href = '/membership';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>