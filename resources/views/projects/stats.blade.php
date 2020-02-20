 @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')


      


                         <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">

                                     <div class="alert alert-danger jesus" role="alert">  <h4 class="mt-0 header-title">  General Statistics</h4></div>



                                   
                                   
                                    <table  class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="btn-danger">Power Structures </th>
                                                <th class="btn-dark">Projects</th>
                                                <th class="btn-secondary">JPCs</th>
                                                <th class="btn-warning">Initiatives</th>
                                               
                                               
                                               
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                
                                                <td>{{$PowerStructure}}</td>
                                                <td>{{$Totalprojects}}</td>
                                                <td>{{$JPC}}</td>
                                                <td>{{$Totalinitiatives}}</td>
                                                
                                            </tr>
                                           
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->



                         <div class="col-6">
                            <div class="card">
                                <div class="card-body">

                                     <div class="alert alert-warning jesus" role="alert">  <h4 class="mt-0 header-title">  Resolutions attached to Power Structures </h4></div>



                                   
                                   
                                    <table  class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="btn-success">Completed </th>
                                                <th class="btn-danger">Pending</th>
                                                <th class="btn-warning">Ongoing</th>
                                                <th class="btn-dark">Delayed</th>
                                                <th class="btn-secondary">Terminated</th>
                                               
                                               
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                
                                                <td>{{$PowerResolutionC}}</td>
                                                <td>{{$PowerResolutionP}}</td>
                                                <td>{{$PowerResolutionO}}</td>
                                                <td>{{$PowerResolutionD}}</td>
                                                <td>{{$PowerResolutionT}}</td>
                                                
                                            </tr>
                                           
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->



 <div class="col-6">
                            <div class="card">
                                <div class="card-body">

                                     <div class="alert alert-info jesus" role="alert">  <h4 class="mt-0 header-title">  Resolutions attached to JPC </h4></div>



                                   
                                   
                                    <table  class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                               <th class="btn-success">Completed </th>
                                                <th class="btn-danger">Pending</th>
                                                <th class="btn-warning">Ongoing</th>
                                                <th class="btn-dark">Delayed</th>
                                                <th class="btn-secondary">Terminated</th>
                                               
                                               
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                
                                                <td>{{$StatusC}}</td>
                                                <td>{{$StatusP}}</td>
                                                <td>{{$StatusO}}</td>
                                                <td>{{$StatusD}}</td>
                                                <td>{{$StatusT}}</td>
                                                
                                            </tr>
                                           
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->





 <div class="col-6">
                            <div class="card">
                                <div class="card-body">

                                     <div class="alert alert-dark jesus" role="alert">  <h4 class="mt-0 header-title">  Resolutions attached to Project Events </h4></div>



                                   
                                   
                                    <table  class="table table-striped table-bordered dt-responsive "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                               <th class="btn-success">Completed </th>
                                                <th class="btn-danger">Pending</th>
                                                <th class="btn-warning">Ongoing</th>
                                                <th class="btn-dark">Delayed</th>
                                                <th class="btn-secondary">Terminated</th>
                                               
                                               
                                               
                                               
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                
                                                <td>{{$EventResolutionsC}}</td>
                                                <td>{{$EventResolutionsP}}</td>
                                                <td>{{$EventResolutionsO}}</td>
                                                <td>{{$EventResolutionsD}}</td>
                                                <td>{{$EventResolutionsT}}</td>
                                            </tr>
                                           
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->





           @include('main.footer')