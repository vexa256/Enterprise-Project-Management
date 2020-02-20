        @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')

        
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <h4 class="page-title"> Statistics </h4>

                                          @include('projects.stats')
                               
                            </div>
                        </div>
                    </div><!-- end row -->
                           
                       
         @include('main.footer')