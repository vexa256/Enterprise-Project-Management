                 @if(!is_null($projects))
                   <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Update Project</h4>



                                         @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif



                                    <p class="text-muted m-b-30 font-14">You are currently updating the project <span style="color: black">
                                        
                                        {{$projects->ProjectName}}

                         </span></p>
                                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action=" {{ route('UpdateProject', ['id'=>$projects->id]) }}">

                                        {{ csrf_field() }}

                                        <h3> Identity Details</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Name</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectName" type="text"
                                                                class="form-control"  value="{{$projects->ProjectName}}"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Owner</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectOwner" type="text"
                                                                class="form-control" value="{{$projects->ProjectOwner}}"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Implementor</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectImplementer" type="text"
                                                                class="form-control" value="{{$projects->ProjectImplementer}}"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Status</label>
                                                        <div class="col-lg-9">
                                                                <select class="form-control" name="ProjectStatus">
                                                                    <option value="{{$projects->ProjectStatus}}">{{$projects->ProjectStatus}}</option>
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
                                            </div>
                                            
                                        </fieldset>
                                        <h3>Funding and Time </h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Start Date</label>
                                                        <div class="col-lg-9"><input name="ProjectStartTime" type="date"
                                                                class="form-control" value="{{$projects->ProjectStartTime}}"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project End Date</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectEndTime" type="date"
                                                                class="form-control" value="{{$projects->ProjectEndTime}}"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Duration</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectDuration" type="text"
                                                                class="form-control" value="{{$projects->ProjectDuration}}"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Funder</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectFunder" type="text"
                                                                class="form-control" value="{{$projects->ProjectFunder}}"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </fieldset>
                                        <h3>Description</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for="txtNameCard"
                                                            class="col-lg-3 col-form-label">Descriptive information</label>
                                                        <div class="col-lg-9">
                                                            <textarea name="ProjectDescription" class="form-control" style="height: 300px; ">{{$projects->ProjectDescription}}</textarea>

                                                        </div>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                        </fieldset>
                                        <h3>Confirmation</h3>
                                        <fieldset>
                                            <div class="p-3">
                                                <div class="jumbotron jesus">  
                                                Please confirm the accuracy of the information provided in this form, Ensure that no fields have been left blank,   
                                            </div>
                                            </div>
                                            
                                                        <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input type="submit" class="btn btn-info jesus" value="Update Project">
                                                        </div>
                                                    </div>
                                                </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                    @endif

                     @if(is_null($projects))

                        {{'Hello no project is currently selected for editing'}}

                    @endif