<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use HasFactory;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.login');
    }


    // public function login(Request $request)
    // {
    //     $this -> validate($request, [
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);

    //     $username = $request->input('username');
    //     $password = $request->input('password');
    //     $customer = DB::table('customers')->Where('username', $username)->Where('password', $password)->first();
    //     if($customer) {          
    //         return Redirect::to('/homepage');

    //     }
    //     else {
            // $value = 'Sai tài khoản hoặc mật khẩu';
            // $request->session()->put('user_error', $value);
            // return back()->with('user_error', $value);
    //     };
    // }

    public function login(Request $request)
    {

        $arr = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($arr)) {
           // Đăng nhập thành công
           return Redirect::to('/homepage');
       }
       else {
        $value = 'Sai tài khoản hoặc mật khẩu';
        $request->session()->put('user_error', $value);
        return back()->with('user_error', $value);
       }
    }



}
