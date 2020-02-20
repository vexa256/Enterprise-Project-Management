<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="alert alert-success jesus" role="alert"><strong>Manage All  Events attached to the project :</strong> <strong><span style="color:black">{{$project->ProjectName}}</span></strong></div>
                                  
                                    <p class="text-muted m-b-30">Manage all Events attached to specific projects
                                         <a class="float-right btn btn-sm jesus btn-danger" href="{{route('ManageProjects')}}"><i class="fas fa-home"></i> Back to projects</a>
                                    </p>

                                     @include('events.EventModals')