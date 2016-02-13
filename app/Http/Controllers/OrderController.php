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
use App\Order;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;

class OrderController extends Controller
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
        $activeClass['parent'] ='order';
		$activeClass['child'] ='order/index';
		
		//$order = Order::get();
		return view('admin.order.orderlist',compact('activeClass'));
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
        $cart = $this->productService->getCartItem();

        $user = Auth::user();
        $data =array(
                'firstName'=>$request->shipping['firstname'],
                'lastName'=>$request->shipping['firstname'],
                'address'=>$request->shipping['address'],
                'city'=>$request->shipping['city'],
                'zip'=>$request->shipping['zip'],
                'telephone'=>$request->shipping['telephone'],
                'mobile'=>$request->shipping['mobile'],
                'paymentMethod'=>$request->shipping['paymentMethod'],
                'amount'=>$cart['totalPrice'],
                'tax'=>'',
                'totalamount'=>$cart['totalPrice'],
                'user'=>$user->id
                );
        $id = DB::table('orders')->insertGetId($data);
        if($id){
            

            foreach ($cart['cartItem'] as $cart) {
                $orderItemData =array(
                    'orderid'=>$id,
                    'itemid'=>$cart['id'],
                    'price'=>$cart['price'],
                    'qty'=>$cart['qty'],
                    'totalamount'=>$cart['price'] * $cart['qty'],
                    'status'=>'Pending',
                );
                 DB::table('orderitem')->insertGetId($orderItemData);
            }
            
            return redirect('order/success/'.$id)->with('id',$id);
        }else{
            return redirect('order/error')->with('error','error in order placing. Please try again later.');
        }
       
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $activeClass['parent'] ='order';
		$activeClass['child'] ='';
		
		return view('admin.order.orderdetails',compact('activeClass'));
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

    public function success(){
        $cart = $this->productService->getCartItem();
        return view('web.order.success',compact('cart'));
    }

    public function error(){
        $cart = $this->productService->getCartItem();
        return view('web.order.error',compact('cart'));
    }

    public function orderHistory(){
        $orders = DB::table('orders')
                    ->where("user",'1')
                    ->get();

        $cart = $this->productService->getCartItem();
        return view('web.account.dashboard',compact('cart','orders'));
    }
     public function orderDetails($id){
        $orders = DB::table('orders')
                    ->where("id",$id)
                    ->get();
                        
        $orderDetails = DB::table('orderitem')
                    ->join('product','orderitem.itemid', '=', 'product.id')
                    ->select('orderitem.*','product.name')
                    ->where("orderid",$id)
                    ->get();
                                
        $cart = $this->productService->getCartItem();

        return view('web.order.details',compact('cart','orders','orderDetails'));
    }
    public function printOrder(){
        $cart = $this->productService->getCartItem();
        return view('web.order.print',compact('cart'));
    }
    public function clearCart(){
        $cart = $this->productService->getCartItem();

        $ip = $_SERVER['REMOTE_ADDR'];
        if(DB::table('cart')->where('ip',$ip)->delete()){        
            return redirect('checkout')->with('sucess','Items remove from cart successfully!');
        }else{
            return redirect('checkout')->with('error','Error in removing item from cart');
        }
    }
}
