<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use File;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::min(8)],
            'jambfile'   => 'mimes:jpg,png,jpeg|max:1024',
            'waecresult' => 'mimes:jpg,png,jpeg|max:1024',
            'ssceresult' => 'mimes:jpg,png,jpeg|max:1024',
            'photo' => 'mimes:jpg,png,jpeg|max:1024' 
        ]);
        if($request->photo){
            $random_string = md5(microtime());
    
            $fileName = $random_string.'.'.$request->photo->extension(); 
        
            $save_path           = storage_path() . '/app/public/Profile/' . $request->email;
        
            $path          = $save_path . $fileName ;
        
            $public_path        = '/storage/Profile/' . $request->email . '/' . $fileName;
        
            File::makeDirectory($save_path, $mode = 0755, true, true);
        
            $request->photo->move($save_path, $fileName);
    }

    if($request->jambfile){
        $random_string = md5(microtime());

        $fileName = $random_string.'.'.$request->jambfile->extension(); 
    
        $save_path           = storage_path() . '/app/public/Profile/' . $request->email;
    
        $path          = $save_path . $fileName ;
    
        $public_path1        = '/storage/Profile/' . $request->email . '/' . $fileName;
    
        File::makeDirectory($save_path, $mode = 0755, true, true);
    
        $request->jambfile->move($save_path, $fileName);
}
if($request->waecresult){
    $random_string = md5(microtime());

    $fileName = $random_string.'.'.$request->waecresult->extension(); 

    $save_path           = storage_path() . '/app/public/Profile/' . $request->email;

    $path          = $save_path . $fileName ;

    $public_path2        = '/storage/Profile/' . $request->email . '/' . $fileName;

    File::makeDirectory($save_path, $mode = 0755, true, true);

    $request->waecresult->move($save_path, $fileName);
}
if($request->ssceresult){
    $random_string = md5(microtime());

    $fileName = $random_string.'.'.$request->ssceresult->extension(); 

    $save_path           = storage_path() . '/app/public/Profile/' . $request->email;

    $path          = $save_path . $fileName ;

    $public_path3        = '/storage/Profile/' . $request->email . '/' . $fileName;

    File::makeDirectory($save_path, $mode = 0755, true, true);

    $request->ssceresult->move($save_path, $fileName);
}
    
        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'photo' => $public_path ?? "no image" ,
            'password' => Hash::make($request->password),
            'phone' => $request->number,
            'NIN' => $request->nin,
            'father_name'=>$request->fathername,
            'father_phone_number' => $request->fathernumber,
            'mother_name' => $request->mothername,
            'dob' => $request->dob,
            'jamb_2020' => $request->jamb,
            'jamb_reg_no' => $request->jambno,
            'jambfile' => $public_path1 ?? "no file" , 
            'jambscore' => $request->jambscore,
            'waecorneco' => $request->waec,
            'waecorresults' => $public_path2 ?? "no file" ,
            'primarschool' => $request->primaryschool,
            'ssceresults' => $public_path3 ?? "no file",
            'state' => $request->state,
            'lga'=> $request->lga,
            'program' => $request->program

        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
