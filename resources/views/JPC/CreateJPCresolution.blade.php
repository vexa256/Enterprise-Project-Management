        @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')

                        <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Attach Resolution to a JPC</h4>



                                         @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif



                                    <p class="text-muted m-b-30 font-14">The system automatically enables you to track and manage many aspects of every resolution that is created</p>
        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{url('/CreateJPCresolution')}}">

                                        {{ csrf_field() }}

                                        <input type="hidden" name="JPCName" value="{{$JPC->jpcName}}">
                                        <input type="hidden" name="JPCID" value="{{$JPC->jpcID}}">

                                        <h3 class="">Add Resolution</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for=""
                                                            class="col-lg-3col-form-label">JPC Name</label>
                                                <div class="col-lg-9"><input value="{{$JPC->jpcName}}" name="" readonly type="text" class="form-control"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for=""
                                                            class="col-lg-2 col-form-label">Resolution Title</label>
                                                <div class="col-lg-10"><input id="" name="ResolutionTitle"  type="text" class="form-control"></div>
                                                    </div>
                                                </div>



                                                 <div class="col-md-12">
                                                    <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <textarea name="ResolutionDescription" type="text"  class="form-control editor" > Resolution Description</textarea></div>
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
                                                                    <option value="">Choose Status</option>
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
                                                    <textarea name="ImplementationStatus"  type="text"  class="form-control editor" > Resolution Implementation Status </textarea></div>
                                                    </div>
                                                </div>


                                                 <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input type="submit" class="btn btn-info jesus" value="Create  Resolution">
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