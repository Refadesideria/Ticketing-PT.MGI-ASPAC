@extends('layouts.admin')
@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    
    <body>
        {{-- <form action="{{ route('detail.store') }}" method="post" enctype="multipart/form-data"> --}}
            <div class="container">
                <h3><b>Kode Request:
                        <th scope="col">{{ $detail->Ticketing->jenisrequest->kode }}</h3></b></th>
                          <table class="table table-success table-striped" width="100%">
                            <thead>
                         <tr>
                    
                        <th scope="col">Customer</th>
                        <th scope="col">{{ $detail->Ticketing->Customer->name }}</th>
                        </tr>
                        <th scope="col">Nama Subject</th>
                        <th scope="col">{{ $detail->Ticketing->nama_subject }}</th>
                        </tr>
                        <th scope="col">Department</th>
                        <th scope="col">{{ $detail->Ticketing->Department->name }}</th>
                        </tr>
                        <th scope="col">Status</th>

                        <th scope="col">
                            @if ($detail->Ticketing->nama_stat == 'open')
                                <span class="badge badge-pill badge-warning">Open</span>
                            @elseif ($detail->Ticketing->nama_stat == 'on progress')
                                <span class="badge badge-pill badge-info">On progress</span>
                            @elseif ($detail->Ticketing->nama_stat == 'hold')
                                <span class="badge badge-pill badge-secondary">Hold</span>
                            @else
                                ($detail->nama_stat == 'close')
                                <span class="badge badge-pill badge-danger">Close</span>
                            @endif
                        </th>
                        </tr>
                        <th scope="col">Priority</th>
                        <th scope="col">{{ $detail->Ticketing->Priority->name }}</th>
                        </tr>
                        <th scope="col">Jenis Request</th>
                        <th scope="col">{{ $detail->Ticketing->jenisrequest->name }}</th>
                        </tr>
                        <th scope="col">Tanggal Request</th>
                        <th scope="col">{{ $detail->tanggal_request }}</th>
                      </tr>
                      <th scope="col">Tanggal Selesai</th>
                      <th scope="col">{{ $detail->tanggal_selesai }}</th>
                    </tr>
                    <th scope="col">Nama PIC</th>
                    <th scope="col">{{ $detail->nama_pic }}</th>
                  </tr>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">{{ $detail->deskripsi }}</th>
                </tr>
                       </thead>

                    <tbody>
                 </tr>
            </table>
         </div>
       
      
@endsection
