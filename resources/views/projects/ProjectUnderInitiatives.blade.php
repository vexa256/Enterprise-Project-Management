  @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                	<div class="alert alert-success jesus" role="alert">  <h4 class="mt-0 header-title">Manage All Projects Under the Initiative  {{$initiatives->initiativeName}}</h4></div>
                                  
                                    <p class="text-muted m-b-30">This interface gives you access to managing all projects under the initiative  {{$initiatives->initiativeName}}</p>
                                     @include('projects.ProjectsModals')





                                       @include('main.footer')