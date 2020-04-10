<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empy;
use Auth;
class Employeecontroller extends Controller
{
    // 
    public function index(){
        $employee =  Empy::all();
    	return view('Employee.index',compact('employee'));
    }
    public function create(){

    	return view('Employee.create');
    }
    public function store(Request $request){
    	
    	 $this->validate($request, [
        'first_name' => 'required|max:10',
        'middel_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'gender' => 'required',
        'address' => 'required',
        'designation' => 'required',
        'doj' => 'required',
        'city' => 'required',
        'state' => 'required',
        'leaves' => 'required',
        'Hobbies' => 'required',
        
        ]);

    	 $tkw=$request->tkw;
    	 $tkw=implode(',',$tkw);
         $hob=$request->Hobbies;
         $Hobbies=implode(',',$hob);

    $emps=new Empy();
    $emps->first_name=request('first_name');
    $emps->middle_name=request('middel_name');
    $emps->last_name=request('last_name');
    $emps->email=request('email');
    $emps->gender=request('gender');
    $emps->address=request('address');
    $emps->designation=request('designation');
    $emps->dateofjoin=request('doj');
    $emps->city=request('city');
    $emps->state=request('state');
    $emps->leaves=request('leaves');
    $emps->technicalkow=$tkw;
    $emps->Hobbies=$Hobbies;
    $emps->save();

    return redirect('/employee');

  }
  public function destory($id){
    $empy= Empy::find($id);
    $empy->delete();

    return redirect('/employee');
  }
}
