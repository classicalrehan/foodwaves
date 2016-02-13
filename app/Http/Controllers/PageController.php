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
use App\Page;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	protected $activeClass = array();
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$activeClass['parent'] ='page';
		$activeClass['child'] ='page/index';
		
		$pages = Page::get();
		return view('admin.page.pagelist',compact('pages','activeClass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activeClass['parent'] ='page';
		$activeClass['child'] ='page/create';
		
		return view('admin.page.addpage',compact('activeClass'));
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
					'title'=>$request->input('title'),
					'content'=>$request->input('description')
					);
					
		if(DB::table('page')->insert($data)){
			return redirect('page/index')->with('sucess','page added successfully');
		}else{
			return redirect('page/create')->with('error','error in page registration');
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
		
        $page = Page::find($id);
		return view('admin.page.editpage',compact('page','activeClass'));
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
					'title'=>$request->input('title'),
					'content'=>$request->input('description')
					);
		
		
		if(DB::table('page')->where('id',$request->id)->update($data)){
			return redirect('page/index')->with('sucess','page information updated successfully');
		}else{
			return redirect('page/edit')->with('error','error in page updation');
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
        if(DB::table('page')->where('id',$request->id)->delete()){
			//return redirect('category/index')->with('sucess','category deleted successfully');
			return Response::json(['sucess' => 'page deleted successfully', 'message_class' => 'alert alert-success fade in']);
		}else{
			return redirect('category/edit')->with('error','error in deleting page updation');
		}
    }
}
