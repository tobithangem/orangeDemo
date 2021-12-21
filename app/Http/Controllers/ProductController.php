<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
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
            ->get();
        $bestseller = DB::table('products')
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

    

    /**
     * display item product in admin product manager page
     */
    public function admin_show(){
        $products = Product::all();
        $categories = Category::all();
        return view('backend.productmanager', compact('products', 'categories'));
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
        $create_at = date("y-m-d h:i:s");
        $price = $request->input('price');
        $categories = $request->input('category');
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
            'created_at' => $create_at
        ]); 
 
            return back()->withInput();
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
