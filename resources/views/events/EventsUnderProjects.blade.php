 @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')
       
        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                	<div class="alert alert-success jesus" role="alert">  <h4 class="mt-0 header-title">Manage All Events Under the Project  {{$Projects->ProjectName}}</h4></div>
                                    
                                   
                                     @include('events.EventModals')



                                     @include('main.footer')