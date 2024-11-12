<div class="col-md-4">
    <div class="card mb-2">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <!-- Sidebar -->
                    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                        <div class="position-sticky">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="/home">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/membership">Membership Plans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Instructors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/workout">Workout Programs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/settings">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Reports</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!-- User actions 
                    <div class="col-md-9">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#updateProfile" class="list-group-item">
                            <i class="bi bi-person-lines-fill"></i> Update Profile
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#updatePassword" class="list-group-item">
                            <i class="bi bi-pencil-square"></i> Change Password
                        </a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <style>
        #sidebar {
      height: 100vh;
      background-color: #343a40;  /* Dark background color */
      padding-top: 20px;
     position: fixed;
     top: 0;
     left: 0;
     width: 250px;  /* Sidebar width */
        }

     #sidebar .nav-link {
     color: #A9D08E;  /* Light green text color */
     font-weight: bold;
        background-color: #343a40;  /* Match sidebar background */
        padding: 10px 15px;
     border-radius: 5px;
     margin: 5px 0;
     transition: background-color 0.3s ease, color 0.3s ease;
        }

        #sidebar .nav-link.active {
    color: yellow;
    background-color: #555;
}

#sidebar .nav-link:hover {
    color: white;
    background-color: #555;
}

main {
    margin-left: 250px; /* Align with sidebar width */
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
    border: none;
    margin-top: 20px;
}

.card-header {
    background-color: #343a40;  /* Dark background for header */
    color: white;
    font-weight: bold;
}

.card-body {
    padding: 15px;
}
</style>
</div>
