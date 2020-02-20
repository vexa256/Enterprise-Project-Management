<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>The Ministry of Water and Environment (MWE), through its International and Transboundary Water Affairs Department coordinates national efforts to manage shared water resources with the overall objective to secure and safeguard Uganda’s interests in the shared water resources and therefore ensure availability of water to meet her ecosystem and national development needs. The strategic areas of focus are through partnership and cooperative management initiatives through Lake Victoria Basin Commission, (LVBC), Nile Basin Initiative (NBI), Nile Equatorial Lakes Subsidiary Action Program (NELSAP), African Ministers’ Council on Water (AMCOW), Inter-governmental Agency for Development (IGAD) Initiatives, Global Water Partnerships (GWP) and World Meteorological Organization (WMO).</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/metismenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
   
</head>

<body style="background-image: url('assets/images/lock.png');">
    
    <div class="wrapper-page">
        <div class="card overflow-hidden account-card mx-3">
            <div class="bg-primary p-4 text-white text-center position-relative">
                <h4 class="font-20 m-b-5">Login</h4>
                <p class="text-white-50 mb-4"> © 2019 International and Transboundary Water Affairs Department</p>  
                <img src="assets/images/logo-dark.png" height="50" alt="logo">
            </div>
            <div class="account-card-content">
                <form class="form-horizontal m-t-30"  method="POST" action="{{ route('login') }}">

                    <div class="form-group"><label for="username">Email</label> <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     @csrf


                    </div>
                    <div class="form-group"><label for="userpassword">Password</label> <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    </div>
                    <div class="form-group row m-t-20">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox"><input type="checkbox"
                                    class="custom-control-input" id="customControlInline"> </div>
                        </div>
                        <div class="col-sm-6 text-right"><button class="btn btn-primary w-md waves-effect waves-light"
                                type="submit">Log In</button></div>
                    </div>
                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20"></a></div>
                    </div>
                </form>
            </div>
        </div>
      
    </div><!-- end wrapper-page -->
   

    <script type="text/javascript" src="{{url('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/metisMenu.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/waves.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/app.js')}}"></script>
     <script src="{{ asset('js/app.js') }}" defer></script>
</body>


</html>
