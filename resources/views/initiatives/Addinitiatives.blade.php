                  <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Create a new Initiative</h4>



                                         @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif



                                    <p class="text-muted m-b-30 font-14">The system automatically enables you to track and manage many aspects of every initiative that is created</p>
        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{route('CreateInitiative')}}">

                                        {{ csrf_field() }}

                                        <h3>Add Initiative Data</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                <div class="col-lg-12"><input placeholder="Initiative Name" name="initiativeName" type="text" class="form-control"></div>
                                                    </div>
                                                </div>
                                                



                                                 <div class="col-md-12">
                                                    <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <textarea name="Description" type="text"  class="form-control editor" >Brief Description of the initiative</textarea></div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input   name="ProjectFunder" type="submit" class="btn btn-info jesus" value="Create Initiatives">
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