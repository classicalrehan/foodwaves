<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
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
use App\Http\Controllers\ProductController;

class UserController extends Controller
{
	protected $activeClass=array();
    protected $productService;
	public function __construct(ProductController $productService)
	{
		$this->productService = $productService;
	}
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$activeClass['parent'] ='user';
		$activeClass['child'] ='user/index';
		
        $users = User::where('role','user')->get();
		return view('admin.user.userlist',compact('users','activeClass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$activeClass['parent'] ='user';
		$activeClass['child'] ='user/create';
		
        return view('admin.user.adduser',compact('activeClass'));
    }

	  public function login()
    {
        return view('admin.user.login');
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
					'role'=>'user',
					'password'=>Hash::make($request->password)
					);
					
		if(DB::table('users')->insert($data)){
			return redirect('user/index')->with('sucess','user added successfully');
		}else{
			return redirect('user/create')->with('error','error in client registration');
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
		$activeClass['parent'] ='user';
		$activeClass['child'] ='';
		
       $user = User::find($id);
		return view('admin.user.edituser',compact('user','activeClass'));
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
			return redirect('user/index')->with('sucess','user information updated successfully');
		}else{
			return redirect('user/edit/'.$request->id)->with('error','error in client updation');
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
			return Response::json(['sucess' => 'user deleted successfully', 'message_class' => 'alert alert-success fade in']);
		}else{
			return Response::json(['error' => 'error in deleting', 'message_class' => 'alert alert-danger fade in']);
		}
    }
	
	/**
     * validate resource from storage.
     *
     * @param  int  $email
     * @param  int  $password
     * @return \Illuminate\Http\Response
     */
    public function validateUser(Request $request)
    {
		$activeClass['parent'] ='user';
		$activeClass['child'] ='user/index';
		
		$user =array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($user)){
			return redirect()->intended('dashboard');
		}else{
			return redirect('login')->with('error','Invalid email or password '.$request->email.$request->password);
		}
    }
	
	public function signup(){
		$data =array(
					'name'=>'rihan',
					'role'=>'admin',
					'email'=>'rihan@gmail.com',
					'password'=>Hash::make('rihan')
					);
		if(DB::table('users')->insert($data)){
			return redirect('login')->with('sucess','registration successfully');
		}else{
			return redirect('login')->with('error','error in registration');
		}			
	}
	
	public function LoginAndRegistration(){
		$cart = $this->productService->getCartItem();
		return view('web.user.loginregistration',compact('cart'));
	}	
	
	public function registration(Request $request){
		 $user = User::where('email',$request->email)->get();
		 if(count($user)>0){
		 	return redirect('customer/login')->with('error','This email is already registered!');
		 }else{
		 	$data =array(
					'firstName'=>$request->firstName,
					'lastName'=>$request->lastName,
					'email'=>$request->email,
					'role'=>'customer',
					'password'=>Hash::make($request->password)
					);
		 	if(DB::table('users')->insert($data)){

		 		$user =array('email'=>$request->email,'password'=>$request->password);
			        if(Auth::attempt($user)){
						return redirect('customer/login')->with('sucess','User created successfully!');
					}
				
			}else{
				return redirect('customer/login')->with('error','Something went wrong, please again later!');
			}
		 }		
	}

	/**
     * validate resource from storage.
     *
     * @param  int  $email
     * @param  int  $password
     * @return \Illuminate\Http\Response
     */
    public function customerLogin(Request $request)
    {
		
		$user =array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($user)){
			return redirect('customer/login')->with('sucess','User login successfully!');
		}else{
			return redirect('customer/login')->with('error','Invalid email or password!');
		}
    }

    public function logout(){
    	Auth::logout();
    	return redirect('customer/login')->with('error','Logout successfully');
    }

    public function forgetPassword(Request $request){
    	$email = $request->forgetPassword;
    	 $user = User::findOrFail(11);
    	Mail::send('web.user.loginregistration', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
        return redirect('customer/login')->with('sucess','User login successfully!');
    	/*if(){
			return redirect('customer/login')->with('sucess','User login successfully!');
		}else{
			return redirect('customer/login')->with('error','Invalid email or password!');
		}*/
    }
}
