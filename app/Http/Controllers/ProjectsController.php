<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Initiatives;
use App\Projects;
use App\Events;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class ProjectsController extends Controller
{
   

		public function ProjectsUnderInitiatives($id)
		{
			

			$Initiatives = Initiatives::find($id);

			$data_id = $Initiatives->InitiativeID;

			$Projects =  Projects::where('InitiativeID', '=', $data_id)->get();	

			$data = [


				'initiatives' => $Initiatives,
				'projects'   => $Projects

			];


			return view('projects.ProjectUnderInitiatives', $data);



		}




		public function AttachProject($id)

		{

				 $Initiatives = Initiatives::find($id);


		 $data = [
           
            'Initiatives' => $Initiatives
        ];

        return view('AttachProject', $data);



			
		}



			public function CreateProject(Request $request)
			{
				
					$request->validate([
			        
			        'ProjectName' => 'required',
			        'ProjectInitiative' => 'required',
			        'ProjectFunders' => 'required',
			        'ProjectFundingAmount' => 'required|numeric',
			        'ProjectFundingCurrency' => 'required',
			        'ProjectImplementingCountries' => 'required',
			        'ProjectStartTime' => 'required',
			        'ProjectEndTime' => 'required',
			        'ProjectDuration' => 'required',
			        'ProjectStatus' => 'required',
			        'ProjectBudget' => 'required|numeric',
			        'ProjectActualBudget' => 'required|numeric',
			        'ProjectDescription' => 'required'
			        
			        
			    ]);





					 $project = new Projects;

					  $project->ProjectName = $request->input('ProjectName');
					  $project->ProjectInitiative = $request->input('ProjectInitiative');
					  $project->ProjectFunders = $request->input('ProjectFunders');
					  $project->ProjectFundingAmount = $request->input('ProjectFundingAmount');
					  $project->ProjectFundingCurrency = $request->input('ProjectFundingCurrency');
					  $project->ProjectImplementingCountries = $request->input('ProjectImplementingCountries');
					  $project->ProjectStartTime = $request->input('ProjectStartTime');
					  $project->ProjectEndTime = $request->input('ProjectEndTime');
					  $project->ProjectDuration = $request->input('ProjectDuration');
					  $project->ProjectDescription = $request->input('ProjectDescription');
					  $project->ProjectStatus = $request->input('ProjectStatus');
					  $project->InitiativeID = $request->input('InitiativeID');



					  $Budget =  $project->ProjectBudget = $request->input('ProjectBudget');
					  $ActualBudget = $project->ProjectActualBudget = $request->input('ProjectActualBudget');
					  $project->ProjectBudgetVariance = $Budget-$ActualBudget;


					  $hasher =  $request->input('ProjectName');
			          $hasher2 =  Carbon::now();
			          $hasher3 = $hasher2->toDateTimeString();
			          $finalHash= $hasher3.'nswc'.$hasher;
			          $project->ProjectID = Hash::make($finalHash);
			          $project->save();




			          $data =  "Swal.fire('Successful', 'The Project has been created successfully, You can now manage projects from this interface', 'success')";

        			 return redirect()->route('ManageProjects')->with('AttachProject_notify', $data);
					  




			}




			public function ManageProjects()
			{


				 $projects = Projects::all();

				$data = [
           
                'projects' => $projects


       		     ];
     
                 return view('ManageProjects', $data);



			}




			public function UpdateProjectStatus($id, Request $request)
        {
           

           $validatedData = $request->validate([
       
           'ProjectStatus' => 'required'
       
        
            ]);


            $projects = Projects::find($id);
             $projects->ProjectStatus = $request->input('ProjectStatus');
               $projects->save();
                 $data =  "Swal.fire('Successful', 'The project status has been update successfully', 'success')";
                   return redirect()->route('ManageProjects')->with('Update_notify_status', $data);


        }





         public function DeleteProject($id)

    {
        

        $projects = Projects::find($id);
        $projects->delete();
         $data =  "Swal.fire('Successful', 'The project has been deleted successfully', 'success')";
         return redirect()->route('ManageProjects')->with('Delete_notify', $data);






    }




    public function UpdateProjectForm($id)
    {



        $projects = Projects::find($id);
        $data = [
           
            'projects' => $projects
        ];

        return view('UpdateProjectForm', $data);

        
    }


       public function UpdateProject($id, Request $request) 

        {
            


      $request->validate([
        
                    'ProjectName' => 'required',
			        'ProjectInitiative' => 'required',
			        'ProjectFunders' => 'required',
			        'ProjectFundingAmount' => 'required|numeric',
			        'ProjectFundingCurrency' => 'required',
			        'ProjectImplementingCountries' => 'required',
			        'ProjectStartTime' => 'required',
			        'ProjectEndTime' => 'required',
			        'ProjectDuration' => 'required',
			        'ProjectStatus' => 'required',
			        'ProjectBudget' => 'required|numeric',
			        'ProjectActualBudget' => 'required|numeric',
			        'ProjectDescription' => 'required'
			        
    ]);



        


        $project = Projects::find($id);
                      $project->ProjectName = $request->input('ProjectName');
					  $project->ProjectInitiative = $request->input('ProjectInitiative');
					  $project->ProjectFunders = $request->input('ProjectFunders');
					  $project->ProjectFundingAmount = $request->input('ProjectFundingAmount');
					  $project->ProjectFundingCurrency = $request->input('ProjectFundingCurrency');
					  $project->ProjectImplementingCountries = $request->input('ProjectImplementingCountries');
					  $project->ProjectStartTime = $request->input('ProjectStartTime');
					  $project->ProjectEndTime = $request->input('ProjectEndTime');
					  $project->ProjectDuration = $request->input('ProjectDuration');
					  $project->ProjectDescription = $request->input('ProjectDescription');
					  $project->ProjectStatus = $request->input('ProjectStatus');

					  $Budget =  $project->ProjectBudget = $request->input('ProjectBudget');
					  $ActualBudget = $project->ProjectActualBudget = $request->input('ProjectActualBudget');
					  $project->ProjectBudgetVariance = $Budget-$ActualBudget;

        $project->save();
        $data =  "Swal.fire('Successful', 'The project has been updated successfully', 'success')";
       


        return redirect()->route('ManageProjects')->with('Update_notify', $data);
       


}


	   public function CreateEvent($id) {

		$project = Projects::find($id);



		 $data = [
           
            'Project' => $project
        ];

        return view('CreateEvent', $data);



				
			}




			public function SubmitEvent(Request $request)
			{
				
				$request->validate([
			        
			        'EventName' => 'required',
			        'StakeHolders' => 'required',
			        'Description' => 'required',
			        'Resolutions' => 'required',
			        'Resolution_Status' => 'required',
			        
			        
			    ]);


			    $Events = new Events;

			     $Events->EventName = $request->input('EventName');
			     $Events->StakeHolders = $request->input('StakeHolders');
			     $Events->Description = $request->input('Description');
			     $Events->Resolutions = $request->input('Resolutions');
			     $Events->Resolution_Status = $request->input('Resolution_Status');
			     $Events->InitiativeID = $request->input('InitiativeID');
			     $Events->InitiativeName = $request->input('InitiativeName');
			     $Events->ProjectName = $request->input('ProjectName');
			     $Events->ProjectsID = $request->input('ProjectsID');

			          $hasher =  $request->input('EventName');
			          $hasher2 =  Carbon::now();
			          $hasher3 = $hasher2->toDateTimeString();
			          $finalHash= $hasher3.'nswc'.$hasher;
			          $Events->EventID = Hash::make($finalHash);
			          $Events->save();
			    

			     $data =  "Swal.fire('Successful', 'The Event has been created successfully, You can now manage project events from this interface', 'success')";

        			 return redirect()->route('ManageEvents')->with('Event_create', $data);
			 


			}


				
        /**Completed Projects**/


        public function CompletedProjects()
        {
         
            $projects = Projects::where('ProjectStatus', '=', 'Completed')->get();


            $data = [
           
            'projects' => $projects
        ];


            return view('CompletedProjects', $data);



        }



        /**Completed Projects**/



        /**Pending Projects**/


          public function PendingProjects()
          {
            


             $projects = Projects::where('ProjectStatus', '=', 'Pending')->get();


            $data = [
           
            'projects' => $projects
        ];


            return view('PendingProjects', $data);






          }




        /**Pending Projects**/




        /**Delayed Projects**/



             public function DelayedProjects()
          {
            


             $projects = Projects::where('ProjectStatus', '=', 'Delayed')->get();


            $data = [
           
            'projects' => $projects
        ];


            return view('DelayedProjects', $data);






          }




        /**Delayed Projects**/





        /**Terminated Projects***/

             public function TerminatedProjects()
          {
            


             $projects = Projects::where('ProjectStatus', '=', 'Terminated')->get();


        $data = [
           
            'projects' => $projects
        ];


            return view('TerminatedProjects', $data);






          }



        /**Terminated Projects***/






        /**Ongoing Projects**/


           public function OngoingProjects()
           
          {
            


             $projects = Projects::where('ProjectStatus', '=', 'Ongoing')->get();


        $data = [
           
            'projects' => $projects
        ];


            return view('OngoingProjects', $data);






          }






        /**Ongoing Projects**/




        public function UpdateActualBudget($id, Request $request)
        {
        	
        	$project = Projects::find($id);


        	          $Budget =  $project->ProjectBudget;
					  $ActualBudget = $request->input('ProjectActualBudget');
					  $project->ProjectActualBudget = $ActualBudget;
					  $project->ProjectBudgetVariance = $Budget-$ActualBudget;



					   $project->save();

                $data =  "Swal.fire('Successful', 'The project actual budget has been updated successfully and project budget variance has been updated', 'success')";
       


        return redirect()->route('ManageProjects')->with('Update_notify', $data);



        }





}
