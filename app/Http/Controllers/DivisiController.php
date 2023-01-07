<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use App\Models\UserTicketing;
use Alert;

class DivisiController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $divisi = Divisi::all();
        return view('admin.divisi.index', compact('divisi'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.divisi.create'); return view('divisi.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        Divisi::create($request->post());

        return redirect()->route('divisi.index')->with('success','Data Berhasil di Tambah');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Divisi  $divisi
    * @return \Illuminate\Http\Response
    */
    public function show(Divisi $divisi)
    {
        return view('admin.divisi.show',compact('divisi'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Divisi  $divisi
    * @return \Illuminate\Http\Response
    */
    public function edit(Divisi $divisi)
    {
        return view('admin.divisi.edit',compact('divisi'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Divisi  $divisi
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Divisi $divisi)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        $divisi->fill($request->post())->save();

        return redirect()->route('divisi.index')->with('success','Data Berhasil di Update');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Divisi  $divisi
    * @return \Illuminate\Http\Response
    */
    public function destroy(Divisi $divisi)
    {
        $divisi->delete();
        return redirect()->route('divisi.index')->with('success','Data Berhasil di Delete');
    }
}
