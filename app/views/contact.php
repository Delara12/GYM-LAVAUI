<?php include APP_DIR . 'views/templates/nav.php'; ?> <!-- Navigation bar is absolutely at the top -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include APP_DIR . 'views/templates/header.php'; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 main-content">
                <div class="container">
                    <h2 class="mt-4">Gym Contact Information</h2>
                    <p>Update your gym's contact details here so members can easily reach out for inquiries or support.</p>
                    
                    <form action="/contact/save" method="POST">
                        <div class="mb-3">
                            <label for="gymAddress" class="form-label">Gym Address</label>
                            <input type="text" class="form-control" id="gymAddress" name="gymAddress" placeholder="e.g., 123 Fitness St, City, Country" required>
                        </div>

                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="e.g., +1 234 567 890" required>
                        </div>

                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="e.g., contact@fitnessgym.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="facebookLink" class="form-label">Facebook Page</label>
                            <input type="url" class="form-control" id="facebookLink" name="facebookLink" placeholder="e.g., https://facebook.com/yourgym" required>
                        </div>

                        <div class="mb-3">
                            <label for="instagramLink" class="form-label">Instagram Profile</label>
                            <input type="url" class="form-control" id="instagramLink" name="instagramLink" placeholder="e.g., https://instagram.com/yourgym" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Contact Information</button>
                    </form>
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
            margin: 0; /* Remove all margin */
            padding: 0; /* Remove all padding */
        }

        .container-fluid {
            padding-top: 20px;
        }

        .main-content {
            padding-top: 20px;
        }

        h2, p {
            color: black;
        }

        .btn-primary {
            background-color: #28a745;
            border: none;
        }

        .btn-primary:hover {
            background-color: #218838;
        }

        .form-label {
            font-weight: bold;
        }
    </style>
</body>
</html>
