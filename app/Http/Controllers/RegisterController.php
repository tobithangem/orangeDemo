<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.register');
    }

    public function register(Request $request)
    {
        $customerName = $request->input('customerName');
        $username = $request->input('username');
        $password = $request->input('password');  
        $dateOfbirth = $request->input('dateOfbirth');
        $phoneNumber = $request->input('phoneNumber');
        $email = $request->input('email');
        $address = $request->input('address');
        $customer = Db::table('customers')->where('username', '=', $username)->first();
        if ($customer == null) {
            Db::table('customers')->insert([
                'customerName' => $customerName,
                'username' => $username,
                'password' => $password,
                'dateOfbirth' => $dateOfbirth,
                'phoneNumber' => $phoneNumber,
                'email' => $email,
                'address' => $address
            ]);
            $value = 'Đăng ký thành công';
            $request->session()->put('complete', $value);
            return back()->with('complete', $value);
        }
        else {
            $value = 'Tài khoản đã tồn tại';
            $request->session()->put('user_error', $value);
            return back()->with('user_error', $value);
        }
        
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
