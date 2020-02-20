<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\JPC;
use App\JPCResolutions;


class JPCResolutionsController extends Controller
{
    

    public function ResolutionUnderJPC($id)
    {
    	



      $JPC = JPC::find($id);

      $data_id = $JPC->jpcID;

      $JPCResolutions =  JPCResolutions::where('JPCID', '=', $data_id)->get(); 

      $data = [


        'JPC' => $JPC,
        'JPCResolutions'   => $JPCResolutions

      ];

      return view('JPC.ResolutionUnderJPC', $data);









    }


	public function CreateJPCresolutionForm($id)
	{

		$JPC = JPC::find($id);

			$data= [


				'JPC'=>$JPC

			];


			return view('JPC.CreateJPCresolution', $data);
	}



	public function CreateJPCresolution(Request $request)
	{


			$JPCResolutions = new JPCResolutions;

    		$request->validate([
			        
			        'JPCName' => 'required',
			        'JPCID' => 'required',
 					'ResolutionTitle' => 'required',
			        'ResolutionDescription' => 'required',
			        'Status' => 'required',
			        'ImplementationStatus' => 'required'
			       
			        
			    ]);


    		          $JPCResolutions->JPCName = $request->input('JPCName');
    		          $JPCResolutions->JPCID = $request->input('JPCID');
    		          $JPCResolutions->ResolutionTitle = $request->input('ResolutionTitle');
    		          $JPCResolutions->ResolutionDescription = $request->input('ResolutionDescription');
    		          $JPCResolutions->Status = $request->input('Status');
    		          $JPCResolutions->ImplementationStatus = $request->input('ImplementationStatus');
    		          $hasher =  $request->input('JPCName');
			          $hasher2 =  Carbon::now();
			          $hasher3 = $hasher2->toDateTimeString();
			          $finalHash= $hasher3.'nswc'.$hasher;
			          $JPCResolutions->ResolutionID = Hash::make($finalHash);


    		          $JPCResolutions->save();


			           $data =  "Swal.fire('Successful', 'The Resolutions has been created successfully, You can now manage JPC resolutions from this interface', 'success')";

        			 return redirect()->route('ManageJPCresolution')->with('AttachProject_notify', $data);
		
	}




		public function ManageJPCresolution()
		{
			$JPCResolutions = JPCResolutions::all();


			$data = [

				'JPCResolutions' => $JPCResolutions


			];


			return view('JPC.ManageJPCResolution', $data);



		}



	public function UpdateJPCresolutionStatus($id, Request $request)
	{

		$request->validate([
			        
			        'ImplementationStatus' => 'required',
			        'Status' => 'required'
			        
			    ]);

		$JPCResolutions = JPCResolutions::find($id);

		$JPCResolutions->ImplementationStatus = $request->input('ImplementationStatus');
		$JPCResolutions->Status = $request->input('Status');
		$JPCResolutions->save();

		 $data =  "Swal.fire('Successful', 'The Resolution status has been updated successfully, You can now manage JPC resolutions from this interface', 'success')";

        			 return redirect()->route('ManageJPCresolution')->with('AttachProject_notify', $data);
	}




	public function UpdateJPCresolutionForm($id)

	{

		$JPCResolutions = JPCResolutions::find($id);


		$data = [

			'JPCResolution' => $JPCResolutions

		];

		return view('JPC.UpdateJPCresolutionForm', $data);
		
	}


		public function  UpdateJPCresolution($id, Request $request)
		{
			

				$JPCResolutions = JPCResolutions::find($id);

				$request->validate([
			        
			       
 					'ResolutionTitle' => 'required',
			        'ResolutionDescription' => 'required',
			        'Status' => 'required',
			        'ImplementationStatus' => 'required'
			       
			        
			    ]);



    		        
    		       
    		          $JPCResolutions->ResolutionTitle = $request->input('ResolutionTitle');
    		          $JPCResolutions->ResolutionDescription = $request->input('ResolutionDescription');
    		          $JPCResolutions->Status = $request->input('Status');
    		          $JPCResolutions->ImplementationStatus = $request->input('ImplementationStatus');
    		          $JPCResolutions->save();


    		           $data =  "Swal.fire('Successful', 'The Resolution  has been updated successfully, You can now manage JPC resolutions from this interface', 'success')";

        			 return redirect()->route('ManageJPCresolution')->with('AttachProject_notify', $data);


		}





	public function DeleteJPCresolutionD($id)
	{


		$JPCResolutions =  JPCResolutions::find($id);

		$JPCResolutions->delete();


		$data =  "Swal.fire('Successful', 'The Resolution  has been deleted successfully, You can now manage JPC resolutions from this interface', 'success')";

        			 return redirect()->route('ManageJPCresolution')->with('AttachProject_notify', $data);
		
	}















}
