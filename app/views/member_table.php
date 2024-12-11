<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Dashboard - Members</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Header and sidebar styles remain the same */
        .sidebar {
            height: 100vh;
            background-color: #432E54;
            padding-top: 50px;
            position: fixed;
            top: 70px;
            bottom: 0;
            width: 250px;
            font-size: 1.2rem;
        }
        .sidebar .nav-link.active {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        .sidebar .nav-link {
            font-size: 1.25rem;
            padding: 15px 20px;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        body {
            padding-top: 70px;
        }
        header {
            background-color: #EB5B00;
            color: white;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
        }
        header img {
            height: 50px;
            border-radius: 10px;
            margin-right: 20px;
        }
        header h1 {
            flex-grow: 1;
            text-align: center;
        }

        /* Updated main content styles */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #f8f9fe;
        }

        /* New card grid styles */
        .member-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
            padding: 20px;
        }

        .member-card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s;
            position: relative;
        }

        .member-card:hover {
            transform: translateY(-5px);
        }

        .add-new-card {
            border: 2px dashed #e0e0fe;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            background: transparent;
        }

        .add-new-card:hover {
            border-color: #9381ff;
            background: #f8f7ff;
        }

        .profile-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 16px;
            object-fit: cover;
        }

        .add-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #f0f0ff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
        }

        .member-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .member-role {
            color: #666;
            margin-bottom: 24px;
        }

        .view-profile-btn {
            background: #f0f0ff;
            color: #9381ff;
            border: none;
            padding: 8px 24px;
            border-radius: 20px;
            font-weight: 500;
            transition: all 0.2s;
        }

        .view-profile-btn:hover {
            background: #9381ff;
            color: white;
        }

        .action-menu {
            position: absolute;
            top: 16px;
            right: 16px;
        }
    </style>
</head>
<body>
    <!-- Header and sidebar remain the same -->
    <header>
        <img src="/public/img/logo.jpg" alt="Gym Lava Logo">
        <h1>GYM LAVA Dashboard</h1>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="tableinstructordash">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#members">
                                <i class="fas fa-users"></i> Members
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#classes">
                                <i class="fas fa-dumbbell"></i> Classes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="instructor">
                                <i class="fas fa-chalkboard-teacher"></i> Instructors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#payments">
                                <i class="fas fa-credit-card"></i> Payments
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <h2 class="mb-4">Members</h2>

                <div class="member-grid">
                    <!-- Add New Member Card -->
                    <a href="<?= site_url('member') ?>" class="member-card add-new-card">
                        <div class="add-icon">
                            <i class="fas fa-plus" style="color: #9381ff; font-size: 24px;"></i>
                        </div>
                        <span class="member-name">ADD NEW MEMBER</span>
                    </a>

                    <!-- Member Cards -->
                    <?php foreach ($members as $member): ?>
                    <div class="member-card">
                        <!-- Action Menu for Update and Delete -->
                        <div class="action-menu dropdown">
                            <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <!-- Update link -->
                                <li>
                                    <a class="dropdown-item" href="<?= site_url('member/update/' . $member['id']) ?>">
                                        <i class="fas fa-edit me-2"></i> Update
                                    </a>
                                </li>
                                <!-- Delete link -->
                                <li>
                                    <a class="dropdown-item text-danger" href="<?= site_url('member/delete/' . $member['id']) ?>"
                                       onclick="return confirm('Are you sure you want to delete this member?')">
                                        <i class="fas fa-trash me-2"></i> Delete
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Member profile image and name -->
                        
                        <h3 class="member-name"><?= htmlspecialchars($member['fullname']) ?></h3>
                        <p class="member-role"><?= htmlspecialchars($member['email']) ?></p>
                        
                        <!-- View profile button -->
                        <button class="view-profile-btn w-100" data-bs-toggle="modal" data-bs-target="#viewProfileModal" data-id="<?= $member['id'] ?>" onclick="loadMemberData(this)">
                            View Profile
                        </button>
                    </div>
                    <?php endforeach; ?>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="viewProfileModal" tabindex="-1" aria-labelledby="viewProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewProfileModalLabel">Member Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img id="profileImage" src="" alt="Member Image" class="profile-image mb-3">
                        <h3 id="memberName" class="member-name"></h3>
                        <p id="memberEmail" class="member-role"></p>
                    </div>
                    <hr>
                    <p><strong>Additional Info:</strong></p>
                    <ul>
                        <li><strong>Age:</strong> <span id="memberAge">0</span></li>
                        <li><strong>Phone Number:</strong> <span id="memberPhone">0</span></li>
                        <li><strong>Address:</strong> <span id="memberAddress">N/A</span></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript to load member profile data -->
    <script>
        function loadMemberData(button) {
            const memberId = button.getAttribute('data-id');
            
            // Fetch member data (replace this with an AJAX call if necessary)
            const members = <?= json_encode($members); ?>;
            const member = members.find(m => m.id == memberId);

            if (member) {
                // Populate modal with member data
                document.getElementById('profileImage').src = "<?= base_url('/uploads/members/') ?>" + member.profile_image;
                document.getElementById('memberName').textContent = member.fullname;
                document.getElementById('memberEmail').textContent = member.email;
                document.getElementById('memberAge').textContent = member.age;
                document.getElementById('memberPhone').textContent = member.phone;
                document.getElementById('memberAddress').textContent = member.address;
            }
        }
    </script>
</body>
</html>
