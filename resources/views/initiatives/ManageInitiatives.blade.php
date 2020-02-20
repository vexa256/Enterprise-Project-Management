 <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Manage All initiatives</h4>
                                    <p class="text-muted m-b-30">This interface gives you access to managing all initiatives in the database</p>
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th> Name </th>
                                                <th>Decription</th>
                                                <th>Manage</th>
                                                <th>Attach Project</th>
                                                <th>Add Power structure</th>
                                                <th> Projects</th>
                                                <th> Power structures</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($Initiatives))

                                            @foreach($Initiatives as $Initiative)


                                            <tr>
                                                <td>{{$Initiative->initiativeName}}</td>
                                             
                                                <td><a data-toggle="modal" href="#viewInitiativeDescription{{$Initiative->id}}" class="btn jesus btn-sm btn-primary">View</a></td>
                                                 <td><a data-route="{{ route('DeleteInitiative', ['id'=>$Initiative->id]) }}" data-route="" href="#" class="btn DeleteInitiativeClass timo2 jesus timo btn-sm btn-danger"><i class="fas fa-trash "></i> </a>

                                                    <a data-toggle="modal" href="#UpdateInitiative{{$Initiative->id}}" class="btn jesus btn-sm btn-primary timo "><i class="fas fa-edit "></i> </a>
                                                 </td>
                                             
                                                <td><a  href="{{ route('AttachProject', ['id'=>$Initiative->id]) }}" class="btn jesus btn-sm btn-warning timo"><i class="fas fa-clone "></i></a></td>
                                                <td><a  href="{{ route('AddPowerStructuresForm', ['id'=>$Initiative->id]) }}" class="btn jesus btn-sm btn-danger "><i class="fas fa-clone "></i></a></td>

                                                <td><a  href="{{ route('ProjectsUnderInitiatives', ['id'=>$Initiative->id]) }}" class="btn jesus btn-sm btn-dark "><i class="fas fa-binoculars "></i> </a></td>
                                                <td><a  href="{{ route('PowerUnderInitiative', ['id'=>$Initiative->id]) }}" class="btn jesus btn-sm btn-dark "><i class="fas fa-binoculars"></i>  </a></td>
                                               
                                               
                                               
                                               
                                            </tr>

                                            
                                            @endforeach

                                            @endif


                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->



                                         



                                            @if(!is_null($Initiatives))

                                            @foreach($Initiatives as $Initiative)

                     <div class="modal fade" id="viewInitiativeDescription{{$Initiative->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="viewInitiativeDescription{{$Initiative->id}}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="viewInitiativeDescription{{$Initiative->id}}">Initiative Description</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                            <table id="" class="table table-striped  table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Initiative Name </th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$Initiative->initiativeName}}</td>
                                             
                                               
                                               
                                            </tr>
                                            
                                        </tbody>
                                    </table>



                                                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body ">
                                            <h4 class="mt-0 header-title mb-4">Initiative Description</h4>
                                           
                                            <textarea class=" editor text-muted mb-5" contenteditable="true">

                                                    {{$Initiative->Description}}

                                             </textarea>
                                        
                                            <div class="float-right mt-2"><a  data-dismiss="modal" href="#" class="text-primary"><i class="mdi mdi-arrow-right h5"></i></a></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             @endforeach

                                            @endif



                                            @if(!is_null($Initiatives))

                                            @foreach($Initiatives as $Initiative)

                     <div class="modal fade" id="UpdateInitiative{{$Initiative->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="UpdateInitiative{{$Initiative->id}}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="UpdateInitiative{{$Initiative->id}}">This windwow allows you to update this initiative</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                                         @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif

                           
                                <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="{{ route('UpdateInitiative', ['id'=>$Initiative->id]) }}">
                                          {{ csrf_field() }}
                                    <div class="card jesus">
                                        <div class="card-body ">
                                            <h4 class="mt-0 header-title mb-4">Update Initiative</b></h4>

                                            <div class="col-md-12">
                                                    <div class="form-group row">
                                                <div class="col-lg-12"><input value="{{$Initiative->initiativeName}}" name="InitiativeName" type="text" class="form-control"></div>
                                                    </div>
                                                </div>
                                                
                                           
                                            <textarea name="InitiativeDescription" class=" editor text-muted mb-5">

                                                    {{$Initiative->Description}}

                                             </textarea>
                                        
                                            <div class="float-right mt-2"><a  data-dismiss="modal" href="#" class="text-primary"><i class="mdi mdi-arrow-right h5"></i></a></div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input type="submit" class="btn btn-danger jesus" value="Update Initiative">
                                                        </div>
                                                    </div>
                                                </div>
                                </form>
                                 
                                </div>
                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             @endforeach

                                            @endif
 @include('initiatives.AttachEvent')