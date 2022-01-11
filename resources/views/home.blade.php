@extends('layout/app')

@section ('css')

<link rel="stylesheet" href="{{asset('css/home.css')}}">

@section ('content')
<div class="siteTitle d-flex j-content-c a-items-c py-1 fs-2">
  <h1>Artificen</h1>
</div>
<div class="container d-flex j-content-c a-items-c mx-auto">
  @foreach($movies as $movie)
  <div class="card">
    <div class="body">
      <img src="https://picsum.photos/200/300" alt="{{$movie->id}}">
      <h2>
        {{ $movie->original_title }}
      </h2>


    </div>
    <div class="movieInfo">
      <h3>
        {{$movie->title}}
      </h3>
      <ul>
        <li>{{$movie->nationality}}</li>
        <li>{{$movie->date}}</li>
        <li>{{$movie->vote}}</li>
      </ul>

    </div>
  </div>
  @endforeach
</div>
@endsection