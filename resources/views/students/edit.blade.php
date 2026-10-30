<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>

    <link rel="stylesheet" href="{{ asset('css/students.css') }}">
</head>
<body>

    <div class="edit-container">
        <h2>Edit Student</h2>

        <form action="{{ route('students.update', $student->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>

                <input type="text"
                       id="name"
                       name="name"
                       class="form-control"
                       value="{{ $student->name }}"
                       required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>

                <input type="email"
                       id="email"
                       name="email"
                       class="form-control"
                       value="{{ $student->email }}"
                       required>
            </div>

            <button type="submit" class="update-button">
                Update
            </button>
        </form>

        <a href="{{ route('students.index') }}" class="back-link">
            ← Back to Student List
        </a>
    </div>

</body>
</html>
