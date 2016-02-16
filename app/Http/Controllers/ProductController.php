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
use URL;
use App\Product;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\UrlGenerator;
use App\Http\Controllers\CategoryController;

class ProductController extends Controller
{
	protected $activeClass =array();
	protected $url;
	protected $categoryService;
    public function __construct(UrlGenerator $url, CategoryController $categoryService)
    {
        $this->url = $url;
        $this->categoryService = $categoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$activeClass['parent'] ='product';
		$activeClass['child'] ='product/index';
		
        $products = Product::get();
		return view('admin.product.productlist',compact('products','activeClass'));	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$activeClass['parent'] ='product';
		$activeClass['child'] ='product/create';
		$category = Category::get();
		
       return view('admin.product.addproduct',compact('activeClass','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
		$data =array(
					'name'=>$request->name,
					'user_id'=>$userId,
					'slug'=> $this->categoryService->slugify($request->name),
					'short_description'=>$request->short_description,
					'full_description'=>$request->full_description,
					'price'=>$request->price,
					'is_stock'=>$request->is_stock,
					'is_enable'=>$request->is_enable
					);
		$id = DB::table('product')->insertGetId($data);
		
		if($id > 0){
			


			if(count($request->image)>0){
				foreach($request->image as $key=>$value){
					$data =array(
						'item_id'=>$id,
						'type'=>'product',
						'name'=>$value,
						'baseimage'=>$request->baseimage[$key+1],
						'smallimage'=>$request->smallimage[$key+1],
						'thumbimage'=>$request->thumbimage[$key+1],
					);
		
					DB::table('images')->insert($data);
				}	
			}
			if(count($request->category)>0){
				foreach($request->category as $key=>$value){
					$data =array(
						'pro_id'=>$id,
						'cat_id'=>$value
					);
		
					DB::table('product_category')->insert($data);
				}	
			}
			if(count($request->foodtype)>0){
				foreach($request->foodtype as $key=>$value){
					$data =array(
						'pro_id'=>$id,
						'type'=>$value
					);
		
					DB::table('product_type')->insert($data);
				}	
			}
			return redirect('product/index')->with('sucess','product added successfully');
		}else{
			return redirect('product/create')->with('error','error in product registration');
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
		$activeClass['parent'] ='product';
		$activeClass['child'] ='';
		
		$product = Product::find($id);
		return view('admin.product.editproduct',compact('product','activeClass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

		$category = DB::table('category')
					->select('id','name')->get();
		$selectCategories = array();

		foreach($category as $cat) {
			$selectCategories[$cat->id] = $cat->name;
		}			
					
		$images = DB::table('images')
					->where("item_id",$id)
					->where("type","product")->get();
       
		$productCategory = DB::table('product_category')
					->where("pro_id",$id)
					->select('cat_id')->get();
		
		$selectedCategories = array();

		foreach($productCategory as $cate) {
			$selectedCategories[$cate->cat_id] = $cate->cat_id;
		}	
		
		$activeClass['parent'] ='product';
		$activeClass['child'] ='';
		
		$product = Product::find($id);
		return view('admin.product.editproduct',compact('category','product','activeClass','images','productCategory','selectCategories','selectedCategories'));
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
		$token = 0;
		//DB::table('product_category')->where('pro_id',$request->id)->delete();
		DB::table('images')
			->where('item_id',$request->id)
			->where('type','product')
			->delete();
		
		
		/**
		 * Existing Product Image
		 */
		

		if(count($request->existbaseimage)>0){
			$token =1;
				for($key=1;$key<count($request->existbaseimage);$key++){
					$item =array(
						'item_id'=>$request->id,
						'type'=>'product',
						'name'=>$request->hiddenImage,
						'baseimage'=>$request->existbaseimage[$key],
						'smallimage'=>$request->existsmallimage[$key],
						'thumbimage'=>$request->existthumbimage[$key],
					);
		
					DB::table('images')->insert($item);
				}	
		}
		
	
		if(count($request->image)>0){
			$token =1;
				foreach($request->image as $key=>$value){
					$item =array(
						'item_id'=>$request->id,
						'type'=>'product',
						'name'=>$value,
						'baseimage'=>$request->baseimage[$key+1],
						'smallimage'=>$request->smallimage[$key+1],
						'thumbimage'=>$request->thumbimage[$key+1],
					);
		
					DB::table('images')->insert($item);
				}	
		}
		if(count($request->category)>0){
			$token =1;
				foreach($request->category as $key=>$value){
					$data =array(
						'pro_id'=>$request->id,
						'cat_id'=>$value
					);
		
					DB::table('product_category')->insert($data);
				}	
		}
		$data =array(
					'name'=>$request->name,
					'slug'=> $this->categoryService->slugify($request->name),
					'short_description'=>$request->short_description,
					'full_description'=>$request->full_description,
					'price'=>$request->price,
					'is_stock'=>$request->is_stock,
					'is_enable'=>$request->is_enable
				);	
		
		if(DB::table('product')->where('id',$request->id)->update($data)){
			$token =1;
		}
		if($token>0){
			return redirect('product/index')->with('sucess','product updated successfully');
		}
		else{
			return redirect('product/edit/'.$request->id)->with('error','error in product updation');
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
        if(DB::table('product')->where('id',$request->id)->delete()){
			//return redirect('category/index')->with('sucess','category deleted successfully');
			return Response::json(['sucess' => 'product deleted successfully', 'message_class' => 'alert alert-success fade in']);
		}else{
			return redirect('product/edit')->with('error','error in deleting product');
		}
    }
	/**
     * Display a listing of the product by pager.
     *
     * @return \Illuminate\Http\Response
     */
    public function productList()
    {
        $products = Product::get();
		return view('admin.product.productlist',compact('products'));	
    }
	/**
     * Add To Cart
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request)
    {
       if(Auth::user()){
		   $userId = Auth::user()->id;
	   }else{
		   $userId = 0;
	   }
		$ip = $_SERVER['REMOTE_ADDR'];	
		
		$data =array(
					'pro_id'=>$request->id,
					'price'=>$request->price,
					'user_id'=>$userId,
					'qty'=>$request->qty,
					'ip'=>$ip
					);		
		
		$countCartItem = DB::table('cart')
					->where("pro_id",$request->id)
					->where("ip",$ip)->get();
					
		$condition = array('pro_id'=>$request->id,"ip"=>$ip);
	
		if(count($countCartItem)>0){
			$nQty = ($countCartItem[0]->qty) + $request->qty;
			$qt= array("qty"=>$nQty);
			$id = DB::table('cart')
						->where('pro_id',$request->id)
						->where("ip",$ip)
						->update($qt);
		}else{
			$id = DB::table('cart')->insertGetId($data);	
		}
		
		$cartItem = $this->getCartItem();
		if($id){
			return Response::json(['sucess' => 'product added into cart successfully', 'message_class' => 'alert alert-success fade in','cart'=>$cartItem]);
		}else{
			return Response::json(['sucess' => 'error in adding product into cart', 'message_class' => 'alert alert-success fade in',"id"=>$id]);
		}
    }
	/**
     * Remove from Cart
     *
     * @return \Illuminate\Http\Response
     */
    public function removeFromCart(Request $request)
    {
    	$ip = $_SERVER['REMOTE_ADDR'];
		try{
			$id = DB::table('cart')
						->where('id',$request->id)
						->where('ip',$ip)
						->delete();
			$cartItem = $this->getCartItem();
			return Response::json(['sucess' => 'product remove from cart successfully', 'message_class' => 'alert alert-success fade in','cart'=>$cartItem]);
		}catch(\Exception $e){
			return Response::json(['sucess' => 'error in removing product fom cart', 'message_class' => 'alert alert-success fade in','error'=>$e]);
		}
		
		
			
	}
	public function getCartItem(){
		$ip = $_SERVER['REMOTE_ADDR'];	
		
		$countCartItem = DB::table('cart')
            ->join('product', 'cart.pro_id', '=', 'product.id')
			->select('product.id','cart.id as cart_id','product.name','product.price','cart.qty')
			->where("ip",$ip)->get();	
		$data = array();  
		$items = array();  
		$price =0;	
		$qty =0;
		
		if(count($countCartItem)>0){
			
			foreach($countCartItem as $cart){
				$item = array();
				$condition = array('item_id'=>$cart->id,'type'=>'product');
				$image = DB::table('images')->where($condition)->get();
				if(count($image)>0){
					$item['images'] = $image[0]->name;
				}else{
					$item['images'] ='';
				}
				$price += ($cart->price) * ($cart->qty);
				$qty += $cart->qty;
				
				
				$item['id']=$cart->id;
				$item['cart_id']=$cart->cart_id;
				$item['name']=$cart->name;
				$item['price']=$cart->price;
				$item['qty']=$cart->qty;
				$item['unitPrice']=($cart->price) * ($cart->qty);
				$item['image']= $this->url->to('/imageupload/server/product/files/'.$image[0]->name);
				
				$items[]= $item;	
			}
		}
		$data['cartItem']=$items;
		$data['cartItems']=count($items);
		$data['cartItemCount']=trim($qty);
		$data['totalPrice']=trim($price);
		
		return $data; 		
	}
	
	public function productDetails($id){
		
		$cart = $this->getCartItem();
		
					
					
		$images = DB::table('images')
					->where("item_id",$id)
					->where("type","product")->get();
       
		$product = Product::find($id);
		
		/*echo "<pre>";
			print_r($images);
		echo "</pre>";
		die;*/
		return view('web.product.productdetails',compact('product','cart','images'));
	}
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productsList(Request $request)
    {	
		$parent = $request->Input("parent-cat");
		$child = $request->Input("child-cat");
		$product = $request->Input("product");

		$query = DB::table('category as c1');
        $query->leftJoin('category as c2', 'c1.is_parent', '=', 'c2.id');
        $query->leftJoin('product_category as pc', 'pc.cat_id', '=', 'c1.id');
        $query->leftJoin('product as p', 'pc.pro_id', '=', 'p.id');
			
		if(!empty($parent)){
			$query->where('c2.slug',$parent);
		}
		if(!empty($child)){
			$query->where('c1.slug',$child);
		}
		$data = $query->get();
		
		$categorySelection = array("child"=>ucfirst($child),"parent"=>ucfirst($parent));

		

		$product =array();
		foreach($data as $pro){
			$item = array();
			$item['id'] = $pro->id;
			$item['name'] = $pro->name;
			$item['price'] = $pro->price;
			$item['short_description'] = $pro->short_description;
			
			$condition = array('item_id'=>$pro->id,'type'=>'product');
			$image = DB::table('images')->where($condition)->get();
			if(count($image)>0){
				$item['image'] = $image[0]->name;	
			}else{
				$item['image'] = '';
			}
			
			$product[]= $item;
		}
		$cart = $this->getCartItem();

		$shoppingOptions = $this->categoryService->getFilterCategory($parent);
		

		/*echo "<pre>";
			print_r($shoppingOptions);
		echo "</pre>";
		die;*/
       	return view('web.product.products',compact('product','cart','categorySelection','shoppingOptions'));
    }
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function checkout(){
		 $data = Product::get();
		
		$product =array();
		foreach($data as $pro){
			$item = array();
			$item['id'] = $pro['id'];
			$item['name'] = $pro['name'];
			$item['price'] = $pro['price'];
			$item['short_description'] = $pro['short_description'];
			
			$condition = array('item_id'=>$pro['id'],'type'=>'product');
			$image = DB::table('images')->where($condition)->get();
			if(count($image)>0){
				$item['images'] =  $this->url->to('/imageupload/server/product/files/').$image[0]->name;	
			}else{
				$item['images'] ='';
			}
			
			$product[]= $item;
		}
		

		 $cart = $this->getCartItem();

		
		 return view('web.product.checkout',compact('product','cart'));
	 }
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function checkoutMethod(){
		 $data = Product::get();
		
		$product =array();
		foreach($data as $pro){
			$item = array();
			$item['id'] = $pro['id'];
			$item['name'] = $pro['name'];
			$item['price'] = $pro['price'];
			$item['short_description'] = $pro['short_description'];
			
			$condition = array('item_id'=>$pro['id'],'type'=>'product');
			$image = DB::table('images')->where($condition)->get();
			if(count($image)>0){
				$item['image'] = $image[0]->name;	
			}else{
				$item['image'] ='';
			}
			
			$product[]= $item;
		}
		
		 $cart = $this->getCartItem();

		 return view('web.product.checkoutmethod',compact('product','cart'));
	 }
}
