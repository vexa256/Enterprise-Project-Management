<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function ManageUsers()
  {
  	

  		$Users = User::all();


		 $data = [
           
            'Users' => $Users
        ];

        return view('ManageUsers', $data);




  }


  public function UserRole(Request $request, $id)
  {
  	
  	$User = User::find($id);
  	 $User->role = $request->input('role');
  	 $User->save();
  	   $data =  "Swal.fire('Successful', 'The User role has been update successfully', 'success')";
                   return redirect()->route('ManageUsers')->with('Update_Use_Role', $data);


  }



  public function DeleteUser($id)
  {
  
  	$Users = User::find($id);

  	$Users->delete();


    	$data =  "Swal.fire('Successful', 'The User has been deleted successfully', 'success')";

        			 return redirect()->route('ManageUsers')->with('User_delete', $data);
			   


  }
}
