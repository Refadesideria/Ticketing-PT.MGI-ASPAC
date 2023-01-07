@extends('layouts.admin')
@section('content')
<h3><b>Kode Request:
    <th scope="col">{{ $ticketings->Jenisrequest->kode }}</h3></b></th>
<table class="table table-success table-striped" width="100%">
<thead> 
     <tr>
            <th scope="col">Kode Request</th>
        <th scope="col">{{ $ticketings->Jenisrequest->kode }}</th>
    </tr> 
     <th scope="col">Customer</th>
    <th scope="col">{{ $ticketings->Customer->name }}</th>
    </tr>
    <th scope="col">Nama Subject</th>
    <th scope="col">{{ $ticketings->nama_subject }}</th>
    </tr>
    <th scope="col">Department</th>
    <th scope="col">{{ $ticketings->Department->name }}</th>
    </tr>
    <th scope="col">Status</th> 

     <th scope="col">
        @if ($ticketings->nama_stat == 'open')
            <span class="badge badge-pill badge-warning">Open</span>
        @elseif ($ticketings->nama_stat == 'on progress')
            <span class="badge badge-pill badge-info">On progress</span>
        @elseif ($ticketings->nama_stat == 'hold')
            <span class="badge badge-pill badge-secondary">Hold</span>
        @else
            ($ticketings->nama_stat == 'close')
            <span class="badge badge-pill badge-danger">Close</span>
        @endif
    </th> 
     </tr>
    <th scope="col">Priority</th>
    <th scope="col">{{ $ticketings->Priority->name }}</th>
    </tr>

    <tr>
    <th scope="col">Jenis Request</th>
    <th scope="col">{{ $ticketings->Jenisrequest->name }}</th>
</tr>
<tr>
   
    <th scope="col">Tanggal Request</th>
    <th scope="col">{{ $ticketings->tanggal_request }}</th>
  </tr>
  <th scope="col">Tanggal Selesai</th>
  <th scope="col">{{ $ticketings->tanggal_selesai }}</th>
</tr>
<th scope="col">Nama PIC</th>
<th scope="col">{{ $ticketings->nama_pic }}</th>
</tr>
<th scope="col">Deskripsi</th>
<th scope="col">{{ $ticketings->deskripsi }}</th>
</tr>
</tbody>
</table>
</div>
@endsection