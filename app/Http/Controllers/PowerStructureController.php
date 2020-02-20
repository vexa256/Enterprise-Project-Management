<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Initiatives;
use App\PowerStructure;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PowerStructureController extends Controller
{
   			


        public function PowerUnderInitiative($id)
        {
         

       $Initiatives = Initiatives::find($id);

      $data_id = $Initiatives->InitiativeID;

      $PowerStructure =  PowerStructure::where('InitiativeID', '=', $data_id)->get(); 

      $data = [


        'initiatives' => $Initiatives,
        'PowerStructures'   => $PowerStructure

      ];


      return view('powerStructures.PowerUnderInitiative', $data);






        }




   			function AddPowerStructuresForm($id)
   			{

   				$initiatives = Initiatives::find($id);

   				$data = [

   					'initiativeName' => $initiatives->initiativeName,
   					'initiativeID' => $initiatives->InitiativeID

   				];

   				return view('AddPowerStructures', $data);
   			}


   			public function AddPowerStructures(Request $request)
   			{
   				

   				$request->validate([
			        
			        'PowerStructureName' => 'required',
			        'initiativeName' => 'required',
			        'initiativeID' => 'required',
			        'PowerStructureDescription' => 'required'
			        
			        
			        
			    ]);




   				     $PowerStructure = new PowerStructure;
	   				 $PowerStructure->PowerStructureName = $request->input('PowerStructureName');
	   				 $PowerStructure->InitiativeName = $request->input('initiativeName');
	   				 $PowerStructure->InitiativeID = $request->input('initiativeID');
	   				 $PowerStructure->PowerStructureDescription = $request->input('PowerStructureDescription');
	   				 $hasher =  $request->input('PowerStructureName');
			          $hasher2 =  Carbon::now();
			          $hasher3 = $hasher2->toDateTimeString();
			          $finalHash= $hasher3.'nswc'.$hasher;
			          $PowerStructure->PowerStructureID = Hash::make($finalHash);


			           $PowerStructure->save();


			           $data =  "Swal.fire('Successful', 'The Power Structure has been created successfully, You can now manage Power Structures from this interface', 'success')";

        			 return redirect()->route('ManagePowerStructures')->with('AttachProject_notify', $data);
   				


   			}


   			

   			public function ManagePowerStructures()
   			{
   				
   					$PowerStructures = PowerStructure::all();



   					$data = [


   						'PowerStructures' => $PowerStructures

   					];


   					return view('ManagePowerStructures', $data);

   			}



            public function UpdatePowerStructureForm($id)
            {
               
                  $PowerStructures = PowerStructure::find($id);


                  $data = [

                     'PowerStructure' => $PowerStructures

                  ];



                  return view('UpdatePowerStructure', $data);

            }



            public function UpdatePowerStructure(Request $request, $id)
            {
              

               $request->validate([
                 
                 'PowerStructureName' => 'required',
                 'PowerStructureDescription' => 'required'
                 
                 
                 
             ]);

                $PowerStructure = PowerStructure::find($id);

                $PowerStructure->PowerStructureName = $request->input('PowerStructureName');
                   
                $PowerStructure->PowerStructureDescription = $request->input('PowerStructureDescription');


               $PowerStructure->save();


                    $data =  "Swal.fire('Successful', 'The Power Structure has been update successfully, You can now manage Power Structures from this interface', 'success')";

                return redirect()->route('ManagePowerStructures')->with('AttachProject_notify', $data);
               


            }






            public function DeletePowerStructure($id)
            {


                  $PowerStructure = PowerStructure::find($id);

                  $PowerStructure->delete();
                  $data =  "Swal.fire('Successful', 'The Power Structure has been deleted successfully', 'success')";
                  return redirect()->route('ManagePowerStructures')->with('Delete_notify', $data);

               
            }


}
