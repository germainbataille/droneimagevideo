<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  public function AlbumVideo()
  {
    return $this->belongsTo('App\Models\AlbumVideo');
  }
}
