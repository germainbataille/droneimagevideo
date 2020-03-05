<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideosController extends Controller
{
  public function create(int $albumId)
  {
    return view('videos.create')->with('albumId',$albumId);
  }

  public function get_string_until_the_end($string, $start)
  {
    $ini = strpos($string, $start);
    $length = strlen($start);

    return substr($string, $ini+$length);
}



  public function store(Request $request)
  {
   $this->validate($request,[
     'title' => 'required',
     'description' => 'required',
     'video' => 'required'
   ]);

   $video = new Video();
   $video->album_video_id = $request->input('album-id');
   $video->title = $request->input('title');
   $video->description = $request->input('description');
   // USAGE
   $fullstring =  $request->input('video');
   $video->video = $this->get_string_until_the_end($fullstring, 'v=');
   $video->save();

   return redirect('/albumsvideos/'.$request->input('album-id'))->with('success','Photo uploaded successfully!');
  }

}
