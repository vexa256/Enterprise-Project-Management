        @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')

                      <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Update Project Event Resolution</h4>

   <div class="alert alert-success jesus" role="alert"><strong>You are currently updating the Resolution:</strong> <strong><span style="color:black">{{$Resolution->ResolutionTitle}}</span></strong></div>

                                         @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif



                                    <p class="text-muted m-b-30 font-14">The system automatically enables you to track and manage many aspects of every resolution that is created</p>
        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{ route('UpdateProjectEventResolutionWhole', ['id'=>$Resolution->id]) }}">

                                        {{ csrf_field() }}


                                    <input type="hidden" name="EventName" value="{{$Resolution->EventName}}">
                                    
                                    <input type="hidden" name="InitiativeID" value="{{$Resolution->InitiativeID}}">

                                        <input type="hidden" name="EventID" value="{{$Resolution->EventID}}">

                                        <input type="hidden" name="ProjectName" value="{{$Resolution->ProjectName}}">

                                        <input type="hidden" name="ProjectID" value="{{$Resolution->ProjectsID}}">

                                        <h3 class="">Add Resolution</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for=""
                                                            class="col-lg-3col-form-label">Event Name</label>
                                                <div class="col-lg-9"><input value="{{$Resolution->EventName}}" name="" readonly type="text" class="form-control"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for=""
                                                            class="col-lg-2 col-form-label">Resolution Title</label>
                                                <div class="col-lg-10"><input value="{{$Resolution->ResolutionTitle}}" name="ResolutionTitle"  type="text" class="form-control"></div>
                                                    </div>
                                                </div>



                                                 <div class="col-md-12">
                                                    <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <textarea  name="ResolutionDescription" type="text"  class="form-control editor" > {{$Resolution->ResolutionDescription}}</textarea></div>
                                                    </div>
                                                </div>

                                                
                                                
                                            </div>
                                           
                                            
                                        </fieldset>

                                          <h3 class="">More Resolution Data</h3>



                                        <fieldset>
                                            



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
                                                    <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <textarea name="ImplementationStatus"  type="text"  class="form-control editor" > {{$Resolution->ImplementationStatus}}</textarea></div>
                                                    </div>
                                                </div>


                                                 <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input type="submit" class="btn btn-info jesus" value="Update  Resolution">
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







        @include('main.footer')