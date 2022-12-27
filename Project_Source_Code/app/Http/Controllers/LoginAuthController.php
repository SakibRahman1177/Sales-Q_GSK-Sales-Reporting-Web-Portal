<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\LoginAuth;
use Session;
// use App\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLoginAuthRequest;
use App\Http\Requests\UpdateLoginAuthRequest;
use Illuminate\Support\Facades\Validator;

class LoginAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function LogIn()
    {
        return view('Auth.login');//
    }
    public function DashView()
    {
        return view('dashboard');

    }

    public function LoginSubmitted(Request $request)
    {
        $request->validate([
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|min:3',
        ]);
   
        $loginAuth = LoginAuth::where('email',$request->email)
                            ->where('password',$request->password)
                            ->first();
  
                            if($loginAuth){
                                $request->session()->put('id',$loginAuth->name);
                                return redirect('/dash');
                            }
                            return back();
        // return redirect("login")->withSuccess('Login details are not valid');
    }


//     public function __construct()
//     {
//         $this->middleware('ValidAdmin');
//     }

//     public function changePWD()
//     {
//         return view('Auth.changePassword');
//     } 

//     public function changePWDSubmitted(Request $request)
//     {
//         $this->validate($request, [
//             'current_password' => 'required|string',
//             'new_password' => 'required|confirmed|min:3|string'
//         ]);
//         $auth = Auth::user();
 
//  // The passwords matches
//         if (Validator::make($request->get('current_password'), $auth->password))
//         {
//             return back()->with('error', "Current Password is Invalid");
//         }
 
// // Current password and new password same
//         if (strcmp($request->get('current_password'), $request->new_password) == 0) 
//         {
//             return redirect()->back()->with("error", "New Password cannot be same as your current password.");
//         }
 
//         $user =  LoginAuth::find($auth->id);
//         $user->password =  $request->new_password;
//         $user->save();
//         return back()->with('success', "Password Changed Successfully");
//     }

    public function logout(){
        session()->forget('id');
        return redirect('login');
    }

    public function addAdmin(){
        return view('Auth.registration');

    }
    public function addAdminSubmitted(Request $request){
        $rules = [
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|min:3',
            'cpassword' => 'required_with:password|same:password|min:3',
        ];             
         $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect('/reg')
            ->withInput()
            ->withErrors($validator);
        }
        else{
            $data = $request->input();

                $admin = new LoginAuth;
                $admin->name = $data['name'];
                $admin->role = $data['role'];
                $admin->email = $data['email'];
                $admin->password = $data['password'];
                $admin->cpassword = $data['cpassword'];
                $admin->save();
                return redirect('/login')->with('success','Your Account Has been created successfully!');
        }
    }   
    
    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('dashboard');
    //     }
  
    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }
    
    // public function signOut() {
    //     Session::flush();
    //     Auth::logout();
  
    //     return Redirect('login');
    // }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoginAuthRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginAuthRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoginAuth  $loginAuth
     * @return \Illuminate\Http\Response
     */
    public function show(LoginAuth $loginAuth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoginAuth  $loginAuth
     * @return \Illuminate\Http\Response
     */
    public function edit(LoginAuth $loginAuth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginAuthRequest  $request
     * @param  \App\Models\LoginAuth  $loginAuth
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginAuthRequest $request, LoginAuth $loginAuth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoginAuth  $loginAuth
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoginAuth $loginAuth)
    {
        //
    }
}
