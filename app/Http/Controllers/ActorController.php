<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        return view('home', ['actors' => $actors]);
    }
    public function index2()
    {
        $actors = Actor::all();
        return view('adminactor', ['actors' => $actors]);
    }

    public function show(string $id)
    {
        $actor = Actor::find($id);
        return view('actorDetail', ['actor' => $actor]);
    }
    public function index1()
    {
        $actors = Actor::all();
        return view('actor', ['actors' => $actors]);
    }
    public function edit($id)
    {
        $actor = Actor::find($id);
        return view('adminEdit', ['actor' => $actor]);
    }
    public function destroy($id)
    {
        $actor = Actor::find($id);
        $actor->delete();
        return redirect('/admin/actor')->with('success', 'actor deleted successfully.');
    }
    public function update(Request $request, $id)
    {
        $actor = Actor::find($id);
        $actor->FirstName = $request->FirstName;
        $actor->LastName = $request->LastName;
        $actor->BirthDate = $request->BirthDate;
        $actor->Img = $request->Img;
        $actor->Price = $request->Price;
        $actor->Description = $request->Description;
        $actor->save();
        return redirect('/admin/actor')->with('success', 'actor updated successfully.');
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
       $actor = new Actor();
        $actor->FirstName = $request->FirstName;
        $actor->LastName = $request->LastName;
        $actor->BirthDate = $request->BirthDate;
        $actor->Img = $request->Img;
        $actor->Price = $request->Price;
        $actor->Description = $request->Description;
        $actor->save();
       return redirect('/admin/actor')->with('success', 'actor created successfully.');
   }
   public function create()
    {
        return view('adminAdd');
    }
 
}
