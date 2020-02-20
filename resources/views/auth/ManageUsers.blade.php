<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Manage All System Users</h4>
                                    <p class="text-muted m-b-30">All System Users
                                         <a class="float-right btn btn-sm jesus btn-danger" href="{{route('Home')}}"><i class="fas fa-home"></i> Home</a>
                                    </p>

                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>User's Name</th>
                                              
                                                <th>Email </th> 
                                                <th class="jesus btn-danger">User Role</th>
                                                <th>Delete</th>
                                                <th>Update User Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($Users))

                                            @foreach($Users as $User)


                                            <tr>
                                                <td>{{$User->name}}</td>
                                              
                                                <td>{{$User->email}}</td>
                                                <td  class="btn-dark">{{$User->role}}</td>    
                                               
                                                <td><a data-route="{{route('DeleteUser', ['id'=>$User->id])}}" href="#" class="btn jesus btn-sm btn-danger DeleteUserClass"><i class="fas fa-trash "></i></a></td>
                                                <td><a href="#ChangeStatusUserID{{$User->id}}" data-toggle="modal" class="btn jesus btn-sm btn-primary"><i class="fas fa-edit "></i></a></td>
                                                
                                                
                                            </tr>

                                            
                                            @endforeach

                                            @endif


                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->




 @if(!is_null($Users))

                                            @foreach($Users as $User)

                     <div class="modal fade" id="ChangeStatusUserID{{$User->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Change User Role</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

               


                                    <form method="POST" action="{{route('UserRole', ['id'=>$User->id])}}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="col-md-12">
                                                    <div class="form-group row"><label for=""
                                                            class="col-lg-5 col-form-label">User role</label>
                                                        <div class="col-lg-7">
                                                                <select class="form-control" name="role">
                                                                     <option value="Choose User Role">Choose User Role</option>
                                                                    
                                                                    <option value="Admin">Admin</option>
                                                                    <option value="User">User</option>
                                                                    <option style="display: none;" value="Super_Admin">Super Admin</option>
                                                                    
                                                                </select>

                                                        </div>
                                                    </div>
                                                </div>



                                                 <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9">
                                                            <input   name="ProjectFunder" type="submit" class="btn btn-info jesus" value="Update User Role">
                                                        </div>
                                                    </div>
                                                </div>

                                    </form> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> @endforeach @endif





