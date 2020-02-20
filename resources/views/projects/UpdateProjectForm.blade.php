                  <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Update Project <b>{{$projects->ProjectName}}</b></h4>



                                         @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif



                                    <p class="text-muted m-b-30 font-14">Use this interface to update projects

                                          <a href="{{url('/ManageProjects')}}" class="btn jesus btn-sm float-right btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
                                    </p>

                                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{ route('UpdateProject', ['id'=>$projects->id]) }}">

                                        {{ csrf_field() }}

                                        <h3> Identity Details</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-4 col-form-label">Project Initiative</label>
                                                <div class="col-lg-8"><input name="ProjectInitiative" type="text"  required  readonly value="{{$projects->ProjectInitiative}}" class="form-control"></div> </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-4 col-form-label">Project Name</label>
                                        <div class="col-lg-8">
                                            <input value="{{$projects->ProjectName}}"  name="ProjectName" type="text"  required
                                                                class="form-control"></div>
                                                    </div>
                                                </div>


                                                 <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for=""
                                                            class="col-lg-4 col-form-label">Project Status</label>
                                                        <div class="col-lg-8">
                                                                <select class="form-control" name="ProjectStatus">
                                                                    
                                                                    <option value="{{$projects->ProjectStatus}}">{{$projects->ProjectStatus}}</option>
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
                                                        <div class="col-lg-9"><textarea name="ProjectImplementingCountries" type="text"  required
                                                                class="editor form-control">{{$projects->ProjectImplementingCountries}}</textarea></div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            
                                        </fieldset>
                                        <h3> Time  Properties</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Start Date</label>
                                                        <div class="col-lg-9"><input value="{{$projects->ProjectStartTime}}" name="ProjectStartTime" type="date"
                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project End Date</label>
                                                        <div class="col-lg-9"><input id="" value="{{$projects->ProjectEndTime}}" name="ProjectEndTime" type="date"
                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Duration</label>
                                                        <div class="col-lg-9"><input value="{{$projects->ProjectDuration}}"
                                                                name="ProjectDuration" type="text"  required
                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </fieldset>

                                         <h3>Project Funding </h3>
                                        <fieldset>
                                            

                                              <div class="row">

                                                  <div class="col-md-12">
                                                    <div class="form-group row"><label for="txtNameCard"
                                                            class="col-lg-3 col-form-label">Project Funders</label>
                                                        <div class="col-lg-9">
                                                            <textarea name="ProjectFunders" class=" editor form-control" style="height: 100px; ">{{$projects->ProjectFunders}}</textarea>

                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Funding Amount</label>
                                                        <div class="col-lg-9"><input value="{{$projects->ProjectFundingAmount}}"
                                                                name="ProjectFundingAmount" type="text"  required
                                                                class="form-control"></div>
                                                    </div>
                                                </div>



                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Funding Currency</label>
                                                        <div class="col-lg-9"><input value="{{$projects->ProjectFundingCurrency}}"
                                                                name="ProjectFundingCurrency" type="text"  required
                                                                class="form-control"></div>
                                                    </div>
                                                </div>


                                              </div>


                                        </fieldset>

                                          <h3>Project Budget</h3>

                                        <fieldset>
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Budget</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectBudget" type="text"  required
                                                                class="form-control" value="{{$projects->ProjectBudget}}"></div>
                                                    </div>
                                                </div>


                                              </div>



                                               <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Actual Budget</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectActualBudget" type="text"  required
                                                                class="form-control" value="{{$projects->ProjectActualBudget}}"></div>
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
                                                            <textarea name="ProjectDescription" class=" editor form-control" style="height: 300px; ">{{$projects->ProjectDescription}}</textarea>

                                                        </div>

                                                    </div>
                                                </div>

                                                 <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input type="submit" class="btn btn-info jesus" value="Update  Project">
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