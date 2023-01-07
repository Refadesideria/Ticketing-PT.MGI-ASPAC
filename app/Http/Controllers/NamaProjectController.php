<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaProject;
use App\Models\AdminTicketing;
use Alert;

class NamaProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $sort_search = null;
        $cari = $request->query('cari');
        if(!empty($cari)){
           $namaproject = Namaproject::sortable()
           ->where('name','like','%'.$cari. '%')
           ->orwhere('name','like','%'.$cari.'%')
           ->paginate(5)->onEachSide(2)->withquerystring();;


        }else{
            $namaproject = Namaproject::sortable()->paginate(5)->onEachSide(2)->withquerystring();
        }
        // $namaproject = NamaProject::orderby('id','DESC');
        // if ($request->has('search')){
        //     $namaproject = $namaproject->where('name', 'like', '%'.$sort_search.'%');
        // }
        // $namaproject = $namaproject->paginate(10);
        return view('admin.namaproject.index', compact('namaproject'),compact('cari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.namaproject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $nama_project = $request->namaproject;

        $count = NamaProject::where('name',$nama_project)->get()->count();

        if($count > 0){
            Alert::error('Data sudah ada.');
            return back();
        }

        $namaproject = new NamaProject;
        $namaproject->name =$nama_project;

        if($namaproject->save()){
            Alert::success('Nama Project succesfuly aded');
            return redirect()->route('namaproject.index');
        }
        else{
            Alert::error('Something went wrong');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $namaproject = NamaProject::findOrFail(decrypt($id));
        return view('admin.namaproject.edit', compact('namaproject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $nama_project = $request->namaproject;

        $count = NamaProject::where('name',$nama_project)->where('id','<>',$id)->get()->count();

        if($count > 0){
            Alert::error('Data sudah ada.');
            return back();
        }

        $namaproject = NamaProject::findOrFail($id);
        $namaproject->name =$nama_project;

        if($namaproject->save()){
            Alert::success('Nama Project succesfully update');
            return redirect()->route('namaproject.index');
        }
        else{
            Alert::error('Something went wrong');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = NamaProject::where('id_nama_project',$id)->get()->count();

        // if($count > 0){
        //     Alert::error('Data tidak boleh dihapus');
        //     return back();
        // }else{
            $namaproject = NamaProject::findOrFail($id);
            $namaproject->delete();
            Alert::success('Nama Project succesfully delete');
            return redirect()->route('namaproject.index');
        
    }
}
