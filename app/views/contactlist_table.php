<?php
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
        <?php
        include APP_DIR . 'views/templates/sidenav.php';
        ?>  
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 main-content">
                    <div class="container">
                        <h2 class="mt-4">Gym Contact List</h2>
                        <p>Here is a list of all the saved gym contact details.</p>
                        
                        <!-- Contact List Table -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Gym Address</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Facebook Link</th>
                                    <th>Instagram Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($contacts)): ?>
                                    <?php foreach ($contacts as $contact): ?>
                                        <tr>
                                            <td><?= $contact['gym_address']; ?></td>
                                            <td><?= $contact['phone_number']; ?></td>
                                            <td><?= $contact['email_address']; ?></td>
                                            <td><a href="<?= $contact['facebook_link']; ?>" target="_blank">Facebook</a></td>
                                            <td><a href="<?= $contact['instagram_link']; ?>" target="_blank">Instagram</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5">No contact information found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>    

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        .main-content {
            margin-left: 250px; 
            padding-top: 20px;    
        }
    </style>
</body>
</html>
