@extends('layouts.admin')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header" style="background-color: #d3d3d3">
                    Input Detail
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="detaildata/prosesdetail" method="post">
                            @csrf

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="tanggal_request" class="col-form-label">Tanggal Request
                                        :</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" name="tanggal_request" class="form-control"
                                        aria-describedby="">
                                </div>
                                <div class="col-auto ">
                                    <span id="" class="form-text">

                                    </span>
                                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                    <label for="tanggal_selesai" class="col-form-label">Tanggal Selesai
                                        :</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" name="tanggal_selesai" class="form-control"
                                        aria-describedby="">
                                </div>
                                <div class="col sm-lg-5">
                                    <span id="" class="form-text">

                                    </span>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3 align-items-center">

                        <div class="col-auto">
                            <label for="nama_pic" class="col-form-label">Nama PIC :</label>
                        </div>
                        <div class="col sm-lg-3 ms-lg-3">
                            <input type="text" name="nama_pic" class="form-control">
                        </div>
                        <div class="col-auto">
                            <span id="" class="form-text">

                            </span>
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            <label for="deskripsi" class="col-form-label">Deskrispi :</label>
                        </div>
                        <div class="col sm-lg-3 ms-lg-3">


                            <textarea type="text" class="form-control" name="deskripsi" value=""></textarea>
                        </div>
                        <div class="col sm-lg-3 ms-lg-3">
                            <span id="" class="form-text">

                            </span>
                        </div>
                    
                       <div class="">
                            <div class="col card-header">
                                <button class="btn btn-secondary btn-sm" type="submit"><span
                                        class="bi bi-file-earmark-plus-fill"></i></i></span>&nbsp;{{ __('Add') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
</form>
</div>
</div>
</div>
</div>

@endsection