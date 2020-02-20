<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu jesus">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li style="margin-left: 4% " class="menu-title badge  btn-danger btn-sm  jesus"><i class="fas fa-sitemap"></i> Main Menu</li>
                <li><a style="color: #d1c4e9  !important" href="{{ url('/Stats') }}" class="waves-effect"><i class="fas fa-chart-line"></i><span
                            class="badge badge-primary badge-pill float-right"></span>
                        <span>Statistics</span></a>

                </li>

                 <li><a style="color: #ffea00 !important" href="{{ url('/MiniReports') }}" class="waves-effect"><i class="fas fa-draw-polygon"></i><span
                            class="badge badge-primary badge-pill float-right"></span>
                        <span>Mini Reports</span></a>

                </li>
          
                 <li class=""><a style="color: #f4511e !important" href="javascript:void(0);" class="waves-effect"><i class="fas fa-project-diagram "></i><span> Initiatives
                            <span class="float-right menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu" >
                        <li><a style="color: #ffa726 !important" href="{{ url('/AddInitiative') }}">  <i class="fas fa-plus-square" ></i>  Add Initiative</a></li>
                        <li><a style="color: #ffa726 !important" href="{{ url('/ManageInitiatives') }}">  <i class="fas fa-project-diagram" ></i>  Manage Initiatives</a></li>
                        <li><a style="color: #ffa726 !important" href="{{ url('/ManagePowerStructures') }}">  <i class="fas fa-power-off" ></i>  Power Structures</a></li>
                        <li><a style="color: #ffa726 !important" href="{{ url('/ManagePowerResolution') }}">  <i class="fas fa-project-diagram" ></i>  Manage Resolutions</a></li>
                        <!--<li><a href="{{ url('/AttachProject') }}">  <i class="" ></i>  Attach Project</a></li>-->
                        
                      
                    </ul>
                </li>
                <li><a style="color:#F48FB1  !important" href="javascript:void(0);" class="waves-effect"><i class="fas fa-money-check-alt"></i><span>Projects
                            <span class="float-right menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li><a style="color:#64B5F6 !important" href="{{url('/ManageProjects')}}">  <i class="fas fa-project-diagram" ></i>  Manage Projects</a></li>
                        <li><a style="color:#64B5F6 !important"  href="{{url('/ManageEvents')}}">  <i class="fas fa-project-diagram" ></i>  Manage Events</a></li>
                        <li><a style="color:#64B5F6 !important"  href="{{route('ManageProjectsEventsResolutions')}}">  <i class="fas fa-project-diagram" ></i>   Events Resolutions</a></li>
                    <!--    <li><a href="{{url('/CompletedProjects')}}">  <i class="" ></i>  Completed Projects</a></li>
                        <li><a href="{{url('/OngoingProjects')}}">  <i class="" ></i>  Ongoing Projects</a></li>
                        <li><a href="{{url('/TerminatedProjects')}}">  <i class="" ></i>  Terminated Projects</a></li>
                        <li><a href="{{url('/DelayedProjects')}}">  <i class="" ></i>  Delayed Projects</a></li>
                        <li><a href="{{url('/PendingProjects')}}">  <i class="" ></i>  Pending Projects</a></li>-->
                        
                        
                      
                    </ul>
                </li>




                <li class="timo"><a style="color: #FF8A65 !important" href="javascript:void(0);" class="waves-effect"><i class="fas fa-file-contract"></i><span>JPCs
                            <span class="float-right menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li><a style="color: #c6ff00 !important" href="#addnewjpc" data-toggle="modal"><i class="fas fa-folder-plus"></i> Add a JPC</a></li>
                        <li><a style="color: #c6ff00 !important" href="{{route('ManageJPC')}}"> <i class="fas fa-hammer"></i> Manage JPCs</a></li>
                        <li><a style="color: #c6ff00 !important" href="{{route('ManageJPCresolution')}}"> <i class="fas fa-cogs"></i> JPC Resolutions</a></li>
                        
                      
                    </ul>
                </li>

                <li class="timo"><a style="color: #FFAB40 !important" href="javascript:void(0);" class="waves-effect"><i class="fas fa-user-cog"></i><span>System Users
                            <span class="float-right menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li><a style="color: #90caf9 !important" href="#Users_adders" data-toggle="modal"> <i class="fas fa-user-check"></i>  Add User</a></li>
                        <li><a style="color: #90caf9 !important" href="{{route('ManageUsers')}}"  ><i class="fas fa-user-edit"></i>  Manage Users</a></li>
                        
                      
                    </ul>
                </li>

                </li>


                 <li><a style="color: white"  href="{{ route('logout') }}" class="waves-effect btn-danger jesus "><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>

                </li>





              
               
               
               
            </ul>
        </div><!-- Sidebar -->
        <div class="clearfix"></div>
    </div><!-- Sidebar -left -->
</div><!-- Left Sidebar End -->