@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #d3d3d3">Add jenisrequest</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('jenisrequest.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body">
                        <div class="form-group">
                             <label for="">Kode</label>
                                <input type="text" name="kode"
                                    class="form-control @error('kode') is-invalid @enderror" id="">
                                @error('kode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                             <label for="">Jenis Request</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            
                            <br>
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
    <script type="text/javascript">

    </script>
@endsection
