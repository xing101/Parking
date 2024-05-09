 <!-- left sidebar -->
 <!-- ============================================================== -->
 <div class="nav-left-sidebar sidebar-dark">
     <div class="menu-list">
         <nav class="navbar navbar-expand-lg navbar-light">

             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav flex-column">
                     {{-- <li class="nav-divider">
                         Menu
                     </li> --}}
                     <li class="nav-item ">
                         <a class="nav-link  " href={{ route('backend.dashboard') }} aria-expanded="false"
                             data-target="#submenu-1" aria-controls="submenu-1"><i
                                 class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link  " href={{ route('backend.product') }} 
                             aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i
                                 class="fa fa-fw fa-user-circle"></i>Product </a>
                     </li>             
                     <li class="nav-item">
                         <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                             data-target="#submenu-2" aria-controls="submenu-2"><i
                                 class="fa fa-fw fa-rocket"></i>People</a>
                         <div id="submenu-2" class="collapse submenu" style="">
                             <ul class="nav flex-column">
                                 <li class="nav-item">
                                     <a class="nav-link" href="pages/general.html">Staff</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="pages/general.html">Customer</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="pages/general.html">User</a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link  " href="#" data-toggle="collapse" aria-expanded="false"
                             data-target="#submenu-1" aria-controls="submenu-1"><i
                                 class="fa fa-fw fa-user-circle"></i>Configuretion </a>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
 </div>
 <!-- ============================================================== -->
 <!-- end left sidebar -->
 <!-- ============================================================== -->
