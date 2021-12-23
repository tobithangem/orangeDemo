<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

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
        return view('frontend.homepage', compact('newproduct'));
    }
    public function detail($id){
        $productdetail = DB::table('products')
            ->where('productId', $id)
            ->get();
        return view('frontend.information', compact('productdetail'));
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
                            ['productName' => $book_name],
                            ['prductImage' => $file],
                            ['category' => $categories],
                            ['price' => $price],
                            ['quantity' => $quantity],
                            ['author' => $author],
                            ['translator' => $translator],
                            ['publisher' => $publisher],
                            ['numberPage' => $number_page],
                            ['publicDate' => $public_date],
                            ['description' => $description],
                            ['productCode' => $product_code]  
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
                        ['productName' => $book_name],
                        ['category' => $categories],
                        ['price' => $price],
                        ['quantity' => $quantity],
                        ['author' => $author],
                        ['translator' => $translator],
                        ['publisher' => $publisher],
                        ['numberPage' => $number_page],
                        ['publicDate' => $public_date],
                        ['description' => $description],
                        ['productCode' => $product_code]  
            );
            $value = 'Bạn vừa thực hiện sửa sách có id cũ:'.$id;
        $request->session()->put('message_edit', $value);
        return redirect()->back()->with('message_edit', $value);};
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

