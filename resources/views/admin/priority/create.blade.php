@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #d3d3d3">TAMBAH PRIORITY</div>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('priority.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="panel-body">
                                <div class="form-group">
                                    <strong>Nama priority</strong>
                                    <input type="text" name="name" class="form-control">
                                    @error('name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col card-header">
                                    <button class="btn btn-primary btn-sm" type="submit"><span
                                            class="fa fa-save "></span>&nbsp;{{ __('Simpan') }}</button>

                                    <a class="btn btn-primary btn-sm float-right" href="{{ route('priority.index') }}"
                                        enctype="multipart/form-data">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
