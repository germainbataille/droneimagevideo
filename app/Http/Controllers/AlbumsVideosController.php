<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumVideo;

class AlbumsVideosController extends Controller
{
  public function index()
  {
    $albums = AlbumVideo::get();
    return view('albumsvideos.index')->with('albums',$albums);
  }

  public function create()
  {
    return view('albumsvideos.create');
  }

  public function store(Request $request)
  {
   $this->validate($request,[
     'name' => 'required',
     'description' => 'required',
     'cover-image' => 'required|image'
   ]);

   $filenameWithExtension = $request->file('cover-image')->getClientOriginalName();
   $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
   $extension = $request->file('cover-image')->getClientOriginalExtension();
   $filenameToStore = $filename . "_" . time() ."." .$extension;

   $request->file('cover-image')->storeAs('public/albumvideo_covers',$filenameToStore);

   $album = new AlbumVideo();
   $album->name = $request->input('name');
   $album->description = $request->input('description');
   $album->cover_image = $filenameToStore;
   $album->save();

   return redirect('/albumsvideos')->with('success','Album created successfully!');
  }

  public function show($id)
  {
    $album = AlbumVideo::with('videos')->find($id);

    return view('albumsvideos.show')->with('album',$album);
  }
}
