<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructors Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #B7B7B7;
        }

        .container {
            background-color: #E5D9F2;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0;
            margin-left: 5px;
        }

        .table thead {
            background-color: #343a40;
            color: white;
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #f8f9fa;
        }

        .table-hover tbody tr:hover {
            background-color: #e9ecef;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        td a {
            color: #4CAF50;
            text-decoration: none;
            margin-right: 10px;
        }

        td a:hover {
            color: #45a049;
        }
    </style>
</head>

<body>

    <div class="container my-5">
        <h2>Instructors</h2>
        <a class="btn btn-primary mb-4" role="button" href="<?= site_url('instructor'); ?>">Create Instructor</a>

        <table id="instructorTable" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Specialty</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($instructors as $instructor): ?>
                    <tr>
                        <td><?= $instructor['id'] ?></td>
                        <td><?= $instructor['instructor_name'] ?></td>
                        <td><?= $instructor['instructor_email'] ?></td>
                        <td><?= $instructor['instructor_phone'] ?></td>
                        <td><?= $instructor['instructor_specialty'] ?></td>
                        <td>
                            <a href="<?= site_url('instructor/update/' . $instructor['id']); ?>">Update</a>
                            <a href="<?= site_url('instructor/delete/' . $instructor['id']); ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#instructorTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "pageLength": 5,
                "language": {
                    "search": "_INPUT_",
                    "searchPlaceholder": "Search instructors...",
                    "paginate": {
                        "previous": "&laquo;",
                        "next": "&raquo;"
                    }
                }
            });
        });
    </script>
</body>

</html>
