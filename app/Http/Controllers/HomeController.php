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
use App\Product;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;

class HomeController extends Controller
{
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
		$data = Category::where('is_parent','0')->get();
		
		$category =array();
		foreach($data as $cat){
			$item = array();
			$item['id'] = $cat['id'];
            $item['name'] = $cat['name'];
			$item['slug'] = $cat['slug'];
			
			$condition = array('item_id'=>$cat['id'],'type'=>'category');
			$image = DB::table('images')->where($condition)->get();
			$item['image'] = $image[0]->name;
			$category[]= $item;
		}
		
		$data = Product::get();
		
		$product =array();
		foreach($data as $pro){
			$item = array();
			$item['id'] = $pro['id'];
			$item['name'] = $pro['name'];
			$item['price'] = number_format($pro['price'],2);
			
			$condition = array('item_id'=>$pro['id'],'type'=>'product');
			$image = DB::table('images')->where($condition)->get();
			if(count($image)>0){
				$item['image'] = $image[0]->name;	
			}else{
				$item['image'] ='';
			}
			
			$product[]= $item;
		}
		 
		$cart = $this->productService->getCartItem();
       /*  echo "<pre>";
			print_r($cart);
		echo "</pre>";
		die; */
		return view('web.home.home',compact('category','product','cart'));
    }
	
	

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
