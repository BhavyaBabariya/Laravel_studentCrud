@extends('layouts.app')

@section('main')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <!-- Add Students Button -->
            <a href="{{ route('students.create') }}" class="btn btn-dark">Add Students</a>

            <!-- Search Form -->
            <form action="{{ route('students.index') }}" method="GET" class="form-inline">
                <div class="input-group">
                    <!-- Search Input -->
                    <input type="search" name="search" class="form-control" placeholder="Search by Name or Email" value="{{ $query }}" style="max-width: 300px;">
                    
                    <!-- Search Button -->
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>

                    <!-- Reset Button -->
                    <div class="input-group-append ml-2">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Reset</a>
                    </div>
                </div>
            </form>
        </div>

        <!-- Students Table -->
        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roll No</th>
                    <th>Percentage</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->roll_no }}</td>
                        <td>{{ $student->perstange }}</td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-warning btn-sm">View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        {{ $students->links() }}
    </div>
@endsection
