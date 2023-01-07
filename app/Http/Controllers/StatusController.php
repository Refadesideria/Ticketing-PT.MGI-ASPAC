<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Status;
use App\Models\UserTicketing;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sort_search = null;
        $status = Status::orderby('id','DESC');
        if (request()->has('search')){
            $status = $status->where('name', 'like', '%'.$sort_search.'%');
        }
        $status = $status->paginate(10);
        return view('admin.status.index', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_status = $request->status;

        $count = status::where('name',$nama_status)->get()->count();

        if($count > 0){
            Alert::error('Data sudah ada.');
            return back();
        }

        $status = new status;
        $status->name = $nama_status;

        if($status->save()){
            Alert::success('status berhasil ditambah');
            return redirect()->route('status.index');
        }
        else{
            Alert::error('Something went wrong');
            return back();
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $status = Status::findOrFail(decrypt($id));
        return view('admin.status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama_status = $request->status;

        $count = status::where('name',$nama_status)->where('id','<>',$id)->get()->count();

        if($count > 0){
            Alert::error('Data sudah ada.');
            return back();
        }

        $status = Status::findOrFail($id);
        $status->name = $nama_status;

        if($status->save()){
            Alert::success('status berhasil di edit');
            return redirect()->route('status.index');
        }
        else{
            Alert::error('Something went wrong');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        // $count = User::where('id',$id)->get()->count();

        // if($count > 0){
        //     Alert::error('Data tidak boleh dihapus');
        //     return back();
        // }else{
            // $status = Status::findOrFail($id);
            $status->delete();
            Alert::success('status berhasil di hapus');
            return redirect()->route('status.index');
        
    }
}
