@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">DETAIL DATA
                        <a href="{{ route('detail.create') }}" class="btn btn-sm btn-primary" style="float:right">
                            Tambah Data
                        </a>
                        <a href="{{ route('ticketing.index') }}" class="btn btn-sm btn-warning" style="float:right">
                           Ticketing
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
                                    <th>Kode Request</th>
                                    <th>Subject</th>
                                   
                                    <th>Jenis Request</th>
                                    <th>Customer</th>
                                    <th>Department</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Tanggal Request</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Nama PIC</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                    
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($detail as $ticketing)
                                        <tr>
                                            
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $ticketing->Ticketing->jenisrequest->kode }}</td>
                                            <td>{{ $ticketing->Ticketing->nama_subject }}</td>
                                           
                                            <td>{{ $ticketing->Ticketing->jenisrequest->name }}</td>
                                            <td>{{ $ticketing->Ticketing->Customer->name }}</td>
                                            <td>{{ $ticketing->Ticketing->Department->name }}</td>
                                            <td>
                                                @if ($ticketing->Ticketing->nama_stat == 'open')
                                                <span class="badge badge-pill badge-warning">Open</span>
                                                @elseif ($ticketing->Ticketing->nama_stat == 'on progress')
                                                <span class="badge badge-pill badge-info">On Progress</span>
                                                @elseif ($ticketing->Ticketing->nama_stat == 'hold')
                                                    <span class="badge badge-pill badge-secondary">Hold</span>
                                                @else ($ticketing->Ticketing->nama_stat == 'close')
                                                    <span class="badge badge-pill badge-danger">Close</span>
                                                
                                                @endif
                                            </td>
                                            <td>{{ $ticketing->Ticketing->Priority->name }}</td>
                                            <td>{{ $ticketing->tanggal_request }}</td>
                                            <td>{{ $ticketing->tanggal_selesai }}</td>
                                            <td>{{ $ticketing->nama_pic }}</td>
                                            <td>{{ $ticketing->deskripsi }}</td>
                                           
                                            <td>
                                                <form action="{{ route('detail.destroy', $ticketing->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                  
                                                    <a href="{{ route('detail.show', $ticketing->id) }}"
                                                        class="btn btn-sm btn-outline-warning" style="color: #020202;">
                                                       Show
                                                    </a>
                                                    
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" style="color: #020202;"
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