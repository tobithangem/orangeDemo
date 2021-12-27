<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
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
    * trả về oder pending
    */
    public function get_orders(){
        $keyword = "";
        $orders = DB::table('orders')
                    ->where('status','=', 'Chờ xét duyệt')
                    ->get();            
        ;
        return view('backend.order_pending', compact('orders', 'keyword'));
    }


    /**
    * trả về oder shipping
    */
    public function get_orders_shipping(){
        $keyword = "";
        $orders = DB::table('orders')
                    ->where('status','=', 'Đã duyệt')
                    ->get();            
        ;
        return view('backend.order_shipping', compact('orders', 'keyword'));
    }



    /**
    * trả về oder details với 2 tham số customerId và orderId
    */
    public function get_orders_details($customerId, $orderId){
        $customer = DB::table('customers')
                        ->where('customerId', '=', $customerId)
                        ->first();
        $order = DB::table('orders')
                        ->where('orderId', '=', $orderId)
                        ->first();
        $orderdetails = DB::table('orderdetails')
                        ->where('orderId', '=', $orderId)
                        ->get();
        return view('backend.order_details', compact('customer', 'order', 'orderdetails'));
    }


    public function confirm_order($orderId){
        DB::table('orders')
        ->where('orderId', '=',$orderId)
        ->update(['status' => 'Đã duyệt']);
        return redirect('admin/order/shipping');
    }


    public function delete_order($orderId){
        DB::table('orders')
        ->where('orderId', '=',$orderId)
        ->delete();
        return back()->withInput();
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

    public function search_orderpending(Request $request){
        $keyword = $request->input('keyword');
        $orders = DB::table('orders')
                            ->where('status', 'Chờ xét duyệt')
                            ->where('phone', 'like', '%'.$keyword.'%')->get();
        return view('backend.order_pending', compact('orders', 'keyword'));
    }
    public function search_ordershipping(Request $request){
        $keyword = $request->input('keyword');
        $orders = DB::table('orders')
                            ->where('status', 'Đã duyệt')
                            ->where('phone', 'like', '%'.$keyword.'%')->get();
        return view('backend.order_shipping', compact('orders', 'keyword'));
    }

}
