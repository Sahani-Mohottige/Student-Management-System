<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
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
                    <a href="/Student/edit/<?= esc($student['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="/Student/delete/<?= esc($student['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/Student/create" class="btn btn-success">Add New Student</a>
</div>
</body>
</html>