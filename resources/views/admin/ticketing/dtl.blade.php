@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #d3d3d3">Create Ticketing</div>
                    <div class="card-body">
                        <form action="" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="tanggal_request" class="col-form-label">Tanggal Request :</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" name="tanggal_request" class="form-control" aria-describedby="">
                                </div>
                                <div class="col-auto ">
                                    <span id="" class="form-text">

                                    </span>
                                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                    <label for="tanggal_selesai" class="col-form-label">Tanggal Selesai :</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" name="tanggal_selesai" class="form-control" aria-describedby="">
                                </div>
                                <div class="col sm-lg-5">
                                    <span id="" class="form-text">

                                    </span>
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
                            <br>

                            <br>
                            <div class="">
                                <div class="col card-header">
                                    <button class="btn btn-secondary btn-sm" type="submit"><span
                                            class="bi bi-file-earmark-plus-fill"></i></i></span>&nbsp;{{ __('Add') }}</button>
                                </div>
                            </div>
                        </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>Tanggal Request</th>

                                </thead>
                                <tbody>

                                    @php $no =1; @endphp
                                    @foreach ($ticketings as $ticketing)
                                        <tr>
                                           
                                           

                                            </form>
                                            </td>
                                        </tr>

                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @section('script')
            <script>
                $(document).ready(function() {
                    $('#id_kantor').select2();
                });
            </script>
        @endsection
