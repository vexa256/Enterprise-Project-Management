        @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')
       
 <div class="alert card jesus" role="alert">  <h4 class="mt-0 header-title"> Mini Reports</h4> </div>
 <div class="card " style="background-color: transparent;"> <a href="#vfgcsns" class=" col-md-2 btn btn-dark " data-toggle="modal">View Project Events Mini report</a></div>



        				 <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">

                                     <div class="alert alert-success jesus" role="alert">  <h4 class="mt-0 header-title"> All Resolutions attached to Power Structures</h4></div>



                                   
                                   
                                    <table  class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="btn-secondary jesus">Power Structure Name </th>
                                                <th class="btn-secondary jesus">Resolution Title</th>
                                                <th >Status</th>
                                               
                                               
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($PowerResolutions))

                                            @foreach($PowerResolutions as $PowerResolution)


                                            <tr>
                                                <td>{{$PowerResolution->PowerStructureName}}</td>
                                                <td>{{$PowerResolution->ResolutionTitle}}</td>
                                               
                                                <td class=" jesus <?php 

                                                if($PowerResolution->ResolutionStatus=='Completed'){


                                                    echo "btn-success";
                                                }



                                                if($PowerResolution->ResolutionStatus=='Ongoing'){


                                                    echo "btn-warning";
                                                }




                                                if($PowerResolution->ResolutionStatus=='Pending'){


                                                    echo "btn-danger";
                                                }




                                                if($PowerResolution->ResolutionStatus=='Delayed'){


                                                    echo "btn-dark";
                                                }


                                                 if($PowerResolution->ResolutionStatus=='Terminated'){


                                                    echo "btn-default";
                                                }

                                                ?>">{{$PowerResolution->ResolutionStatus}}</td>
                                                 
                                               
                                               
                                            </tr>

                                            
                                            @endforeach

                                            @endif


                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-6">
      <div class="card">
          <div class="card-body">
          	<div  class="alert alert-danger jesus" role="alert">
              <h4 class="mt-0 header-title"> Joint Permanent Commissions (JPC) Resolutions</h4>
</div>



            <table id="datatable" class="table table-striped table-bordered dt-responsive "
                  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                      <tr>
            <th class="btn-info">JPC Name </th>
            <th class="btn-primary">Resolution Title</th>
            <th class="btn-success">Resolution Status</th>
            

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
            



                      </tr>


                      @endforeach

                      @endif





                  </tbody>
              </table>
          </div>
      </div>
  </div><!-- end col -->

                    </div><!-- end row -->







 <div class="modal fade " tabindex="-1" id="vfgcsns" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Project Event Resolutions
                                                                </h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                                                        	  <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">  Project Events' Resolutions</h4>
                                   

                                    <table id="datatable" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>  
                                                <th>Resolution Title </th>
                                                <th class="btn-dark jesus">Event Name </th>
                                                <th>Event's Project </th>
                                                <th class="btn-dark">Resolution Status</th>
                                                
                                                
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
                                                
                                            </tr>

                                            
                                            @endforeach

                                            @endif


                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                                                            
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->













        @include('main.footer')