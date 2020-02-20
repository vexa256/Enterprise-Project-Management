 <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Manage All Pending Projects</h4>
                                    <p class="text-muted m-b-30">This interface gives you access to managing all pending projects in the database</p>
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Name </th>
                                                <th>Owner</th>
                                                <th>Implementor</th>
                                                <th>Status</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                                <th>Change Status</th>
                                                <th>View More</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($projects))

                                            @foreach($projects as $project)


                                            <tr>
                                                <td>{{$project->ProjectName}}</td>
                                                <td>{{$project->ProjectOwner}}</td>
                                                <td>{{$project->ProjectImplementer}}</td>
                                                <td>{{$project->ProjectStatus}}</td>
                                                <td><a href="{{ route('UpdateProjectForm', ['id'=>$project->id]) }}" class="btn jesus btn-sm btn-primary"><i class="fas fa-edit "></i></a></td>
                                                <td><a data-route="{{ route('DeleteProject', ['id'=>$project->id]) }}" href="#" class="btn DeleteProjectClass jesus btn-sm btn-danger"><i class="fas fa-trash "></i></a></td>
                                                <td><a href="#ChangeStatusID{{$project->id}}" data-toggle="modal" class="btn jesus btn-sm btn-success"><i class="fas fa-edit "></i></a></td>
                                                <td><a data-toggle="modal" href="#ViewProjectMoreInformation{{$project->id}}" class="btn jesus btn-sm btn-warning"><i class="fas fa-book-reader "></i></a></td>
                                               
                                            </tr>

                                            
                                            @endforeach

                                            @endif


                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->


                                            @if(!is_null($projects))

                                            @foreach($projects as $project)

                     <div class="modal fade" id="ChangeStatusID{{$project->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Change Project Status</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                <table  class="table table-striped table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Project Name </th>
                                                <th>Project Owner</th>
                                                <th>Change Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$project->ProjectName}}</td>
                                                <td>{{$project->ProjectOwner}}</td>
                                                <td>{{$project->ProjectStatus}}</td>
                                                
                                              
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>


                                    <form method="POST" action="{{ route('UpdateProjectStatus', ['id'=>$project->id]) }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-5 col-form-label">Project Status</label>
                                                        <div class="col-lg-7">
                                                                <select class="form-control" name="ProjectStatus">
                                                                     <option value="{{$project->ProjectStatus}}">{{$project->ProjectStatus}}</option>
                                                                    
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
                                                            <input   name="ProjectFunder" type="submit" class="btn btn-info jesus" value="Update Project Status">
                                                        </div>
                                                    </div>
                                                </div>

                                    </form>








                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                          @endforeach

                                            @endif






                                            @if(!is_null($projects))

                                            @foreach($projects as $project)

                     <div class="modal fade " id="ViewProjectMoreInformation{{$project->id}}" tabindex="-1" role="dialog"  aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">More Project information</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                           

                                    <table  class="table table-striped table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Project Name </th>
                                                <th>Start date</th>
                                                <th>End Date</th>
                                                <th>Duration</th>
                                                <th>Funder</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$project->ProjectName}}</td>
                                                <td>{{$project->ProjectStartTime}}</td>
                                                <td>{{$project->ProjectEndTime}}</td>
                                                <td>{{$project->ProjectDuration}}</td>
                                                <td>{{$project->ProjectFunder}}</td>
                                                
                                                
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Project Description</h4>
                                            <p class="text-muted mb-5">{{$project->ProjectDescription}}</p>
                                            <div data-dismiss="modal" class="float-right mt-2"><a href="#" class="text-primary"><i
                                                        class="fas fa-arrow-circle-right h5"></i></a></div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>







                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                     @endforeach

                                            @endif



