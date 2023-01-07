@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Ubah menu</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                            <label class="col-sm-2 control-label" for="menu">{{__('Nama Group Menu')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_group_menu"  class="form-control" name="id_group_menu" required >
                                        @php
                                            $groupmenu = App\Models\GroupMenu::get();
                                        @endphp
                                        @foreach ($groupmenu as $key => $value)
                                            <option value="{{$value->id}}" @if ($value->id == $menu->id_kantor) selected @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="menu">{{__('menu')}}</label>
                                <div class="col-sm-10">
                                    <input type="text" name="menu" value="{{$menu->route}}" id="menu" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase()" required>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-2 control-label" for="route">{{__('route')}}</label>
                                <div class="col-sm-10">
                                    <input type="text" name="route" value="{{$menu->route}}" id="kategori" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase()" required>
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
