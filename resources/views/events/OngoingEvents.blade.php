<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Manage Ongoing Project Events</h4>
                                    <p class="text-muted m-b-30">Manage all Ongoing Events attached to specific projects
                                         <a class="float-right btn btn-sm jesus btn-danger" href="{{route('ManageProjects')}}"><i class="fas fa-home"></i> Back to projects</a>
                                    </p>

                                    @include('events.EventModals')