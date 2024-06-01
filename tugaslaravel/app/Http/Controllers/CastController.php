<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = cast::all();
        return view('cast.index', ["cast" => $cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Cast.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);
        $Cast = new Cast ;
 
        $Cast->nama = $request->nama;
        $Cast->umur = $request->umur;
        $Cast->bio = $request->bio;
 
        $Cast->save();

        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function Show(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.Show', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.Edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);
         
        $Cast = cast::find($id);
        
        $Cast->nama= $request['nama'];
        $Cast->umur= $request['umur'];
        $Cast->bio= $request['bio'];
        
        $Cast->save();
        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cast = cast::find($id);
        $cast->delete();
        return redirect('/cast');
    }
}
