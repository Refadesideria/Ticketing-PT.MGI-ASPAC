@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data</title>
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        
                        <h3 class="my-4">Data Yang Di Input : </h3>
 
                        <table class="table table-bordered table-striped">
                          
                            <tr>
                                <td>Tanggal request</td>
                                <td>{{ $data->tanggal_request }}</td>
                            </tr>
<tr>
                                  <td>Tanggal Selesai</td>
                                <td>{{ $data->tanggal_selesai }}</td>
                            </tr>
                            <tr>
                                <td>Nama PIC</td>
                                <td>{{ $data->nama_pic }}</td>
                            </tr>
<tr>
                                <td>Deskripsi</td>
                                    <td>{{ $data->deskripsi }}</td>
                                </tr>

                        </table>
 
                        <a href="/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>
@endsection