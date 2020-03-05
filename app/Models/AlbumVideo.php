<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumVideo extends Model
{
  public function videos()
  {
    return $this->hasMany('App\Models\Video');
  }
}
