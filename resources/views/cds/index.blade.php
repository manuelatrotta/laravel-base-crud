@extends('layouts.layout')

@section('header')
  <h1>Tutti i cds</h1>
@endsection

@section('main')

@foreach ($cds as $cd)
  <div class="cds">
    <ul>
      <li> ID:{{$cd->id}}</li>
      <li>Isbn:{{$cd->isbn}}</li>
      <li>title:{{$cd->title}}</li>
      <li>author:{{$cd->author}}</li>
      <li>price:{{$cd->price}}</li>
      <li>genre:{{$cd->genre}}</li>
      <li>vote:{{$cd->vote}}</li>
    </ul>
    <p>description:{{$cd->description}}</p>
  </div>

@endforeach

@endsection
