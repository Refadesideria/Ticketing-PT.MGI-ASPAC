@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #d3d3d3">UPDATE DIVISI</div>

                @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif 
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('divisi.update', $divisi->id) }}" method="POST" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        @method('PUT')
                        <div class="panel-body">
                            <div class="form-group">
                                <strong>Nama divisi</strong>
                                <input type="text" name="name" value="{{ $divisi->name }}" class="form-control"
                                    placeholder="Nama divisi">
                                @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col card-header">
                                <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Save')}}</button>
                                <a class="btn btn-primary btn-sm float-right" href="{{ route('divisi.index') }}" enctype="multipart/form-data">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
