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
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah unit</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('unit.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body">
                           
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="unit">{{__('unit')}}</label>
                                <div class="col-sm-10">
                                    <input type="text" name="unit" id="unit" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase()" required>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Simpan')}}</button>
                        </div>
                    </form>
                </div>
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
