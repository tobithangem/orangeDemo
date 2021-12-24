<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * display item product in homepage
     */
    
    public function homepage(){
        $newproduct = DB::table('products')
            ->orderBy('publicDate', 'desc')
            ->limit(5)
            ->get();
        $bestseller = DB::table('products')
            ->limit(5)
            ->get();
        return view('frontend.homepage', compact('newproduct', 'bestseller'));
    }
    public function detail($id){
        $productdetail = DB::table('products')
            ->where('productId', $id)
            ->get();
        return view('frontend.information', compact('productdetail'));
    }
    public function category($name){
        $category = category::all();
        $product = DB::table('products')
            ->where('category', $name)
            ->get();        
        return view('frontend.category', compact('category', 'product'));
    }
    public function search(Request $request){
        $keyword = $request->input('keyword');
        $productSearch = DB::table('products')
            ->where('productName', 'like', '%' . $keyword . '%')
            ->get();

        return view('frontend.search', compact('keyword', 'productSearch'));
    }
    public function quantityadd(Request $request)
    {
        $quantity = $request->input('quantity');
        return redirect()->back()->with($quantity);
    }
    public function addtocart($id){
        quantityadd();
        $customerId = 1;
        $cart = DB::table('carts')
            ->where('customerId', $customerId)
            ->get();
        $product = $cart->where('productId',$id)->first();
        
        if( isset($product)){
            $quantitydb = $product->quantity + $quantity;
            DB::table('carts')
            ->where('productId', $id)
            ->update([
                'quantity' => $quantitydb
            ]);
        }
        else{ 
        $quantitydb = $quantity;
           DB::table('carts')
            ->insert([
            'productId' => $id,
            'customerId' => $customerId,
            'quantity' => $quantitydb
        ]);
    }
        return redirect()->back();
    
    }
    public function showcart(){
        $customerId = 1;
        $productcart = DB::table('products')
            ->join('carts', 'products.productId', '=', 'carts.productId')
            ->select('products.*')
            ->get();
        return view('frontend.cart', compact('productcart'));
    }
    
    

    

    /**
     * display item product in admin list product page
     */
    public function admin_show(){
        $products = Product::all();
        $categories = Category::all();
        return view('backend.product_list', compact('products', 'categories'));
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
        $file = substr($file,7);
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
                'productCode' => $product_code
            ]); 
            $value = 'Thêm thành công';
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
