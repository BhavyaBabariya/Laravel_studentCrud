@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-4">
                <div class="card p-4">
                    <p>Name: <b>{{ $student->name }}</b></p>
                    <p>Email: <b>{{ $student->email }}</b></p>
                    <p>Roll No: <b>{{ $student->roll_no }}</b></p>
                    <p>Perstange: <b>{{ $student->perstange }}</b></p>
                </div>
            </div>
        </div>
    </div>
@endsection