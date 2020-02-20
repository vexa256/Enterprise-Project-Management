<div class="modal fade " tabindex="-1" role="dialog" id="addnewjpc" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">
                                                                Create a new JPC</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                           
                                                            <!---FORM--->
                                                                            <div class="row">
                    <div class="col-sm-12">
                        <div class="card btn-dark jesus">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Create JPC</h4>



                                @if ($errors->any())

                                @foreach ($errors->all() as $error)

                                <div class="alert alert-danger" role="alert"><strong>Error</strong>

                                    {{ $error }} </div>

                                @endforeach

                                @endif



                                <p class="text-muted m-b-30 font-14" style="color: black">The system automatically tracks all JPCs created</p>
                                <form id="" class="form-horizontal " method="POST" action="{{route('SubmitJPC')}}">



                                    {{ csrf_field() }}



                                  
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row"><label for=""
                                                        class="col-lg-3 col-form-label">JPC Name</label>
                                                    <div class="col-lg-9"><input name="jpcName"
                                                            type="text" required class="form-control"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row"><label for=""
                                                        class="col-lg-3 col-form-label">JPC Description</label>
                                                    <div class="col-lg-9"><textarea name="jpcDescription"
                                                            type="text" required class="editor form-control"></textarea></div>
                                                </div>
                                            </div>


                                                <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-9">
                                                        <input type="submit" class="btn btn-danger jesus" value="Submit JPC">
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

                                                            <!---FORM--->

                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->