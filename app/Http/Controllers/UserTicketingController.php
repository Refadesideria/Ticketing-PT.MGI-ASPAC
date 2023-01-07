<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\UserTicketing;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Validator;

class UserTicketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sort_search = null;
        $user = UserTicketing::leftJoin('divisis','divisis.id','=','user_ticketings.id_divisi') 
        ->leftJoin('jabatans','jabatans.id','=','user_ticketings.id_jabatan')
        ->leftJoin('kategoris','kategoris.id','=','user_ticketings.id_kategori')
        ->leftJoin('jenisrequests','jenisrequests.id','=','user_ticketings.id_jenisrequest')
        ->select('user_ticketings.*','divisis.name as nama_divisi',
                 'jabatans.name as nama_jabatan','kategoris.name as nama_kategori','jenisrequests.name as name')
        ->orderby('id','DESC');
        if (request()->has('search')){
            $user = $user->where('name', 'like', '%'.$sort_search.'%');
        }
        $user = $user->paginate(10);
        return view('admin.userticketing.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.userticketing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_user' => 'required', 'string', 'max:255',
            'ussername_user' => 'required', 'string', 'max:255',
            'email'=>'required',
            'password' => 'required',
            'id_divisi'=>'required',            
            'id_jabatan'=>'required',
            'id_kategori'=>'required',
            'id_jenisrequest'=>'required',
        ];
        $messages = [
            'nama_user.required' => 'Nama harus di isi!',
            'ussername_user.required' => 'Ussername harus di isi!',
            'password.required' => 'password harus di isi!',
            'email.required' => 'Email harus di isi!',
            'id_unit.required' => ' Unit harus di isi!',
            'id_divisi.required' => 'Divisi harus di isi!',
            'id_jabatan.required' => 'Jabatan harus di isi!',
            'id_kategori.required' => 'Kategori harus di isi!',
            'id_jenisrequest.required' => 'jenis request harus di isi!',
        ];
        //     $validation = Validator::make($request->all(), $rules, $messages);
        // if ($validation->fails()) {
        //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        //     return back()->withErrors($validation)->withInput();
        // }

        $user = new UserTicketing();
        $user->nama_user = $request->nama_user;
        $user->ussername_user = $request->ussername_user;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->id_divisi = $request->id_divisi;
        $user->id_jabatan = $request->id_jabatan;
        $user->id_kategori = $request->id_kategori;
        $user->id_jenisrequest = $request->id_jenisrequest;
        

        if($user->save()){
            Alert::success('user berhasil di tambah');
            return redirect()->route('userticketing.index');
        }
        else{
            Alert::error('Something went wrong');
            return back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserTicketing  $userTicketing
     * @return \Illuminate\Http\Response
     */
    public function show(UserTicketing $userTicketing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserTicketing  $userTicketing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserTicketing::findOrFail(decrypt($id));
        return view('admin.userticketing.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserTicketing  $userTicketing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama_user' => 'required', 'string', 'max:255',
            'ussername_user' => 'required', 'string', 'max:255',
            'password' => 'required',
            'nik'=>'required',
            'email'=>'required',
            'id_unit'=>'required',
            'id_divisi'=>'required',            
            'id_jabatan'=>'required',
            'id_kategori'=>'required',
            'id_jenisrequest'=>'required',
        ];
        $messages = [
            'nama_user.required' => 'Nama harus di isi!',
            'ussername_user.required' => 'Ussername harus di isi!',
            'email.required' => 'Email harus di isi!',
            'password.required' => 'password harus di isi!',
            'id_divisi.required' => 'Divisi harus di isi!',
            'id_jabatan.required' => 'Jabatan harus di isi!',
            'id_kategori.required' => 'Kategori harus di isi!',
            'id_jenisrequest.required' => 'jenis request harus di isi!',
        ];
        //     $validation = Validator::make($request->all(), $rules, $messages);
        // if ($validation->fails()) {
        //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        //     return back()->withErrors($validation)->withInput();
        // }

        $user = UserTicketing::findOrFail($id);
        $user->nama_user = $request->nama_user;
        $user->ussername_user = $request->ussername_user;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->id_divisi = $request->id_divisi;
        $user->id_jabatan = $request->id_jabatan;
        $user->id_kategori = $request->id_kategori;
        $user->id_jenisrequest = $request->id_jenisrequest;
        
        

        if($user->save()){
            Alert::success('user berhasil di update');
            return redirect()->route('userticketing.index');
        }
        else{
            Alert::error('Something went wrong');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserTicketing  $userTicketing
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count =UserTicketing::where('id',$id)->get()->count();

        // if($count > 0){
        //     Alert::error('Data tidak boleh dihapus');
        //     return back();
        // }else{
            $user = UserTicketing::findOrFail($id);
            $user->delete();
            Alert::success('user berhasil dihapus');
            return redirect()->route('userticketing.index');
    }
}
