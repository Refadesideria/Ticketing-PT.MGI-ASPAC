
    
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/avatariniteh.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color: #FFFFFF;">{{Auth::user()->name}} </a>
        </div>
      </div>

      <!-- SidebarSearch Form --> 
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    
               
           
          <li class="nav-item menu-open"  >
            <a href="dashboard" class="nav-link active" style="background-color: #866a8a;">
              &nbsp;
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
              </svg>
              <p style="color: #FFFFFF;">
                &nbsp;
                Dashboard
              </p>
            </a>
            
            <li class="nav-item">
            <a href="#" class="nav-link" style="background-color: #866a8a;">
              <i class="nav-icon fas fa-book" ></i>
              <p  style="color: #FFFFFF;">
                Master Data
                <i class="fas fa-angle-left right" ></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" >
                <a href="{{ route('jabatan.index') }}" class="nav-link">
                  <i class=""></i>
                  <p style="color: #FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('divisi.index') }}" class="nav-link">
                  <i class=" "></i>
                  <p style="color: #FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divisi</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="{{ route('customer.index') }}" class="nav-link">
                  <i class=" "></i>
                  <p style="color: #FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{ route('jenisrequest.index') }}" class="nav-link">
                  <i class=" "></i>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Request</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{ route('department.index') }}" class="nav-link">
                  <i class=" "></i>
                  <p style="color: #FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('priority.index') }}" class="nav-link">
                  <i class=" "></i>
                  <p style="color: #FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Priority</p>
                </a>
              </li>
              
             
             
              <li class="nav-item">
                <a href="{{ route('kategori.index') }}" class="nav-link">
                  <i class=" "></i>
                  <p style="color: #FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Role</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- TRANSAKSI -->
          <li class="nav-item">
            <a href="" class="nav-link" style="background-color: #866a8a;">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color: #FFFFFF;">
                Transaksi
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('ticketing.index') }}" class="nav-link">
                  <i class=""></i>
                 <p style="color: #FFFFFF;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ticketing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('jenisrequest.index') }}" class="nav-link">
                  <i class=""></i>
                 <p style="color: #FFFFFF;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Request</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{ route('projectcustomer.index') }}" class="nav-link">
                  <i class=""></i>
                  <p style="color: #FFFFFF;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Project customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="reply" class="nav-link">
                  <i class=""></i>
                  <p style="color: #FFFFFF;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reply Ticket</p>
                </a>
            </ul>
              </li>

              <!-- <li class="nav-item">
                <a href="chat" class="nav-link">
                  <i class=""></i>
                  <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reply Ticketing</p>
                </a>
              </li>
            </ul>
          </li> -->

          {{-- <li class="nav-item">
            <a href="{{ route('userticketing.index') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              User
                <i class=""></i>
              </p>
            </a>
              </li>
            </ul>
          </li> --}}
         
          <li class="nav-item">
            <a href="{{ route('profile.index') }}" class="nav-link" style="background-color: #866a8a;">
              <i class=""></i><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>

              </svg>
             <p style="color: #FFFFFF;">&nbsp;&nbsp;Settings</p>
            </a>
              </li>
            </ul>
          </li>

       {{-- end --}}
       
         
          {{-- adminmgi123 --}}
            
          {{-- @if(Auth()->user()->role=='Admin') --}}

           
              <!-- <li class="nav-item">
                <a href="chat" class="nav-link">
                  <i class=""></i>
                  <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reply Ticketing</p>
                </a>
              </li>
            </ul>
          </li> -->
              {{-- @endif --}}