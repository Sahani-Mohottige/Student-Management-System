<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-dark">
<div class="container mt-5 bg-light p-4 rounded">
    <h1 class="mb-4">Student List</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= esc($student['id']) ?></td>
                <td><?= esc($student['name']) ?></td>
                <td><?= esc($student['email']) ?></td>
                <td><?= esc($student['age']) ?></td>
                <td><?= esc($student['course']) ?></td>
                <td>
                    <a href="/student/edit/<?= esc($student['id']) ?>" class="btn btn-md btn-primary me-2">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <a href="/student/delete/<?= esc($student['id']) ?>" class="btn btn-md btn-danger" onclick="return confirm('Are you sure you want to delete this student?');">
                        <i class="bi bi-trash"></i> Delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/student/create" class="btn btn-success">
        <i class="bi bi-plus-circle"></i> Add New Student
    </a>
</div>
</body>
</html>
