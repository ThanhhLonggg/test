<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        return view('user', ['user' => $user]);
    }
    public function index()
{
    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (Auth::check()) {
        // Lấy thông tin về người dùng đang đăng nhập
        $user = Auth::user();
        // Truyền thông tin của người dùng vào view để hiển thị
        return view('user', ['user' => $user]);
    } else {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
        return redirect('/login');
    }
}

public function update(Request $request, $id)
    {
                $user = User::find($id);
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                if (!empty($request->input('password'))) {
                    $user->password = bcrypt($request->input('password'));
                }
                $user->save();
                return redirect('/home')->with('success', 'User updated successfully.');
    }
    public function show($id)
{
    $user = User::find($id);
    return view('user', ['user' => $user]);
}
}
