<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel='stylesheet' type='text/css' href='<?php echo asset('storage/css/style.css') ?>'>
</head>
<body>
@extends('layout')
@section('content')
<table class="table align-middle mb-0 bg-light">
  <thead class="bg-light">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Middle Name</th>
      <th>Last Name</th>
      <th>Date of Birth</th>
      <th>Address</th>
    </tr>
  </thead>
  <tbody>
    @php
        $count = 1;
    @endphp
    @foreach($student as $student)    
    <tr>
      <td>{{ $count++ }}</td>
      <td>{{ $student->first_name }}</td>
      <td>{{ $student->middle_name }}</td>
      <td>{{ $student->last_name }}</td>
      <td>{{ $student->date_of_birth }}</td>
      <td>{{ $student->address }}</td>
      <td>
        <a href="{{ route('edit', ['id' => $student->id]) }}" class="btn btn-success btn-sm btn-rounded">Edit</a>
        <a href="{{ route('student-delete', ['id' => $student->id]) }}" class="btn btn-danger  btn-sm btn-rounded">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
@endsection
</html>
