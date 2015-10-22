<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'subject',
        'body'
      ];

    public function user(){
      return $this->belongsTo('App\User');
    }
}
