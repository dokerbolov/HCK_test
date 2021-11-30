@extends('layouts.app')

@section('content')
<form action="{{ route('update_user_data') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
  </div>
  <div class="form-group">
    <label for="surname">Surname:</label>
    <input type="text" name="surname" id="surname" class="form-control" value="{{ $user->surname }}">
  </div>
  <div class="form-group">
    <label for="date_of_birth">Date of Birth:</label>
    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ $user->date_of_birth }}">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
  </div>
  <div class="form-group">
    <label for="tel_number">Telephone Number:</label>
    <input type="integer" name="tel_number" id="tel_number" class="form-control" value="{{ $user->tel_number }}">
  </div>
<button type="submit" class="btn btn-primary">Change Data</button>
@endsection
