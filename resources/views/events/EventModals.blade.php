<table id="datatable" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="btn-dark jesus">Event Name </th>
                                                <th>Event's Project </th>
                                                <th> Project's Initiative </th>
                                                <th class="jesus btn-info">View More </th>
                                                <th>Update</th>
                                                <th class="btn-info jesus">Add Resolution</th>
                                                <th class="btn-primary jesus">All Resolutions</th>
                                                <th class="btn-danger">Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($events))

                                            @foreach($events as $event)


                                            <tr>
                                                <td>{{$event->EventName}}</td>
                                                <td>{{$event->ProjectName}}</td>
                                                <td>{{$event->InitiativeName}}</td>
                                                
                                               
                                                <td><a data-toggle="modal" href="#ViewMoreInfo{{$event->id}}" class="btn jesus btn-sm btn-danger"><i class="fas fa-binoculars "></i></a></td>
                                                <td><a href="{{ route('UpdateEventForm', ['id'=>$event->id]) }}" class="timo btn jesus btn-sm btn-primary"><i class="fas fa-edit "></i></a></td>
                                                <td><a href="{{ route('CreateProjectEventResolutionForm', ['id'=>$event->id]) }}"  class="btn  timo2 jesus btn-sm btn-dark"><i class="fas fa-plus "></i></a></td>
                                                <td><a href="{{ route('ResolutionsUnderEvent', ['id'=>$event->id]) }}"  class="btn  timo2 jesus btn-sm btn-dark"><i class="fas fa-binoculars"></i></a></td>
                                                <td><a data-route="{{ route('DeleteEvent', ['id'=>$event->id]) }}" href="#" class="btn DeleteEventClass timo2 jesus btn-sm btn-danger"><i class="fas fa-trash "></i></a></td>
                                               
                                            </tr>

                                            
                                            @endforeach

                                            @endif


                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->



@include('events.ViewMore')