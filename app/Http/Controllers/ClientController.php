<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use Session;
use Response;

use DB;
use Auth;
use Hash;
use App\user;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
	protected $activeClass=array();
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$activeClass['parent'] ='client';
		$activeClass['child'] ='client/index';
		
       $clients = User::where('role','client')->get();
		return view('admin.client.clientlist',compact('clients','activeClass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$activeClass['parent'] ='client';
		$activeClass['child'] ='client/create';
		
       return view('admin.client.addclient',compact('activeClass'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =array(
					'name'=>$request->name,
					'email'=>$request->email,
					'role'=>'client',
					'password'=>Hash::make($request->password)
					);
					
		if(DB::table('users')->insert($data)){
			return redirect('client/index')->with('sucess','client added successfully');
		}else{
			return redirect('client/create')->with('error','error in client registration');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$activeClass['parent'] ='client';
		$activeClass['child'] ='';
		
        $user = User::find($id);
		return view('admin.client.editclient',compact('user','activeClass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data =array(
					'name'=>$request->name,
					'email'=>$request->email
					);
		
		
		if(DB::table('users')->where('id',$request->id)->update($data)){
			return redirect('client/index')->with('sucess','client information updated successfully');
		}else{
			return redirect('client/edit')->with('error','error in client updation');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       if(DB::table('users')->where('id',$request->id)->delete()){
			//return redirect('category/index')->with('sucess','category deleted successfully');
			return Response::json(['sucess' => 'client deleted successfully', 'message_class' => 'alert alert-success fade in']);
		}else{
			return Response::json(['error' => 'error in deleting', 'message_class' => 'alert alert-danger fade in']);
		}
    }
	
	
}
