<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * display item product in homepage
     */
     
    public function index()
    {
        return view('frontend.login');
    }


    public function login(Request $request)
    {
        $this -> validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $customer = DB::table('customers')->Where('username', $username)->Where('password', $password)->first();
        if($customer) {  
            $id = $customer->customerId;
            session()->put('customerId', $id);
            return Redirect::to('/homepage');

        }
        else {
            $value = 'Sai tài khoản hoặc mật khẩu';
            $request->session()->put('user_error', $value);
            return back()->with('user_error', $value);
        };
    }
    public function logout(){
        
        session()->forget('customerId');
        return Redirect::to('/login');
    }

    public function account(){
        $customerId = session('customerId');
        $customer = DB::table('customers')
            ->where('customerId', $customerId)
            ->get();
        $orderdetail = DB::table('orderdetails')
        ->where('customerId', $customerId)
        ->get();
        $customerOrder = DB::table('customers')
            ->join('orders', 'customers.customerId', '=', 'orders.customerId')
            ->where('customers.customerId', $customerId)
            ->select('*')
            ->get();
        return view('frontend.account' , compact('customer','orderdetail', 'customerOrder'));
    }
    public function homepage(){
        $newproduct = DB::table('products')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
        $bestseller = DB::table('products')
            ->orderBy('sold', 'desc')
            ->limit(5)
            ->get()
            ;
        return view('frontend.homepage', compact('newproduct', 'bestseller'));
    }
    public function detail($id){
        $productdetail = DB::table('products')
            ->where('productId', $id)
            ->get();
        return view('frontend.information', compact('productdetail'));
    }
    public function category($name){
        $category = DB::table('categories')
            ->where('category', $name)
            ->value('category');
        $product = DB::table('products')
            ->where('category', $name)
            ->paginate(8);    
        

        return view('frontend.category', compact('category', 'product','name'));
    }
    public function search(Request $request){
        $keyword = $request->input('keyword');
        $productSearch = DB::table('products')
            ->where('productName', 'like', '%' . $keyword . '%')
            ->get();

        return view('frontend.search', compact('keyword', 'productSearch'));
    }
    public function addtocart(Request $request, $id){
        $quantityadd = $request->input('quantityadd');
        $customerId = session('customerId');
        
        $cart = DB::table('carts')
            ->where('customerId', $customerId)
            ->get();
        $product = $cart->where('productId',$id)->first();
        $productName = DB::table('products')
                ->where('productId', $id)
                ->value('productName');
        if( isset($product)){
            $quantitydb = $product->quantityInCart + $quantityadd;
            DB::table('carts')
            ->where('productId', $id)
            ->update([
                'quantityInCart' => $quantitydb
            ]);
        }
        else{ 
        $quantitydb = $quantityadd;
           DB::table('carts')
            ->insert([
            'productId' => $id,
            'customerId' => $customerId,
            'quantityInCart' => $quantitydb
        ]);
    }
        $value = 'Bạn đã thêm '.$quantityadd .' sản phẩm "'.$productName .'" vào giỏ hàng';
        session()->put('message_addtocart', $value);
        return redirect()->back()->with('message_addtocart', $value);
    
    }
    public function showcart(){
        $customerId = session('customerId');
        $productcart = DB::table('products')
            ->join('carts', 'products.productId', '=', 'carts.productId')
            ->where('carts.customerId', $customerId)
            ->select('*')
            ->get();
        $total = 0;
        foreach ($productcart as $item){
            $total= $total + $item->price*$item->quantityInCart;
        }
        return view('frontend.cart', compact('productcart','total'));
    }
    public function deletecart($id){
        $customerId = session('customerId');
        $cart = DB::table('carts')
            ->where('customerId', $customerId)
            ->where('productId', $id)
            ->delete();
        return redirect()->back();
    }
    public function payment(){
        $customerId = session('customerId');
        $productcart = DB::table('products')
            ->join('carts', 'products.productId', '=', 'carts.productId')
            ->where('customerId', $customerId)
            ->select('*')
            ->get();
        $total = 0;
        foreach ($productcart as $item){
        $total= $total + $item->price*$item->quantityInCart;
        }
        return view('frontend.payment', compact('total'));
    }
    public function confirm(Request $request){
        $customerId = session('customerId');
        $cart = DB::table('carts')
            ->join('products', 'carts.productId', '=', 'products.productId')
            ->where('customerId', $customerId)
            ->select('*')
            ->get();
        $total = 0;
            foreach ($cart as $item){
            $total= $total + $item->price*$item->quantityInCart;
            }
        
        DB::table('orders')->insert([
            'customerId' => $customerId,
            'personName' => $request->input('name'),
            'phone' => $request->input('phone'),
            'addressDelivery' => $request->input('address'),
            'status' => 'Chờ xét duyệt',
            'total' => $total,
            'payments' => 'Ship COD'
            
        ]);
        $code = DB::table('orders')
            ->where('customerId', $customerId)
            ->orderby('orderId', 'desc')
            ->limit(1)
            ->get();
            foreach($code as $item){
                $code = $item->orderId;
            }
        
        foreach ($cart as $cart){
            
            DB::table('orderdetails')->insert([
                'customerId' => $customerId,
                'productId' => $cart->productId,
                'quantityOrder' => $cart->quantityInCart,
                'orderId' => $code,
                'unitPrice' =>$cart->price,
                'unitImg' =>$cart->prductImage,
                'productName' => $cart->productName
            ]);
            $sold = $cart->quantityInCart;
            DB::table('products')
                ->where('productId', $cart->productId)
                ->update([
                'sold' => $cart->sold + $sold,
                'quantity' => $cart->quantity - $sold
                ]);
            
        }
        DB::table('carts')->where('customerId', '=', $customerId)->delete();
        $value = '';
        session()->put('message_confirm', $value);
        return redirect()->route('homepage')->with('message_confirm', $value);;
    
    }

    
    

    

    /**
     * display item product in admin list product page
     */
    public function admin_show(){
        $keyword = "";
        $products = Product::all();
        $categories = Category::all();
        return view('backend.product_list', compact('products', 'categories', 'keyword'));
    }

    /**
     * display for product - add page
     */
    public function get_addproduct(){
        $categories = Category::all();
        return view('backend.product_add', compact('categories'));
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
        // được cập nhật bởi thắng em

        $file = $request->file('file')->store('public');
        $file = substr($file, 7);
        $book_name = $request->input('productName');
        $author = $request->input('author');
        $translator = $request->input('translator');
        $publisher = $request->input('publisher');
        $number_page = $request->input('numberPage');
        $quantity = $request->input('quantity');
        $public_date = $request->input('publicDate');
        $description = $request->input('description');
        $product_code = $request->input('productCode');
        $create_at = date("y-m-d h:i:s");
        $price = $request->input('price');
        $categories = $request->input('category');

        $product_check =  DB::table('products')->where('productCode', '=', $product_code)->count();
        if ($product_check == 0) {
            DB::table('products')->insert([
                'productName' => $book_name,
                'prductImage' => $file,
                'category' => $categories,
                'price' => $price,
                'quantity' => $quantity,
                'author' => $author,
                'translator' => $translator,
                'publisher' => $publisher,
                'numberPage' => $number_page,
                'publicDate' => $public_date,
                'description' => $description,
                'created_at' => $create_at,
                'productCode' => $product_code,
                'sold' => 0
            ]); 
            $value = 'Thêm thành công sách: '.$book_name;
            $request->session()->put('message_add', $value);
            return redirect()->back()->with('message_add', $value);
            
        }
        else {
            $value = 'Thêm thất bại, mã sách đã tồn tại';
            $request->session()->put('message_add', $value);
            return redirect()->back()->with('message_add', $value);;
        }; 
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
        //s

    }

    public function putdata_dialog($id){
        $product_edit = DB::table('products')
                        ->where('productId', $id)
                        ->first();
        return back()->withInput()->with('product_edit', $product_edit);
    }

    public function edit_product(Request $request, $id){
        //edit product by thang em
        if($request->hasFile('file')) {
            $file = $request->file('file')->store('public');
            $file = substr($file, 7);
            $book_name = $request->input('productName');
            $author = $request->input('author');
            $translator = $request->input('translator');
            $publisher = $request->input('publisher');
            $number_page = $request->input('numberPage');
            $quantity = $request->input('quantity');
            $public_date = $request->input('publicDate');
            $description = $request->input('description');
            $product_code = $request->input('productCode');
            $price = $request->input('price');
            $categories = $request->input('category');
            DB::table('products')
                  ->where('productId', $id)
                  ->update(
                            ['productName' => $book_name,
                            'prductImage' => $file,
                            'category' => $categories,
                            'price' => $price,
                            'quantity' => $quantity,
                            'author' => $author,
                            'translator' => $translator,
                            'publisher' => $publisher,
                            'numberPage' => $number_page,
                            'publicDate' => $public_date,
                            'productCode' => $product_code ,
                            'description' => $description,
                            ]
                );
                $value = 'Bạn vừa thực hiện sửa sách có id cũ:'.$id;
            $request->session()->put('message_edit', $value);
            return redirect()->back()->with('message_edit', $value);
        }
        else {
        $book_name = $request->input('productName');
        $author = $request->input('author');
        $translator = $request->input('translator');
        $publisher = $request->input('publisher');
        $number_page = $request->input('numberPage');
        $quantity = $request->input('quantity');
        $public_date = $request->input('publicDate');
        $description = $request->input('description');
        $product_code = $request->input('productCode');
        $price = $request->input('price');
        $categories = $request->input('category');
        DB::table('products')
              ->where('productId', $id)
              ->update(
                        ['productName' => $book_name,
                        'category' => $categories,
                        'price' => $price,
                        'quantity' => $quantity,
                        'author' => $author,
                        'translator' => $translator,
                        'publisher' => $publisher,
                        'numberPage' => $number_page,
                        'publicDate' => $public_date,
                        'productCode' => $product_code,
                        'description' => $description,
                        ] 
            );
            $value = 'Bạn vừa thực hiện sửa sách có id cũ:'.$id;
        $request->session()->put('message_edit', $value);
        return redirect()->back()->with('message_edit', $value);};
        /*$product = Product::where('productId', $id)
                    ->first();
        $input = $request->all();
        $product->fill($input)->save();
        $value = 'Bạn vừa thực hiện sửa sách có id cũ:'.$id;
        $request->session()->put('message_edit', $value);
        return redirect()->back()->with('message_edit', $value);   */   
    }

    public function search_product(Request $request){
        $keyword = $request->input('keyword');
        $categories = Category::all();
        $products = DB::table('products')
                            ->where('productName', 'like', '%'.$keyword.'%')->get();
        return view('backend.product_list', compact('products', 'keyword', 'categories'));
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

    public function delete_product($id){
        DB::table('products')->where('productId', '=', $id)->delete();
        $product = DB::table('products')
                    ->select('productName','productId')
                    ->where('productId', '=', $id)
                    ->first();
        $value = 'Sách gần nhất bị xóa có id: '.$id;
        session()->put('message_delete', $value);
        return back()->withInput();
    }
}

