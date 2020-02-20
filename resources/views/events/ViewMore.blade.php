  @if(!is_null($events))

                                            @foreach($events as $event)


                            <div class="modal fade" id="ViewMoreInfo{{$event->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">More Event Information</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">



                                <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                
                                                <th>Event Name</th>
                                                <th>Stake Holders</th>
                                                <th>Description</th>
                                               
                                                <th class="btn-dark">Resolutions</th>
                                                 <th class="btn-default">Resolutions Status</th>
                                               
                                                
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>{{$event->EventName}}</td>
                                              
                                               <td><a class="btn btn-warning jesus btn-sm" href="#StakeHolders{{$event->id}}" data-toggle="modal" data-dismiss="modal"><i class="fas fa-people-carry"></i> View</a></td> 
                                               <td><a class="btn btn-danger jesus btn-sm" href="#Description{{$event->id}}" data-toggle="modal" data-dismiss="modal"><i class="fas fa-info-circle"></i> View</a></td> 
                                               <td><a class="btn btn-dark jesus btn-sm" href="#Resolutions{{$event->id}}" data-toggle="modal" data-dismiss="modal"><i class="fas fa-door-open"></i> View</a></td>
                                               <td class="<?php 

                                                if($event->Resolution_Status=='Completed'){


                                                    echo "btn-success";
                                                }



                                                if($event->Resolution_Status=='Ongoing'){


                                                    echo "btn-warning";
                                                }




                                                if($event->Resolution_Status=='Pending'){


                                                    echo "btn-danger";
                                                }




                                                if($event->Resolution_Status=='Delayed'){


                                                    echo "btn-dark";
                                                }


                                                 if($event->Resolution_Status=='Terminated'){


                                                    echo "btn-default";
                                                }

                                                ?>">{{$event->Resolution_Status}}</td>
                                              
                                            </tr>
                                        </tbody>
                                    </table> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif




                                     @if(!is_null($events))

                                            @foreach($events as $event)

                     <div class="modal fade" id="StakeHolders{{$event->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Event Stake Holders</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                              <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Stake Holders</h4>
                                            <textarea class=" editor text-muted mb-5">{{$event->StakeHolders}}</textarea>
                                           <div  class="float-right mt-2"><a data-dismiss="modal" data-toggle="modal" href="#ViewMoreInfo{{$event->id}}" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif





                                     @if(!is_null($events))

                                            @foreach($events as $event)

                     <div class="modal fade" id="Description{{$event->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Event Description</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                              <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Description</h4>
                                            <textarea class=" editor text-muted mb-5">{{$event->Description}}</textarea>
                                           <div  class="float-right mt-2"><a data-dismiss="modal" data-toggle="modal" href="#ViewMoreInfo{{$event->id}}" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif





                                     @if(!is_null($events))

                                            @foreach($events as $event)

                     <div class="modal fade" id="Resolutions{{$event->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Event Resolutions</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                              <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Resolutions</h4>
                                            <textarea class=" editor text-muted mb-5">{{$event->Resolutions}}</textarea>
                                           <div  class="float-right mt-2"><a data-dismiss="modal" data-toggle="modal" href="#ViewMoreInfo{{$event->id}}" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif



       
                                            @if(!is_null($events))

                                            @foreach($events as $event)

                     <div class="modal fade" id="EventsChangeStatusID{{$event->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Update Project Event Resolution Status</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                <table  class="table table-striped table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Event Name </th>
                                               
                                                <th>Event Resolution Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$event->EventName}}</td>
                                                <td>{{$event->Resolution_Status}}</td>
                                             
                                                
                                              
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>


                                    <form method="POST" action="{{ route('UpdateEventStatus', ['id'=>$event->id]) }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-5 col-form-label">Update  Resolution Status</label>
                                                        <div class="col-lg-7">
                                                                <select class="form-control" name="Resolution_Status">
                                                                     <option value="{{$event->Resolution_Status}}">{{$event->Resolution_Status}}</option>
                                                                    
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
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input   name="ProjectFunder" type="submit" class="btn btn-info jesus" value="Update Event Resolution Status">
                                                        </div>
                                                    </div>
                                                </div>

                                    </form> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif
