@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('namaproject.create')}}" class="btn btn-rounded btn-primary btn-sm"><span class="fa fa-plus"></span>&nbsp;Add namaproject</a>
        </div>
       
        
      
 </div> 
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #d3d3d3">Master namaproject</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form method="GET">
                            <div class="form-group-row">
                           
                               <label  class="col-sm-1 col-form-label ">
                               Search 
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" name="cari" id="cari" class="form-control" value="{{ $cari }}">
                                </div>
                            </div>
       </form>
       
       <br> 

                        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>@sortablelink('name','Nama project')</th>
                                    <th width="10%" colspan="2"><center>Action</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                  $nomor = 1 + (($namaproject->currentPage()-1) * $namaproject->perPage());
                                @endphp
                                @foreach($namaproject as $key => $value)
                                    <tr>
                                        <td>{{ $nomor++ }}</td>
                                        <td>{{$value->name ? $value->name :''}}</td>
                                        <td> <a href="{{route('namaproject.edit', encrypt($value->id))}}" class=""><span class=""></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a></td>
                                                
        <td>
        <form action="{{ route('namaproject.destroy', $value->id)}}" method="post">
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
                       <div class="pull-left">
                        
                <p class="medium text-muted">
                    {!! __('Showing') !!}
                    <span class="fw-semibold">{{ $namaproject->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="fw-semibold">{{ $namaproject->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="fw-semibold">{{ $namaproject->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>
            <div class="d-flex justify-content-end">
                {!! $namaproject->appends(Request::except('key'))->render() !!}

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
