@include('main.head')
@include('main.topnav')
@include('main.nav')
@include('main.mainContent')
  <div class="row">
  <div class="col-sm-12">
      <div class="card">
          <div class="card-body">
              <h4 class="mt-0 header-title">Manage Joint Permanent Commissions (JPC) Resolutions</h4>




            <table id="datatable" class="table table-striped table-bordered dt-responsive "
                  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                      <tr>
            <th class="btn-info">JPC Name </th>
            <th class="btn-primary">Resolution Title</th>
            <th class="btn-success">Resolution Status</th>
            <th class="btn-warning">Implementation Status</th>
            <th class="btn-dark">Description</th>
              <th class="btn-dark">Update Status</th>
            <th class="btn-dark">Update Resolution</th>
            <th class="btn-primary">Delete</th>


                      </tr>
                  </thead>
                  <tbody>

                      @if(!is_null($JPCResolutions))

                      @foreach($JPCResolutions as $JPCResolution)


                      <tr>
            <td>{{$JPCResolution->JPCName}}</td>
            <td>{{$JPCResolution->ResolutionTitle}}</td>
            <td class="<?php

            if($JPCResolution->Status=='Completed'){


                echo "btn-success";
            }



            if($JPCResolution->Status=='Ongoing'){


                echo "btn-warning";
            }




            if($JPCResolution->Status=='Pending'){


                echo "btn-danger";
            }




            if($JPCResolution->Status=='Delayed'){


                echo "btn-dark";
            }


             if($JPCResolution->Status=='Terminated'){


                echo "btn-default";
            }

            ?>">{{$JPCResolution->Status}}</td>
            <td><a class="btn btn-primary jesus btn-sm" href="#Status{{$JPCResolution->id}}" data-toggle="modal" data-dismiss="modal"><i class="fas fa-people-carry"></i> View</a></td>
            <td><a class="btn btn-info jesus btn-sm" href="#Description{{$JPCResolution->id}}" data-toggle="modal" data-dismiss="modal"><i class="fas fa-people-carry"></i> View</a></td>
            <td><a class="btn btn-dark jesus btn-sm timo" href="#tatusRES{{$JPCResolution->id}}" data-toggle="modal" data-dismiss="modal"><i class="fas fa-edit"></i></a></td>
            <td><a class="btn btn-info jesus btn-sm timo" href="{{ route('UpdateJPCresolutionForm', ['id'=>$JPCResolution->id]) }}" ><i class="fas fa-edit"></i></a></td>
           <td><a class="btn btn-danger DeleteJPCResolution timo jesus btn-sm" data-route="{{ route('DeleteJPCresolutionD', ['id'=>$JPCResolution->id]) }}"  href="#" ><i class="fas fa-trash"></i></a></td>







                      </tr>


                      @endforeach

                      @endif





                  </tbody>
              </table>
          </div>
      </div>
  </div><!-- end col -->
            </div><!-- end row -->




                      @if(!is_null($JPCResolutions))

                      @foreach($JPCResolutions as $JPCResolution)

 <div class="modal fade " id="Status{{$JPCResolution->id}}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header jesus">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">View JPC Resolution Implementation Status</h5><button type="button" class="close"
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
            <td>{{$JPCResolution->JPCName}}</td>



                      </tr>
                  </tbody>
              </table>

                       <textarea class="editor">{{$JPCResolution->ImplementationStatus}}</textarea>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->
                  </div>

                       @endforeach

                      @endif








                      @if(!is_null($JPCResolutions))

                      @foreach($JPCResolutions as $JPCResolution)

 <div class="modal fade " id="Description{{$JPCResolution->id}}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header jesus">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">View JPC Resolution Description</h5><button type="button" class="close"
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
            <td>{{$JPCResolution->JPCName}}</td>



                      </tr>
                  </tbody>
              </table>

                       <textarea class="editor">{{$JPCResolution->ResolutionDescription}}</textarea>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->
                  </div>

                       @endforeach

                      @endif



                      @if(!is_null($JPCResolutions))

                      @foreach($JPCResolutions as $JPCResolution)

                      <div class="modal fade " id="sdf{{$JPCResolution->id}}" role="dialog" id="addnewjpc" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
          <form id="" class="form-horizontal " method="POST" action="{{ route('UpdateJPC', ['id'=>$JPCResolution->id]) }}">



              {{ csrf_field() }}




              <fieldset>
                  <div class="row">
                      <div class="col-md-12">
            <div class="form-group row"><label for=""
                    class="col-lg-3 col-form-label">JPC Name</label>
                <div class="col-lg-9"><input name="jpcName"
                        type="text" required class="form-control" value="{{$JPCResolution->jpcName}}"></div>
            </div>
                      </div>

                      <div class="col-md-12">
            <div class="form-group row"><label for=""
                    class="col-lg-3 col-form-label">JPC Description</label>
                <div class="col-lg-9"><textarea name="jpcDescription"
                        type="text" required class="editor form-control">{{$JPCResolution->jpcDescription}}</textarea></div>
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




                        @if(!is_null($JPCResolutions))

                                            @foreach($JPCResolutions as $JPCResolution)


                                             <div class="modal fade" id="tatusRES{{$JPCResolution->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Update JPC implementation and general   status</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">



                                <table id="" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="btn-dark jesus">Resolution Title </th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>{{$JPCResolution->ResolutionTitle}}</td>
                                              
                                            </tr>
                                        </tbody>
                                    </table>



 <form id="form-horizontal" class="form-horizontal  form-wizard-wrapper" method="POST" action="{{ route('UpdateJPCresolutionStatus', ['id'=>$JPCResolution->id]) }}">
  {{ csrf_field() }}
  <input type="hidden" name="ResolutionID" value="{{$JPCResolution->ResolutionID}}">

                                                              <div class="row btn-dark">
                                                                 <div class="col-md-12">
                                                   <div class="form-group row"><label for=""
                                                        class="col-lg-3 col-form-label">Resolutions Status</label>
                                                        <div class="col-lg-9">
                                                                <select class="form-control" name="Status">
                                                                       <option value="{{$JPCResolution->Status}}">{{$JPCResolution->Status}}</option>
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
                                            <textarea name="ImplementationStatus" class=" editor text-muted mb-5">{{$JPCResolution->ImplementationStatus}}</textarea>
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
