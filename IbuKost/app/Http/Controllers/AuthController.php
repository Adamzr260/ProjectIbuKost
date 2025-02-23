<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;


class AuthController extends Controller
{

    use ValidatesRequests;

    // fungsi untuk register
    public function register(Request $request)
    {
        // validasi data
        try {
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|confirmed'
            ]);

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('login')->with('success', 'Pendaftaran berhasil!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    // fungsi untuk login
    public function login(Request $request)
    {
        // validasi data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // cek data user
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        // mengambil data user
        $user = $request->user();

        return redirect()->route('dashboard');
    }

    // fungsi untuk logout
    public function logout(Request $request)
    {
        // menghapus sesi user
        Auth::logout();

        return redirect()->route('login');
    }

    // fungsi untuk me-return data user yang sedang login
    public function userLogin(Request $request)
    {
        // mengambil data user yang sedang login
        $user = $request->user();

        return compact('user');
    }

    // fungsi untuk menampilkan view login
    public function showLogin()
    {
        return view('login');
    }

    // fungsi untuk menampilkan view register
    public function showRegister()
    {
        return view('register');
    }
}
