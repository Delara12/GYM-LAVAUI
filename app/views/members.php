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
                    <h2 class="mt-4">Add New Member</h2>
                    <p>Fill in the details to add a new member to the gym's membership system.</p>
                    
                    <form action="/member/save" method="POST">
                        <div class="mb-3">
                            <label for="memberName" class="form-label">Member Name</label>
                            <input type="text" class="form-control" id="memberName" name="memberName" placeholder="e.g., Jane Doe" required>
                        </div>

                        <div class="mb-3">
                            <label for="memberAge" class="form-label">Member Age</label>
                            <input type="number" class="form-control" id="memberAge" name="memberAge" placeholder="e.g., 30" required>
                        </div>

                        <div class="mb-3">
                            <label for="memberEmail" class="form-label">Member Email</label>
                            <input type="email" class="form-control" id="memberEmail" name="memberEmail" placeholder="e.g., jane.doe@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="memberPhone" class="form-label">Member Phone Number</label>
                            <input type="tel" class="form-control" id="memberPhone" name="memberPhone" placeholder="e.g., +1 234 567 890" required>
                        </div>

                        <div class="mb-3">
                            <label for="membershipType" class="form-label">Membership Type</label>
                            <select class="form-control" id="membershipType" name="membershipType" required>
                                <option value="" disabled selected>Select Membership Type</option>
                                <option value="basic">Basic</option>
                                <option value="premium">Premium</option>
                                <option value="vip">VIP</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Member</button>
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
