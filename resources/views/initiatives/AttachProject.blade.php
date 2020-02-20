                  <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Attach Project to the initiative <b>{{$Initiatives->initiativeName}}</b></h4>



                                         @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif



                                    <p class="text-muted m-b-30 font-14">The system automatically adds and projects that have been attached to initiatives</p>
                                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{route('CreateProject')}}">

                                        {{ csrf_field() }}

                                        <h3> Identity Details</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                <div class="col-lg-12"><input placeholder="Project Initiative" name="ProjectInitiative" type="text"  required  readonly value="{{$Initiatives->initiativeName}}" class="form-control"></div> 
                                                <input type="hidden" name="InitiativeID" value="{{$Initiatives->InitiativeID}}"></div>
                                                </div>
                                                <div class="col-md-4">

                                                    <div class="form-group row">
                                        <div class="col-lg-12"><input placeholder="Project Name"  name="ProjectName" type="text"  required
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
                                                        <div class="col-lg-9"><textarea name="ProjectImplementingCountries" type="text"  required
                                                                class="editor form-control"></textarea></div>
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
                                                            <textarea name="ProjectFunders" class=" editor form-control" style="height: 100px; "></textarea>

                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Funding Amount</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectFundingAmount" type="text"  required
                                                                class="form-control"></div>
                                                    </div>
                                                </div>



                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Funding Currency</label>
                                                        <div class="col-lg-9"><input id=""
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
                                                                class="form-control"></div>
                                                    </div>
                                                </div>


                                              </div>



                                               <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-3 col-form-label">Project Actual Budget</label>
                                                        <div class="col-lg-9"><input id=""
                                                                name="ProjectActualBudget" type="text"  required
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
                                                            <textarea name="ProjectDescription" class=" editor form-control" style="height: 300px; ">For example , deliverables , objectives, goals, implementation strategy, etc</textarea>

                                                        </div>

                                                    </div>
                                                </div>

                                                 <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input type="submit" class="btn btn-info jesus" value="Attach  Project">
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