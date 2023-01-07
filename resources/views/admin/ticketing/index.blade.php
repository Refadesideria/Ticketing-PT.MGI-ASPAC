@extends('layouts.admin')
@section('content')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Ticketing</h3>
                      <a href="{{ route('detail.index') }}" class="btn btn-sm btn-warning" style="float:right">
                        Detail data
                    </a> 
                  
                    <a href="{{ route('ticketing.create') }}" class="btn btn-sm btn-primary" style="float:right">
                        Create data
                    </a> &nbsp;
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                         
                          <th>Kode Request</th>
                          <th>Subject</th>
                          <th>Customer</th>
                          <th>Department</th>
                          <th>Status</th>
                          <th>Priority</th>
                          <th>Jenis Request</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>

                                    @php $no =1; @endphp
                                    @foreach ($ticketings as $ticketing)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                          
                                            <td>{{ $ticketing->jenisrequest->kode }}</td>
                                            <td>{{ $ticketing->nama_subject }}</td>
                                            <td>{{ $ticketing->Customer->name }}</td>
                                           
                                            <td>{{ $ticketing->Department->name }}</td>
                                            <td>
                                                @if ($ticketing->nama_stat == 'open')
                                                <span class="badge badge-pill badge-warning">Open</span>
                                                @elseif ($ticketing->nama_stat == 'on progress')
                                                <span class="badge badge-pill badge-info">On Progress</span>
                                                @elseif ($ticketing->nama_stat == 'hold')
                                                    <span class="badge badge-pill badge-secondary">Hold</span>
                                                @else ($ticketing->nama_stat == 'close')
                                                    <span class="badge badge-pill badge-danger">Close</span>
                                                
                                                @endif
                                            </td>
                                            <td>{{ $ticketing->Priority->name }}</td>
                                            <td>{{ $ticketing->Jenisrequest->name }}</td>
                                            <td>
                                                <form action="{{ route('ticketing.destroy', $ticketing->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('ticketing.edit', $ticketing->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('ticketing.show', $ticketing->id) }}"
                                                        class="btn btn-sm btn-outline-info">
                                                     Show
                                                    </a>
                                                    {{-- <a href="{{ route('detail.index', $ticketing->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                     Detail
                                                    </a>
                                                     --}}
                                                    
                                                  
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
</tfoot>
</table>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
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
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection

