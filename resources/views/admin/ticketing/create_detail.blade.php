@extends('layouts.admin')
@section('content')
<div class="card-body">
    <form class="form-horizontal" action="{{ route('ticketing.store_detail') }}" method="POST" enctype="multipart/form-data">
        @csrf

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
    
  
</div>
@endsection