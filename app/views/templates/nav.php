<nav class="navbar navbar-expand-md" style="background-color: #f0fff4; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); border-bottom: 3px solid #6ab04c;">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="<?=site_url();?>" style="color: #6ab04c; font-weight: bold; font-size: 26px;">
            DEMM FITNESS GYM
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <!-- Centered Navigation Links -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?=site_url('home');?>" style="color: #27ae60; font-size: 18px;">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?=site_url('about');?>" style="color: #27ae60; font-size: 18px;">About Us</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?=site_url('blogs');?>" style="color: #27ae60; font-size: 18px;">Blogs</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?=site_url('contact');?>" style="color: #27ae60; font-size: 18px;">Contact Us</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('auth/logout');?>" style="color: #6ab04c; font-size: 18px;">Logout</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<main class="mt-5 pt-5" style="background-color: #f0fff4; text-align: center; padding: 50px 0;">
    <h1 style="color: #6ab04c; font-size: 40px; font-weight: bold;">Transform Your Life at DEMM FITNESS GYM</h1>
    <p style="color: #27ae60; font-size: 20px; margin-top: 20px;">Achieve your health and fitness goals with the best workouts, equipment, and expert guidance. Join us today and get started on your journey to a healthier, stronger you!</p>
    <a href="<?=site_url('auth/register');?>" class="btn btn-lg" style="background-color: #6ab04c; color: white; padding: 15px 30px; font-size: 18px; border-radius: 5px; margin-top: 30px;">Get Started</a>
</main>

<style>
/* Highlight the active link */
.navbar-nav .nav-link:hover,
.navbar-nav .nav-link:focus {
    background-color: #c7ecee;
    border-radius: 5px;
}
</style>
