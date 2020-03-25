@extends('layouts.layout')

@section('header')
  <h1>Tutti i cds</h1>
  @if(!empty($id))
      <div>Hai cancellato il record {{$id}}</div>
  @endif
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
    <a href="{{route('cds.edit', $cd)}}">Modifica</a>
      <form action="{{route('cds.destroy', $cd->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
      </form>
  </div>

@endforeach

@endsection
