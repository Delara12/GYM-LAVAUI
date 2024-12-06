<?php $this->call->view('templates/headerdash', $data); ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Members
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Classes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/instructor">
                            Trainers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Reports
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Members</h5>
                            <p class="card-text display-4"><?= $total_members ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Active Memberships</h5>
                            <p class="card-text display-4"><?= $active_memberships ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Revenue This Month</h5>
                            <p class="card-text display-4">$<?= number_format($revenue_this_month) ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Classes Today</h5>
                            <p class="card-text display-4"><?= $classes_today ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more dashboard content here -->
             

        </main>
    </div>
</div>

<?php $this->call->view('templates/footer'); ?>