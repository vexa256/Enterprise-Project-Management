<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PowerResolution;
use App\PowerStructure;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PowerResolutionController extends Controller
{


		public function ResolutionsUnderPower($id)
		{
			

				$PowerStructure = PowerStructure::find($id);

				$data_id = $PowerStructure->PowerStructureID;

			$Resolutions =  PowerResolution::where('PowerStructureID', '=', $data_id)->get();	

			$data = [


				'PowerStructure' => $PowerStructure,
				'Resolutions'   => $Resolutions

			];


			return view('PowerResolution.ResolutionsUnderPower', $data);






		}





		public function AttachPowerResolutionForm($id)
		{
			$PowerStructure = PowerStructure::find($id);

			$data = [

				'PowerStructure' => $PowerStructure


			];

			return view('AttachPowerResolutionForm', $data);
		}







			public function CreatePowerResolution(Request $request)
			{
				
					$request->validate([
			        
			        'PowerStructureName' => 'required',
			        'PowerStructureID' => 'required',
			        'ResolutionTitle' => 'required',
			        'ResolutionDescription' => 'required',
			        'ResolutionStatus' => 'required',
			        'ResolutionImplementationStatus' => 'required',
			       
			        
			        
			    ]);





					 
				$PowerResolution = new PowerResolution;
				$PowerResolution->PowerStructureID = $request->input('PowerStructureID');
				$PowerResolution->PowerStructureName = $request->input('PowerStructureName');
				$PowerResolution->ResolutionTitle = $request->input('ResolutionTitle');
				$PowerResolution->ResolutionDescription = $request->input('ResolutionDescription');
				$PowerResolution->ResolutionStatus = $request->input('ResolutionStatus');
				$PowerResolution->ResolutionImplementationStatus = $request->input('ResolutionImplementationStatus');

				      $hasher =  $request->input('PowerStructureName');
			          $hasher2 =  Carbon::now();
			          $hasher3 = $hasher2->toDateTimeString();
			          $finalHash= $hasher3.'nswc'.$hasher;
			          $PowerResolution->ResolutionID = Hash::make($finalHash);


			   $PowerResolution->save();



			           $data =  "Swal.fire('Successful', 'The Resolutions has been created successfully, You can now manage resolutions from this interface', 'success')";

        			 return redirect()->route('ManagePowerResolution')->with('AttachProject_notify', $data);
   				






			}








		public function ManagePowerResolution()
		{
			

			$resolutions = PowerResolution::all();


			$data = [

				'Resolutions' => $resolutions

			];


			return view('PowerResolution.ManagePowerResolutions', $data);





		}


		public function UpdatePowerResolution($id, Request $request)
		{
			

				$request->validate([
			        
			        'ResolutionStatus' => 'required',
			        'ResolutionImplementationStatus' => 'required'
			    ]);




				$PowerResolution = PowerResolution::find($id);

				$PowerResolution->ResolutionStatus = $request->input('ResolutionStatus');

				$PowerResolution->ResolutionImplementationStatus = $request->input('ResolutionImplementationStatus');


				$PowerResolution ->save();


				$data =  "Swal.fire('Successful', 'The Resolution and implementation status has been updated successfully, You can now manage resolutions from this interface', 'success')";

        			 return redirect()->route('ManagePowerResolution')->with('AttachProject_notify', $data);
   				






		}


		public function DeletePowerRosultion($id)
		{
			

			$PowerResolution = PowerResolution::find($id);

			$PowerResolution->delete();


			 $data =  "Swal.fire('Successful', 'The resolution has been deleted successfully', 'success')";
        
         return redirect()->route('ManagePowerResolution')->with('Delete_notify', $data);




		}



		public function UpdateResolutionForm($id)
		{
			

			$PowerResolution = PowerResolution::find($id);


			$data = [


				'PowerResolution' => $PowerResolution 

			];


				return view('PowerResolution.UpdatePowerResolutionForm', $data);



		}



		public function UpdateResolutionValue($id, Request $request)
		{
			
			$request->validate([
			        
			        'ResolutionTitle' => 'required',
			        'ResolutionDescription' => 'required',
			        'ResolutionStatus' => 'required',
			        'ResolutionImplementationStatus' => 'required',
			       
			        
			        
			    ]);



			    $PowerResolution = PowerResolution::find($id);


			    $PowerResolution->ResolutionTitle = $request->input('ResolutionTitle');
				$PowerResolution->ResolutionDescription = $request->input('ResolutionDescription');
				$PowerResolution->ResolutionStatus = $request->input('ResolutionStatus');
				$PowerResolution->ResolutionImplementationStatus = $request->input('ResolutionImplementationStatus');

				$PowerResolution->save();

				 $data =  "Swal.fire('Successful', 'The resolution has been updated successfully', 'success')";
        
         return redirect()->route('ManagePowerResolution')->with('Delete_notify', $data);



		}
    
}
