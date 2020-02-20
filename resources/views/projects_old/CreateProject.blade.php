                  <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Create a new project</h4>



                                         @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif



                                    <p class="text-muted m-b-30 font-14">The system automatically enables you to track and manage many aspects of a project that is created</p>
                                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{ route('CreateProject') }}">

                                        {{ csrf_field() }}

                                        <h3> Identity Details</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                <div class="col-lg-12"><input placeholder="Project Initiative" name="ProjectInitiative" type="text"
                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">

                                                    <div class="form-group row">
                                        <div class="col-lg-12"><input placeholder="Project Name"  name="ProjectName" type="text"
                                                                class="form-control"></div>
                                                    </div>
                                                </div>


                                                 <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                                <select class="form-control" name="ProjectStatus">
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
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Implementing Countries</label>
                                                        <div class="col-lg-9"><textarea name="ProjectImplementingCountries" type="text"
                                                                class="editor form-control">Separate the implementing countries with a comma. For example Uganda, Kenya, Tanzania</textarea></div>
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
                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project End Date</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectEndTime" type="date"
                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Duration</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectDuration" type="text"
                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Funder</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectFunder" type="text"
                                                                class="form-control"></div>
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
                                                            <textarea name="ProjectDescription" class="form-control" style="height: 300px; ">For example , deliverables , objectives, goals, implementation strategy, etc</textarea>

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
                                                            <input   name="ProjectFunder" type="submit" class="btn btn-info jesus" value="Create New Project">
                                                        </div>
                                                    </div>
                                                </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->