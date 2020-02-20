                  <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Create a new Power Structure</h4>



                                         @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif



                                    <p class="text-muted m-b-30 font-14">The system automatically enables you to track and manage many aspects of every Power Structure that is created</p>
        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{route('AddPowerStructures')}}">

                                        {{ csrf_field() }}
                                        <input type="hidden" name="initiativeName" value="{{$initiativeName}}">
                                        <input type="hidden" name="initiativeID" value="{{$initiativeID}}">

                                        <h3 class="">Add Power Structure</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for=""
                                                            class="col-lg-2 col-form-label">Initiative Name</label>
                                                <div class="col-lg-10"><input value="{{$initiativeName}}" name="" readonly type="text" class="form-control"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for=""
                                                            class="col-lg-3 col-form-label">Power Structure Name</label>
                                                <div class="col-lg-9"><input value="" name="PowerStructureName"  type="text" class="form-control"></div>
                                                    </div>
                                                </div>
                                                



                                                 <div class="col-md-12">
                                                    <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <textarea name="PowerStructureDescription" type="text"  class="form-control editor" >Power Structure Description</textarea></div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input   name="ProjectFunder" type="submit" class="btn btn-info jesus" value="Create Power Structure">
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