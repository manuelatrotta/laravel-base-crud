<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <h1>inserisci le modifiche nei rispettivi campi</h1>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    </header>
    <form class="" action="{{route('cds.update', $cd)}}" method="post">
      @csrf
      @method('PATCH')
      <div class="">
        <label for="isbn">Codice isbn</label>
        <input type="text" name="isbn" value="{{$cd->isbn}}" placeholder="isbn">
      </div>
      <div class="">
        <label for="title">titolo album</label>
        <input type="text" name="title" value="{{$cd->title}}" placeholder="title">
      </div>
      <div class="">
        <label for="author">Autore album</label>
        <input type="text" name="author" value="{{$cd->author}}" placeholder="author">
      </div>
      <div class="">
        <label for="price">prezzo</label>
        <input type="text" name="price" value="{{$cd->price}}" placeholder="price">
      </div>
      <div class="">
        <label for="genre">genre</label>
        <input type="text" name="genre" value="{{$cd->genre}}" placeholder="genre">
      </div>
      <textarea name="description" rows="8" cols="80" placeholder="insert description"></textarea>
      <div class="">
        <label for="vote">voto</label>
        <input type="text" name="vote" value="{{$cd->vote}}" placeholder="vote">
      </div>
      <button type="submit" name="button">Save</button>
    </form>

  </body>
</html>
