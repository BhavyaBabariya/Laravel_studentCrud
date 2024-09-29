@extends('layouts.app')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="rollno">Roll No:</label>
                        <input type="text" class="form-control" id="roll_no" name="roll_no">
                        @if($errors->has('roll_no'))
                        <span class="text-danger">{{ $errors->first('roll_no') }}</span>
                    @endif

                    </div>
                    <div class="form-group">
                        <label for="perstange">Perstange:</label>
                        <input type="text" class="form-control" id="perstange" name="perstange">
                        @if($errors->has('perstange'))
                        <span class="text-danger">{{ $errors->first('perstange') }}</span>
                    @endif
                    </div>

                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection