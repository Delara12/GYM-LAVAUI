<nav class="navbar navbar-expand-md" style="background-color: #f0fff4; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); border-bottom: 3px solid #6ab04c;">
    <div class="container-fluid">
        <!-- Brand Name with Icon -->
        <span class="navbar-brand me-auto" style="color: #6ab04c; font-weight: bold; font-size: 26px;">
            <i class="fas fa-dumbbell"></i> <!-- Gym Icon -->
            DEMM FITNESS GYM
        </span>

        <!-- Visible Hamburger Icon (Three Lines) -->
        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" style="font-size: 24px; color: #27ae60;"></i> <!-- Hamburger Icon -->
            </button>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <!-- Centered Navigation Links -->
            <ul class="navbar-nav mx-auto">
               
                <li class="nav-item mx-3">
                    <a class="nav-link" href="<?=site_url('/about');?>" style="color: #27ae60; font-size: 18px;">About Us</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="<?=site_url('blogs');?>" style="color: #27ae60; font-size: 18px;">Blogs</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="<?=site_url('/dashboard');?>" style="color: #27ae60; font-size: 18px;">User Dashboard</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="<?=site_url('/contact');?>" style="color: #27ae60; font-size: 18px;">Contact Us</a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <?php if(! logged_in()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('auth/login');?>" style="color: #6ab04c; font-size: 18px;">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('auth/register');?>" style="color: #6ab04c; font-size: 18px;">Register</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #22a6b3; font-size: 18px; font-weight: bold;">
                        <?=html_escape(get_username(get_user_id()));?>
                    </a>
                </li>
                <!-- Completely Invisible Dashboard Link -->
                <li class="nav-item">
                    <a class="nav-link invisible-dashboard" href="<?=site_url('/tableinstructordash');?>" aria-label="Dashboard"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('auth/logout');?>" style="color: #6ab04c; font-size: 18px;">Logout</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Existing styles */
.navbar-toggler .fas.fa-bars {
    font-size: 24px;
    color: #27ae60;
}

.navbar-nav .nav-item .nav-link {
    font-size: 18px;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link:focus {
    background-color: #c7ecee;
    border-radius: 5px;
}

.navbar-nav .nav-item {
    margin-right: 20px;
}

.navbar-nav .nav-item:last-child {
    margin-right: 0;
}

.navbar {
    position: fixed;
    width: 100%;
    z-index: 1000;
}

/* Styles for completely invisible dashboard link */
.invisible-dashboard {
    width: 40px; /* Adjust as needed */
    height: 40px; /* Adjust as needed */
    padding: 0;
    margin: 0;
    background-color: transparent !important;
    color: transparent !important;
    cursor: pointer;
}

.invisible-dashboard:hover,
.invisible-dashboard:focus {
    background-color: transparent !important;
    color: transparent !important;
    outline: none;
}
</style>

