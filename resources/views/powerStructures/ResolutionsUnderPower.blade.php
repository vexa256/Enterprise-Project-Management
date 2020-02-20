        @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')
        

        				 <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">





                                    <div class="alert alert-success jesus" role="alert">  <h4 class="mt-0 header-title">  <h4 class="mt-0 header-title">Manage All Resolutions attached to the Power Structure {{$power->initiativeName}}</h4></div>








                                    <p class="text-muted m-b-30">This interface gives you access to managing all Resolutions in the database</p>
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Power Structure Name </th>
                                                <th>Resolution Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th >Implementation Status</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                               
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($Resolutions))

                                            @foreach($Resolutions as $Resolution)


                                            <tr>
                                                <td>{{$Resolution->PowerStructureName}}</td>
                                                <td>{{$Resolution->ResolutionTitle}}</td>
                                                <td><a data-toggle="modal"   href="#ResolutionDescription{{$Resolution->id}}" class="btn jesus btn-sm btn-dark "><i class="fas fa-binoculars "></i></a></td>
                                                <td class="<?php 

                                                if($Resolution->ResolutionStatus=='Completed'){


                                                    echo "btn-success";
                                                }



                                                if($Resolution->ResolutionStatus=='Ongoing'){


                                                    echo "btn-warning";
                                                }




                                                if($Resolution->ResolutionStatus=='Pending'){


                                                    echo "btn-danger";
                                                }




                                                if($Resolution->ResolutionStatus=='Delayed'){


                                                    echo "btn-dark";
                                                }


                                                 if($Resolution->ResolutionStatus=='Terminated'){


                                                    echo "btn-default";
                                                }

                                                ?>">{{$Resolution->ResolutionStatus}}</td>
                                                  <td><a data-toggle="modal"   href="#ResolutionImplementationStatus{{$Resolution->id}}" class="btn jesus btn-sm btn-secondary "><i class="fas fa-binoculars"></i></a><a data-toggle="modal"   href="#UpdatePowerStructureStatus{{$Resolution->id}}" class="btn jesus timo btn-sm btn-dark "><i class="fas fa-edit"></i></a></td>

                                                  <td><a href="{{ route('UpdateResolutionForm', ['id'=>$Resolution->id]) }}" class="btn jesus btn-sm btn-dark timo"><i class="fas fa-edit "></i></a></td>

                                                  <td><a href="#" data-route="{{ route('DeletePowerRosultion', ['id'=>$Resolution->id]) }}" class="btn DeletePowerRosultion jesus btn-sm btn-danger timo"><i class="fas fa-trash "></i></a></td>

                                                 
                                               
                                               
                                               
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


                                             <div class="modal fade" id="ResolutionDescription{{$Resolution->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Resolution Description</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">



                                <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Resolution Name </th>
                                                <th>Power Structure</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>{{$Resolution->ResolutionTitle}}</td>
                                                <td>{{$Resolution->PowerStructureName}}</td>
                                            </tr>
                                        </tbody>
                                    </table>





                                                              <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">  Description</h4>
                                            <textarea class=" editor text-muted mb-5">{{$Resolution->ResolutionDescription}}</textarea>
                                           <div  class="float-right mt-2"><a data-dismiss="modal"  href="#" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> 



                                              @endforeach

                                            @endif












  											@if(!is_null($Resolutions))

                                            @foreach($Resolutions as $Resolution)


                                             <div class="modal fade" id="ResolutionImplementationStatus{{$Resolution->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Implementation Status</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">



                                <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Resolution Name </th>
                                                <th>Power Structure</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>{{$Resolution->ResolutionTitle}}</td>
                                                <td>{{$Resolution->PowerStructureName}}</td>
                                            </tr>
                                        </tbody>
                                    </table>





                                                              <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">  Implementation Status</h4>
                                            <textarea class=" editor text-muted mb-5">{{$Resolution->ResolutionImplementationStatus}}</textarea>
                                           <div  class="float-right mt-2"><a data-dismiss="modal"  href="#" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> 



                                              @endforeach

                                            @endif








  											@if(!is_null($Resolutions))

                                            @foreach($Resolutions as $Resolution)


                                             <div class="modal fade" id="UpdatePowerStructureStatus{{$Resolution->id}}" tabindex="-1" role="dialog"
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
                                                <th>Resolution Name </th>
                                                <th>Power Structure</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>{{$Resolution->ResolutionTitle}}</td>
                                                <td>{{$Resolution->PowerStructureName}}</td>
                                            </tr>
                                        </tbody>
                                    </table>



 <form id="form-horizontal" class="form-horizontal  form-wizard-wrapper" method="POST" action="{{ route('UpdatePowerResolution', ['id'=>$Resolution->id]) }}">
  {{ csrf_field() }}
 	<input type="hidden" name="ResolutionID" value="{{$Resolution->ResolutionID}}">

                                                              <div class="row btn-dark">
                                                              	 <div class="col-md-12">
                                                   <div class="form-group row"><label for=""
                                                        class="col-lg-3 col-form-label">Resolutions Status</label>
                                                        <div class="col-lg-9">
                                                                <select class="form-control" name="ResolutionStatus">
                                                                       <option value="{{$Resolution->ResolutionStatus}}">{{$Resolution->ResolutionStatus}}</option>
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
                                            <textarea name="ResolutionImplementationStatus" class=" editor text-muted mb-5">{{$Resolution->ResolutionImplementationStatus}}</textarea>
                                           <div  class="float-right mt-2"><a data-dismiss="modal"  href="#" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input   type="submit" class="btn btn-info jesus" value="Update Status">
                                                        </div>
                                                    </div>
                                                </div>
                            </div></form> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> 



                                              @endforeach

                                            @endif








        @include('main.footer')