@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Resume</h1>
  <div class="alert alert-info">
    <h3>{{ $resume -> name.' '.$resume->surname}}</h3>
    <p>Telephone:number {{ $resume->tel_number }}</p>
    <p>Date of Birth: {{ $resume-> date_of_birth}}</p>
    <p>Email: {{ $resume -> email}}</p>
    <p>Description: {{ $resume -> description}}</p>
    <p><small>{{ $resume -> created_at }}</small></p>
    <a href="{{ route('downloadPDF', $resume) }}"><button class="btn btn-link">Download Resume</button></a>
    <br>
    <a href="{{ route('updateResume', $resume) }}"><button class="btn btn-warning">Update</button></a>
    <a href="{{ route('deleteResume', $resume) }}"><button class="btn btn-danger">Delete</button></a>
  </div>
</div>
@endsection
