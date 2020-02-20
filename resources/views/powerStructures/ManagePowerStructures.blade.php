 <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Manage All Power Structures</h4>
                                    <p class="text-muted m-b-30">This interface gives you access to managing all Power Structures in the database</p>
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Power Structure Name </th>
                                                <th>Initiative Name</th>
                                                <th>Description</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                                <th>Attach Resolutions</th>
                                                <th> Resolutions</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($PowerStructures))

                                            @foreach($PowerStructures as $PowerStructure)


                                            <tr>
                                                <td>{{$PowerStructure->PowerStructureName}}</td>
                                                <td>{{$PowerStructure->InitiativeName}}</td>
                                                  <td><a data-toggle="modal"   href="#PowerStructureDescription{{$PowerStructure->id}}" class="btn jesus btn-sm btn-secondary "><i class="fas fa-binoculars"></i></a></td>

                                                  <td><a href="{{ route('UpdatePowerStructureForm', ['id'=>$PowerStructure->id]) }}" class="btn jesus btn-sm btn-warning timo"><i class="fas fa-edit "></i></a></td>

                                                  <td><a href="#" data-route="{{ route('DeletePowerStructure', ['id'=>$PowerStructure->id]) }}" class="btn DeletePowerStructure jesus btn-sm btn-danger timo"><i class="fas fa-trash "></i></a></td>

                                                  <td><a href="{{ route('AttachPowerResolutionForm', ['id'=>$PowerStructure->id]) }}" class="btn jesus btn-sm btn-dark timo"><i class="fas fa-cogs "></i></a></td>

                                                  <td><a href="{{ route('ResolutionsUnderPower', ['id'=>$PowerStructure->id]) }}" class="btn jesus btn-sm btn-primary timo"><i class="fas fa-clone "></i></a></td>
                                                
                                               
                                               
                                               
                                            </tr>

                                            
                                            @endforeach

                                            @endif


                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->


                                     


                                     @if(!is_null($PowerStructures))

                                            @foreach($PowerStructures as $PowerStructure)

                     <div class="modal fade" id="PowerStructureDescription{{$PowerStructure->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Power Structure Description</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">



                                <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Power Structure Name </th>
                                                <th>Initiative</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>{{$PowerStructure->PowerStructureName}}</td>
                                                <td>{{$PowerStructure->InitiativeName}}</td>
                                            </tr>
                                        </tbody>
                                    </table>





                                                              <div class="row">
                                <div class="col-md-12">
                                    <div class="card jesus">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4"> Description</h4>
                                            <textarea class=" editor text-muted mb-5">{{$PowerStructure->PowerStructureDescription}}</textarea>
                                           <div  class="float-right mt-2"><a data-dismiss="modal" class="text-primary"><i
                                                        class="fas fa-arrow-circle-left h5"></i> Back</a></div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif