<table id="datatable" class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Project Name </th>
                                                <th>Project's mother initiative </th>
                                               
                                              
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(!is_null($projects))

                                            @foreach($projects as $project)


                                            <tr>
                                                <td>{{$project->ProjectName}}</td>
                                                <td>{{$project->ProjectInitiative}}</td>
                                                
                                               
                                            </tr>

                                            
                                            @endforeach

                                            @endif


                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->


                                          

