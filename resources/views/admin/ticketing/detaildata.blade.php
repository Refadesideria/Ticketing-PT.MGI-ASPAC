@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                
                    
                    <div class="card-body">
                        <form action="{{ route('ticketing.store_detail') }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                                <label for="">Tanggal Request</label>
                                <input type="date" name="tanggal_request"
                                    class="form-control @error('tanggal_request') is-invalid @enderror" id="">
                                @error('tanggal_request')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          
                            <div class="form-group">
                                <label for="">Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai"
                                    class="form-control @error('tanggal_selesai') is-invalid @enderror" id="">
                                @error('tanggal_selesai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama PIC</label>
                                <input type="text" name="nama_pic"
                                    class="form-control @error('nama_pic') is-invalid @enderror" id="">
                                @error('nama_pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="text" name="deskripsi"
                                    class="form-control @error('deskripsi') is-invalid @enderror" id="">
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Simpan')}}</button>
                                </button>
                            </div>
                        </form>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
