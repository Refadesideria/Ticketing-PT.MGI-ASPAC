@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">MASTER DIVISI
                        <a href="{{ route('divisi.create') }}" class="btn btn-sm btn-outline-primary" style="float:right">
                            Tambah Data
                        </a>
                    </div>
                    <br>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                           
                                <thead>
                                    <th>No</th>
                                    <th>Divisi</th>
                                    <th>Aksi</th>
                                    
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($divisi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->name }}</td>
                                           
                                            <td>
                                                <form action="{{ route('divisi.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('divisi.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Edit
                                                    </a>
                                                    
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('apakah anda yakin?')"> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery 3 -->

<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
  
@endsection