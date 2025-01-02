<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:2|',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'status_aktif' => 'required|string|in:aktif,tidak_aktif'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Registrasi gagal. Periksa kembali data Anda.');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'status_aktif' => $request->status_aktif,
        ]);

        return redirect()->back()->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:2',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
        
            return redirect()->route('beranda')->with('success', 'Login berhasil.');
        }
        
        return back()->withErrors(
            ['email' => 'Login gagal. Periksa kembali email dan password Anda.'],
        )->with('error', 'Login gagal. Periksa kembali email dan password Anda.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully');
    }
}


