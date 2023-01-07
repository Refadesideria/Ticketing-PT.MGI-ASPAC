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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"style="background-color: #d3d3d3">Update Admin</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('adminticketing.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        @method('patch')
                            <div class="form-group">
                                <label for="">Nama Admin</label>
                                <input type="text" name="nama_admin"
                                    class="form-control @error('nama_admin') is-invalid @enderror" id=""
                                    value="{{ $admin->nama_admin }}">
                                @error('nama_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="">Ussername</label>
                                <input type="text" name="ussername_admin"
                                    class="form-control @error('ussername_admin') is-invalid @enderror" id=""
                                    value="{{ $admin->ussername_admin }}">
                                @error('ussername_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="">Email</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id=""
                                    value="{{ $admin->email }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="">Password</label>
                                <input type="text" name="password_admin"
                                    class="form-control @error('password_admin') is-invalid @enderror" id=""
                                    value="{{ $admin->password_admin }}">
                                @error('password_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="admin">{{__('Unit')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_unit"  class="form-control" name="id_unit" required >
                                        @php
                                            $unit = App\Models\unit::get();
                                        @endphp
                                        @foreach ($unit as $key => $value)
                                            <option value="{{$value->id}}" @if ($value->id == $admin->id_kantor) selected @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-2 control-label" for="admin">{{__('Kantor')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_kantor"  class="form-control" name="id_kantor" required >
                                        @php
                                            $kantor = App\Models\Kantor::get();
                                        @endphp
                                        @foreach ($kantor as $key => $value)
                                            <option value="{{$value->id}}" @if ($value->id == $admin->id_kantor) selected @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                <label class="col-sm-2 control-label" for="admin">{{__('Divisi')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_divisi"  class="form-control" name="id_divisi" required >
                                        @php
                                            $divisi = App\Models\Divisi::get();
                                        @endphp
                                        @foreach ($divisi as $key => $value)
                                            <option value="{{$value->id}}" @if ($value->id == $admin->id_kantor) selected @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="admin">{{__('Jabatan')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_jabatan"  class="form-control" name="id_jabatan" required >
                                        @php
                                            $jabatan = App\Models\Jabatan::get();
                                        @endphp
                                        @foreach ($jabatan as $key => $value)
                                            <option value="{{$value->id}}" @if ($value->id == $admin->id_kantor) selected @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                           
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="admin">{{__('Jon Role')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_kategori"  class="form-control" name="id_kategori" required >
                                        @php
                                            $kategori = App\Models\Kategori::get();
                                        @endphp
                                        @foreach ($kategori as $key => $value)
                                            <option value="{{$value->id}}" @if ($value->id == $admin->id_kantor) selected @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <br>
                           
                            <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>

    
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#id_kantor').select2();
    });
</script>
@endsection
