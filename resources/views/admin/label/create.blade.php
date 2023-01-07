@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('label.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="label">{{__('divisi')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_divisi"  class="form-control" name="id_divisi" >
                                        @php
                                            $divisi = App\Models\Divisi::get();
                                        @endphp
                                        @foreach ($divisi as $key => $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
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
        $('#id_divisi').select2();
    });
</script>
@endsection
