<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
  protected $fillable=
  [
    'isbn',
    'title',
    'author',
    'price',
    'genre',
    'description',
    'vote'
  ];
}
