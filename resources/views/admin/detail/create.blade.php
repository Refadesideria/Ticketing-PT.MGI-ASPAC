@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #d3d3d3">TAMBAH DETAIL</div>
                
                @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif          
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('detail.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="">Kode Request</label>
                                <select name="id_ticketing"
                                    class="form-control @error('background') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($ticketings as $data)
                                        <option value="{{ $data->id }}">{{ $data->jenisrequest->kode }}</option>
                                    @endforeach
                                </select>
                                @error('id_ticketing')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            
                            <div class="form-group">
                                <strong>Tanggal Request</strong>
                                <input type="date" name="tanggal_request" class="form-control">
                                @error('tanggal_request')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Tanggal Selesai</strong>
                                <input type="date" name="tanggal_selesai" class="form-control">
                                @error('tanggal_selesai')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Nama PIC</strong>
                                <input type="text" name="nama_pic" class="form-control">
                                @error('nama_pic')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Deskripsi</strong>
                                <input type="text" name="deskripsi" class="form-control">
                                @error('deskripsi')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col card-header">
                                <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Simpan')}}</button>
                                
                                <a class="btn btn-primary btn-sm float-right" href="{{ route('divisi.index') }}" enctype="multipart/form-data">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
