@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{  $data -> name.' '.$data -> surname }}</h1>
  <a href="{{ route('changeUser') }}"><button class="btn btn-secondary">Change details</button></a>
  <h3>Resumes</h3>
  @foreach ($resumes as $resume)
  <p>Name: {{ $resume->name }}</p>
  <p>Description: {{ $resume ->description }}</p>
  <a href="{{ route('oneResume', $resume) }}"><button class="btn btn-primary">Detail</button></a>
  <a href="{{ route('deleteResume', $resume) }}"><button class="btn btn-danger">Delete</button></a>
  <br>
  @endforeach
  <br>
  <a href="{{ route('createResume') }}"><button type="button" class="btn btn-info">Create New Resume</button></a>
</div>
@endsection
