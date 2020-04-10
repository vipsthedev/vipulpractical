<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Session;
use Auth;

class UserController extends Controller
{
    //
    public function index(){
    	return view('user.create');
    }
    public function create(){
    	
    	return view('user.create');
    }
    public function store(Request $request){
		
         $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        ]);
		$user= new User();
    	$user->name=request('name');
    	$user->email=request('email');
    	$user->password=base64_encode(request('password'));
    	$user->save();

    	return redirect('/user');
    }
    public function login(){
    	return view('user.login');
    }
    public function logincheck(Request $request){

        $this->validate($request, [
        'email' => 'required',
        'password' => 'required',
        ]);
 	$email=$request->email;
    $password=$request->password;
    $password=base64_encode($password);
    
    $us=User::where('email',$email)->first();
    $pas=User::where('password',$password)->first();
  		if($us !='' && $pas !=''){
                $request->session()->put('name',$request->name);
				Session::put('name',$request->name);
                Session::put('email',$email);
                Session::put('login',TRUE);
                return redirect('user/home_user');
        }
            
        else{
                return redirect('user/login')->with('alert','Password atau Email, Salah !');
        }
	}
    public function logout(Request $request) {
        Auth::logout();
        return redirect('user/login');
    }
 }
