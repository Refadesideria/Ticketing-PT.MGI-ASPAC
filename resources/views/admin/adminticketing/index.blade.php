@extends('layouts.admin')



@section('content')
<html>
  <head>
    <meta charset="utf-8">
   
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
      body {
        font-family: 'Arial', sans-serif;
        font-size: 12px;
      }
    </style>
  </head>
  <body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('adminticketing.create')}}" class="btn btn-rounded btn-primary btn-sm"><span class="fa fa-plus"></span>&nbsp;{{__('Create Admin')}}</a>
        </div>
       {{-- <div class="col-md-8">
            <form class="" id="sort_brands" action="" method="GET">
                <div class="box-inline pad-rgt pull-right">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder=" Type name & Enter">
                    </div>
                </div>
            </form>
        </div> --}}
    </div>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #d3d3d3">Admin IT</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Admin</th>
                                    <th>Ussername</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Divisi</th>
                                    <th>Jabatan</th>
                                    <th>Role</th>
                                    <th>Jenis Request</th>
                                    <th width="10%" colspan="2">
                                       <center>{{__('Action')}}</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admin as $key => $value)
                                    <tr>
                                        <td>{{ ($key+1) + ($admin->currentPage() - 1)*$admin->perPage() }}</td>
                                        <td>{{$value->nama_admin ? $value->nama_admin :''}}</td>
                                        <td>{{$value->ussername_admin ? $value->ussername_admin :''}}</td>
                                        <td>{{$value->email ? $value->email :''}}</td>
                                        <td>{{$value->password_admin ? $value->password_admin :''}}</td>
                                        <td>{{$value->nama_unit ? $value->nama_unit :''}}</td>
                                        <td>{{$value->nama_kantor ? $value->nama_kantor :''}}</td>
                                        <td>{{$value->nama_divisi ? $value->nama_divisi :''}}</td>
                                        <td>{{$value->nama_jabatan ? $value->nama_jabatan :''}}</td>
                                        <td>{{$value->nama_kategori ? $value->nama_kategori :''}}</td>
                                        <td>{{$value->jenisrequest ? $value->name :''}}</td>
                                      
                                     
                                               
                                        <td> <a href="{{route('adminticketing.edit', encrypt($value->id))}}" class=""><span class=""></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a></td>
                                     
<td>
        <form action="{{ route('adminticketing.destroy', $value->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-light btn-sm" type="submit"><span class=""></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix">
                        <div class="pull-right">
                            {{ $admin->appends(request()->input())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        function sort_brands(el){
            $('#sort_brands').submit();
        }
    </script>
@endsection