

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Ubah status</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('status.update', $status->id) }}" method="POST" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="status">{{__('status')}}</label>
                                <div class="col-sm-10">
                                    <input type="text" name="status" value="{{$status->nama_status}}" id="kantor" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase()" required>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Save')}}</button>
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
