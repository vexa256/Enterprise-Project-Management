                  <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Update Power Structure</h4>

                                    <a href="{{ url()->previous() }}" class="btn btn-danger jesus float-right">Back</a>



                                         @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif



                                    <p class="text-muted m-b-30 font-14">This interface  enables you to update Power Structures</p>
        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{ route('UpdatePowerStructure', ['id'=>$PowerStructure->id]) }}">

                                        {{ csrf_field() }}
                                        <input type="hidden" name="initiativeName" value="{{$PowerStructure->InitiativeName}}">
                                        <input type="hidden" name="initiativeID" value="{{$PowerStructure->initiativeID}}">

                                        <h3 class="">Update Power Structure</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for=""
                                                            class="col-lg-2 col-form-label">Initiative Name</label>
                                                <div class="col-lg-10"><input value="{{$PowerStructure->InitiativeName}}" name="" readonly type="text" class="form-control"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for=""
                                                            class="col-lg-3 col-form-label">Power Structure Name</label>
                                                <div class="col-lg-9"><input value="{{$PowerStructure->PowerStructureName}}" name="PowerStructureName"  type="text" class="form-control"></div> </div>
                                                </div>
                                                



                                                 <div class="col-md-12">
                                                    <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <textarea name="PowerStructureDescription" type="text"  class="form-control editor" > {{$PowerStructure->PowerStructureDescription}}</textarea></div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input   name="ProjectFunder" type="submit" class="btn btn-info jesus" value="Update Power Structure">
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