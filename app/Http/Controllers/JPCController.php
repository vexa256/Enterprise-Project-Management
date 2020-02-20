<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\JPC;

class JPCController extends Controller
{
    


    public function SubmitJPC(Request $request)
    {
    	
    		$JPC = new JPC;

    		$request->validate([
			        
			        'jpcDescription' => 'required',
			        'jpcName' => 'required'
			        
			    ]);


    		          $JPC->jpcName = $request->input('jpcName');
    		          $JPC->jpcDescription = $request->input('jpcDescription');
    		          $hasher =  $request->input('jpcName');
			          $hasher2 =  Carbon::now();
			          $hasher3 = $hasher2->toDateTimeString();
			          $finalHash= $hasher3.'nswc'.$hasher;
			          $JPC->jpcID = Hash::make($finalHash);
			          $JPC->save();

			          $data =  "Swal.fire('Successful', 'The new JPC has been created successfully, You can now manage JPCs from this interface', 'success')";

        			 return redirect()->route('ManageJPC')->with('AttachProject_notify', $data);

    }


    	public function ManageJPC()
    	{
    		
    		$JPC = JPC::all();

    		$data = [

    			'JPCS' => $JPC


    		];


    		return view('JPC.ManageJPCS', $data);

    	}

        public function UpdateJPC($id, Request $request)

        {

                      $JPC = JPC::find($id);
                      $JPC->jpcName = $request->input('jpcName');
                      $JPC->jpcDescription = $request->input('jpcDescription');
                      $JPC->save();



                        $data =  "Swal.fire('Successful', 'The  JPC has been updated successfully, You can now manage JPCs from this interface', 'success')";

                     return redirect()->route('ManageJPC')->with('AttachProject_notify', $data);






        }


        public function DeleteJPC($id)
        {


            $JPC = JPC::find($id);

            $JPC->delete();


              $data =  "Swal.fire('Successful', 'The  JPC has been deleted successfully, You can now manage JPCs from this interface', 'success')";

                     return redirect()->route('ManageJPC')->with('AttachProject_notify', $data);

           
        }



}
