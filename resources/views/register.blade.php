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
<h3 class="mt-5 ">Personal Information</h3>

<div class="container mt-1 bg-white">
  <form  action="{{ route('save-registration')}}" method="POST">
              @csrf 
    <div>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="first_name" placeholder="Enter your name" require>
    </div>
    <div>
    <label for="middle_name">Middle Name</label>
    <input type="text" id="middle_name" name="middle_name" placeholder="Enter your middle name" require>
    </div>
    <div>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="last_name" placeholder="Enter your last name" require>
    </div>
    <div>
    <label for="date_of_birth">Date of Birth</label>
    <input type="date" name="date_of_birth" class="form-control"  value=""  min="1997-01-01" max="2030-12-31" require>
    </div>
    <div>
    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Enter Address" require>
    </div>
     <input type="submit" value="Submit">
  </form>
</div>

</body>
@endsection
</html>

