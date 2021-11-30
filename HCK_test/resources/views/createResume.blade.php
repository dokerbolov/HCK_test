@extends('layouts.app')

@section('content')
  <form action="{{ route('resume_form') }}" class="container" method="post">
    <h1>Resume</h1>
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" class="form-control" disabled placeholder="{{ $data->name }}">
    </div>
    <div class="form-group">
      <label for="surname">Surname:</label>
      <input type="text" name="surname" id="surname" class="form-control" disabled placeholder="{{ $data->surname }}">
    </div>
    <div class="form-group">
      <label for="date_of_birth">Date of Birth:</label>
      <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" disabled placeholder="{{ $data->date_of_birth }}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" class="form-control" disabled placeholder="{{ $data->email }}">
    </div>
    <div class="form-group">
      <label for="tel_number">Telephone Number:</label>
      <input type="integer" name="tel_number" id="tel_number" class="form-control" disabled placeholder="{{ $data->tel_number }}">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <input type="textarea" name="description" id="description" id="description" class="form-control">
    </div>
  <button type="submit" class="btn btn-primary">Create Resume</button>
</form>
@endsection
