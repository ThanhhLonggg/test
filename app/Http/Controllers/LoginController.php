<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập

        // Kiểm tra vai trò của người dùng
        if ($user->role == 'admin') {
            // Nếu là admin, thực hiện hành động tương ứng
            return redirect()->intended('admin/artist');
        } else {
            // Nếu không phải admin, thực hiện hành động tương ứng
            return redirect()->intended('home');
        }
    }

    return redirect('/')->withSuccess('Oppes! You have entered invalid credentials');
    }
    

    public function store(Request $request)
    {   
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect('/')->with('success', 'Registration completed. Please login.');
      
   }
   public function index()
    {
        return view('register');
    }
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}
