  @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="alert alert-success jesus" role="alert">  <h4 class="mt-0 header-title">Manage All Resolutions attached to  the Project Event  {{$event->EventName}}</h4></div>
                                  

                                    <table id="datatable" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>  
                                                <th>Resolution Title </th>
                                                <th class="btn-dark jesus">Event Name </th>
                                                <th>Event's Project </th>
                                                <th class="btn-dark">Resolution Status</th>
                                                <th>Implementation  Status</th>
                                                <th class="jesus btn-info">View More </th>
                                                <th>Update Status</th>
                                                <th>Update </th>
                                                <th class="btn-danger">Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($Resolutions))

                                            @foreach($Resolutions as $Resolution)


                                            <tr>
                                                <td>{{$Resolution->ResolutionTitle}}</td>
                                                <td>{{$Resolution->EventName}}</td>
                                                <td>{{$Resolution->ProjectName}}</td>
                                                <td class="jesus <?php 

                                                if($Resolution->Status=='Completed'){


                                                    echo "btn-success";
                                                }



                                                if($Resolution->Status=='Ongoing'){


                                                    echo "btn-warning";
                                                }




                                                if($Resolution->Status=='Pending'){


                                                    echo "btn-danger";
                                                }




                                                if($Resolution->Status=='Delayed'){


                                                    echo "btn-dark";
                                                }


                                                 if($Resolution->Status=='Terminated'){


                                                    echo "btn-default";
                                                }

                                                ?>">{{$Resolution->Status}}</td>
                                                <td><a data-toggle="modal" href="#ImplementationStatus{{$Resolution->id}}" class="btn jesus btn-sm btn-danger"><i class="fas fa-binoculars "></i> View</a></td>
                                                 <td><a href="#ViewMore33{{$Resolution->id}}" data-toggle="modal" class=" btn jesus btn-sm btn-primary"><i class="fas fa-binoculars "></i> View</a></td>

                                                 <td><a href="#dddUpdate{{$Resolution->id}}"  data-toggle="modal"   class="btn   jesus btn-sm btn-dark"><i class="fas fa-edit "></i></a></td>

                                                 <td><a href="{{ route('UpdateProjectEventResolutionForm', ['id'=>$Resolution->id]) }}"  class="btn  timo2 jesus btn-sm btn-primary"><i class="fas fa-edit "></i></a></td>

                                                  <td><a data-route="{{ route('DeleteProjectEventResolution', ['id'=>$Resolution->id]) }}" href="#" class="btn DeleteProjectEventResolution timo2 jesus btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>



                                               
                                               
                                               
                                             
                                            </tr>

                                            
                                            @endforeach

                                            @endif


                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                                             @if(!is_null($Resolutions))

                                            @foreach($Resolutions as $Resolution)


                     <div class="modal fade " id="ImplementationStatus{{$Resolution->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header btn-dark jesus">
                                                            <h5 class=" modal-title mt-0" id="myLargeModalLabel">View Resolution Implementation status </h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body jesus">



                                        <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>  
                                                <th class="btn-primary">Resolution Title </th>
                                                <th class="btn-danger jesus">Event Name </th>
                                                <th class="btn-warning">Event's Project </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                
                                                 <td>{{$Resolution->ResolutionTitle}}</td>
                                                <td>{{$Resolution->EventName}}</td>
                                                <td>{{$Resolution->ProjectName}}</td>

                                            </tr>


                                        </tbody>
                                    </table>




                                                           <textarea class="form-control editor">
                                                               

                                                       {{$Resolution->ImplementationStatus}}
                                                           </textarea>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->



                                            @endforeach

                                            @endif











  @if(!is_null($Resolutions))

                                            @foreach($Resolutions as $Resolution)


                     <div class="modal fade " id="ViewMore33{{$Resolution->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header btn-dark jesus">
                                                            <h5 class=" modal-title mt-0" id="myLargeModalLabel">View More information about this Resolution</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body jesus">



                                        <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>  
                                                <th class="btn-primary">Resolution Title </th>
                                                <th class="btn-danger jesus">Event Name </th>
                                                <th class="btn-warning">Event's Project </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                
                                                 <td>{{$Resolution->ResolutionTitle}}</td>
                                                <td>{{$Resolution->EventName}}</td>
                                                <td>{{$Resolution->ProjectName}}</td>

                                            </tr>


                                        </tbody>
                                    </table>


                                            <label class="label badge badge-success jesus"><h5>Resolution Description</h5></label>

                                                           <textarea class="form-control editor">

                                                           
                                                               

                                                       {{$Resolution->ResolutionDescription}}
                                                           </textarea>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->



                                            @endforeach

                                            @endif






                                            @if(!is_null($Resolutions))

                                            @foreach($Resolutions as $Resolution)


                                             <div class="modal fade" id="dddUpdate{{$Resolution->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Update resolution  general and implementation status</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">



                                        <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>  
                                                <th class="btn-primary">Resolution Title </th>
                                                <th class="btn-danger jesus">Event Name </th>
                                                <th class="btn-warning">Event's Project </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                
                                                 <td>{{$Resolution->ResolutionTitle}}</td>
                                                <td>{{$Resolution->EventName}}</td>
                                                <td>{{$Resolution->ProjectName}}</td>

                                            </tr>


                                        </tbody>
                                    </table>

 <form id="form-horizontal" class="form-horizontal  form-wizard-wrapper" method="POST" action="{{ route('UpdateProjectEventResolutionStatus', ['id'=>$Resolution->id]) }}">
  {{ csrf_field() }}
    <input type="hidden" name="ResolutionID" value="{{$Resolution->ResolutionID}}">

                                                              <div class="row btn-dark">
                                                                 <div class="col-md-12">
                                                   <div class="form-group row"><label for=""
                                                        class="col-lg-3 col-form-label">Resolutions Status</label>
                                                        <div class="col-lg-9">
                                                                <select class="form-control" name="Status">
                                                                       <option value="{{$Resolution->Status}}">{{$Resolution->Status}}</option>
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Ongoing">Ongoing</option>
                                                                    <option value="Delayed">Delayed</option>
                                                                    <option value="Completed">Completed</option>
                                                                    <option value="Terminated">Terminated</option>
                                                                </select>

                                                        </div>
                                                    </div>
                                                </div>
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4" style="color: black">  Implementation Status</h4>
                                            <textarea name="ImplementationStatus" class=" editor text-muted mb-5">{{$Resolution->ImplementationStatus}}</textarea>
                                           <div  class="float-right mt-2"><a data-dismiss="modal"  href="#" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input   type="submit" class="btn btn-info jesus" value="Update Resolution">
                                                        </div>
                                                    </div>
                                                </div>
                            </div></form> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> 



                                              @endforeach

                                            @endif








                         @include('main.footer')

