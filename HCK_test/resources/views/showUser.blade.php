@extends('layouts.app')

@section('content')
  <h1>{{  $data -> name.' '.$data -> surname }}</h1>
  <a href="{{ route('changeUser') }}"><button class="btn btn-danger">Change details</button></a>
  <h3>Resume</h3>
  @foreach ($resumes as $resume)
  <h3>{{ $resume->name }}</h3>
  <h3>{{ $resume ->description }}</h3>
  <a href="{{ route('oneResume', $resume) }}"><button class="btn btn-danger">Detail</button></a>
  <a href="{{ route('deleteResume', $resume) }}"><button class="btn btn-danger">Delete</button></a>
  @endforeach
  <br>
  <a href="{{ route('createResume') }}"><button type="button" class="">Create New Resume</button></a>
@endsection
