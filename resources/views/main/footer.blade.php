                        
               

 <div class="modal fade" id="Users_adders" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="btn-primary modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Add User</h5><button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                                                                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User Account</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                                


                               </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --> 





























                </div><!-- container-fluid -->
            </div><!-- content -->

             @include('JPC.AddJPC')

            <footer class="footer">© 2019 International and Transboundary Water Affairs Department <span class="d-none d-sm-inline-block"></span>.</footer>
        </div><!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div><!-- END wrapper -->
    

        <script type="text/javascript" src="{{url('assets/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/metisMenu.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/jquery.slimscroll.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/waves.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/app.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/jquery-steps/jquery.steps.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/jszip.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/pdfmake.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/vfs_fonts.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/buttons.html5.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/buttons.print.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/buttons.colVis.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script type="text/javascript" src="{{url('plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{url('ckeditor/ckeditor.js')}}"></script>
        <script type="text/javascript" src="{{url('ckeditor/adapters/jquery.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/app.js')}}"></script>





           @include('notifications.swal')

  

</body>

</html>