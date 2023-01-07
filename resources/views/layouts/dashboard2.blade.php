<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.svg')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('backend/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.svg')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('backend/assets/vendors/simple-datatables/style.css')}}">

    <link rel="stylesheet" href="{{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.svg" type="image/x-icon')}}">

</head>

<body>
    <style>
        body {
          font-family: 'Arial', sans-serif;
          font-size: 14px;
        }
      </style>
    <div id="app">
        <div id="sidebar" class="active">
        <!-- Sidebar -->
    @include('layouts.includes.sidebar')
    <!-- /.sidebar -->
        </div>
        <div id="main">
          <!-- Main content -->
    <section class="content">
        @yield('content')
      </section>
      <!-- /.content -->
      <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class=""></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Open</h6>
                                        @php
                                        $total_open =App\Models\Ticketing::where('nama_stat','open')->get()->count();
                                        @endphp
                                       <div class="huge"><h5>{{$total_open}}</h5></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class=""></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">On Progress</h6>
                                        @php
                                        $total_onprogress =App\Models\Ticketing::where('nama_stat','on progress')->get()->count();
                                         @endphp
                                        <div class="huge"><h5>{{$total_onprogress}}</h5></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Hold</h6>
                                        @php
                                        $total_hold =App\Models\Ticketing::where('nama_stat','hold')->get()->count();
                                       @endphp
                                      <div class="huge"><h5>{{$total_hold}}</h5></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Close</h6>
                                        @php
                                        $total_close =App\Models\Ticketing::where('nama_stat','close')->get()->count();
                                       @endphp
                                      <div class="huge"><h5>{{$total_close}}</h5></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
               
            {{-- <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{asset('backend/assets/images/faces/1.jpg')}}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">John Duck</h5>
                                <h6 class="text-muted mb-0">@johnducky</h6>
                            </div>
                        </div>
                    </div>
                </div>
               --}}


       
    </div>
    <script src="{{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('backend/assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('backend/assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('backend/assets/js/main.js')}}"></script>

    <script src="{{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('backend/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{asset('backend/assets/js/main.js')}}"></script>
    @include('sweetalert::alert')
</body>

</html>