<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('home', ['artists' => $artists]);
    }
    public function index2()
    {
        $artists = Artist::all();
        return view('adminArtist', ['artists' => $artists]);
    }

    public function show(string $id)
    {
        $artist = Artist::find($id);
        return view('artistDetail', ['artist' => $artist]);
    }
    public function index1()
    {
        $artists = Artist::all();
        return view('artist', ['artists' => $artists]);
    }
    public function edit($id)
    {
        $artist = Artist::find($id);
        return view('adminEdit', ['artist' => $artist]);
    }
    public function destroy($id)
    {
        $artist = Artist::find($id);
        $artist->delete();
        return redirect('/admin/artist')->with('success', 'artist deleted successfully.');
    }
    public function update(Request $request, $id)
    {
        $artist = Artist::find($id);
        $artist->FirstName = $request->FirstName;
        $artist->LastName = $request->LastName;
        $artist->BirthDate = $request->BirthDate;
        $artist->Img = $request->Img;
        $artist->Price = $request->Price;
        $artist->Description = $request->Description;
        $artist->save();
        return redirect('/admin/artist')->with('success', 'artist updated successfully.');
    }

   public function store(Request $request)
    {       $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'BirthDate' => 'required',
            'Img' => 'required',
            'Price' => 'required',
            'Description' => 'required',
        ], [
            'required' => 'Vui lòng điền đầy đủ thông tin.',
        ]);
       $artist = new Artist();
        $artist->FirstName = $request->FirstName;
        $artist->LastName = $request->LastName;
        $artist->BirthDate = $request->BirthDate;
        $artist->Img = $request->Img;
        $artist->Price = $request->Price;
        $artist->Description = $request->Description;
        $artist->save();
       return redirect('/admin/artist')->with('success', 'artist created successfully.');
   }
   public function create()
    {
        return view('adminAdd');
    }
 
}
