{{-- <h2>Add Student</h2>

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    Name:
    <input type="text" name="name">

    <br><br>

    Email:
    <input type="email" name="email">

    <br><br>

    <button type="submit">
        Save
    </button>
</form> --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>

    <link rel="stylesheet" href="{{ asset('css/students.css') }}">
</head>
<body>

    <div class="add-container">
        <h2>Add Student</h2>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>

                <input type="text"
                       id="name"
                       name="name"
                       class="form-control"
                       placeholder="Enter student name"
                       {{-- check vallidation name --}}
                       pattern="[A-Za-z ]+"
                       title="文字と空だけ入力してください。"
                       required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>

                <input type="email"
                       id="email"
                       name="email"
                       class="form-control"
                       placeholder="Enter email address"
                       required>
            </div>

            <button type="submit" class="save-button">
                Save
            </button>
        </form>

        <a href="{{ route('students.index') }}" class="back-link">
            ← Back to Student List
        </a>
    </div>

</body>
</html>

