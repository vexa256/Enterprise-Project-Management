        @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')
          <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Joint Permanent Commissions (JPCs)</h4>


        

                    <table id="datatable" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="btn-info">JPC Name </th>
                                                <th class="btn-primary">Description</th>
                                                <th class="btn-success">Update</th>
                                                <th class="btn-warning">Add Resolution</th>
                                                <th class="btn-dark">View all Resolutions</th>
                                                <th class="btn-danger">Delete</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($JPCS))

                                            @foreach($JPCS as $JPC)


                                            <tr>
                                                <td>{{$JPC->jpcName}}</td>
                                                <td><a href="#sdsss{{$JPC->id}}" data-toggle="modal" class="btn jesus btn-sm btn-primary"><i class="fas fa-binoculars "></i> View</a></td>
                                                 <td><a href="#sdf{{$JPC->id}}" data-toggle="modal" class="btn jesus btn-sm btn-primary timo"><i class="fas fa-edit "></i></a></td>
                                                <td><a href="{{ route('CreateJPCresolutionForm', ['id'=>$JPC->id]) }}" class="btn  jesus btn-sm btn-danger timo"><i class="fas fa-folder-plus "></i></a></td>
                                                <td><a href="{{ route('ResolutionUnderJPC', ['id'=>$JPC->id]) }}" class="btn  jesus btn-sm btn-danger timo"><i class="fas fa-file"></i></a></td>
                                                 <td><a href="#" data-route="{{ route('DeleteJPC', ['id'=>$JPC->id]) }}" class="btn jesus btn-sm btn-warning DeleteJPC timo"><i class="fas fa-clone "></i></a></td>
                                              
                                               
                                               
                                                
                                               
                                            </tr>

                                            
                                            @endforeach

                                            @endif


                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->






                                            @if(!is_null($JPCS))

                                            @foreach($JPCS as $JPC)

                       <div class="modal fade " id="sdsss{{$JPC->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header jesus">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">View JPC Description</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body btn-dark jesus">
                            <table  class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th style="color: white">JPC Name </th>
                                                
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$JPC->jpcName}}</td>
                                               
                                                
                                               
                                            </tr>
                                        </tbody>
                                    </table>

                                                           <textarea class="editor">{{$JPC->jpcDescription}}</textarea> 
                                                           
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>

                                             @endforeach

                                            @endif



                                            @if(!is_null($JPCS))

                                            @foreach($JPCS as $JPC)

                                            <div class="modal fade " id="sdf{{$JPC->id}}" role="dialog" id="addnewjpc" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">
                                                               Update JPC</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                           
                                                            <!---FORM--->
                                                                            <div class="row">
                    <div class="col-sm-12">
                        <div class="card btn-dark jesus">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Update JPC Form</h4>



                                @if ($errors->any())

                                @foreach ($errors->all() as $error)

                                <div class="alert alert-danger" role="alert"><strong>Error</strong>

                                    {{ $error }} </div>

                                @endforeach

                                @endif



                                <p class="text-muted m-b-30 font-14" style="color: black">The system automatically tracks all JPCs that are updated from this interface</p>
                                <form id="" class="form-horizontal " method="POST" action="{{ route('UpdateJPC', ['id'=>$JPC->id]) }}">



                                    {{ csrf_field() }}



                                  
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row"><label for=""
                                                        class="col-lg-3 col-form-label">JPC Name</label>
                                                    <div class="col-lg-9"><input name="jpcName"
                                                            type="text" required class="form-control" value="{{$JPC->jpcName}}"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row"><label for=""
                                                        class="col-lg-3 col-form-label">JPC Description</label>
                                                    <div class="col-lg-9"><textarea name="jpcDescription"
                                                            type="text" required class="editor form-control">{{$JPC->jpcDescription}}</textarea></div>
                                                </div>
                                            </div>


                                                <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-9">
                                                        <input type="submit" class="btn btn-danger jesus" value="Update JPC">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            

                                        </div>

                                    </fieldset>
                                   
                                 
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->

                                                            <!---FORM--->

                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>



                                           @endforeach

                                            @endif





                       
         @include('main.footer')