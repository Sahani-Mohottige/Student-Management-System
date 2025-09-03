<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
<div class="container mt-5 text-white p-4 rounded">
    <h2>Edit Student</h2>
    <form action="/student/update/<?= esc($student['id']) ?>" method="post">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?= esc($student['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= esc($student['email']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="<?= esc($student['age']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" value="<?= esc($student['course']) ?>" required>
        </div>
        <a href="/student" class="btn btn-secondary">Back to Student List</a>
        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
</div>
</body>
</html>
