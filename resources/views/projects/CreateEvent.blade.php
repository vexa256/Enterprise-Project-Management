				<div class="row">
				    <div class="col-sm-12">
				        <div class="card">
				            <div class="card-body">
				                <h4 class="mt-0 header-title">Create an event for the project :<b>{{$Project->ProjectName}}</b></h4>



				                @if ($errors->any())

				                @foreach ($errors->all() as $error)

				                <div class="alert alert-danger" role="alert"><strong>Error</strong>

				                    {{ $error }} </div>

				                @endforeach

				                @endif



				                <p class="text-muted m-b-30 font-14">The system automatically tracks events attached to the selected
				                    project</p>
				                <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{route('SubmitEvent')}}">



				                    {{ csrf_field() }}


				                    <input type="hidden" value="{{$Project->ProjectName}}" name="ProjectName">
				                    <input type="hidden" value="{{$Project->ProjectID}}" name="ProjectsID">
				                    <input type="hidden" value="{{$Project->ProjectInitiative}}" name="InitiativeName">
				                    <input type="hidden" value="{{$Project->InitiativeID}}" name="InitiativeID">

				                    <h3>Event Identity</h3>
				                    <fieldset>
				                        <div class="row">
				                            <div class="col-md-12">
				                                <div class="form-group row"><label for=""
				                                        class="col-lg-3 col-form-label">Event Name</label>
				                                    <div class="col-lg-9"><input name="EventName"
				                                            type="text" required class="form-control"></div>
				                                </div>
				                            </div>

				                            <div class="col-md-12">
				                                <div class="form-group row"><label for=""
				                                        class="col-lg-3 col-form-label">Event Description</label>
				                                    <div class="col-lg-9"><textarea name="Description"
				                                            type="text" required class="editor form-control"></textarea></div>
				                                </div>
				                            </div>
				                            
				                            
				                            

				                        </div>

				                    </fieldset>
				                    <h3> Stake Holders</h3>
				                    <fieldset>
				                        <div class="row">
				                              <div class="col-md-12">
				                                <div class="form-group row"><label for=""
				                                        class="col-lg-3 col-form-label">Stake Holders</label>
				                                    <div class="col-lg-9"><textarea name="StakeHolders"
				                                            type="text" required class="editor form-control"></textarea></div>
				                                </div>
				                            </div>

				                        </div>

				                    </fieldset>

				                    <h3>Resolutions  and status</h3>
				                    <fieldset>


				                        <div class="row">
				                              <div class="col-md-12">
				                                <div class="form-group row"><label for=""
				                                        class="col-lg-3 col-form-label">Resolutions</label>
				                                    <div class="col-lg-9"><textarea name="Resolutions"
				                                            type="text" required class="editor form-control"></textarea></div>
				                                </div>
				                            </div>



                                                 <div class="col-md-12">
                                                   <div class="form-group row"><label for=""
				                                        class="col-lg-3 col-form-label">Resolutions Status</label>
                                                        <div class="col-lg-9">
                                                                <select class="form-control" name="Resolution_Status">
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
				                                    <div class="col-lg-9">
				                                        <input type="submit" class="btn btn-danger jesus" value="Submit Event">
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
