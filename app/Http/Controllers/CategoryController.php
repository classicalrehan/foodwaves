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
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
	protected $activeClass = array();
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		$activeClass['parent'] ='category';
		$activeClass['child'] ='category/index';
		
        $category = Category::get();
		return view('admin.category.categorylist',compact('category','activeClass'));
    }
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subindex()
    {
		$activeClass['parent'] ='category';
		$activeClass['child'] ='subcategory/index';
		
       $category = DB::table('category as c1')
        ->Join('category as c2', 'c1.is_parent', '=', 'c2.id')
		->select('c1.id as childID', 'c1.name as ChildName', 'c2.id as ParentID', 'c2.name as ParentName')
        ->get();
		return view('admin.category.subcategorylist',compact('category','activeClass'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$activeClass['parent'] ='category';
		$activeClass['child'] ='category/create';
		
        return view('admin.category.addcategory',compact('activeClass'));
    }
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subcreate()
    {
		$activeClass['parent'] ='category';
		$activeClass['child'] ='subcategory/create';
		
		$category = Category::get();
		return view('admin.category.addsubcategory',compact('category','activeClass'));
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
					'slug'=>$this->slugify($request->name),
					'description'=>$request->description
					);
		
		$id = DB::table('category')->insertGetId($data);
		
		if($id > 0){
			if(count($request->image)>0){
				foreach($request->image as $key=>$value){
					$data =array(
						'item_id'=>$id,
						'type'=>'category',
						'name'=>$value
					);
		
					DB::table('images')->insert($data);
				}	
			}
			return redirect('category/index')->with('sucess','category added successfully');
		}else{
			return redirect('category/create')->with('error','error in category registration');
		}
    }
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storesubcategory(Request $request)
    {
       $data =array(
					'name'=>$request->name,
					'is_parent'=>$request->category,
					'slug'=>$this->slugify($request->name),
					'description'=>$request->description
					);
		
		$id = DB::table('category')->insertGetId($data);
		
		if($id > 0){
			if(count($request->image)>0){
				foreach($request->image as $key=>$value){
					$data =array(
						'item_id'=>$id,
						'type'=>'category',
						'name'=>$value
					);
		
					DB::table('images')->insert($data);
				}	
			}
			return redirect('subcategory/index')->with('sucess','category added successfully');
		}else{
			return redirect('subcategory/create')->with('error','error in category registration');
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
		$activeClass['parent'] ='category';
		$activeClass['child'] ='category/index'; 
		
        $category = Category::find($id);
		return view('admin.category.editcategory',compact('category','activeClass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$activeClass['parent'] ='category';
		$activeClass['child'] ='';
		
		$category = Category::find($id);
		$images = DB::table('images')
					->where("item_id",$id)
					->where("type","category")->get();
		return view('admin.category.editcategory',compact('category','images','activeClass'));
    }
	/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSubcategory($id)
    {
		$activeClass['parent'] ='category';
		$activeClass['child'] ='';
		
		$categoryInfo = Category::find($id);
		$images = DB::table('images')
					->where("item_id",$id)
					->where("type","category")->get();
		
		$category = Category::get();
		

		return view('admin.category.editsubcategory',compact('category','images','categoryInfo','activeClass'));
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
					'slug'=>$this->slugify($request->name),
					'description'=>$request->description
					);
		
		if(count($request->image)>0){
				foreach($request->image as $key=>$value){
					$item =array(
						'item_id'=>$request->id,
						'type'=>'category',
						'name'=>$value
					);
		
					DB::table('images')->insert($item);
				}	
			}
		DB::table('category')->where('id',$request->id)->update($data);	
		return redirect('category/index')->with('sucess','category updated successfully');
		
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSubcategory(Request $request)
    {
		$data =array(
					'name'=>$request->name,
					'is_parent'=>$request->category,
					'slug'=>$this->slugify($request->name),
					'description'=>$request->description
					);
		
		if(count($request->image)>0){
				foreach($request->image as $key=>$value){
					$item =array(
						'item_id'=>$request->id,
						'type'=>'category',
						'name'=>$value
					);
		
					DB::table('images')->insert($item);
				}	
			}
		DB::table('category')->where('id',$request->id)->update($data);	
		return redirect('subcategory/index/')->with('sucess','category updated successfully');
		
    }

    /**
     * Remove the specified resource fr+om storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
		if(DB::table('category')->where('id',$request->id)->delete()){
			//return redirect('category/index')->with('sucess','category deleted successfully');
			return Response::json(['sucess' => 'category deleted successfully', 'message_class' => 'alert alert-success fade in']);
		}else{
			return redirect('category/edit')->with('error','error in deleting category updation');
		}
    }

	 /**
     * Remove the specified resource fr+om storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroySubCategory(Request $request)
    {
		if(DB::table('category')->where('id',$request->id)->delete()){
			//return redirect('category/index')->with('sucess','category deleted successfully');
			return Response::json(['sucess' => 'category deleted successfully', 'message_class' => 'alert alert-success fade in']);
		}else{
			return redirect('subcategory/edit')->with('error','error in deleting category updation');
		}
    }
	
	
	/**
     * Remove the specified resource fr+om storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCategoryImage(Request $request)
    {
		if(DB::table('images')->where('id',$request->id)->delete()){
			//return redirect('category/index')->with('sucess','category deleted successfully');
			return Response::json(['sucess' => 'category image deleted successfully', 'message_class' => 'alert alert-success fade in']);
		}else{
			return redirect('category/edit/'.$request->id)->with('error','error in deleting category updation');
		}
    }

    public function getFilterCategory($parent){
    	

    	$query = DB::table('category as c1');
        $query->Join('category as c2', 'c1.is_parent', '=', 'c2.id');
        $query->leftJoin('product_category as pc', 'pc.cat_id', '=', 'c1.id');
        if(!empty($parent)){
        	$query->where('c2.slug',$parent);	
        }	
        $query->groupBy('pc.cat_id');
		$query->select('c1.id as ChildID', 'c1.name as ChildName', 'c1.slug as ChildSlug', 'c2.id as ParentID', 'c2.name as ParentName', 'c2.slug as ParentSlug',DB::raw('count(pc.pro_id) as TotalProduct'));
        $category = $query->get();
        return $category;

    }

    public function slugify($text)
	{ 
	  // replace non letter or digits by -
	  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

	  // trim
	  $text = trim($text, '-');

	  // transliterate
	  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	  // lowercase
	  $text = strtolower($text);

	  // remove unwanted characters
	  $text = preg_replace('~[^-\w]+~', '', $text);

	  if (empty($text))
	  {
	    return 'n-a';
	  }

	  return $text;
	}
}
