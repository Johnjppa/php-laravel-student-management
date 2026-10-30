<link rel="stylesheet" href="{{ asset('css/students.css') }}">
<h2>Student List</h2>

<a href="{{ route('students.create') }}" class="add-button">Add Student</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    @foreach($students as $student)
    <tr>
        {{-- <td>{{ $student->id }}</td> --}}
        {{-- After delete, starts ordering from 1 --}}
        <td>{{ $loop->iteration }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>
            <a href="{{ route('students.edit',$student->id) }} " class="edit-button">
                Edit
            </a>

            <form action="{{ route('students.destroy',$student->id) }}" class="action-form"
                  method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="delete-button">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>