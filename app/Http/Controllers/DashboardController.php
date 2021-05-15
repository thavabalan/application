<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function show()
    {
        $users = User::where('role','applicant')->get();

        return view('admindashboard',['users' => $users]);
    }
    public function approve($id){
        $user = User::findOrFail($id);
        $user->status = 'Approved'; //Approved
        $user->save();
        return redirect()->back(); //Redirect user somewhere
     }
     
     public function decline($id){
        $user = User::findOrFail($id);
        $user->status = 'Rejected'; //Declined
        $user->save();
        return redirect()->back(); //Redirect user somewhere
     }
     public function onhold($id){
        $user = User::findOrFail($id);
        $user->status = 'On Hold'; //Declined
        $user->save();
        return redirect()->back(); //Redirect user somewhere
     }
     public function export() 
    {
        return Excel::download(new UsersExport, 'application.xlsx');
    }
}
