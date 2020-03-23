<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route(cds.store)}}" method="post">
      @csrf
      <input type="text" name="isbn" value="" placeholder="isbn">
      <input type="text" name="title" value="" placeholder="title">
      <input type="text" name="author" value="" placeholder="author">
      <input type="text" name="price" value="" placeholder="price">
      <input type="text" name="genre" value="" placeholder="genre">
      <input type="text" name="description" value="" placeholder="description">
      <input type="text" name="vote" value="" placeholder="vote">
      <input type="text" name="created_at" value="">
      @method(POST)

    </form>

  </body>
</html>
