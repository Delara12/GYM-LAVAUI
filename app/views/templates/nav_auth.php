<nav class="navbar navbar-expand-md navbar-light shadow-sm custom-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?=site_url();?>">
           DEMM FITNESS GYM
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('auth/login');?>">Login</a>
                </li>                       
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('auth/register');?>">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .custom-navbar {
        background-color: #e8f5e9; /* Light green background */
    }

    .custom-navbar .navbar-brand {
        color: #2e7d32; /* Darker green for the brand name */
        font-weight: bold;
    }

    .custom-navbar .navbar-nav .nav-link {
        color: #4caf50; /* Green color for nav links */
        transition: color 0.3s ease;
    }

    .custom-navbar .navbar-nav .nav-link:hover,
    .custom-navbar .navbar-nav .nav-link:focus {
        color: #1b5e20; /* Darker green on hover/focus */
    }

    .custom-navbar .navbar-toggler {
        border-color: #4caf50; /* Green border for the toggler */
    }

    .custom-navbar .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(76, 175, 80, 0.75)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Optional: Add a subtle gradient to the navbar */
    .custom-navbar::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(255,255,255,0));
        pointer-events: none;
    }
</style>