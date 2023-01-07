@extends('layouts.admin')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('ticketing.update_pengaturan', $ticketing->id) }}" method="GET" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        <div class="panel-body">
                        <div class="form-group">
                        <label for="">Kode Request</label>
                        @php
                         $jenisrequest = App\Models\Jenisrequest::get();
                         @endphp
                            @foreach ($jenisrequest as $key =>$value)
                            <input type ="text" name="kode" value="{{$value->kode}}" class="form-control" readonly>
                             @endforeach
                        </div>
                        <div class="form-group">
                        <label for="">Jenis Request</label>
                        @php
                         $jenisrequest = App\Models\Jenisrequest::get();
                         @endphp
                            @foreach ($jenisrequest as $key =>$value)
                            <input type ="text" name="name" value="{{$value->name}}" class="form-control" readonly>
                             @endforeach
                         </div>
                        <div class="form-group">
                             <label for="">Tanggal Request</label>
                                <input type="date" name="tanggal"
                                    class="form-control @error('tanggal') is-invalid @enderror" id="">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Selesai</label>
                            <input type="date" name="tanggal"
                                 class="form-control @error('tanggal') is-invalid @enderror" id="">
                             @error('tanggal')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                             <label for="">Deskripsi</label>
                             <textarea type="text" class="form-control" name="deskripsi" value="{{ $value->dekripsi }}"></textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                             <label for="">Nama PIC</label>
                             <input type="text" name="pic"
                                 class="form-control @error('pic') is-invalid @enderror" id="">
                                @error('pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </form>
                       <td>
                        
                        <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Simpan')}}</button> </td>
</form>
                 </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection