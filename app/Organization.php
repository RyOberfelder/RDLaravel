<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
  protected $fillable = [
      'title',
      'city',
      'state',
      'country',
      'description',
      'type',
      'body'
    ];
}
