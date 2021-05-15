<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function show()
    {
        $users = User::where('role','applicant')->get();

        return view('admindashboard',['users' => $users]);
    }
    public function approve($id){
        $user = User::findOrFail($id);
        $user->status = 1; //Approved
        $user->save();
        return redirect()->back(); //Redirect user somewhere
     }
     
     public function decline($id){
        $user = User::findOrFail($id);
        $user->status = 0; //Declined
        $user->save();
        return redirect()->back(); //Redirect user somewhere
     }
}
