<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Initiatives;

use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;


class InitiativesController extends Controller
{
   



	public function CreateInitiative(Request $request) {


		$Initiatives = new Initiatives; 

    $request->validate(['initiativeName' => 'required', 


      'Description' => 'required'


    ]);

		$Initiatives->initiativeName = $request->input('initiativeName');
        $Initiatives->Description = $request->input('Description');
        $hasher =  $request->input('initiativeName');
        $hasher2 =  Carbon::now();
        $hasher3 = $hasher2->toDateTimeString();
        $finalHash= $hasher3.'nswc'.$hasher;

        $Initiatives->InitiativeID = Hash::make($finalHash);

        $Initiatives->save();


        $data = [


'script_data' => "const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
})

swalWithBootstrapButtons.fire({
  title: 'Initiative Added Successfully',
  text: 'Would you like to add another Initiative',
  type: 'success',
  showCancelButton: true,
  confirmButtonText: 'Yes',
  cancelButtonText: 'Manage Initiative',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    swalWithBootstrapButtons.fire(
      'Add  new Initiative!',
      'Add Initiative module loaded Successfully',
      'success'
    )
    window.location='/AddInitiative';
  } else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Successful',
      'Initiative Management module loaded Successfully',
      'success'
    )

    window.location='/ManageInitiatives';
  }
})"];


        return view('AddInitiative', $data);



		
	}





    public function ManageInitiatives()
    {
     

      $Initiatives = Initiatives::all();
        $data = [
           
            'Initiatives' => $Initiatives
        ];

        return view('ManageInitiatives', $data);






    }



         public function DeleteInitiative($id)

    {
        

        $Initiatives = Initiatives::find($id);

        $Initiatives->delete();


         $data =  "Swal.fire('Successful', 'The Initiative has been deleted successfully', 'success')";

         return redirect()->route('ManageInitiatives')->with('Delete_notify', $data);






    }



     public function UpdateInitiative($id, Request $request)
        {
            


     $validatedData = $request->validate([
        
        'InitiativeName' => 'required',
        'InitiativeDescription' => 'required'
        
    ]);



        


        $Initiatives = Initiatives::find($id);
        $Initiatives->InitiativeName = $request->input('InitiativeName');
        $Initiatives->Description = $request->input('InitiativeDescription');
        $Initiatives->save();
        $data =  "Swal.fire('Successful', 'The Initiative has been updated successfully', 'success')";
       


        return redirect()->route('ManageInitiatives')->with('Update_notify', $data);
       


}







}
