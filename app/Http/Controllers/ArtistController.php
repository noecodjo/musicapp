<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Album;

class ArtistController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    $artists = Artist::all();
    return view('artist.index')->with('artists', $artists);
  }

  /**
   * Returns the artists with associated pictures in JSON format.
   *
   * @return mixed
   */
  public function apiIndex() {
    $artists = Artist::with('album', 'picture')->get();
    $json = $artists->toJson();
    return $json;
  }

  /**
   * Returns the single artist identified by slug
   * with the associated albums and album pictures.
   *
   * @return mixed
   */
  public function apiShow(Artist $artist) {
    $artist = Artist::with('picture', 'album', 'album.picture')->where('slug', '=', $artist->slug)->first();
    $json = $artist->toJson();
    return $json;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    return view('artist.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param $request
   * @param $artist
   *
   * @return Response
   */
  public function store(Request $request, Artist $artist) {
    // Create the artist record from input fields.
    $artist->create($request->all());
    return redirect()->route('artists_path');
  }

  /**
   * Display the specified resource.
   *
   * @param $artist
   * @return Response
   */
  public function show(Artist $artist) {
    $albums = Album::where('artist_id', '=', $artist->id)->get();
    return view('artist.show')
      ->with('artist', $artist)
      ->with('albums', $albums);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return Response
   */
  public function edit($id) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int $id
   * @return Response
   */
  public function update($id) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return Response
   */
  public function destroy($id) {
    //
  }

}
