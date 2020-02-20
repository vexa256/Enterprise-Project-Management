  <!-- Top Bar Start -->
        <div class="topbar ">
            <!-- LOGO -->
            <div class="topbar-left"><a href="#" class="logo"><span style="color: white">ITWADIS</span><i class=""></i></a></div>
            <nav class="navbar-custom jesus">
                <ul class="navbar-right list-inline float-right mb-0">
                    
                      <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <div role="search" class="app-search">
                            <div class="form-group mb-0"> <a style="margin-bottom:  1%" href="{{ url()->previous() }}" class=" btn btn-sm btn-danger jesus"><i class="fas fa-arrow-left"></i> Back to previous page</a>
                        </div>
                    </li><!-- language-->

                    
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block"><a
                            class="nav-link waves-effect" href="#" id="btn btn-sm-fullscreen"><i
                                class="mdi mdi-fullscreen noti-icon"></i></a></li><!-- notification -->
                  
                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img"><a
                                class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="fas fa-user fa-2x"></i></a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item--> 
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                                        class="mdi mdi-power text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left"><button class="button-menu-mobile open-left waves-effect"><i
                                class="mdi mdi-menu"></i></button></li>
                    <li class="d-none d-sm-block">
                        <div class="dropdown pt-3 d-inline-block"><a class="btn btn-sm btn-dark jesus dropdown-toggle" href="#"
                                role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Quick Actions</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                     <a class="dropdown-item" href="{{url('/ManageEvents')}}">Manage Events</a>
                          <a class="dropdown-item" href="{{url('/CompletedEvents')}}">Completed Events</a>
                        <a class="dropdown-item" href="{{url('/OngoingEvents')}}">Ongoing Events</a>
                       
                        <a class="dropdown-item" href="{{url('/PendingEvents')}}">Pending Events</a>
                                <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('/ManageProjects')}}">Manage Projects</a>
                        <a class="dropdown-item" href="{{url('/CompletedProjects')}}">Completed Projects</a>
                      
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div><!-- Top Bar End -->