<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard') }}" class="brand-link">
      <img src="{{asset('adminlte')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Cari Magang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminlte')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
 -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('/lowongan_bos')}}" class="nav-link @yield('lowongan_bos')">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Lowongan</p>
                </a>
              </li> 
              <li class="nav-item @yield('company/menu')">
                <a href="#" class="nav-link @yield('company/active')">
                  <i class="fa fa-home nav-icon"></i>
                  <p>
                    Company
                  <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                 <ul class="nav nav-treeview ">
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/company')}}" class="nav-link @yield('master/company')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-home nav-icon"></i>
                      <p>Company List</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/department')}}" class="nav-link @yield('master/department')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-building nav-icon"></i>
                      <p>Department</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/divisi')}}" class="nav-link @yield('master/divisi')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-map-signs nav-icon"></i>
                      <p>Division</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item @yield('location/menu')">
                <a href="#" class="nav-link @yield('location/active')">
                  <i class="fa fa-map nav-icon"></i>
                  <p>
                    Location
                  <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                 <ul class="nav nav-treeview ">
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/country')}}" class="nav-link @yield('master/country')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-flag nav-icon"></i>
                      <p>Country</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/city')}}" class="nav-link @yield('master/city')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-city nav-icon"></i>
                      <p>City</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item @yield('career/menu')">
                <a href="#" class="nav-link @yield('career/active')">
                  <i class="fa fa-wrench nav-icon"></i>
                  <p>
                    Career
                  <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/careerperson')}}" class="nav-link @yield('master/careerperson')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-user-clock nav-icon"></i>
                      <p>Career Person</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/career')}}" class="nav-link @yield('master/career')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-briefcase nav-icon"></i>
                      <p>Career List</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/careerlevel')}}" class="nav-link @yield('master/careerlevel')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-users-cog nav-icon"></i>
                      <p>Career Level</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item @yield('education/menu')">
                <a href="#" class="nav-link @yield('education/active')">
                  <i class="fa fa-book nav-icon"></i>
                  <p>
                    Education
                  <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/education')}}" class="nav-link @yield('master/education')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-book-open nav-icon"></i>
                      <p>Education List</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/education_history')}}" class="nav-link @yield('master/education_history')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-graduation-cap nav-icon"></i>
                      <p>Education History</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/title')}}" class="nav-link @yield('master/title')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-graduation-cap nav-icon"></i>
                      <p>Title</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item @yield('attendance/menu')">
                <a href="#" class="nav-link @yield('attendance/active')">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>
                    Attendance
                  <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                 <ul class="nav nav-treeview">
                 <li class="nav-item ml-4">
                    <a href="{{url('/master/trnattendance')}}" class="nav-link @yield('master/trnattendance')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-walking nav-icon"></i>
                      <p>Attendance Master</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/attendance_adj')}}" class="nav-link @yield('master/attendance_adj')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-male nav-icon"></i>
                      <p>Attendance Adj</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/attendance_manual')}}" class="nav-link @yield('master/attendance_manual')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-running nav-icon"></i>
                      <p>Attendance Manual</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/refattend')}}" class="nav-link @yield('master/refattend')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-sign nav-icon"></i>
                      <p>Referensi Attend</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item @yield('approval/menu')">
                <a href="#" class="nav-link @yield('approval/active')">
                  <i class="fa fa-calendar-alt nav-icon"></i>
                  <p>
                    Approval
                  <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                 <ul class="nav nav-treeview">
                 <li class="nav-item ml-4">
                    <a href="{{url('/master/approval')}}" class="nav-link @yield('master/approval')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-calendar nav-icon"></i>
                      <p>Approval Master</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/approvalstructure')}}" class="nav-link @yield('master/approvalstructure')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-calendar-plus nav-icon"></i>
                      <p>Approval Structure</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/approval_person')}}" class="nav-link @yield('master/approval_person')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-calendar-check nav-icon"></i>
                      <p>Approval Person</p>
                    </a>
                  </li>
                </ul>
              </li> 
              <li class="nav-item @yield('general/menu')">
                <a href="#" class="nav-link @yield('general/active')">
                  <i class="fa fa-archive nav-icon"></i>
                  <p>
                    General
                  <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/person')}}" class="nav-link @yield('master/person')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-users nav-icon"></i>
                      <p>Person</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/presence')}}" class="nav-link @yield('master/presence')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-running nav-icon"></i>
                      <p>Presence</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/religion')}}" class="nav-link @yield('master/religion')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-praying-hands nav-icon"></i>
                      <p>Religion</p>
                    </a>
                  </li>
                 <li class="nav-item ml-4">
                    <a href="{{url('/master/depo')}}" class="nav-link @yield('master/depo')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-warehouse nav-icon"></i>
                      <p>Depo</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/menu')}}" class="nav-link @yield('master/menu')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-clipboard-list nav-icon"></i>
                      <p>Menu</p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="{{url('/master/period')}}" class="nav-link @yield('master/period')">
                      <i class="fa fa-caret-right"></i>
                      <i class="fa fa-clock nav-icon"></i>
                      <p>Period</p>
                    </a>
                  </li>
                </ul>
              </li> 
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
