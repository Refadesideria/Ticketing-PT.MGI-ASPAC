@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                           
                            <br/>
 
                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
              <!-- form validasi -->
                            <form action="/proses" method="post">
                                {{ csrf_field() }}
 
                                <div class="form-group">
                                    <label for="tanggal_request">Tanggal request</label>
                                    <input class="form-control" type="date" name="tanggal_request" value="{{ old('tanggal_request') }}">
                                </div>
                                 <div class="form-group">
                                        <label for="tanggal_selesai">Tanggal Selesai</label>
                                        <input class="form-control" type="date" name="tanggal_selesai" value="{{ old('tanggal_selesai') }}">
                                    </div>
                                <div class="form-group">
                                    <label for="nama_pic">Nama PIC</label>
                                    <input class="form-control" type="text" name="nama_pic" value="{{ old('nama_pic') }}">
                                </div>
                                  <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input class="form-control" type="text" name="deskripsi" value="{{ old('nama_pic') }}">
                                    </div>
                                
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
                                </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
@endsection