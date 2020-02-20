<table id="datatable" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Name </th>
                                                <th>Initiative</th>
                                               
                                                <th class="btn-default">Status</th>
                                                <th class="">Update</th>
                                                <th class="">Delete</th>
                                                <th class="">Change Status</th>
                                                <th class="">View More</th>
                                                <th class="">Create Event</th>
                                                <th class="">View project Events</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($projects))

                                            @foreach($projects as $project)


                                            <tr>
                                                <td>{{$project->ProjectName}}</td>
                                                <td>{{$project->ProjectInitiative}}</td>
                                                
                                                <td class="<?php 

                                                if($project->ProjectStatus=='Completed'){


                                                    echo "btn-success";
                                                }



                                                if($project->ProjectStatus=='Ongoing'){


                                                    echo "btn-warning";
                                                }




                                                if($project->ProjectStatus=='Pending'){


                                                    echo "btn-danger";
                                                }




                                                if($project->ProjectStatus=='Delayed'){


                                                    echo "btn-dark";
                                                }


                                                 if($project->ProjectStatus=='Terminated'){


                                                    echo "btn-default";
                                                }

                                                ?>
">{{$project->ProjectStatus}}</td>
                                                <td><a href="{{ route('UpdateProjectForm', ['id'=>$project->id]) }}" class="btn jesus btn-sm btn-primary timo"><i class="fas fa-edit "></i></a></td>
                                                <td><a data-route="{{ route('DeleteProject', ['id'=>$project->id]) }}" href="#" class="btn timo2 DeleteProjectClass jesus btn-sm btn-danger"><i class="fas fa-trash "></i></a></td>
                                                <td><a href="#ChangeStatusID{{$project->id}}" data-toggle="modal" class="btn jesus btn-sm btn-success timo"><i class="fas fa-edit "></i></a></td>
                                                <td><a data-toggle="modal" href="#MoreInfo{{$project->id}}" class="btn jesus btn-sm btn-warning"><i class="fas fa-book-reader "></i></a></td>
                                                <td><a href="{{ route('CreateEvent', ['id'=>$project->id]) }}" class="btn jesus btn-secondary timo"><i class="fas fa-robot"></i></a></td>
                                                <td><a href="{{ route('EventsUnderProjects', ['id'=>$project->id]) }}" class="btn jesus  btn-dark"><i class="fas fas fa-binoculars "></i></a></td>
                                               
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
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Change Project Status</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                <table  class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Project Name </th>
                                                <th>Initiative</th>
                                                <th>Change Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$project->ProjectName}}</td>
                                                <td>{{$project->ProjectInitiative}}</td>
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
                                                            <input   type="submit" class="btn btn-info jesus" value="Update Project Status">
                                                        </div>
                                                    </div>
                                                </div>

                                    </form> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif




                                     @if(!is_null($projects))

                                            @foreach($projects as $project)

                     <div class="modal fade" id="ProjectImplementingCountries{{$project->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Project Implementing Countries</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">



                                <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Project Name </th>
                                                <th>Initiative</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>{{$project->ProjectName}}</td>
                                                <td>{{$project->ProjectInitiative}}</td>
                                            </tr>
                                        </tbody>
                                    </table>





                                                              <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4"> Implementing Countries</h4>
                                            <textarea class=" editor text-muted mb-5">{{$project->ProjectImplementingCountries}}</textarea>
                                           <div  class="float-right mt-2"><a data-dismiss="modal" data-toggle="modal" href="#MoreInfo{{$project->id}}" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif





                                            @if(!is_null($projects))

                                            @foreach($projects as $project)


                            <div class="modal fade" id="MoreInfo{{$project->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">More Project Information</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">



                                <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                
                                                <th>Funders</th>
                                                <th>Funding Amount</th>
                                                <th>Funding Currency</th>
                                                <th>Description</th>
                                                
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td><a href="#Funders22{{$project->id}}" data-dismiss="modal" data-toggle="modal" class="btn btn-success jesus btn-sm"><i class="fas fa-money-check-alt"></i> View </a></td>
                                               <td>{{$project->ProjectFundingAmount}}</td>
                                               <td>{{$project->ProjectFundingCurrency}}</td>
                                               <td><a class="btn btn-warning jesus btn-sm" href="#ProjectDescription{{$project->id}}" data-toggle="modal" data-dismiss="modal"><i class="fas fa-people-carry"></i> View</a></td>
                                              
                                            </tr>
                                        </tbody>
                                    </table>






                                     <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                
                                               
                                              
                                                <th>StartTime</th>
                                                <th>EndTime</th>
                                                <th>Duration</th>
                                                <th>Implementing Countries</th>

                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               
                                              
                                               <td>{{$project->ProjectStartTime}}</td>
                                               <td>{{$project->ProjectEndTime}}</td>
                                               <td>{{$project->ProjectDuration}}</td>
                                              <td><a data-dismiss="modal" data-toggle="modal" href="#ProjectImplementingCountries{{$project->id}}" class="btn jesus btn-sm btn-primary"><i class="fas fa-flag"></i></a></td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>




                                     <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                
                                               
                                              
                                               <th class="btn-danger jesus">Project Budget</th>
                                                <th class="btn-info jesus">Project Actual Budget</th>
                                                <th class="btn-warning jesus">Project Budget Variance</th>
                                                <th class="btn-dark jesus">Update Actual Budget</th>

                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               
                                              
                                               <td>{{$project->ProjectBudget}}</td>
                                               <td>{{$project->ProjectActualBudget}}</td>
                                               <td>{{$project->ProjectBudgetVariance}}</td>
                                              <td><a data-dismiss="modal" data-toggle="modal" href="#ProjectBudgetVariance{{$project->id}}" class="btn jesus btn-sm btn-primary timo"><i class="fas fa-edit"></i></a></td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>






                               </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif




                                            @if(!is_null($projects))

                                            @foreach($projects as $project)


                            <div class="modal fade" id="Funders22{{$project->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header ">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Project Funders' Details</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                
                                               
                                              
                                                <th>Project Name</th>
                                                <th>Initiative</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               
                                              
                                               <td>{{$project->ProjectName}}</td>
                                               <td>{{$project->ProjectInitiative}}</td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>





                                                              <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4"> Funders</h4>
                                            <textarea class=" editor text-muted mb-5">{{$project->ProjectFunders}}</textarea>
                                            <div data-dismiss="modal" class="float-right mt-2"><a data-dismiss="modal" data-toggle="modal" href="#MoreInfo{{$project->id}}" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                               




                               </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif











                                            @if(!is_null($projects))

                                            @foreach($projects as $project)


                            <div class="modal fade" id="ProjectDescription{{$project->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header ">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Project Description</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                
                                               
                                              
                                                <th>Project Name</th>
                                                <th>Initiative</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               
                                              
                                               <td>{{$project->ProjectName}}</td>
                                               <td>{{$project->ProjectInitiative}}</td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>





                                                              <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Description</h4>
                                            <textarea class=" editor text-muted mb-5">{{$project->ProjectDescription}}</textarea>
                                            <div data-dismiss="modal" class="float-right mt-2"><a data-dismiss="modal" data-toggle="modal" href="#MoreInfo{{$project->id}}" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                               




                               </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif


                                


                                            @if(!is_null($projects))

                                            @foreach($projects as $project)

                     <div class="modal fade" id="ProjectBudgetVariance{{$project->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-dark modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Update Project Actual Budget</h5><button type="button" class="close"
                                                                data-dismiss="modal" data-toggle="modal" data-target="#MoreInfo{{$project->id}}" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                <table  class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                               
                                                <th class="btn-danger jesus">Project Budget</th>
                                                <th class="btn-info jesus">Project Actual Budget</th>
                                                <th class="btn-warning jesus">Project Budget Variance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td>{{$project->ProjectBudget}}</td>
                                                <td>{{$project->ProjectActualBudget}}</td>
                                                <td>{{$project->ProjectBudgetVariance}}</td>
                                             
                                                
                                              
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>


                                    <form method="POST" action="{{ route('UpdateActualBudget', ['id'=>$project->id]) }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-5 col-form-label"> Actual Budget</label>
                                                        <div class="col-lg-7">
                                                               <input type="text" name="ProjectActualBudget" class="form-control" value="{{$project->ProjectActualBudget}}">

                                                        </div>
                                                    </div>
                                                </div>



                                                 <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input   type="submit" class="btn btn-info jesus" value="Update Actual Budget">
                                                        </div>
                                                    </div>
                                                </div>

                                    </form> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif

