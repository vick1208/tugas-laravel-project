<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = DB::table('casts')->get();
        return view('pages.cast.index', ['casts' => $casts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','max:70'],
            'age' => ['numeric','required'],
            'bio' => ['nullable']
        ]);
        DB::table('casts')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'bio' => $request->input('bio')
        ]);

        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = DB::table('casts')->find($id);
        return view('pages.cast.detail', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = DB::table('casts')->find($id);
        return view('pages.cast.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:70'],
            'age' => ['required', 'numeric'],
            'bio' => ['nullable']
        ]);


        DB::table('casts')->where('id','=',$id)->update([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'bio' => $request->input('bio')
        ]);

        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('casts')->where('id','=', $id)->delete();
        return redirect('/cast');
    }
}
